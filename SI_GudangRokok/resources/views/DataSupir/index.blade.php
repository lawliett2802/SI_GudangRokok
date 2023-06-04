@extends('template')
@section('content')
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
            </script>
            <div class="container">
                <div class="card-header">
                    <h2 class="text-center">Data Supir</h2>
                    @if ($message = Session::get('input'))
                        <div class="alert alert-success alert-block">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                aria-label="Success:">
                                <use xlink:href="#check-circle-fill" />
                            </svg>
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('edit'))
                        <div class="alert alert-info alert-block">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                aria-label="Info:">
                                <use xlink:href="#info-fill" />
                            </svg>
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ $message }}
                        </div>
                    @endif
                    @if ($message = Session::get('delete'))
                        <div class="alert alert-danger alert-block">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                aria-label="Danger:">
                                <use xlink:href="#exclamation-triangle-fill" />
                            </svg>
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ $message }}
                        </div>
                    @endif
                    <a href="/DataSupirCreate">
                        <tr><button type="button" class="btn btn-primary btn-sm">Create +</button></tr>
                    </a>
                    <a href="/DataSupirPDF" target="_blank"><button type="button" class="btn btn-secondary btn-sm">Print <ion-icon name="print-outline">
                            </ion-icon>
                        </button></a>
                    <div class="card-tools">
                        <form action="/DataSupir" method="GET">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="search" name="search" id="search" class="form-control float-right"
                                    placeholder="search">
                                <div class="input-group-append">
                                    <button type="button-search" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id Supir</th>
                            <th scope="col">Nama Supir</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_supir as $data)
                            <tr>
                                <th scope="data">{{ $data->id_supir }}</th>
                                <td>{{ $data->nama_supir }}</td>
                                <td>{{ $data->nomor_telepon }}</td>
                                <td>
                                    <a href="/DataSupirDelete/{{ $data->id_supir }}"
                                        class="btn btn-danger btn-sm">Delete</a>
                                    <a href="/DataSupirEdit/{{ $data->id_supir }}"
                                        class="btn btn-info btn-sm">Update</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $data_supir->links('pagination::bootstrap-5') !!}
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
