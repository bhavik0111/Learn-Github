@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper page-wrapper-gc">
        <!-- Page body -->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header justify-content-between">
                                <h4 class="card-title"><b>Edit Profile</b></h4>
                                <div class="actions">
                                    <a href="{{ route('admin.dashbord') }}" class="btn btn-primary"><b>
                                            {{ __('Back') }}</b></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.profile.update', auth()->user()->id) }}"
                                    enctype="multipart/form-data" class="user-create-form">
                                    @csrf

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Name') }}</label>

                                        <div class="col">
                                            <input type="text" name="name" class="form-control"
                                                value="{{ old('name',  auth()->user()->name ) }}" required
                                                autofocus>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Email Address') }}</label>

                                        <div class="col">
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email', auth()->user()->email) }}" required
                                                autofocus>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Password') }}</label>

                                        <div class="col">
                                            <input type="password" name="password" class="form-control" value="">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
