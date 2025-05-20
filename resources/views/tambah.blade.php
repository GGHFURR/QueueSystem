@extends('layouts.app') {{-- ganti sesuai layoutmu --}}

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="w-100">
                <div class="row">
                    <div class="col-auto">
                        <div class="d-flex align-items-center mb-3">
                            <a href="/admin" class="text-dark me-2">
                                <i class="align-middle fs-4" data-feather="arrow-left"></i>
                            </a>
                            <h3 class="mb-0">Tambah Kegiatan</h3>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-2">
                                        <form action="{{ url('/kegiatan/tambah') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="nama" class="form-label"
                                                    style="font-size: 1.25rem;"><strong>Nama Kegiatan</strong></label>
                                                <input type="text" name="title" id="title" class="form-control"
                                                    placeholder="Contoh : Kegiatan Seminar XYZ" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="nama" class="form-label"
                                                    style="font-size: 1.25rem;"><strong>Deskripsi
                                                        Kegiatan</strong></label>
                                                <input type="text" name="description" id="description" class="form-control"
                                                    placeholder="Masukkan deskripsi kegiatan" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal" class="form-label"
                                                    style="font-size: 1.25rem;"><strong>Tanggal</strong></label>
                                                <div class="row align-items-center">
                                                    <div class="col-md-5">
                                                        <input type="date" name="tanggal" id="tanggal"
                                                            class="form-control" required>
                                                    </div>
                                                    {{-- <div class="col-auto">
                                                        <span class="mx-2">sampai</span>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="date" name="tanggal-selesai" id="tanggal-selesai"
                                                            class="form-control" required>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <div class="mb-6">
                                                <label for="waktu-mulai" class="form-label"
                                                    style="font-size: 1.25rem;"><strong>Waktu</strong></label>
                                                <div class="row align-items-center">
                                                    <div class="col-md-5">
                                                        <input type="time" name="waktu" id="waktu"
                                                            class="form-control" required>
                                                    </div>
                                                    {{-- <div class="col-auto">
                                                        <span class="mx-2">sampai</span>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <input type="time" name="waktu-selesai" id="waktu-selesai"
                                                            class="form-control" required>
                                                    </div> --}}
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center">
                                                <button type="submit" class="btn btn-lg btn-success mb-4 rounded-pill">
                                                    Tambah Kegiatan
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
