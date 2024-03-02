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
                                    <a href="{{ route('admin.portfolio.index') }}" class="btn btn-primary"><b>
                                            {{ __('Back') }}</b></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.portfolio.update', $portfolio->id) }}"
                                    enctype="multipart/form-data" class="user-create-form">
                                    @csrf

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Title') }}</label>

                                        <div class="col">
                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                                value="{{ old('title', $portfolio->title) }}" autofocus>
                                            @error('title')
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
                                                value="{{ $portfolio->image }}"
                                                class="form-control @error('old_image') is-invalid @enderror">

                                            @if ($portfolio->image)
                                                <img src="{{ asset($portfolio->image) }}" height="250" width="450">
                                            @endif

                                            @if (empty($portfolio->image))
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
                                        <label class="col-2 col-form-label">{{ __('Description') }}</label>

                                        <div class="col">
                                            <textarea name="description" class="form-control  @error('description') is-invalid @enderror" placeholder="description" autofocus>{{ old('description', $portfolio->description) }}</textarea>
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
                                                    required {{ $portfolio->status == 1 ? 'checked' : '' }}>
                                                <span class="form-check-label">{{ __('Active') }}</span>
                                            </label>
                                        </div>

                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input type="radio" name="status" class="form-check-input" value="0"
                                                    required {{ $portfolio->status == 0 ? 'checked' : '' }}>
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
