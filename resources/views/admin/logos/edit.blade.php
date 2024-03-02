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
                                <h4 class="card-title"><b>{{ __('Edit Logo') }}</b></h4>
                                <div class="actions">
                                    <a href="{{ route('admin.logos.index') }}" class="btn btn-primary"><b>
                                            {{ __('Back') }}</b></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.logos.update', $logo->id) }}" enctype="multipart/form-data" class="user-create-form">
                                    @csrf
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Image') }}</label>

                                        <div class="col">
                                            <input type="file" name="image" accept="image/*" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                                            <input type="hidden" name="old_image" class="form-control @error('old_image') is-invalid @enderror" value="{{ $logo->image }}">

                                            @if ($logo->image)
                                                <img src="{{ asset($logo->image) }}" height="150" width="300">
                                            @endif

                                            @if (empty($logo->image))
                                                @error('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
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
                                        <label class="col-2 col-form-label">{{ __('Link') }}</label>

                                        <div class="col">
                                            <textarea name="link" class="form-control @error('link') is-invalid @enderror">{{ old('link', $logo->link) }}</textarea>

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
                                                <input type="radio" name="status" class="form-check-input" value="1" required {{ $logo->status == 1 ? 'checked' : '' }}>
                                                <span class="form-check-label">{{ __('Active') }}</span>
                                            </label>
                                        </div>

                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input type="radio" name="status" class="form-check-input" value="0" required {{ $logo->status == 0 ? 'checked' : '' }}>
                                                <span class="form-check-label">{{ __('Deactive') }}</span>
                                            </label>
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

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.summernote').summernote({
                    tabsize: 2,
                    height: 350
                });
            });
        </script>
    @endpush
