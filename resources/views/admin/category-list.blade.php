@section('title', 'Category List | full Surveilance')
@extends('admin.master.layout')
@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Category List</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Category</p>
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
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\Category::orderBy('id', 'desc')->get() as $user)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td><img src="{{ url($user->img ?? '#') }}" width="60" alt="img"></td>
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
                                                        <a class="dropdown-item" href="{{ route('category.edit', $user->id) }}">Edit</a>
                                                        <a class="dropdown-item delete" data-method="DELETE" data-action="{{ route('category.destroy', $user->id) }}" href="#">Delete</a>
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