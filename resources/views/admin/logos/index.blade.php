@extends('admin.layout.app')
<head> {{-- for pagination and serching css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/multicheck/multicheck.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/multicheck/dataTables.bootstrap4.css') }}" />
</head>
@section('content')

<div class="page-wrapper page-wrapper-gc">
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header justify-content-between">

                                <h4 class="card-title"><b>All Logos</b></h4>

                                <div class="actions">
                                    <a href="{{ route('admin.logos.create') }}" class="btn btn-primary"><b>
                                            {{ __('Add+') }}</b></a>
                                </div>
                            </div>

                            <div class="table-responsive card-body">
                                <table id="zero_config"
                                    class="table card-table table-vcenter text-nowrap datatable table-striped">
                                    <thead>
                                        <tr>
                                            <th><b>{{__('ID')}}</b></th>
                                            <th><b>{{__('Image')}}</b></th>
                                            <th><b>{{__('status')}}</b></th>
                                            <th><b>{{__('Action')}}</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($logos as $logo)
                                            <tr  align="center">
                                                <td>
                                                    <strong>{{ $logo->id }}</strong>
                                                </td>

                                                <td>
                                                    @if ($logo->image)
                                                        <img src="{{ asset($logo->image) }}" height="150" width="300">
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($logo->status == 1)
                                                        {{ 'Active' }}
                                                    @endif
                                                    @if ($logo->status == 0)
                                                        {{ 'Deactive' }}
                                                    @endif
                                                </td>

                                                <td>
                                                    <div class="row justi-center ">
                                                        <div class="col-md-3 m-1">
                                                            <a href="{{ route('admin.logos.edit', $logo->id) }}"
                                                                class="btn btn-warning"><b><i class="fa fa-edit"></i></b>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-3 m-1">
                                                            <form action="{{ route('admin.logos.destroy', $logo->id) }}" method="POST"
                                                                onsubmit="return confirm('Are you sure Delete Partner Logo?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger text-white"><b><i class="fa fa-trash"></i></b></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{-- <script>
        $("#zero_config").DataTable({
        order: [[0, 'desc']],
    });
    </script> --}}

    <!--(for all pagination,asc-desc,search,shorting)-->
    <script src="{{ asset('admin/css/multicheck/datatable-checkbox-init.js') }}"></script>
    <script src="{{ asset('admin/css/multicheck/jquery.multicheck.js') }}"></script>
    <script src="{{ asset('admin/css/multicheck/datatables.min.js') }}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $("#zero_config").DataTable({
            order: [
                [0, 'desc']
            ],
        });
    </script>
@endpush