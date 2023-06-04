@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Input Data Gudang Rokok</h1>
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
                        <h3 class="card-title">Input Data Outlet Cabang</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/DataOutletCabangInsert" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id Outlet</label>
                                <input type="text" name="id_outlet" class="form-control" id="id_outlet"
                                    placeholder="Input ID Outlet">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Outlet</label>
                                <input type="text" name="nama_outlet" class="form-control" id="nama_outlet"
                                    placeholder="Input Nama Nama Outlet">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat Outlet</label>
                                <input type="text" name="alamat_outlet" class="form-control" id="alamat_outlet"
                                    placeholder="Input Alamat Outlet">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Gudang Rokok</label>
                                <select type="custom-select" name="id_gudang_rokok" class="custom-select" id="id_gudang_rokok"
                                placeholder="Pilih Nama Gudang Rokok">
                                <option value="">--- Pilih Nama Gudang Rokok ---</option>
                                @foreach ($data_gudang_rokok as $data)
                                <option value="{{$data->id_gudang_rokok}}">{{$data->id_gudang_rokok}} - {{$data->nama_gudang_rokok}}</option>
                                @endforeach
                                </select>
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
