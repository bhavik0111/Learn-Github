@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper page-wrapper-gc">
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header justify-content-between">
                                <h4 class="card-title"><b>{{ __('Add Logo') }}</b></h4>
                                <div class="actions">
                                    <a href="{{ route('admin.logos.index') }}" class="btn btn-primary"><b>
                                            {{ __('Back') }}</b></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.logos.store') }}" enctype="multipart/form-data" class="user-create-form">
                                    @csrf
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Image') }}</label>

                                        <div class="col">
                                            <input type="file" name="image" accept="image/*" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" autofocus>
                                            @error('image')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Link') }}</label>

                                        <div class="col-8">
                                            <textarea name="link" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Link Placed hear">{{ old('link') }}</textarea>

                                            @error('link')
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
                                                <input class="form-check-input" type="radio" name="status" value="1" checked>
                                                <span class="form-check-label">{{ __('Active') }}</span>
                                            </label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" value="0">
                                                <span class="form-check-label">{{ __('Deactive') }}</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
