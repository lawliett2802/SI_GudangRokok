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

    <h3 align="center">Data Supir</h3>

    <table id="customers">
        <tr>
            <th scope="col">Id Supir</th>
            <th scope="col">Nama Supir</th>
            <th scope="col">Nomor Telepon</th>
            <th>Updated At</th>
            <th>Created At</th>
        </tr>
        @foreach ($data_supir as $data)
            <tr>
                <td>{{ $data->id_supir }}</td>
                <td>{{ $data->nama_supir }}</td>
                <td>{{ $data->nomor_telepon }}</td>
                <td>{{ $data->updated_at }}</td>
                <td>{{ $data->created_at }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
