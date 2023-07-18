@extends('dashboard.layouts.app')
@section('style')


@endsection


@section('content')
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Add New Product</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end">
                    <li class="breadcrumb-item"><a href="/backoffice/dashboard" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active ps-0">Add New Product</li>
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
            <div class="card card-statistics mb-30">
                <div class="card-body">
                    <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-9 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">

                                        <div class="mb-3">
                                            <label class="form-label" for="name">Product Name</label>
                                            <input required name="name" type="text" class="form-control"
                                                   value="{{old('name')}}" id="name" placeholder="Enter Product Name">
                                            @if($errors->has('name'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('name') }}
                                                </div>
                                            @endif
                                            <div id="nameError" class="invalid-feedback"></div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="slug">Slug</label>
                                            <input required name="slug" type="text" class="form-control"
                                                   value="{{old('slug')}}" id="slug" placeholder="Enter Product slug">
                                            @if($errors->has('slug'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('slug') }}
                                                </div>
                                            @endif
                                            <div id="slugError" class="invalid-feedback"></div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="sku">Product Sku</label>
                                            <input required name="sku" type="text" class="form-control"
                                                   value="{{old('sku')}}" id="sku" placeholder="Ex.. Product-01">
                                            @if($errors->has('sku'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('sku') }}
                                                </div>
                                            @endif
                                            <div id="skuError" class="invalid-feedback"></div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="short_description">Product Short Description</label>
                                            <textarea name="short_description" class="form-control" id="short_description"
                                                      rows="2">{{old('short_description')}}</textarea>
                                            @if($errors->has('short_description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('short_description') }}
                                                </div>
                                            @endif
                                            <div id="short_descriptionError" class="invalid-feedback"></div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="description">Product Description</label>
                                            <textarea id="summernote" name="description" class="form-control" id="description"
                                                      rows="2">{{old('description')}}</textarea>
                                            @if($errors->has('description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('description') }}
                                                </div>
                                            @endif
                                            <div id="descriptionError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-30">
                                <div class="card card-statistics h-30">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="category_id">Category Name</label>
                                            <select required name="category_id" class="form-select form-select-lg mb-3"
                                                    id="category_id">
                                                <option selected disabled>Category</option>
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{{$category->id}}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                        {{$category->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('category_id'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('category_id') }}
                                                </div>
                                            @endif
                                            <div id="categoryError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Product State</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                       id="activeState"
                                                       value="active" {{ old('status') === 'active' ? 'checked' : '' }}>

                                                <label class="form-check-label" for="activeState">
                                                    Active
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="status"
                                                       id="activeState"
                                                       value="inactive" {{ old('status') === 'inactive' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="inactiveState">
                                                    Inactive
                                                </label>
                                            </div>
                                            @if($errors->has('status'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('status') }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label d-block" for="image">Product Image</label>
                                            <input name="image" type="file" value="{{old('image')}}"
                                                   class="form-control" id="image">
                                            @if($errors->has('image'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('image') }}
                                                </div>
                                            @endif
                                            <div id="imageError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label d-block" for="gallery">Product Gallery</label>
                                            <input name="gallery[]" type="file" value="{{old('gallery')}}"
                                                   class="form-control" id="gallery" multiple>
                                            @if($errors->has('gallery'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('gallery') }}
                                                </div>
                                            @endif
                                            <div id="galleryError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-20">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="meta_title">Meta Title</label>
                                            <input name="meta_title" type="text" class="form-control"
                                                   value="{{old('meta_title')}}" id="meta_title"
                                                   placeholder="Meta Title">
                                            @if($errors->has('meta_title'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('meta_title') }}
                                                </div>
                                            @endif
                                            <div id="metaTitleError" class="invalid-feedback"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="meta_description">Meta Description</label>
                                            <textarea name="meta_description" class="form-control" id="meta_description"
                                                      rows="2"> {{old('meta_description')}}</textarea>
                                            @if($errors->has('meta_description'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('meta_description') }}
                                                </div>
                                            @endif
                                            <div id="metaDescriptionError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-statistics h-10">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="product_tags">Product Tags</label>
                                            <div class="tag-input">
                                                <input type="text" name="product_tags" class="form-control" value="{{ old('product_tags')}}" id="product_tags" placeholder="Product Tags" />
                                            </div>
                                            @if ($errors->has('product_tags'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ $errors->first('product_tags') }}
                                                </div>
                                            @endif
                                            <div id="productTagsError" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-12 mb-30">
                                <h4 class="form-label">Product Attributes</h4>

                                <div class="repeater-add">
                                    <div data-repeater-list="attributes">
                                        <div data-repeater-item="">
                                            <div class="row mb-20">
                                                <div class="row mb-3 attribute-row">
                                                    <div class="col-md-5">
                                                        <input type="text" name="attributes[][name]"
                                                               value="{{old('attributes.*.name')}}"
                                                               class="form-control attribute-name"
                                                               placeholder="Attribute name">
                                                        @if($errors->has('attributes.*.name'))
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $errors->first('attributes.*.name') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="text" name="attributes[][value]"
                                                               value="{{old('attributes.*.value')}}"
                                                               class="form-control attribute-value"
                                                               placeholder="Attribute Value">
                                                        @if($errors->has('attributes.*.value'))
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $errors->first('attributes.*.value') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button class="btn btn-danger remove-attribute-btn" data-repeater-delete="" type="button"> Remove
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix mb-20">
                                        <input class="btn btn-primary" data-repeater-create="" type="button" value="Add Attribute">
                                    </div>
                                </div>
                            </div>
                            <button id="submitBtn" type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')


    <script>
        element = document.getElementById('product_tags');
        tags = new Tagify(element, {
            delimiters: ';'
        });

    </script>

@endsection


