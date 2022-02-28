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
            <th scope="col">Nama Cast</th>
            <th scope="col">Umur Cast</th>
            <th scope="col">Biodata Cast</th>
            <th scope="col">Detail Cast</th>
        </tr>
    </thead>
    <tbody>
       @forelse ($cast as $key => $item)
            <tr>
                <td>{{$key + 1}}</td> <!-- kenapa di tambah 1 karena akan selalu mulai dari 0 dan di tambah 0+1 dst -->
                <td>{{$item -> nama}}</td> <!-- manggil database nama -->
                <td>{{$item -> umur}}</td> <!-- manggil database umur -->
                <td>{{$item -> bio}}</td> <!-- manggil database bio -->
                <td>
                    <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/cast/{{$item->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger btn-sm" value="Hapus">
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