@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper page-wrapper-gc">
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{ route('admin.about.store') }}" enctype="multipart/form-data" class="user-create-form">
                            @csrf
                            <div class="card new class">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title"><b>{{ __('About Us') }}</b></h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Title') }}</label>
                                        <div class="col">
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                value="{{ old('title', isset($about->title) ? $about->title : '') }}">
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Image') }}</label>
                                        <div class="col-8">
                                            <input type="file" name="image"
                                                accept="image/png, image/gif, image/jpeg"
                                                class="form-control title @error('image') is-invalid @enderror">
                                            <input type="hidden" name="old_image"
                                                accept="image/png, image/gif, image/jpeg"
                                                class="form-control title @error('old_image') is-invalid @enderror"
                                                value="{{ $about->image ?? ''}}">

                                            @if ($about->image ?? '')
                                                <img src="{{ asset($about->image) }}" height="400"
                                                    width="500">
                                            @endif
                                            @if (empty($about->image))
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
                                        <label class="col-2 col-form-label">{{ __('Description') }}</label>
                                        <div class="col">
                                            <textarea name="desc" class="form-control  summernote @error('desc') is-invalid @enderror">
                                                {{ old('desc', isset($about->desc) ? $about->desc : '') }}
                                            </textarea>

                                            @error('desc')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
