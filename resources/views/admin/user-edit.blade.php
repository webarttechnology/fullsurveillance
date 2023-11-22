@section('title', 'User Edit | full Surveilance')
@extends('admin.master.layout')
@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>User Profile</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Profile
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
                            <li><a href="{{ url('admin/user-lists') }}">All User</a></li>
                        </ul>
                        @if ($user->deleted_at != null)
                           <div class="d-flex justify-content-center mt-5">
                              <span class="badge badge-danger d-table">Suspended</span>
                           </div>
                        @endif
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="{{ url('admin/user-edit-action') }}" method="post" class="save" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName">Name</label>
                                                    <input type="text" name="name" class="form-control" id="firstName"
                                                        value="{{ $user->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="mobile">Mobile</label>
                                                <input type="number" class="form-control" id="mobile" name="mobile" value="{{ $user->mobile }}">
                                            </div>
                                           </div>
                                            <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                                            </div>
                                           </div>
                                            <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="Active" @if($user->status == "Active") selected @endif>Active</option>
                                                    <option value="Inactive" @if($user->status == "Inactive") selected @endif>Inactive</option>
                                                </select>
                                            </div>
                                          </div>

                                        </div>
                                        
                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit" class="btn btn-primary mb-2 btn-pill">Update Profile</button>
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