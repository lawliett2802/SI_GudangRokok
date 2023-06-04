@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Stock Rokok</h1>
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
                        <h3 class="card-title">Edit Data Stock Rokok</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/DataStockRokokUpdate/{{$data_stock_rokok->id_stock}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id Stock</label>
                                <input type="text" name="id_stock" class="form-control" id="id_stock"
                                    placeholder="Edit Id Stock" value="{{$data_stock_rokok->id_stock}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Stock</label>
                                <input type="text" name="jumlah_stock" class="form-control" id="jumlah_stock"
                                    placeholder="Edit Jumlah Stock" value="{{$data_stock_rokok->jumlah_stock}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Gudang Rokok</label>
                                <select type="custom-select" name="id_gudang_rokok" class="custom-select"
                                    id="id_gudang_rokok" placeholder="Pilih Nama Gudang Rokok">
                                    <option value="">--- Pilih Nama Gudang Rokok ---</option>
                                    @foreach ($data_gudang_rokok as $data)
                                        <option value="{{ $data->id_gudang_rokok }}"
                                            {{ $data->id_gudang_rokok == $data_stock_rokok->id_gudang_rokok ? 'selected' : '' }}>
                                            {{ $data->id_gudang_rokok }} - {{ $data->nama_gudang_rokok }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Rokok</label>
                                <select type="custom-select" name="kode_rokok" class="custom-select"
                                    id="kode_rokok" placeholder="Pilih Nama Rokok">
                                    <option value="">--- Pilih Nama Rokok ---</option>
                                    @foreach ($data_rokok as $data)
                                        <option value="{{ $data->kode_rokok }}"
                                            {{ $data->kode_rokok == $data_stock_rokok->kode_rokok ? 'selected' : '' }}>
                                            {{ $data->kode_rokok }} - {{ $data->nama_rokok }}</option>
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
