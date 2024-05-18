@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit data anggota</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/anggota/{{$anggota->kode_anggota}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputtext1">Nama</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nama" value="{{$anggota->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$anggota->alamat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih jenis kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="L" @if($anggota->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                                    <option value="P" @if($anggota->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih jenis anggota</label>
                                <select name="jenis_anggota" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Aktif" @if($anggota->jenis_anggota == 'Aktif') selected @endif>Aktif</option>
                                    <option value="Tidak Aktif" @if($anggota->jenis_anggota == 'Tidak Aktif') selected @endif>Tidak aktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Denda</label>
                                <input name="denda" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Denda" value="{{$anggota->denda}}">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-warning">Perbarui</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop