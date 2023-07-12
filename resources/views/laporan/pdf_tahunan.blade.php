html
<!DOCTYPE html>
<html>
<head>
    <style>
        /* CSS styling for the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }
         th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
         th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Laporan Peminjamana Tahun</h1>
     <table>
        <thead>
            <tr>
                <th>Nama Penyewa</th>
                <th>Nama Kamera</th>
                <th>Lama Sewa</th>
                <th>Jumlah Pembayaran</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)  
                <tr>
                    <td>{{ $d->nama  }}</td>
                    <td>{{ $d->nama_kamera }}</td>
                    <td>{{ $d->jumlah_hari }} Hari</td>
                    <td>{{ $d->total_harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>