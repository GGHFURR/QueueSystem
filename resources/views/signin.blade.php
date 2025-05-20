@extends('layouts.view') {{-- Ganti sesuai layout-mu, misal layout.app jika dipakai --}}

@section('content')
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Selamat Datang!</h1>
                            <p class="lead">Silahkan Masuk ke Akun Anda</p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form method="POST" action="{{ url('/login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                value="{{ old('email') }}" placeholder="bpsdm@gmail.com" required autofocus />
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                required />
                                        </div>

                                        <div class="form-check mb-3">
                                            <input id="remember" type="checkbox" class="form-check-input"
                                                name="remember-me">
                                            <label class="form-check-label text-small" for="remember">Ingat Saya</label>
                                        </div>

                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Masuk</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            Belum Punya Akun? <a href="signup">Daftar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
