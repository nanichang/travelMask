@extends('layouts.main')

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="header">Register Student</div>
                    <div class="content">
                        <form method="post" action="{{ route('create_student') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email" placeholder="Enter email" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-fill btn-info">Submit</button>
                        </form>
                    </div>
                </div> <!-- end card -->
            </div> <!--  end col-md-6  -->
        </div> <!-- end row -->
    </div>

@endsection