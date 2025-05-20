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
                    @foreach ($activitiesToday as $activity)
                        <div class="col-sm-3 mb-4">
                            <a href="{{ route('kegiatan.detail', $activity->id) }}" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h2 class="mb-2">{{ $activity->title }}</h2>
                                            </div>
                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="settings"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mt-0">
                                            <h6 class="card-title">{{ \Carbon\Carbon::parse($activity->date)->format('d F Y') }}</h6>
                                        </div>
                                        <div class="mb-0">
                                            <span class="text-muted">{{ $activity->classes->count() }} Kelas</span> |
                                            <span an class="text-muted">
                                                {{ $activity->classes->sum(fn($class) => $class->participants->count()) }} Peserta
                                            </span>
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
                    @foreach ($activitiesUpcoming as $activity)
                        <div class="col-sm-3 mb-4">
                            <a href="{{ route('kegiatan.detail', $activity->id) }}" class="text-decoration-none text-dark">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h2 class="mb-2">{{ $activity->title }}</h2>
                                            </div>
                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="settings"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mt-0">
                                            <h6 class="card-title">{{ \Carbon\Carbon::parse($activity->date)->format('d F Y') }}</h6>
                                        </div>
                                        <div class="mb-0">
                                            <span class="text-muted">{{ $activity->classes->count() }} Kelas</span> |
                                            <span class="text-muted">
                                                {{ $activity->classes->sum(fn($class) => $class->participants->count()) }} Peserta
                                            </span>
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
