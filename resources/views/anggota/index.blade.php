@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="right" >
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square"></i> Tambah </button>
                            </div>
                            <h3 class="panel-title">Anggota</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Kode anggota</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Jenis kelamin</th>
                                        <th>Jenis anggota</th>
                                        <th>Denda</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data_anggota as $anggota)
                                    <tr>
                                        <td>{{$anggota->kode_anggota}}</td>
                                        <td>{{$anggota->nama}}</td>
                                        <td>{{$anggota->alamat}}</td>
                                        <td>{{$anggota->jenis_kelamin}}</td>
                                        <td>{{$anggota->jenis_anggota}}</td>
                                        <td>{{$anggota->denda}}</td>
                                        <td>
                                            <a href="/anggota/{{$anggota->kode_anggota}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/anggota/{{$anggota->kode_anggota}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus')">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data_anggota->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Anggota -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Anggota</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/anggota/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputtext1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih jenis kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih jenis anggota</label>
                        <select name="jenis_anggota" class="form-control" id="exampleFormControlSelect1">
                            <option>Aktif</option>
                            <option>Tidak aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Denda</label>
                        <input name="denda" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Denda">
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