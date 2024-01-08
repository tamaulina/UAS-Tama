@extends('layouts.app')
@section('title', 'Admin | Create Bahan')

@section('content')
<div class="row mt-3 mb-3">
    <div class="col-md-12">
        <div class="card shadow">
            <div class="card-header">
                <h4>Add Bahan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.categories.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="">KODE BAHAN</label>
                        <input type="text" name="cat_kode_bahan" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">NAMA BAHAN</label>
                        <input type="text" name="cat_name" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">JENIS BAHAN</label>
                        <input type="text" name="cat_jenis" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA JUAL</label>
                        <input type="number" name="cat_harga_jual" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="">HARGA BELI</label>
                        <input type="number" name="cat_harga_beli" id="" class="form-control" required>
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
