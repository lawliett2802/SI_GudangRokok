<!DOCTYPE html>
<html>
<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #00a0df;
            color: white;
        }
    </style>
</head>
<body>
    <h3 align="center">Data Pengiriman</h3>
    <table id="customers">
        <tr>
            <th>Id Pengiriman</th>
            <th>Tanggal Pengiriman</th>
            <th>Nama Gudang Rokok</th>
            <th>Nama Outlet</th>
            <th>Nomor Polisi</th>
            <th>Merek Truck</th>
            <th>Nama Supir</th>
            <th>Nama Rute</th>
            <th>Updated At</th>
            <th>Created At</th>
        </tr>
        @foreach ($data_pengiriman as $data)
            <tr>
                <td>{{ $data->id_pengiriman }}</td>
                <td>{{ \Carbon\Carbon::parse($data->tanggal_pengiriman)->isoformat('ddd, Do MMM YYYY, H:mm') }}</td>
                <td>{{ $data->fk_gudang->nama_gudang_rokok }}</td>
                <td>{{ $data->fk_outlet->nama_outlet }}</td>
                <td>{{ $data->nomor_polisi }}</td>
                <td>{{ $data->fk_truck->merek_truck }}</td>
                <td>{{ $data->fk_supir->nama_supir }}</td>
                <td>{{ $data->fk_rute->nama_rute }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>