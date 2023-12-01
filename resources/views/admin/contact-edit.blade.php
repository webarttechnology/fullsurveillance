@section('title', 'Contact Update | full Surveilance')
@extends('admin.master.layout')
@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Contact Update</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Update
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
                            <li><a href="{{ url('admin/contact-lists') }}">All Contact</a></li>
                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="{{ route('category.store') }}" method="post" class="save" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstName">Name</label>
                                                    <input type="text" name="name" class="form-control" value="{{ $contact->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstName">Email</label>
                                                    <input type="text" name="email" class="form-control" value="{{ $contact->email }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstName">Subject</label>
                                                    <input type="text" name="subject" class="form-control" value="{{ $contact->subject }}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="firstName">Message</label>
                                                    <textarea name="message" class="form-control">{{ $contact->message }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="Pending" @if($contact->status == "Pending") selected @endif>Pending</option>
                                                    <option value="Resolve" @if($contact->status == "Resolve") selected @endif>Resolve</option>
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