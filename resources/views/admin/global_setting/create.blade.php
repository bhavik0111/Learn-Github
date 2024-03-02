@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper page-wrapper-gc">
        <!-- Page body -->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

                        {{-- @php print_r($errors); @endphp --}}

                        <form method="POST" action="{{ route('admin.global_setting.store') }}" enctype="multipart/form-data"
                            class="user-create-form">
                            @csrf

                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title"><b>{{ __('Site Settings ') }}</b></h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Favicon') }}</label>

                                        <div class="col-9">
                                            <input type="file" name="favicon" accept="image/png, image/gif, image/jpeg"
                                                class="form-control @error('favicon') is-invalid @enderror">

                                            <input type="hidden" name="old_favicon" value="{{ $global->favicon ?? '' }}"
                                                class="form-control @error('old_favicon') is-invalid @enderror">

                                            @if ($global->favicon ?? '')
                                                <img src="{{ asset($global->favicon) }}" height="100" width="200">
                                            @endif

                                            @if (empty($global->favicon))
                                                @error('favicon')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @else
                                                @error('old_favicon')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Site Title') }}</label>

                                        <div class="col-9">
                                            <input type="text" name="site_title" id="site_title"
                                                class="form-control @error('site_title') is-invalid @enderror"
                                                value="{{ old('site_title', isset($global->site_title) ? $global->site_title : '') }}"
                                                placeholder="Site Title">

                                            @error('site_title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Logo') }}</label>

                                        <div class="col-9">
                                            <input type="file" name="logo" accept="image/png, image/gif, image/jpeg"
                                                class="form-control @error('logo') is-invalid @enderror"
                                                value="{{ old('logo') }}">
                                            <input type="hidden" name="old_logo" value="{{ $global->logo ?? '' }}"
                                                class="form-control @error('old_logo') is-invalid @enderror">

                                            @if ($global->logo ?? '')
                                                <img src="{{ asset($global->logo) }}" height="100" width="200">
                                            @endif

                                            @if (empty($global->logo))
                                                @error('logo')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @else
                                                @error('old_logo')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">save</button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title"><b>{{ __('Contact Details') }}</b></h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Address') }}</label>

                                        <div class="col-9">
                                            <textarea type="address" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Your Address Placed hear">{{ old('address', isset($global->address) ? $global->address : '') }}</textarea>
                                            @error('address')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Address') }}</label>

                                        <div class="col-9">
                                            <textarea type="address2" name="address2" class="form-control @error('address2') is-invalid @enderror" placeholder="Your Second Address Placed hear">{{ old('address2', isset($global->address2) ? $global->address2 : '') }}</textarea>
                                            @error('address2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Phone No') }}</label>

                                        <div class="col-9">
                                            <input type="number" name="phone_no"
                                                class="form-control @error('phone_no') is-invalid @enderror"
                                                value="{{ old('phone_no', isset($global->phone_no) ? $global->phone_no : '') }}"
                                                placeholder="Phone No">
                                            @error('phone_no')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Mobile No') }}</label>

                                        <div class="col-9">
                                            <input type="number" name="mobile_no"
                                                class="form-control @error('mobile_no') is-invalid @enderror"
                                                value="{{ old('mobile_no', isset($global->mobile_no) ? $global->mobile_no : '') }}"
                                                placeholder="Mobile No">
                                            @error('mobile_no')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Email') }}</label>
                                        <div class="col-9">
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email', isset($global->email) ? $global->email : '') }}"
                                                placeholder="Email">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('WEB') }}</label>

                                        <div class="col-9">
                                            <textarea name="web" class="form-control @error('web') is-invalid @enderror" placeholder="Your Website Placed hear">{{ old('web', isset($global->web) ? $global->web : '') }}</textarea>
                                            @error('web')
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

                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title"><b>{{ __('Social Media Links') }}</b></h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Facebook') }}</label>

                                        <div class="col-9">
                                            <input type="text" name="facebook"
                                                class="form-control @error('facebook') is-invalid @enderror"
                                                value="{{ old('facebook', isset($global->facebook) ? $global->facebook : '') }}"
                                                placeholder="Facebook">
                                            @error('facebook')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Instagram') }}</label>

                                        <div class="col-9">
                                            <input type="text" name="instagram"
                                                class="form-control @error('instagram') is-invalid @enderror"
                                                value="{{ old('instagram', isset($global->instagram) ? $global->instagram : '') }}"
                                                placeholder="Instagram">
                                            @error('instagram')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Youtube') }}</label>

                                        <div class="col-9">
                                            <input type="text" name="youtube"
                                                class="form-control @error('youtube') is-invalid @enderror"
                                                value="{{ old('youtube', isset($global->youtube) ? $global->youtube : '') }}"
                                                placeholder="Youtube">
                                            @error('youtube')
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

                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title"><b>{{ __('Working Hours') }}</b></h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Working Time') }}</label>

                                        <div class="col-9">
                                            <textarea name="working_time" type="text" rows="5" class="form-control summernote @error('working_time') is-invalid @enderror" placeholder="Your Working Time placed hear">{{ old('working_time', isset($global->working_time) ? $global->working_time : '') }}</textarea><br>

                                            @error('working_time')
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

                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title"><b>{{ __('Google Map') }}</b></h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Office Location') }}</label>

                                        <div class="col-9">
                                            <textarea name="google_map" type="text" rows="7" class="form-control @error('google_map') is-invalid @enderror" placeholder="Your Google Map placed hear">{{ old('google_map', isset($global->google_map) ? $global->google_map : '') }}</textarea><br>


                                            @error('google_map')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Current Location') }}</label>
                                        <div class="col-9">
                                            @if (!empty($global->google_map))
                                                {{-- {!! $global->google_map!!} --}}
                                                <iframe src="{!! $global->google_map !!}" width="100%" height="400" frameborder="0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="col">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">save</button>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title"><b>{{ __('Copyright Message') }}</b></h4>
                                </div>
                                <div class="card-body">

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Message') }}</label>

                                        <div class="col-9">
                                            <textarea name="copyright_msg" class="form-control summernote @error('copyright_msg') is-invalid @enderror" placeholder="Copyright Message">{{ old('copyright_msg', isset($global->copyright_msg) ? $global->copyright_msg : '') }}</textarea>

                                            @error('copyright_msg')
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
