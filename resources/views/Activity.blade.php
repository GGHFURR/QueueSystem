@extends('layouts.app')

@section('title', 'Manajemen Antrian')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0"><strong>Kegiatan Hari ini</strong></h1>
        <a href="{{ url('/kegiatan/tambah') }}" class="btn btn-success py-2 rounded-pill">
            <strong>+ Tambah Kegiatan </strong>
        </a>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h1 class=" mb-2">Seminar Profesi</h1>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="settings"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-0">
                                    <h1 class="card-title">25 Juli 2025</h1>
                                </div>
                                <div class="mb-0">
                                    <span class="text-muted">Ruang Kelas
                                        C-103</span>
                                    <span class="text-muted">| 123 Peserta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h1 class=" mb-2">Seminar Profesi</h1>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="settings"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-0">
                                    <h1 class="card-title">25 Juli 2025</h1>
                                </div>
                                <div class="mb-0">
                                    <span class="text-muted">Ruang Kelas
                                        C-103</span>
                                    <span class="text-muted">| 123 Peserta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h1 class=" mb-2">Seminar Profesi</h1>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="settings"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-0">
                                    <h1 class="card-title">25 Juli 2025</h1>
                                </div>
                                <div class="mb-0">
                                    <span class="text-muted">Ruang Kelas
                                        C-103</span>
                                    <span class="text-muted">| 123 Peserta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h1 class=" mb-2">Seminar Profesi</h1>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="settings"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-0">
                                    <h1 class="card-title">25 Juli 2025</h1>
                                </div>
                                <div class="mb-0">
                                    <span class="text-muted">Ruang Kelas
                                        C-103</span>
                                    <span class="text-muted">| 123 Peserta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-start mb-3">
        <h1 class="h3 mb-0"><strong>Kegiatan Akan Datang</strong></h1>

    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="w-100">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h1 class=" mb-2">Seminar Profesi</h1>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="settings"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-0">
                                    <h1 class="card-title">25 Juli 2025</h1>
                                </div>
                                <div class="mb-0">
                                    <span class="text-muted">Ruang Kelas
                                        C-103</span>
                                    <span class="text-muted">| 123 Peserta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h1 class=" mb-2">Seminar Profesi</h1>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="settings"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-0">
                                    <h1 class="card-title">25 Juli 2025</h1>
                                </div>
                                <div class="mb-0">
                                    <span class="text-muted">Ruang Kelas
                                        C-103</span>
                                    <span class="text-muted">| 123 Peserta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h1 class=" mb-2">Seminar Profesi</h1>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="settings"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-0">
                                    <h1 class="card-title">25 Juli 2025</h1>
                                </div>
                                <div class="mb-0">
                                    <span class="text-muted">Ruang Kelas
                                        C-103</span>
                                    <span class="text-muted">| 123 Peserta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h1 class=" mb-2">Seminar Profesi</h1>
                                    </div>
                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="settings"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mt-0">
                                    <h1 class="card-title">25 Juli 2025</h1>
                                </div>
                                <div class="mb-0">
                                    <span class="text-muted">Ruang Kelas
                                        C-103</span>
                                    <span class="text-muted">| 123 Peserta</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
