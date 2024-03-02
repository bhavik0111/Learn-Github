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
                                <h4 class="card-title"><b>{{ __('Add Project Detail') }}</b></h4>
                                <div class="actions">
                                    <a href="{{ route('admin.project.index') }}" class="btn btn-primary"><b>
                                            {{ __('Back') }}</b></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST"action="{{ route('admin.project.store') }}" enctype="multipart/form-data"
                                    class="user-create-form">
                                    @csrf

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Project Type') }}</label>

                                        <div class="col">
                                            <select name="project_type" class="form-control">
                                                <option value="turnkey_project">{{__ ('TURNKEY PROJECTS') }}</option>
                                                <option value="interior_execution">{{__ ('INTERIOR EXECUTION') }}</option>
                                                <option value="interior_designing">{{__ ('INTERIOR DESIGNING') }}</option>
                                                <option value="project_management">{{__ ('PROJECT MANAGEMENT') }}</option>
                                                <option value="civil_work">{{__ ('CIVIL WORK') }}</option>
                                            </select>
                                            @error('project_type')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Image') }}</label>

                                        <div class="col">
                                            <input type="file" name="image" accept="image/png, image/gif, image/jpeg" class="form-control @error('image') is-invalid @enderror"
                                                value="{{ old('image') }}" autofocus>
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Title') }}</label>

                                        <div class="col">
                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Project Title"
                                                value="{{ old('title') }}" >
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Description') }}</label>

                                        <div class="col">
                                            <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror" placeholder="Project Description">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Status') }}</label>
                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" value="1"
                                                    checked>
                                                <span class="form-check-label">{{ __('Active') }}</span>
                                            </label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status"
                                                    value="0">
                                                <span class="form-check-label">{{ __('Deactive') }}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">{{__ ('Submit') }}</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">{{__ ('Reset') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
