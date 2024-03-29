@extends('layouts.app')
@section('title', 'Admin | Data Bahan')

@section('content')
    <div class="row mt-3 mb-3">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between">
                    <h4>Categories</h4>
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Add Bahan</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>KODE BAHAN</th>
                                <th>NAMA BAHAN</th>
                                <th>JENIS BAHAN</th>
                                <th>HARGA JUAL</th>
                                <th>HARGA BELI</th>
                                <th>ACTION</th>
                            </tr>

                            @foreach ($rows as $row)
                                <tr>
                                    <td width="5%">{{ $row->cat_id }}</td>
                                    <td>{{ $row->cat_kode_bahan }}</td>
                                    <td>{{ $row->cat_name }}</td>
                                    <td>{{ $row->cat_jenis }}</td>
                                    <td>{{ $row->cat_harga_jual }}</td>
                                    <td>{{ $row->cat_harga_beli }}</td>
                                    <td width="14%">
                                        <a href="{{ route('admin.categories.edit', $row->cat_id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('admin.categories.destroy', $row->cat_id) }}" method="post" class="d-inline">
                                            {{-- <input type="hidden" name="_method" value="DELETE"> --}}
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
