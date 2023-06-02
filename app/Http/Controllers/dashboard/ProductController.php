<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Attributes;
use App\Models\Product;
use App\Models\Category;

//use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DataTables;


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
//    private $error_message;
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

    private function StoreValidationRules()
    {
        return [
            'name' => 'required|string|min:3|max:200',
            'sku' => 'nullable|string|min:3|max:30',
            'description' => 'string|min:3|max:1000',
            'prices' => 'nullable|numeric',
            'category_id' => 'nullable|exists:categories,id',
            'status' => 'nullable|in:active,inactive',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'image',
            'image.*' => 'image|mimes:jpg,jpeg,png',
            'attributes' => 'nullable|array',
        ];
    }

    public function index()
    {
        $products = Product::all();
        return view($this->index_view, compact(['products']));
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
        $categories = Category::all();

        return view($this->create_view, compact('categories'));
    }


    public function store(Request $request)
    {

        $validated_data = $request->validate($this->StoreValidationRules());

        try {
            $object = $this->model_instance::create(Arr::except($validated_data, ['image']));
            $object->sort_number = $object->id;

//            if ($request->has('image')) {
//                $image = $validated_data["image"];
//                $img_file_path = Storage::disk('public_images')->put('products', $image);
//                $image_name = $request->file('image')->getClientOriginalName();
//                $image_url = getMediaUrl($img_file_path);
//                $object->image_url = $image_url;
//                $object->image_name = $image_name;
//                $object->update();
//            }


            if ($request->hasFile('product_images')) {
                $productImages = $request->file('product_images');
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

            if ($request->has('attributes')) {
                foreach ($request->input('attributes') as $attribute) {
                    $newAttribute = Attributes::create([
                        'product_id' => $object->id,
                        'name' => $attribute['attribute_name'],
                    ]);

                    if (isset($attribute['attribute_values'])) {
                        foreach ($attribute['attribute_values'] as $value) {
                            $newAttribute->values()->create([
                                'value' => $value,
                            ]);
                        }
                    }
                }
            }


            $log_message = trans('products.create_log') . '#' . $object->id;
//            UserActivity::logActivity($log_message);

            return redirect()->route($this->create_view, $object->id)->with('success', $this->success_message);
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            return redirect()->route($this->create_view)->with('error', $this->error_message);
        }

    }

    public function show(string $id)
    {
        // Find the product
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
