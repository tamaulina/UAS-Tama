@extends('layouts.app')
@section('title', 'Admin | Data Barang')

@section('content')
    <div class="row mt-3 mb-3">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between">
                    <h4>Data Barang</h4>
                    <a href="{{ route('admin.customers.create') }}" class="btn btn-primary">Create</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>NO PEMESANAN</th>
                                <th>KODE BAHAN</th>
                                <th>NAMA PELANGGAN</th>
                                <th>BUKTI PEMESANAN</th>
                                <th>PENANGGUNG JAWAB</th>
                                <th>AKTIF</th>
                                <th>USER</th>
                                <th>ALAMAT</th>
                                <th>ACTION</th>
                            </tr>
                            @foreach ($rows as $row)
                            <tr>
                                <td width="5%">{{ $row->id }}</td>
                                <td>{{ $row->golongan->no_pem }}</td>
                                <td>{{ $row->kode_bahan }}</td>
                                <td>{{ $row->nama_pel }}</td>
                                <td>{{ $row->bukti }}</td>
                                <td>{{ $row->penanggung_jawab }}</td>
                                <td>{{ $row->aktif }}</td>
                                <td>{{ $row->golongan->nama_pem }}</td>
                                <td>{{ $row->alamat }}</td>
                                <td width="20%">
                                    <a href="{{ route('admin.customers.show', $row->id) }}" class="btn btn-primary">Show</a>
                                    <a href="{{ route('admin.customers.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.customers.destroy', $row->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Delete" class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
