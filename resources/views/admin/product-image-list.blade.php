@section('title', 'Product Image List | full Surveilance')
@extends('admin.master.layout')
@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Product Image List</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Product Image</p>
            </div>
            <div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="ec-vendor-list card card-default">
                    <div class="card-body">
                        <div class="">
                            <table id="responsive-data-table" class="table">
                                <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>Name</th>
                                        <th>Color</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\ProductImage::orderBy('id', 'desc')->get() as $user)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $user->product->name }}</td>
                                            <td>{{ $user->color }}</td>
                                            <td><img src="{{ url($user->img ?? '#') }}" width="100px" alt="image"> </td>
                                            <td>
                                                <span class="badge  {{  $user->status == 'Active' ? 'badge-success' : 'badge-danger' }}">{{ $user->status }}</span>
                                            </td>
                                            <td>
                                                <div class="btn-group mb-1">
                                                    <button type="button"
                                                        class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" data-display="static">
                                                        <span class="sr-only">Info</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('product-image.edit', $user->id) }}">Edit</a>
                                                        <a class="dropdown-item delete" data-method="DELETE" data-action="{{ route('product-image.destroy', $user->id) }}" href="#">Delete</a>
                                                    </div>
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
        </div> <!-- End Content -->
    </div>
</div> <!-- End Page Wrapper -->
@endsection