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

    <h3 align="center">Data Gudang Rokok</h3>

    <table id="customers">
        <tr>
            <th>Id Jadwal</th>
            <th>Hari Pengiriman</th>
            <th>Jam Pengiriman</th>
            <th>Id Pengiriman</th>
            <th>Updated At</th>
            <th>Created At</th>
        </tr>
        @foreach ($data_jadwal_pengiriman as $data)
            <tr>
                <td>{{ $data->id_jadwal }}</td>
                <td>{{ \Carbon\Carbon::parse($data->hari_pengiriman)->isoformat('ddd, Do MMM YYYY') }}</td>
                <td>{{ \Carbon\Carbon::parse($data->jam_pengiriman)->isoformat('H:mm') }}</td>
                <td>{{ $data->id_pengiriman }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
