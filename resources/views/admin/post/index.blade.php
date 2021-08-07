@extends('admin.main')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Post</h1>
        </div>
        <div class="row">
            <div class="container">
                <a href="/post/create" type="button" class="btn btn-primary mr-2"><i class="fas fa-plus"></i>
                    Tambah</a>
                @if ($post[0])
                    <table class="table table-bordered mt-2">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $row->judul }}</td>
                                    <td><span class="badge badge-dark">{{ $row->kategori->nama}}</span></td>
                                    <td><img src="/upload/{{$row->banner}}" alt="banner" width="80px" height="60px"></< /td>
                                    <td>
                                        <div class="btn-group">
                                        <a href="/post/{{ $row->id }}/edit" type="button"
                                            class="btn btn-primary mr-2"><i class="fas fa-edit"></i>
                                            Edit</a>
                                        <form action="/post/{{ $row->id }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i> Hapus</button>
                                        </form>
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$post->links('pagination')}}
                @else
                    <div class="alert alert-warning mt-4" role="alert">
                        Data Anda Masih Kosong !!!
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection
