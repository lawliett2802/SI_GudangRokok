@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Pengiriman</h1>
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
                        <h3 class="card-title">Edit Pengiriman</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/DataPengirimanUpdate/{{ $data_pengiriman->id_pengiriman }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id Pengiriman</label>
                                <input type="text" name="id_pengiriman" class="form-control" id="id_pengiriman"
                                    placeholder="Edit Id Pengiriman" value="{{ $data_pengiriman->id_pengiriman }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tangal Pengiriman</label>
                                <input type="datetime-local" name="tanggal_pengiriman" class="form-control"
                                    id="tanggal_pengiriman" placeholder="Edit Tanggal Pengiriman" value="{{ $data_pengiriman->tanggal_pengiriman }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Gudang Rokok</label>
                                <select type="custom-select" name="id_gudang_rokok" class="custom-select"
                                    id="id_gudang_rokok" placeholder="Pilih Nama Gudang Rokok">
                                    <option value="">--- Pilih Nama Gudang Rokok ---</option>
                                    @foreach ($data_gudang_rokok as $data)
                                        <option value="{{ $data->id_gudang_rokok }}"
                                            {{ $data->id_gudang_rokok == $data_pengiriman->id_gudang_rokok ? 'selected' : '' }}>
                                            {{ $data->id_gudang_rokok }} - {{ $data->nama_gudang_rokok }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Outlet</label>
                                <select type="custom-select" name="id_outlet" class="custom-select"
                                    id="id_outlet" placeholder="Pilih Nama Outlet">
                                    <option value="">--- Pilih Nama Outlet ---</option>
                                    @foreach ($data_outlet_cabang as $data)
                                        <option value="{{ $data->id_outlet }}"
                                            {{ $data->id_outlet == $data_pengiriman->id_outlet ? 'selected' : '' }}>
                                            {{ $data->id_outlet }} - {{ $data->nama_outlet }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Polisi</label>
                                <select type="custom-select" name="nomor_polisi" class="custom-select"
                                    id="nomor_polisi" placeholder="Pilih Nomor Polisi">
                                    <option value="">--- Pilih Nomor Polisi ---</option>
                                    @foreach ($data_truck as $data)
                                        <option value="{{ $data->nomor_polisi }}"
                                            {{ $data->nomor_polisi == $data_pengiriman->nomor_polisi ? 'selected' : '' }}>
                                            {{ $data->nomor_polisi }} - {{ $data->merek_truck }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Supir</label>
                                <select type="custom-select" name="id_supir" class="custom-select"
                                    id="id_supir" placeholder="Pilih Nama Supir">
                                    <option value="">--- Pilih Nama Supir ---</option>
                                    @foreach ($data_supir as $data)
                                        <option value="{{ $data->id_supir }}"
                                            {{ $data->id_supir == $data_pengiriman->id_supir ? 'selected' : '' }}>
                                            {{ $data->id_supir }} - {{ $data->nama_supir }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Rute</label>
                                <select type="custom-select" name="id_rute" class="custom-select"
                                    id="id_rute" placeholder="Pilih Nama Rute">
                                    <option value="">--- Pilih Nama Rute ---</option>
                                    @foreach ($data_rute as $data)
                                        <option value="{{ $data->id_rute }}"
                                            {{ $data->id_rute == $data_pengiriman->id_rute ? 'selected' : '' }}>
                                            {{ $data->id_rute }} - {{ $data->nama_rute }}</option>
                                    @endforeach
                                </select>
                            </div>
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
