@extends('dashboard.layouts.app')

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
                        <div class="mb-3">
                            <label class="form-label" for="category_id">Category Name</label>
                            <select required name="category_id" class="form-select form-select-lg mb-3"
                                    id="category_id">
                                <option selected disabled>Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <div id="categoryError" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sku">Product Sku</label>
                            <input required name="sku" type="text" class="form-control" id="sku"
                                   placeholder="Ex.. Product-01">
                            <div id="skuError" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">Product Name</label>
                            <input required name="name" type="text" class="form-control" id="name"
                                   placeholder="Enter Product Name">
                            <div id="nameError" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Product Description</label>
                            <textarea name="description" class="form-control" id="description" rows="2"></textarea>
                            <div id="descriptionError" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="meta_title">Meta Title</label>
                            <input name="meta_title" type="text" class="form-control" id="meta_title"
                                   placeholder="Meta Title">
                            <div id="metaTitleError" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="meta_description">Meta Description</label>
                            <textarea name="meta_description" class="form-control" id="meta_description"
                                      rows="2"></textarea>
                            <div id="metaDescriptionError" class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product State</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="state" id="activeState" value="1"
                                       checked>
                                <label class="form-check-label" for="activeState">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="state" id="inactiveState" value="0">
                                <label class="form-check-label" for="inactiveState">
                                    Inactive
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h4 class="form-label">Product Attributes</h4>
                        </div>
                        <div id="attributesContainer">
                            <div class="row mb-3 attribute-row">
                                <div class="col-md-5">
                                    <input type="text" class="form-control attribute-key" placeholder="Attribute Key">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control attribute-value"
                                           placeholder="Attribute Value">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-danger remove-attribute-btn" type="button">Remove</button>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button id="addAttributeBtn" class="btn btn-primary" type="button">Add Attribute</button>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-block" for="image">Product Image</label>
                            <input name="image" type="file" class="form-control" id="image">
                            <div id="imageError" class="invalid-feedback"></div>
                        </div>
                        <button id="submitBtn" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')

    <script>
            // Dynamically add attribute fields
            $('#addAttributeBtn').click(function () {
                var attributeField = '<div class="row mb-3 attribute-row">' +
                    '<div class="col-md-5">' +
                    '<input type="text"  class="form-control attribute-key" placeholder="Attribute Key">' +
                    '</div>' +
                    '<div class="col-md-5">' +
                    '<input type="text"  class="form-control attribute-value" placeholder="Attribute Value">' +
                    '</div>' +
                    '<div class="col-md-2">' +
                    '<button class="btn btn-danger remove-attribute-btn" type="button">Remove</button>' +
                    '</div>' +
                    '</div>';

                $('#attributesContainer').append(attributeField);
            });

            // Remove attribute fields
            $(document).on('click', '.remove-attribute-btn', function () {
                $(this).closest('.attribute-row').remove();
            });
    </script>
@endsection

