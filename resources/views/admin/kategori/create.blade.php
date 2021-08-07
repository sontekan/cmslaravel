 @extends('admin.main')
 
 @section('konten')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="row">
        <div class="container">
            <form action="/kategori" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama"><h5>Masukan Kategori</h5></label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                @error('nama')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save"></i>
                        Simpan</button>
                    <a href="/kategori" type="button" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                        Batal</a>
            </form>
        </div>
    </div>
</div>
<!-- End of Main Content -->    
 @endsection

