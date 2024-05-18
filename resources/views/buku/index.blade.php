@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="right">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> Tambah </button>
                        </div>
                        <h3 class="panel-title">Buku</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Kode buku</th>
                                    <th>Nama buku</th>
                                    <th>Nama pengarang</th>
                                    <th>Tahun terbit</th>
                                    <th>ISBN</th>
                                    <th>Status</th>
                                    <th>Kondisi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_buku as $buku)
                                <tr>
                                    <td>{{$buku->kode_buku}}</td>
                                    <td>{{$buku->nama_buku}}</td>
                                    <td>{{$buku->nama_pengarang}}</td>
                                    <td>{{$buku->tahun_terbit}}</td>
                                    <td>{{$buku->isbn}}</td>
                                    <td>{{$buku->status}}</td>
                                    <td>{{$buku->kondisi}}</td>
                                    <td>
                                        <a href="/buku/{{$buku->kode_buku}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="/buku/{{$buku->kode_buku}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data_buku->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Buku</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/buku/create" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputtext1">Nama buku</label>
                    <input name="nama_buku" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nama buku">
                </div>
                <div class="form-group">
                    <label for="exampleInputtext1">Nama pengarang</label>
                    <input name="nama_pengarang" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nama pengarang">
                </div>
                <div class="form-group">
                    <label for="exampleInputtext1">Tahun terbit</label>
                    <input name="tahun_terbit" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Tahun terbit">
                </div>
                <div class="form-group">
                    <label for="exampleInputtext1">ISBN</label>
                    <input name="isbn" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="ISBN">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih status</label>
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                        <option>Tersedia</option>
                        <option>Dipinjam</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pilih kondisi</label>
                    <select name="kondisi" class="form-control" id="exampleFormControlSelect1">
                        <option>Baik</option>
                        <option>Rusak</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>

@stop
