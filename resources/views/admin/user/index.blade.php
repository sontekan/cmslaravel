@extends('admin.main')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">User</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <div class="row">
            <div class="container">
                <a href="/user/create" type="button" class="btn btn-primary mr-2"><i class="fas fa-plus"></i>
                    Tambah</a>
                @if ($user[0])
                    <table class="table table-bordered mt-2">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th colspan="2"><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $row)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->email }}</td>
                                <td widht="10px"><a class="btn btn-primary"><i class="fas fa-edit"> Edit</i></a></td>
                                <td widht="10px">
                                    <form action="/user/{{$row->id}}" method="post">
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
                    {{$user->links('pagination')}}
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
