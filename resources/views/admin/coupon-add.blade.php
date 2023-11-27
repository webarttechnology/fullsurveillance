@section('title', 'Coupon Add | full Surveilance')
@extends('admin.master.layout')
@section('content')
<!-- CONTENT WRAPPER -->
<div class="ec-content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper breadcrumb-contacts">
            <div>
                <h1>Coupon Add</h1>
                <p class="breadcrumbs"><span><a href="{{ url('admin/dashboard') }}">Home</a></span>
                    <span><i class="mdi mdi-chevron-right"></i></span>Add
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
                            <li><a href="{{ route('coupon.index') }}">All Coupon</a></li>
                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="settings" role="tabpanel"
                                aria-labelledby="settings-tab">
                                <div class="tab-pane-content mt-5">
                                    <form action="{{ route('coupon.store') }}" method="post" class="save" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName">Coupon Name</label>
                                                    <input type="text" name="name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="Amount">Coupon Amount</label>
                                                <input type="number" class="form-control" id="Amount" name="amount">
                                            </div>
                                           </div>
                                           <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="start">Start Date</label>
                                                <input type="date" class="form-control" id="start" name="start">
                                            </div>
                                           </div>
                                           <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="start">Expired Date</label>
                                                <input type="date" class="form-control" id="expired" name="expired">
                                            </div>
                                           </div>
                                          <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="type">Type</label>
                                                <select name="type" id="type" class="form-control coupon-type">
                                                    <option value="">Select Type</option>
                                                    <option value="Fixed">Fixed</option>
                                                    <option value="Percentage">Percentage</option>
                                                </select>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="status">Status</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="">Select Status</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                </select>
                                            </div>
                                          </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="minimum_amount">Minimum Amount</label>
                                                <input type="number" class="form-control" id="minimum_amount" name="minimum_amount">
                                            </div>
                                        </div>
                                        <div class="col-md-6 maximum_amount" style="display: none;">
                                            <div class="form-group mb-4">
                                                <label for="maximum_discount_amount">Maximum Discount Amount</label>
                                                <input type="number" class="form-control" id="maximum_discount_amount" name="maximum_discount_amount">
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