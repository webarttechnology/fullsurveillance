@section('title', 'blog List | full Surveilance')
@extends('admin.master.layout')
@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Blog List</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>Blog</p>
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
                                    @foreach ($blogs as $item)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td><img src="{{ url($item->img ?? '#') }}" width="60" alt="img"></td>
                                            <td>
                                                <span class="badge  {{  $item->status == 'Active' ? 'badge-success' : 'badge-danger' }}">{{ $item->status }}</span>
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
                                                        <a class="dropdown-item" href="{{ route('blog.edit', $item->id) }}">Edit</a>
                                                        <a class="dropdown-item delete" data-method="DELETE" data-action="{{ route('blog.destroy', $item->id) }}" href="#">Delete</a>
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