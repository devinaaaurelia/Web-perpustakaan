@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit data buku</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/buku/{{$buku->kode_buku}}/update" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputtext1">Nama buku</label>
                                <input name="nama_buku" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nama buku" value="{{$buku->nama_buku}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Nama pengarang</label>
                                <input name="nama_pengarang" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Nama pengarang" value="{{$buku->nama_pengarang}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">Tahun terbit</label>
                                <input name="tahun_terbit" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="Tahun terbit" value="{{$buku->tahun_terbit}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext1">ISBN</label>
                                <input name="isbn" type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="ISBN" value="{{$buku->isbn}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih status</label>
                                <select name="status" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Tersedia" @if($buku->status == 'Tersedia') selected @endif>Tersedia</option>
                                    <option value="Dipinjam" @if($buku->status == 'Dipinjam') selected @endif>Dipinjam</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih kondisi</label>
                                <select name="kondisi" class="form-control" id="exampleFormControlSelect1">
                                    <option value="Baik" @if($buku->kondisi == 'Baik') selected @endif>Baik</option>
                                    <option value="Rusak" @if($buku->kondisi == 'Rusak') selected @endif>Rusak</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-warning">Update</button>
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