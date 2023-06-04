@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Gudang Rokok</h1>
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
                        <h3 class="card-title">Edit Data Gudang Rokok</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/DataGudangRokokUpdate/{{$data_gudang_rokok->id_gudang_rokok}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id Gudang Rokok</label>
                                <input type="text" name="id_gudang_rokok" class="form-control" id="id_gudang_Rokok"
                                    placeholder="Edit ID Gudang Rokok" value="{{$data_gudang_rokok->id_gudang_rokok}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Gudang Rokok</label>
                                <input type="text" name="nama_gudang_Rokok" class="form-control" id="nama_gudang_rokok"
                                    placeholder="Edit Nama Gudang Rokok" value="{{$data_gudang_rokok->nama_gudang_rokok}}"">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat Gudang Rokok</label>
                                <input type="text" name="alamat_gudang_rokok" class="form-control"
                                    id="alamat_gudang_rokok" placeholder="Edit Alamat Gudang Rokok" 
                                    value="{{$data_gudang_rokok->alamat_gudang_rokok}}"">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kapasitas Gudang Rokok</label>
                                <input type="text" name="kapasitas_gudang" class="form-control" id="kapasitas_gudang"
                                    placeholder="Edit Kapasitas Gudang Rokok" value="{{$data_gudang_rokok->kapasitas_gudang}}"">
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
