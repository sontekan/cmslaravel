@extends('admin.main')

@section('konten')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Post</h1>
        </div>
        <div class="row">
            <div class="container">
                <form action="/post" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group-judul">
                        <label for="judul">
                            <h5>Judul</h5>
                        </label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}">
                    </div>
                    @error('judul')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group mt-2">
                        <label for="kategori"><h5>Pilih Kategori</h5></label>
                        <select class="form-control" id="kategori" name="kategori">
                            <option selected-disable>Pilih Kategori</option>
                            @foreach ($kategori as $row)
                                <option value="{{ $row->id }}">{{ $row->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('kategori')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <label for="banner" class="form-label ">
                        <h5>Banner</h5>
                    </label>
                    <input class="form-control" type="file" id="banner" multiple name="banner" />
                    @error('banner')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="form-group-artikel mt-2">
                        <label for="editor">
                            <h5>Artikel</h5>
                        </label>
                        <textarea class="form-control" id="editor" rows="10"
                            name="artikel">{{ old('artikel') }}</textarea>
                    </div>
                    @error('artikel')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="button mt-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="/post" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                            Kembali</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- End of Main Content -->
@endsection

@section('ck-editor')
<script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ))
        .catch( error => {
            console.error( error );
        } );
    </script>

@endsection

