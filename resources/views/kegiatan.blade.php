@extends('layouts.app')

@section('title', 'Detail Kegiatan')

@section('content')
    <div class="mb-4">
        <h2>{{ $seminar['nama'] }}</h2>
        <p class="text-muted">{{ \Carbon\Carbon::parse($seminar['tanggal'])->format('d F Y') }}</p>
    </div>

    <div class="row">
        @foreach ($seminar['kelas'] as $kelas)
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title mb-0">{{ $kelas['nama'] }}</h5>
                                <small class="text-muted">{{ $kelas['lokasi'] }}</small>
                            </div>
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-primary">
                                    Import Excel
                                </button>
                            </form>
                        </div>

                        <table class="table table-bordered table-hover table-sm">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nomor Antrian</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas['peserta'] as $i => $peserta)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $peserta['nama'] }}</td>
                                        <td>{{ $peserta['nomor_antrian'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
