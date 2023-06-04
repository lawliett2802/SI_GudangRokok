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

    <h3 align="center">Data Rokok</h3>

    <table id="customers">
        <tr>
            <th>kode Rokok</th>
            <th>Nama Rokok</th>
            <th>Jenis Rokok</th>
            <th>Harga Rokok</th>
            <th>Stock Rokok</th>
            <th>Nama Kategori Rokok</th>
            <th>Updated At</th>
            <th>Created At</th>
        </tr>
        @foreach ($data_rokok as $data)
            <tr>
                <td>{{ $data->kode_rokok }}</td>
                <td>{{ $data->nama_rokok }}</td>
                <td>{{ $data->jenis_rokok }}</td>
                <td>{{ $data->harga_rokok }}</td>
                <td>{{ $data->stock_rokok }}</td>
                <td>{{ $data->fk_kategori_rokok->nama_kategori_rokok }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
