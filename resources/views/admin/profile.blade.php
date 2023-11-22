@section('title', 'Profile | full Surveilance')
@extends('admin.master.layout')
@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Profile</h1>
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
                            {{-- <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="true">Profile</button>
                            </li> --}}

                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="{{ url('admin/update-your-profile') }}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group row mb-6">
                                            <label for="coverImage"
                                                class="col-sm-4 col-lg-2 col-form-label">User Image</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <input type="file" name="image" class="form-control"
                                                    id="coverImage">
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="firstName">Name</label>
                                                    <input type="text" name="name" class="form-control" id="firstName"
                                                        value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="userName">Phone No.</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                value="{{ Auth::user()->mobile }}">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ Auth::user()->email }}">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="newPassword">New password</label>
                                            <input type="password" name="password" class="form-control" id="newPassword">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label for="conPassword">Confirm password</label>
                                            <input type="password" name="confirm_password" class="form-control" id="conPassword">
                                        </div>

                                        <div class="d-flex justify-content-end mt-5">
                                            <button type="submit"
                                                class="btn btn-primary mb-2 btn-pill">Update
                                                Profile</button>
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