@extends('layouts.view')

@section('content')
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Selamat Datang</h1>
                            <p class="lead">
                                Buat Akun untuk melanjutkan
                            </p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input class="form-control form-control-lg" type="text" name="name"
                                                placeholder="Enter your name" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                placeholder="Enter your email" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                placeholder="Enter password" />
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <a href="index.html" class="btn btn-lg btn-primary">Daftar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3">
                            Sudah Punya Akun? <a href="login">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
