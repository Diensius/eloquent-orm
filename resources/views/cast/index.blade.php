@extends('/adminlte/master/master')

@section('title')
    List Cast
@endsection

@section('content')

<a href="/cast/create" class="btn btn-primary mb-3">Tambah Data Cast</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Biodata</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
       @forelse ($cast as $key => $item)
            <tr>
                <td>{{$key + 1}}</td> <!-- kenapa di tambah 1 karena akan selalu mulai dari 0 dan di tambah 0+1 dst -->
                <td>{{Str::limit($item -> nama, 10)}}</td> <!-- akan menampilkan jumlah karakter yg di buat -->
                <td>{{$item -> umur}}</td> <!-- manggil database umur -->
                <td><img src="{{asset('image/'.$item->bio)}}" class="img-size-50"></td> <!-- tampilkan gambar -->
                <td>
                    <form action="/cast/{{$item->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                        <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                </td>
            </tr>

       @empty
            <tr>
                <td>Data Masih Kosong !</td>
            </tr>
       @endforelse
    </tbody>
</table>
@endsection