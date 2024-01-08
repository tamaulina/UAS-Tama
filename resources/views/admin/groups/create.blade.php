@extends('layouts.app')
@section('title', 'Admin | Create Golongan')

@section('content')
<div class="row mt-3 mb-3">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header d-flex justify-content-between">
                <h4>Add Golongan</h4>
                <a href="{{ route('admin.groups.index') }}" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.groups.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">NO PEMESANAN</label>
                        <input type="text" name="no_pem" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">TANGGAL PEMESANAN</label>
                        <input type="date" name="tgl_pem" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA PELANGGAN</label>
                        <input type="text" name="nama_pem" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">JENIS BARANG</label>
                        <input type="text" name="nama_barang" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">JUMLAH BARANG</label>
                        <input type="number" name="jumlah_barang" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">KODE BAHAN</label>
                        <input type="number" name="kode_bahan" id="" class="form-control" required>
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
