@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Truck</h1>
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
                        <h3 class="card-title">Edit Data Truck</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/DataTruckUpdate/{{ $data_truck->nomor_polisi }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Polisi</label>
                                <input type="text" name="nomor_polisi" class="form-control" id="nomor_polisi"
                                    placeholder="Edit Nomor Polisi" value="{{ $data_truck->nomor_polisi }}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Merek Truck</label>
                                <input type="text" name="merek_truck" class="form-control" id="merek_truck"
                                    placeholder="Edit Merek Truck"
                                    value="{{ $data_truck->merek_truck }}"">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kapasitas Muatan</label>
                                <input type="text" name="kapasitas_muatan" class="form-control"
                                    id="kapasitas_muatan" placeholder="Edit Kapasitas Muatan"
                                    value="{{ $data_truck->kapasitas_muatan }}"">
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
