@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Rute</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
            </script>
            <div class="container">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Rute</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/DataRuteUpdate/{{ $data_rute->id_rute }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id Rute</label>
                                <input type="text" name="id_rute" class="form-control" id="id_rute"
                                    placeholder="Edit Id Rute" value="{{ $data_rute->id_rute }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Rute</label>
                                <input type="text" name="nama_rute" class="form-control" id="nama_rute"
                                    placeholder="Edit Nama Rute"
                                    value="{{ $data_rute->nama_rute }}"">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jarak Rute</label>
                                <input type="text" name="jarak_rute" class="form-control"
                                    id="jarak_rute" placeholder="Edit Jarak Rute"
                                    value="{{ $data_rute->jarak_rute }}"">
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
