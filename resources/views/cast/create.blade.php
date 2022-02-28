@extends('/adminlte/master/master')

@section('title')
    Tambah Cast
@endsection

@section('content')
    <form action="/cast" method="POST" enctype="multipart/form-data"> <!-- enctype supaya bisa upload file-->
        @csrf
        <h1>Tambah Cast Baru</h1>

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Umur</label>
            <input type="text" name="umur" class="form-control">
        </div>
        @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label>Biodata</label>
            <input type="file" class="form-control" name="bio">
        </div>
        @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </form>
@endsection