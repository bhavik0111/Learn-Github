@extends('admin.layout.app')
@section('content')
    <div class="page-wrapper page-wrapper-gc">
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header justify-content-between">
                                <h4 class="card-title"><b>{{ __('Add Recent Work') }}</b></h4>
                                <div class="actions">
                                    <a href="{{ route('admin.practice.index') }}" class="btn btn-primary"><b>
                                        {{ __('Back') }}</b>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST"action="#" enctype="multipart/form-data" class="user-create-form">
                                    @csrf

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Full name') }}</label>
                                        <div class="col">
                                            <input type="text" name="full_name" id="full_name" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name') }}" placeholder="Full name">
                                            @error('full_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mb-3 row">
                                        <label class="col-2 col-form-label">{{ __('Work') }}</label>
                                        <div class="col">
                                            <input type="text" name="work" id="work" class="form-control @error('work') is-invalid @enderror" value="{{ old('work') }}" placeholder="Work">
                                            @error('work')
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
                                                <input class="form-check-input" type="radio" name="status" id="status" value="1" checked>
                                                <span class="form-check-label">{{ __('Active') }}</span>
                                            </label>
                                        </div>
                                        <div class="col-1">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status" value="0">
                                                <span class="form-check-label">{{ __('Deactive') }}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <button type="button" id="form_submit" class="btn btn-primary me-1 mb-1">{{__ ('Submit') }}</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">{{__ ('Reset') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#form_submit').click(function(){
                    var fullname = $('#full_name').val();
                    var work = $('#work').val();
                    var status = $('#status').val();

                    $.ajax({
                        type:"POST",
                        url: "{{ route('admin.practice.store') }}",
                        data: {
                                "_token": "{{ csrf_token() }}",
                                full_name:fullname, work:work, status:status
                            },
                        // success: function(msg){
                        //     alert(msg);
                        // }
                    });
                });
            });
        </script>
    @endpush
