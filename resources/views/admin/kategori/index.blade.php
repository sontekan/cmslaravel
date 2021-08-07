@extends('admin.main')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="row">
            <div class="container">
                <a href="/kategori/create" type="button" class="btn btn-primary mr-2"><i class="fas fa-plus"></i>
                    Tambah</a>
                @if ($kategori[0])
                    <table class="table table-bordered mt-2">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">slug</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $row)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->slug }}</< /td>
                                    <td>
                                        <div class="btn-group">
                                        <a href="/kategori/{{ $row->id }}/edit" type="button"
                                            class="btn btn-primary mr-2"><i class="fas fa-edit"></i>
                                            Edit</a>
                                        <form action="/kategori/{{ $row->id }}" method="post">
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
                    {{$kategori->links('pagination')}}
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
