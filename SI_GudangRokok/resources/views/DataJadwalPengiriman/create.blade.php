@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Input Data Jadwal Pengiriman</h1>
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
                        <h3 class="card-title">Input Data Jadwal Pengiriman</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/DataJadwalPengirimanInsert" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id Jadwal</label>
                                <input type="text" name="id_jadwal" class="form-control" id="id_jadwal"
                                    placeholder="Input Id Jadwal">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hari Pengiriman</label>
                                <input type="date" name="hari_pengiriman" class="form-control" id="hari_pengiriman"
                                    placeholder="Input Hari Pengiriman">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jam Pengiriman</label>
                                <input type="time" name="jam_pengiriman" class="form-control" id="jam_pengiriman"
                                    placeholder="Input Jam Pengiriman">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Id Pengiriman</label>
                                <select type="custom-select" name="id_pengiriman" class="custom-select"
                                    id="id_pengiriman" placeholder="Pilih Id Pengiriman">
                                    <option value="">--- Pilih Id Pengiriman ---</option>
                                    @foreach ($data_pengiriman as $data)
                                        <option value="{{ $data->id_pengiriman }}">
                                            {{ $data->id_pengiriman }} - {{ \Carbon\Carbon::parse($data->tanggal_pengiriman)->isoformat('ddd, Do MMM YYYY, H:mm') }}</option>
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
