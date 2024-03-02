@extends('admin.layout.app')

<head> {{-- for pagination and serching css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/multicheck/multicheck.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/multicheck/dataTables.bootstrap4.css') }}" />
</head>
@section('content')
    <div class="page-wrapper page-wrapper-gc">
        <!-- Page body -->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header justify-content-between">

                                <h4 class="card-title"><b>{{__ ('All Work Solution') }}</b></h4>

                                <div class="actions">
                                    <a href="{{ route('admin.work_solution.create') }}" class="btn btn-primary"><b>{{ __('Add+') }}</b></a>
                                </div>
                            </div>

                            <div class="table-responsive card-body">
                                <table id="zero_config"
                                    class="table card-table table-vcenter text-nowrap datatable table-striped">
                                    <thead>
                                        <tr>
                                            <th><b>{{ __('ID') }}</b></th>
                                            <th><b>{{ __('Image') }}</b></th>
                                            <th><b>{{ __('Title') }}</b></th>
                                            <th><b>{{ __('status') }}</b></th>
                                            <th><b>{{ __('Action') }}</b></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($works as $work)
                                            <tr align="center">
                                                <td><strong>{{ $work->id }}</strong></td>
                                                <td>
                                                    @if ($work->image)
                                                        <img src="{{ asset($work->image) }}" height="100" width="150">
                                                    @endif
                                                </td>
                                                <td>{{ $work->title }}</td>
                                                <td>
                                                    @if ($work->status == 1)
                                                        {{ 'Active' }}
                                                    @endif
                                                    @if ($work->status == 0)
                                                        {{ 'Deactive' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="row justi-center">
                                                        <div class="col-md-2 m-1">
                                                            <a href="{{ route('admin.work_solution.edit', $work->id) }}"
                                                                class="btn btn-warning"><b><i class="fa fa-edit"></i></b>
                                                            </a>
                                                        </div>
                                                        <div class="col-md-2 m-1">
                                                            <form action="{{ route('admin.work_solution.destroy', $work->id) }}"
                                                                method="POST"
                                                                onsubmit="return confirm('Are you sure Delete Work Solution Image ?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-danger text-white"><b><i
                                                                            class="fa fa-trash"></i></b></button>
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
                [0, 'asc']
            ],
        });
    </script>
@endpush