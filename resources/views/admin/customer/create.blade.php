@extends('layouts.app')
@section('title', 'Admin | Create Barang')

@section('content')
    <div class="row mt-3 mb-3">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Add Barang</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.customers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="golongan_id">NO PEMESANAN</label>
                            <select name="golongan_id" id="golongan_id" class="form-select" >
                                @foreach ($golongan as $item)
                                    <option value="{{ $item->id }}">{{ $item->no_pem }}</option>
                                @endforeach
                            </select>
                            @error('golongan_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="number">NO PEMESANAN</label>
                            <input type="number" name="no_pem" id="number" class="form-control" >
                            @error('number')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no">KODE BAHAN</label>
                            <input type="number" name="kode_bahan" id="no" class="form-control" >
                            @error('no')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_pel">NAMA PELANGGAN</label>
                            <input type="text" name="nama_pel" id="nama_pel" class="form-control" >
                            @error('nama_pel')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="bukti">BUKTI PEMESANAN</label>
                            <input type="file" name="bukti" id="bukti" class="form-control" >
                            @error('bukti')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="penanggung_jawab">PENANGGUNG JAWAB</label>
                            <input type="text" name="penanggung_jawab" id="penanggung_jawab" class="form-control" >
                            @error('penanggung_jawab')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="aktif">AKTIF</label>
                            <select name="aktif" id="aktif" class="form-select" >
                                @foreach ($aktif as $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                            @error('aktif')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="user_id">USER</label>
                            <select name="user_id" id="user_id" class="form-select" >
                                @foreach ($user as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat">ALAMAT</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <button type="submit" value="SAVE" class="btn btn-primary">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
