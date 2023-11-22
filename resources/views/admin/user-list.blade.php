@section('title', 'User List | full Surveilance')
@extends('admin.master.layout')
@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>User List</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                <span><i class="mdi mdi-chevron-right"></i></span>User</p>
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
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Join On</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\User::role('User')->orderBy('id', 'desc')->withTrashed()->get() as $user)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->mobile }}</td>
                                            <td>{{ $user->created_at->format('d/M/Y') }}</td>
                                            <td>
                                                <span class="badge  {{  $user->status == 'Active' ? 'badge-success' : 'badge-danger' }}">{{ $user->status }}</span>
                                                @if ($user->deleted_at != null)
                                                <br><span class="badge badge-danger">Suspended</span>
                                                @endif
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
                                                        <a class="dropdown-item" href="{{ url('admin/user-edit', $user->id) }}">Edit</a>
                                                        @if ($user->deleted_at)
                                                        <a class="dropdown-item restore" data-method="POST" data-action="{{ url('admin/user-restore-delete', $user->id) }}" href="#">Put Back</a>
                                                        @else
                                                        <a class="dropdown-item delete" data-type="suspended" data-method="POST" data-action="{{ url('admin/user-soft-delete', $user->id) }}" href="#">Suspended</a>
                                                        @endif
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