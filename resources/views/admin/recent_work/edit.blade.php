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
                                <h4 class="card-title"><b>{{__ ('Edit Recent Work') }}</b></h4>
                                <div class="actions">
                                    <a href="{{ route('admin.recent_work.index') }}" class="btn btn-primary"><b>
                                            {{ __('Back') }}</b></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.recent_work.update', $work->id) }}"
                                    enctype="multipart/form-data" class="user-create-form">
                                    @csrf
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Category') }}</label>

                                        <div class="col">
                                            <select name="category" class="form-control">
                                                <option value="commercial" {{ $work->category == 'commercial'? 'selected' : '' }}>Commercial</option>
                                                <option value="office" {{ $work->category == 'office'? 'selected' : '' }}>Office</option>
                                                <option value="residential" {{ $work->category == 'residential'? 'selected' : '' }}>Residential</option>
                                            </select>
                                            @error('category')
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
                                                value="{{ $work->image }}"
                                                class="form-control @error('old_image') is-invalid @enderror">

                                            @if ($work->image)
                                                <img src="{{ asset($work->image) }}" height="250" width="450">
                                            @endif

                                            @if (empty($work->image))
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
                                        <label class="col-2 col-form-label">{{ __('Status') }}</label>

                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input type="radio" name="status" class="form-check-input" value="1"
                                                    required {{ $work->status == 1 ? 'checked' : '' }}>
                                                <span class="form-check-label">{{ __('Active') }}</span>
                                            </label>
                                        </div>

                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input type="radio" name="status" class="form-check-input" value="0"
                                                    required {{ $work->status == 0 ? 'checked' : '' }}>
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
