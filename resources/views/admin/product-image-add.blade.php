@section('title', 'Product Image Add | full Surveilance')
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
                <h1>Product Image Add</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Add
                </p>
            </div>
            <div>
            </div>
        </div>
        <div class="card bg-white profile-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="profile-content-right profile-right-spacing py-5">
                        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
                            <li><a href="{{ route('product-image.index') }}">All Product Image</a></li>
                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="{{ route('product-image.store') }}" method="post" class="save" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstName">Product Name</label>
                                                    <select name="product" class="form-control category">
                                                        <option value="">Select category</option>
                                                        @foreach (App\Models\Product::all() as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="color">Color</label>
                                                    <select name="color" id="color" class="form-control">
                                                        <option value="">Select Color</option>
                                                        <option value="Black">Black</option>
                                                        <option value="Red">Red</option>
                                                        <option value="White">White</option>
                                                        <option value="Blue">Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="images">Image</label>
                                                    <input type="file" class="form-control" id="images" name="image">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="">Select Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Add</button>
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

@endsection