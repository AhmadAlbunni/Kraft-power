<?php

namespace App\Http\Controllers\dashboard\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product\Category;
use App\Models\Product\Product;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

//use App\Models\UserActivity;


class ProductController extends Controller
{

    private $index_view;
    private $create_view;
    private $edit_view;
    private $show_view;
//    private $edit_variation_view;

//    private $index_route;
//    private $model_instance;
    private $success_message;
    private $error_message;
//    private $update_success_message;
//    private $update_error_message;

    public function __construct()
    {
        $this->model_instance = Product::class;
        $this->index_view = 'dashboard.products.index';
        $this->create_view = 'dashboard.products.create';
        $this->show_view = 'dashboard.products.show';
        $this->edit_view = 'dashboard.products.edit';


        $this->success_message = 'Product created successfully';
        $this->error_message = "Failed to create product.";
        $this->delete_message = 'Product deleted successfully';
        $this->error = 'Something went Wrong';
        $this->update_success_message = 'Product Updated successfully';

        $this->update_error_message = "Product Couldn't Been Updated";

    }

    public function index()
    {
        $filter = request()->has('filter') ? request()->filter : 'all';


        if ($filter == "all") {
            $products = $this->model_instance::all()->sortBy('id');
        } else
            $products = $this->model_instance::all()->sortBy('id');

        $categories = Category::where('status', '=', 'active')->get();


        return view($this->index_view, compact(['products', 'categories', 'filter']));
    }

    public function getProductsData(Request $request)
    {

        if ($request->ajax()) {
            $products = Product::with('category')->get();

            return DataTables::of($products)
                ->addColumn('status', function ($product) {
                    $statusClass = $product->status == 'active' ? 'text-success' : 'text-danger';
                    return '<span class="' . $statusClass . '">' . $product->status . '</span>';
                })
                ->addColumn('image', function ($product) {
                    return '<img class="image-20" src="' . $product->image_url . '">';
                })
                ->addColumn('action', function ($product) {
                    $editUrl = route('dashboard.product.edit', $product->id);
                    $deleteUrl = route('dashboard.product.destroy', $product->id);
                    $deleteConfirmation = "return confirm('Are you sure you want to delete this " . $product->name . "');";

                    return '<div class="row">
                                <a class="pe-2" href="' . $editUrl . '"><i class="fa fa-pencil"></i></a>
                                <form method="POST" action="' . $deleteUrl . '">
                                    ' . csrf_field() . '
                                    ' . method_field('DELETE') . '
                                    <button class="fa fa-trash-o text-danger" onclick="' . $deleteConfirmation . '"></button>
                                </form>
                            </div>';
                })
                ->rawColumns(['status', 'image', 'action'])
                ->make(true);
        }

        return abort(403);
    }


    public function create()
    {
        // Fetch categories for dropdown
        $categories = Category::where('status', '=', 'active')->get();

        return view($this->create_view, compact('categories'));
    }


    public function store(StoreProductRequest $request)
    {
        $validated_data = $request->validated();

        try {

            DB::beginTransaction();
            $object = $this->model_instance::create(Arr::except($validated_data, ['image', 'gallery']));
            $object->sort_number = $object->id;

            if ($request->hasFile('gallery')) {
                $productImages = $request->file('gallery');
                if (is_array($productImages)) {
                    foreach ($productImages as $image) {
                        $img_file_path = Storage::disk('public_images')->put('products', $image);
                        $image_name = $image->getClientOriginalName();
                        $image_url = getMediaUrl($img_file_path);

                        $object->media()->create([
                            'image_url' => $image_url,
                            'image_name' => $image_name,
                        ]);
                    }
                }
            }

            if ($request->has('image')) {
                $img_file_path = Storage::disk('public_images')->put('products', $image);
                $image_name = $image->getClientOriginalName();
                $image_url = getMediaUrl($img_file_path);
                $object->image_url = $image_url;
                $object->image_name = $image_name;
            }


            if ($request->has('attributes')) {
                foreach ($request->get('attributes') as $attribute) {
                    $object->attributes()->create([
                        'name' => $attribute['name'],
                        'value' => $attribute['value'],
                    ]);
                }
            }


            if ($request->has('product_tags')) {
                $tags = json_decode($request->get('product_tags'));
                foreach ($tags as $tag) {
                    $arrayTags[] = ['value' => $tag->value];
                }
                $arrayTags = collect($arrayTags)->toArray();
                foreach ($arrayTags as $tag) {
                    $object->tags()->create([
                        'tag' => $tag['value']
                    ]);
                }
            }


            $object->save();
            DB::commit();

//            $log_message = trans('products.create_log') . '#' . $object->id;
//            UserActivity::logActivity($log_message);

            return redirect()->route($this->create_view, $object->id)->with('success', $this->success_message);
        } catch (\Exception $ex) {

//            Log::error($ex->getMessage());
            return redirect()->route($this->create_view)->with('error', $this->error_message);
//            return redirect()->route($this->create_view)->with('error', $ex->getMessage());
        }

    }


    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view($this->show_view, compact('product'));
    }


    public function edit(string $productId)
    {
        // Find the product
        $product = Product::findOrFail($productId);

        // Fetch categories for dropdown
        $categories = Category::all();

        return view($this->edit_view, compact('product', 'categories'));
    }


    public function update(Request $request, $productId)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'sku' => 'required|string',
                'description' => 'nullable|string',
                'price' => 'required|numeric',
                'category_id' => 'required|exists:categories,id',
                'status' => 'nullable|in:active,inactive',
                'sort_number' => 'nullable|integer',
                'meta_title' => 'nullable|string',
                'meta_description' => 'nullable|string',
                'attributes.*.name' => 'required|string',
                'attributes.*.value' => 'required|string',
                'images.*' => 'nullable|image|max:2048',
            ]);

            DB::beginTransaction();

            // Find the product
            $product = Product::findOrFail($productId);
            $product->name = $request->input('name');
            $product->sku = $request->input('sku');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->category_id = $request->input('category_id');
            $product->status = $request->input('status', 'active');
            $product->sort_number = $request->input('sort_number');
            $product->meta_title = $request->input('meta_title');
            $product->meta_description = $request->input('meta_description');
            $product->save();

            // Remove existing attributes and re-add them
            $product->attributes()->delete();
            $attributes = $request->input('attributes', []);
            foreach ($attributes as $attribute) {
                $product->attributes()->create([
                    'name' => $attribute['name'],
                    'value' => $attribute['value'],
                ]);
            }

            // Upload and associate images with the product
            if ($request->hasFile('images')) {
                $images = $request->file('images');
                foreach ($images as $image) {
                    $fileName = $image->getClientOriginalName();
                    $fileExtension = $image->getClientOriginalExtension();
                    $storedFileName = Str::random(20) . '.' . $fileExtension;
                    $path = $image->storeAs('product_images', $storedFileName);

                    $product->images()->create([
                        'file_name' => $fileName,
                        'file_path' => $path,
                    ]);
                }
            }

            DB::commit();

            return response()->json(['message' => 'Product updated successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to update product.'], 500);
        }
    }


    public function destroy($productId)
    {
        try {
            DB::beginTransaction();

            // Find the product
            $product = Product::findOrFail($productId);

            // Delete the product attributes
            $product->attributes()->delete();

            // Delete the product images
            $product->images()->delete();

            // Delete the product
            $product->delete();

            DB::commit();

            return response()->json(['message' => 'Product deleted successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Failed to delete product.'], 500);
        }
    }

}
