@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Supir</h1>
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
                        <h3 class="card-title">Edit Data Supir</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/DataSupirUpdate/{{ $data_supir->id_supir }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id Supir</label>
                                <input type="text" name="id_supir" class="form-control" id="id_supir"
                                    placeholder="Edit Id Supir" value="{{ $data_supir->id_supir }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Supir</label>
                                <input type="text" name="nama_supir" class="form-control" id="nama_supir"
                                    placeholder="Edit Nama Supir"
                                    value="{{ $data_supir->nama_supir }}"">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Telepon</label>
                                <input type="text" name="nomor_telepon" class="form-control"
                                    id="nomor_telepon" placeholder="Edit Nomor Telepon"
                                    value="{{ $data_supir->nomor_telepon }}"">
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
