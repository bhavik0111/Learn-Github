<!doctype html>
<html>
    <head>
        {{-- <link rel="shortcut icon" href="{{ getSetting()->favicon ? asset(getSetting()->favicon) : asset('user/images/favicon.png') }}"> --}}
        <link rel="shortcut icon" href="{{ asset('user/images/favicon.png') }}">

        {{-- {!! Meta::toHtml() !!} --}}
        <!-- CSS files -->
        {{-- summernote  bootstrap.min.css--}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        {{-- end summernote  bootstrap.min.css--}}
        <link href="{{ asset('admin/css/tabler.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/libs/fontawesome/css/all.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/libs/toastify/toastify.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/css/tabler-flags.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/css/tabler-payments.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/css/tabler-vendors.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/css/demo.min.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('admin/libs/select2/css/select2.min.css') }}">
        <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet" />

        {{-- summernote --}}
        <link href="{{ asset('admin/css/summernote-bs4.min.css') }}" rel="stylesheet">
        {{-- End summernote --}}

        {{-- <link rel="icon" href="{{ previewImage(getSetting('site_settings','favicon')) }}" type="image/x-icon"/>
        <link rel="shortcut icon" href="{{ previewImage(getSetting('site_settings','favicon')) }}" type="image/x-icon"/> --}}
        <style>
            @import url('https://rsms.me/inter/inter.css');
            :root {
                --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
            }
        </style>
        @yield('styles')
    </head>
    <body>
        <div class="page">
            @include('admin.layout.sidebar')
            @include('admin.layout.navbar')
            @yield('content')
        </div>
        <!-- RESOURCE CONFIRMATION MODAL -->
        <div class="modal fade modal-blur" id="resource_confirmation_modal" tabindex="-1" role="dialog" aria-labelledby="resourceConfirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="" method="POST" class="resource-confirmation-form">
                        @method('DELETE')
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('Confirmation') }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="mb-0">{{ __('Are you sure you want to delete this item ?') }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger" data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                            <button type="submit" class="btn btn-primary ml-1">{{ __('Confirm') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Locale Language -->
        {{-- <script>
            let current_language = '{{ app()->getLocale() }}';
            current_language = (current_language != 'fr' ? 'en-GB' : 'fr');
        </script> --}}
        <!-- Tabler Core -->
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>

        {{-- summernote --}}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
            <script src="{{ asset('admin/js/summernote-bs4.min.js') }}"></script>

            {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script> --}}
        {{-- End summernote --}}

        <script src="{{ asset('admin/js/demo-theme.min.js') }}"></script>
        <script src="{{ asset('admin/libs/toastify/toastify.js') }}"></script>
        <script src="{{ asset('admin/js/tabler.min.js') }}" defer></script>
        <script src="{{ asset('admin/libs/fontawesome/js/all.min.js') }}" defer></script>
        <script src="{{ asset('admin/js/demo.min.js') }}" defer></script>
        <script src="{{ asset('admin/libs/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('admin/js/custom.js') }}"></script>

        @if(session()->has('success'))
            <script type="text/javascript">
                success_message("{{ session()->get('success') }}")
            </script>
        @endif
        @if(session()->has('error'))
            <script type="text/javascript">
                error_message("{{ session()->get('error') }}")
            </script>
        @endif
        @stack('scripts')
    </body>
</html>
