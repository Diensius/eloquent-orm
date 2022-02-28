<!-- Tugas #12 Laravel Intro
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Tugas #12 Laravel Intro</title>
    </head>

    <body>
        <h1>SELAMAT DATANG {{$namaDepan}} {{$namaBelakang}} !</h1>
        <h2>Terimakasih telah bergabung di Sanberbook. Social media kita bersama!</h2>
        <a href="/"><button type="button">Home</button></a>
    </body>
</html>
-->

@extends('/adminlte/master/master')

@section('title')
    Halaman Welcome (Bagian dari Tugas #12 Laravel Intro)
@endsection

@section('content')
    <h1>SELAMAT DATANG {{$namaDepan}} {{$namaBelakang}} !</h1>
    <h2>Terimakasih telah bergabung di Sanberbook. Social media kita bersama!</h2>
    <a href="/"><button type="button">Home</button></a>
@endsection