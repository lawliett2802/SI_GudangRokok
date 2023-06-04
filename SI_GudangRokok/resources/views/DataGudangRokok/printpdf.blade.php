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
            <th>Id Gudang Rokok</th>
            <th>Nama Gudang Rokok</th>
            <th>Alamat Gudang Rokok</th>
            <th>Kapasitas Gudang</th>
            <th>Updated At</th>
            <th>Created At</th>
        </tr>
        @foreach ($data_gudang_rokok as $data)
            <tr>
                <td >{{ $data->id_gudang_rokok }}</td>
                <td>{{ $data->nama_gudang_rokok }}</td>
                <td>{{ $data->alamat_gudang_rokok }}</td>
                <td>{{ $data->kapasitas_gudang }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
