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
                                <form action="/laporan/cetak" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-printer"></i> Cetak </button>
                                </form>
                            </div>
                        <h3 class="panel-title">Laporan</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama anggota</th>
                                        <th>Nama buku</th>
                                        <th>Tanggal peminjaman</th>
                                        <th>Status</th>
                                        <th>Lama peminjaman</th>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
