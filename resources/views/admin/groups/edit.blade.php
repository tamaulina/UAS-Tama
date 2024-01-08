@extends('layouts.app')
@section('title', 'Admin | Edit item')

@section('content')
<div class="row mt-3 mb-3">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h4>Edit item</h4>
                <a href="" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.groups.update', $item->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="">NO PEMESANAN</label>
                        <input type="number" name="no_pem" value="{{ $item->kode }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">TANGGAL PEMESANAN</label>
                        <input type="text" name="tgl_pem" value="{{ $item->tgl_pem }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA PELANGGAN</label>
                        <input type="text" name="nama_pem" value="{{ $item->nama_pem }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">JENIS BARANG</label>
                        <input type="text" name="nama_pem" value="{{ $item->nama_pem }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BARANG</label>
                        <input type="number" name="jumlah_barang" value="{{ $item->jumlah_barang }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">KODE BAHAN</label>
                        <input type="text" name="kode_bahan" value="{{ $item->kode_bahan }}" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="SAVE" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
