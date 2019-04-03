@extends('layout.main')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Edit Profile</h4>
                    <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Phone</label>
                                    <input type="number" maxlength="10" class="form-control" v-model="customer.phone">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Email address</label>
                                    <input type="email" class="form-control" v-model="customer.email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Fist Name</label>
                                    <input type="text" class="form-control"v-model="customer.firstName">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Last Name</label>
                                    <input type="text" class="form-control" v-model="customer.lastName">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Adress</label>
                                    <input type="text" class="form-control" v-model="customer.address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">City</label>
                                    <input type="text" class="form-control" v-model="customer.city">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Country</label>
                                    <input type="text" class="form-control" v-model="customer.country">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Pin Code</label>
                                    <input type="text" class="form-control" v-model="customer.pinCode">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>About Customer</label>
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating"> Keep a note</label>
                                        <textarea class="form-control" rows="5" v-model="customer.note"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block pull-right" @click="validatePhone()">Update Profile</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="#pablo">
                        <img class="img" src="img/faces/marc.jpg">
                    </a>
                </div>
                <div class="card-body">
                    <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                    <h4 class="card-title">Alec Thompson</h4>
                    <p class="card-description">
                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-round" @click="searchCustomer()">Search Customer</a>
                </div>
            </div>
        </div>
    </div>

@stop