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
                                <h4 class="card-title"><b>{{__ ('Edit Project') }}</b></h4>
                                <div class="actions">
                                    <a href="{{ route('admin.project.index') }}" class="btn btn-primary"><b>
                                            {{ __('Back') }}</b></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.project.update', $project->id) }}"
                                    enctype="multipart/form-data" class="user-create-form">
                                    @csrf
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Project Type') }}</label>

                                        <div class="col">
                                            <select name="project_type" class="form-control">
                                                <option value="turnkey_project" {{ $project->project_type == 'turnkey_project'? 'selected' : '' }}>TURNKEY PROJECTS</option>
                                                <option value="interior_execution" {{ $project->project_type == 'interior_execution'? 'selected' : '' }}>INTERIOR EXECUTION</option>
                                                <option value="interior_designing" {{ $project->project_type == 'interior_designing'? 'selected' : '' }}>INTERIOR DESIGNING</option>
                                                <option value="project_management" {{ $project->project_type == 'project_management'? 'selected' : '' }}>PROJECT MANAGEMENT</option>
                                                <option value="civil_work" {{ $project->project_type == 'civil_work'? 'selected' : '' }}>CIVIL WORK</option>
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
                                                value="{{ old('image') }}">
                                            <input type="hidden" name="old_image"
                                                value="{{ $project->image }}"
                                                class="form-control @error('old_image') is-invalid @enderror">

                                            @if ($project->image)
                                                <img src="{{ asset($project->image) }}" height="250" width="450">
                                            @endif

                                            @if (empty($project->image))
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @else
                                                @error('old_image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @endif

                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Title') }}</label>

                                        <div class="col">
                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="project Title"
                                                value="{{ old('title', isset($project->title) ? $project->title : '') }}" >
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
                                            <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror" placeholder="project Description">{{ old('description', isset($project->description) ? $project->description : '') }}</textarea>
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
                                                <input type="radio" name="status" class="form-check-input" value="1"
                                                    required {{ $project->status == 1 ? 'checked' : '' }}>
                                                <span class="form-check-label">{{ __('Active') }}</span>
                                            </label>
                                        </div>

                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input type="radio" name="status" class="form-check-input" value="0"
                                                    required {{ $project->status == 0 ? 'checked' : '' }}>
                                                <span class="form-check-label">{{ __('Deactive') }}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">{{__ ('Update') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
