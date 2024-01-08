@extends('layouts.app')
@section('title', 'Admin | Detail Barang')

@section('content')
<div class="row mt-3 mb-3">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>Detail Barang</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $p->id }}</td>
                    </tr>
                    <tr>
                        <th>NO PEMESANAN</th>
                        <td>{{ $p->golongan->no_pem }}</td>
                    </tr>
                    <tr>
                        <th>KODE BAHAN</th>
                        <td>{{ $p->kode_bahan }}</td>
                    </tr>
                    <tr>
                        <th>NAMA PELANGGAN</th>
                        <td>{{ $p->nama_pel }}</td>
                    </tr>
                    <tr>
                        <th>BUKTI PEMESANAN</th>
                        <td><a href="{{ url('storage/bukti/', $p->bukti) }}" target="_blank">{{ $p->bukti }}</a></td>
                    </tr>
                    <tr>
                        <th>PENANGGUNG JAWAB</th>
                        <td>{{ $p->penanggung_jawab }}</td>
                    </tr>
                        <th>AKTIF</th>
                        <td>{{ $p->aktif }}</td>
                    </tr>
                    <tr>
                        <th>USER</th>
                        <td>{{ $p->user->name }}</td>
                    </tr>
                    <tr>
                        <th>ALAMAT</th>
                        <td>{{ $p->alamat }}</td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
