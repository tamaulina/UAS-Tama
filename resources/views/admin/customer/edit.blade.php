@extends('layouts.app')
@section('title', 'Admin | Edit Barang')

@section('content')
    <div class="row mt-3 mb-3">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h4>Edit Barang</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.customers.update', $p->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="golongan_id">NO PEMESANAN</label>
                            <select name="golongan_id" id="golongan_id" class="form-select" >
                                @foreach ($golongan as $item)
                                @if ($p->golongan_id == $item->id)

                                <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                @else
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>

                                @endif
                                @endforeach
                            </select>
                            @error('golongan_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="no_pem">NO PEMESANAN</label>
                            <input type="text" name="no" value="{{ $p->no_pem }}" id="no_pem" class="form-control" >
                            @error('no_pem')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kode_bahan">KODE BAHAN</label>
                            <input type="text" name="kode_bahan" value="{{ $p->kode_bahan }}" id="kode_bahan" class="form-control" >
                            @error('kode_bahan')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama_pel">NAMA PELANGGAN</label>
                            <input type="text" name="nama_pel" value="{{ $p->nama_pel }}" id="nama_pel" class="form-control" >
                            @error('nama_pel')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="bukti">BUKTI PEMESANAN</label>
                            <input type="file" name="bukti" value="{{ $p->bukti }}" id="bukti" class="form-control" >
                            @error('bukti')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="penanggung_jawab">PENANGGUNG JAWAB</label>
                            <input type="text" name="penanggung_jawab" value="{{ $p->penanggung_jawab }}" id="penanggung_jawab" class="form-control" >
                            @error('penanggung_jawab')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="aktif">AKTIF</label>
                            <select name="aktif" id="aktif" class="form-select" >
                                @foreach ($aktif as $item)
                                @if ($p->aktif == $item)
                                    <option value="{{ $item }}" selected>{{ $item }}</option>

                                @else
                                <option value="{{ $item }}">{{ $item }}</option>

                                @endif
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
                                @if ($p->user_id == $item->id)
                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>

                                @else

                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('user_id')
                                <div class="alert alert-danger mt-2 mb-2 p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat">ALAMAT TOKO</label>
                            <input type="text" name="alamat" value="{{ $p->alamat }}" id="alamat" class="form-control" >
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
