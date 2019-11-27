@extends('layouts.master')

@section('title', 'Profile')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-xl-4 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <div class="profile-user-img img-fluid img-circle">
                                    {{ ucfirst(auth()->user()->name[0]) }}
                                </div>
                            </div>

                            <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>

                            <p class="text-muted text-center">{{ auth()->user()->email }}</p>

                            <ul class="list-group list-group-unbordered mb-1">
                                <li class="list-group-item border-bottom-0 pb-0">
                                    <b>Created</b> <a class="float-right">{{ auth()->user()->created_at_formatted }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Profile edit</h3>
                        </div>

                        <form role="form" method="POST">
                            @csrf

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="New name" value="{{ old('name', auth()->user()->name) }}">
                                </div>
                                <div class="form-group">
                                    <label>E-mail <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="New E-mail address" value="{{ old('email', auth()->user()->email) }}">
                                </div>
                            </div>

                            <div class="card-footer" style="padding:1.25rem">
                                <div class="form-group">
                                    <label for="pass1">Password</label>
                                    <input type="password" name="password" class="form-control" id="pass1" placeholder="New password">
                                </div>

                                <div class="form-group">
                                    <label for="pass2">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="pass2" placeholder="Password confirmation">
                                </div>
                            </div>

                            <div class="card-body">
                                <button type="submit" class="btn btn-dark pull-right"><i class="fa fa-save mr-1"></i> Save changes</button>
                                <a href="{{ route('jokes.index') }}" class="btn btn-default pull-right mr-1">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection