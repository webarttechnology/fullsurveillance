@section('title', 'Product Image Edit | full Surveilance')
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
                <h1>Product Image Edit</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Edit
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
                                    <form action="{{ route('product-image.update', $productImage->id) }}" method="post" class="save" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstName">Product Name</label>
                                                    <select name="product" class="form-control category">
                                                        <option value="{{ $productImage->product_id }}">{{ $productImage->product->name }}</option>
                                                        @foreach (App\Models\Product::whereNot('id', $productImage->product_id)->get() as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="color">Color</label>
                                                    <select name="color" id="color" class="form-control">
                                                        <option value="Black" @if($productImage->color == "Black") selected @endif>Black</option>
                                                        <option value="Red" @if($productImage->color == "Red") selected @endif>Red</option>
                                                        <option value="White" @if($productImage->color == "White") selected @endif>White</option>
                                                        <option value="Blue" @if($productImage->color == "Blue") selected @endif>Blue</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <label for="images">Image</label>
                                                    <input type="file" class="form-control" id="images" name="image">
                                                    <input type="hidden" name="old_image" value="{{ $productImage->img }}">
                                                </div>
                                                @if ($productImage->img)
                                                  <div class="mb-3">
                                                      <img src="{{ url($productImage->img) }}" width="100" alt="image">
                                                  </div>
                                                @endif
                                               </div>
                                            <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="Active" @if($productImage->status == "Active") selected @endif>Active</option>
                                                    <option value="Inactive" @if($productImage->status == "Inactive") selected @endif>Inactive</option>
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

@endsection