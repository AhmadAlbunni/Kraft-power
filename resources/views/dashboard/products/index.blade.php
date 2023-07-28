@extends('dashboard.layouts.app')

@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">All Products</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="index.html" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">All Products</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 mb-30">
            @if(session()->get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif
            @if(session()->get('success'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table-bordered border table table-striped dataTable p-0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>SKU</th>
                                <th>Status</th>
                                <th>Category</th>
                                <th>Tags</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($products as $product )
                                <tr>

                                    <td>{{$product->name}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td>
                                        <span
                                            class="@if($product->status == 'active')text-success @else text-danger @endif ">{{$product->status}} </span>
                                    </td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{ implode(', ', array_map('trim', $product->tags->pluck('tag')->toArray())) }}
                                    </td>
                                    <td>
                                        <div class="row ">
                                            <a class="pe-2" href="{{route('dashboard.product.edit',$product->id)}}"> <i
                                                    class="fa fa-pencil"></i></a>
                                            <form method="POST" action="{{route('dashboard.product.destroy',$product->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button  class="fa fa-trash-o text-danger" onclick="return confirm('Are you sure you want to delete this {{$product->name}} ')">
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('dashboard.products.data') }}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'sku', name: 'sku' },
                    { data: 'name', name: 'name' },
                    { data: 'category_name', name: 'category_name' },
                    { data: 'status', name: 'status' },
                    { data: 'image', name: 'image' },
                    { data: 'action', name: 'action' },
                ]
            });
        });
    </script>
@endpush
