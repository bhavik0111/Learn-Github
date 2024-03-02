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
                                <h4 class="card-title"><b>{{__ ('Edit Services') }}</b></h4>
                                <div class="actions">
                                    <a href="{{ route('admin.services.index') }}" class="btn btn-primary"><b>
                                            {{ __('Back') }}</b></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.services.update', $service->id) }}"
                                    enctype="multipart/form-data" class="user-create-form">
                                    @csrf

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Title') }}</label>

                                        <div class="col">
                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                                value="{{ old('title', $service->title) }}" autofocus>
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Slug') }}</label>

                                        <div class="col">
                                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
                                                value="{{ old('slug', $service->slug) }}" autofocus>
                                            @error('slug')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Description') }}</label>

                                        <div class="col">
                                            <textarea name="description" class="form-control  @error('description') is-invalid @enderror" placeholder="description" autofocus>{{ old('description', $service->description) }}</textarea>
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
                                                    required {{ $service->status == 1 ? 'checked' : '' }}>
                                                <span class="form-check-label">{{ __('Active') }}</span>
                                            </label>
                                        </div>

                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input type="radio" name="status" class="form-check-input" value="0"
                                                    required {{ $service->status == 0 ? 'checked' : '' }}>
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
