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
                    @foreach ($seminarList as $seminar)
                        <div class="col-sm-3 mb-4">
                            <a href="{{ route('kegiatan.detail', $seminar['id']) }}" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h1 class="mb-2">{{ $seminar['nama'] }}</h1>
                                            </div>
                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="settings"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mt-0">
                                            <h6 class="card-title">
                                                {{ \Carbon\Carbon::parse($seminar['tanggal'])->format('d F Y') }}</h6>
                                        </div>
                                        <div class="mb-0">
                                            <span class="text-muted">{{ count($seminar['kelas']) }} Kelas</span>
                                            <span class="text-muted"> | {{ count($seminar['kelas'][0]['peserta']) }}
                                                Peserta</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

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
                    @foreach ($seminarList as $seminar)
                        <div class="col-sm-3 mb-4">
                            <a href="{{ route('kegiatan.detail', $seminar['id']) }}" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h1 class="mb-2">{{ $seminar['nama'] }}</h1>
                                            </div>
                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="settings"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mt-0">
                                            <h6 class="card-title">
                                                {{ \Carbon\Carbon::parse($seminar['tanggal'])->format('d F Y') }}</h6>
                                        </div>
                                        <div class="mb-0">
                                            <span class="text-muted">{{ $seminar['kelas'][0]['lokasi'] }}</span>
                                            <span class="text-muted"> | {{ count($seminar['kelas'][0]['peserta']) }}
                                                Peserta</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
