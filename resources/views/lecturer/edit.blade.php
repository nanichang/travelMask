@extends('layouts.main')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Company" value="{{ (old('name') ? old('name') : session('currentUser')->first_name ) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" value="{{ (old('name') ? old('name') : session('currentUser')->last_name ) }}">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <!--<div class="col-md-5">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>First Name</label>-->
                                <!--        <input type="text" class="form-control" placeholder="First Name" value="Creative Code Inc.">-->
                                <!--    </div>-->
                                <!--</div>-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number</label>
                                        <input type="number" class="form-control" placeholder="Username" value="{{ (old('name') ? old('name') : session('currentUser')->phone_number ) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email" value="{{ (old('name') ? old('name') : session('currentUser')->email ) }}">
                                    </div>
                                </div>
                            </div>

                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea rows="5" class="form-control" placeholder="Home Address" value="{{ (old('name') ? old('name') : session('currentUser')->address ) }}"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="row">-->
                            <!--    <div class="col-md-4">-->
                            <!--        <div class="form-group">-->
                            <!--            <label>City</label>-->
                            <!--            <input type="text" class="form-control" placeholder="City" value="Mike">-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="col-md-4">-->
                            <!--        <div class="form-group">-->
                            <!--            <label>Country</label>-->
                            <!--            <input type="text" class="form-control" placeholder="Country" value="Andrew">-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="col-md-4">-->
                            <!--        <div class="form-group">-->
                            <!--            <label>Postal Code</label>-->
                            <!--            <input type="number" class="form-control" placeholder="ZIP Code">-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>About Me</label>
                                        <textarea rows="3" class="form-control" placeholder="Here can be your description" value="{{ (old('name') ? old('name') : session('currentUser')->email ) }}">{{ (old('name') ? old('name') : session('currentUser')->emal ) }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="../../assets/img/full-screen-image-3.jpg" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                             <a href="#">
                            <img class="avatar border-gray" src="../../assets/img/default-avatar.png" alt="..."/>

                              <h4 class="title">{{ session('currentUser')->first_name }} {{ session('currentUser')->last_name }}<br />
                                 <small>{{ session('currentUser')->email }}</small>
                              </h4>
                            </a>
                        </div>
                        <p class="description text-center"> "Lamborghini Mercy <br>
                                            Your chick she so thirsty <br>
                                            I'm in that two seat Lambo"
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection