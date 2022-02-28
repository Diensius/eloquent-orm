@extends('/adminlte/master/master')

@section('title')
    Detail Lengkap Cast
@endsection

@section('content')
    <h1>{{$cast->nama}}</h1>
    <h1>{{$cast->umur}}</h1>
    <p>{{$cast->bio}}</p>

    <a href="/cast" class="btn btn-warning">Kembali</a>
@endsection