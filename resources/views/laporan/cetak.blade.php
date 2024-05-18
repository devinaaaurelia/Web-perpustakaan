<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Cetak laporan</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>Laporan</b></p>
        <table class="static" align="center" rules="all" border="1px" style="width:95%;">
            <thead>
                <tr>
                    <th>Nama anggota</th>
                    <th>Nama buku</th>
                    <th>Tanggal peminjaman</th>
                    <th>Lama peminjaman</th>
                    <th>Status</th>
                    <th>Kondisi</th>
                    <th>Denda</th>
                </tr>
            </thead>
            <tbody>
                @foreach($anggota as $data)
                    @foreach($data->buku as $buku)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $buku->nama_buku }}</td>
                        <td>{{ $buku->pivot->tanggal_peminjaman }}</td>
                        <td>{{ $buku->pivot->status }}</td>
                        <td>{{ $buku->pivot->lama_peminjaman }}</td>
                        <td>{{ $buku->pivot->kondisi }}</td>
                        <td>{{ $buku->pivot->denda }}</td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
