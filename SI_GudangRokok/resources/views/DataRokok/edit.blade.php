@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Rokok</h1>
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
                        <h3 class="card-title">Edit Data Rokok</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/DataRokokUpdate/{{ $data_rokok->kode_rokok }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kode Rokok</label>
                                <input type="text" name="kode_rokok" class="form-control" id="kode_rokok"
                                    placeholder="Edit Kode Rokok" value="{{ $data_rokok->kode_rokok }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Rokok</label>
                                <input type="text" name="nama_Rokok" class="form-control" id="nama_rokok"
                                    placeholder="Edit Nama Rokok" value="{{ $data_rokok->nama_rokok }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Rokok</label>
                                <input type="text" name="jenis_rokok" class="form-control" id="jenis_rokok"
                                    placeholder="Edit Jenis Rokok" value="{{ $data_rokok->jenis_rokok }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Harga Rokok</label>
                                <input type="text" name="harga_rokok" class="form-control" id="harga_rokok"
                                    placeholder="Edit Harga Rokok" value="{{ $data_rokok->jenis_rokok }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Stock Rokok</label>
                                <input type="text" name="stock_rokok" class="form-control" id="stock_rokok"
                                    placeholder="Edit Stock Rokok" value="{{ $data_rokok->stock_rokok }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Kategori Rokok</label>
                                <select type="custom-select" name="id_kategori_rokok" class="custom-select"
                                    id="id_kategori_rokok" placeholder="Pilih Nama Kategori Rokok">
                                    <option value="">--- Pilih Nama Kategori Rokok ---</option>
                                    @foreach ($data_kategori_rokok as $data)
                                        <option value="{{ $data->id_kategori_rokok }}"
                                            {{ $data->id_kategori_rokok == $data_rokok->id_kategori_rokok ? 'selected' : '' }}>
                                            {{ $data->id_kategori_rokok }} - {{ $data->nama_kategori_rokok }}</option>
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
