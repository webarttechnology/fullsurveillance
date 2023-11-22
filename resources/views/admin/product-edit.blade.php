@section('title', 'Product Edit | full Surveilance')
@extends('admin.master.layout')
@section('content')
<style>
    .ck-editor__editable_inline {
        min-height: 250px;
    }
</style>
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Product Edit</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Edit
                </p>
            </div>
            <div>
                {{-- <a href="#" class="btn btn-primary">Edit</a> --}}
            </div>
        </div>
        <div class="card bg-white profile-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-content-right profile-right-spacing py-5">
                        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
                            <li><a href="{{ route('product.index') }}">All Product</a></li>
                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="{{ route('product.update', $product->id) }}" method="post" class="save" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstName">Category Name</label>
                                                    <select name="category" class="form-control">
                                                        <option value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                                                        @foreach (App\Models\Category::whereNot('id', $product->category_id)->get() as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="addSubcategory">
                                                <div class="col-md-12">
                                                    <div class="form-group mb-4">
                                                        <label>Sub Category</label>
                                                        <select name="subcategory" class="form-control">
                                                            <option value="{{ $product->sub_category_id }}">{{ $product->sub_category->name }}</option>
                                                            @foreach (App\Models\SubCategory::whereNot('id', $product->sub_category_id)->get() as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstName">Name</label>
                                                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName">Actual Price</label>
                                                    <input type="text" name="actual_price" class="form-control" value="{{ $product->actual_price }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName">Discount Price</label>
                                                    <input type="text" name="discount_price" class="form-control" value="{{ $product->discount_price }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <textarea name="desc" class="form-control" id="editor">{{ $product->desc }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="Active" @if($product->status == "Active") selected @endif>Active</option>
                                                    <option value="Inactive" @if($product->status == "Inactive") selected @endif>Inactive</option>
                                               </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Content -->
</div> <!-- End Content Wrapper -->
@endsection


@section('script')
 {{-- Ck Editor --}}
{{-- <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script> --}}
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

<script>
    // CKEDITOR.replace( 'desc' );

    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
@endsection