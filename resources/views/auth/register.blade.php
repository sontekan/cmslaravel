@extends('auth.main')

@section('body')
<div class="row justify-content-center">
    <div class="col-xl-6 col-lg-8 col-md-9 mt-5">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-8">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="name"
                                        name="name" placeholder="Masukan Nama">
                                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email" name="email"
                                    placeholder="Masukan Email">
                                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password" name="password"
                                        placeholder="Masukan Password">
                                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                                </div>
        
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password" name="password_confirmation"
                                        placeholder="Konfirmasi Password">
                                        @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                                </div>
        
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Lupa Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="{{ route('login') }}">Sudah Punya Akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
