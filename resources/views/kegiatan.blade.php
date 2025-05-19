@extends('layouts.app')

@section('title', 'Detail Kegiatan')

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
                            <h3 class="mb-0">Detail Kegiatan</h3>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-2">
                                        <h2><strong>{{ $seminar['nama'] }}</strong></h2>
                                        <h5>Ini Deskripsi</h5>
                                        <p class="text-muted mb-1">
                                            {{ \Carbon\Carbon::parse($seminar['tanggal'])->format('d F Y') }}</p>
                                        @if (!empty($seminar['kelas']))

                                            @foreach ($seminar['kelas'] as $kelas)
                                                <strong>{{ $kelas['nama'] }} </strong> – {{ $kelas['lokasi'] }}
                                            @endforeach
                                        @else
                                            <p class="text-muted">Tidak ada kelas untuk seminar ini.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-md btn-primary mb-4 rounded-pill" data-bs-toggle="modal"
            data-bs-target="#modalTambahKelas">
            Tambah Kelas
        </button>
    </div>


    {{-- ini isi kelas --}}
    @foreach ($seminar['kelas'] as $kelas)
        <div class="row">
            <div class="col-xl-12">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-2">
                                            <div class="d-flex justify-content-between align-items-start mb-3">
                                                <div>
                                                    <h3 class=" text-dark mb-0">{{ $kelas['nama'] }}</h3>
                                                    <small class="text-muted">{{ $kelas['lokasi'] }}</small>
                                                </div>
                                                <form action="#" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-success rounded-pill">
                                                        Edit Peserta
                                                    </button>
                                                    <button type="submit" class="btn btn-sm btn-primary rounded-pill">
                                                        Import Excel
                                                    </button>
                                                </form>
                                            </div>
                                            <h5 class="card-title text-dark mb-2">Pengawas : Raisu</h5>
                                            <h5 class="card-title text-dark mb-4">Penguji : Walid</h5>
                                            <table class="table table-bordered table-hover table-sm">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama</th>
                                                        <th>Nomor Antrian</th>
                                                        <th>Action</th>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    <!-- POP UP -->
    <div class="modal fade" id="modalTambahKelas" tabindex="-1" aria-labelledby="modalTambahKelasLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="{{ url('/kelas/tambah') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTambahKelasLabel">Tambah Kelas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama-kelas" class="form-label">Nama Kelas</label>
                            <input type="text" class="form-control" id="nama-kelas" name="nama_kelas" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="penguji" class="form-label">Penguji</label>
                                <input type="text" class="form-control" id="penguji" name="penguji" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lokasi" class="form-label">Pengamat</label>
                                <select class="form-select" id="lokasi" name="lokasi" required>
                                    <option value="" disabled selected>Pilih Pengamat</option>
                                    <option value="Ahmad">Ahmad</option>
                                    <option value="Dewi">Dewi</option>
                                    <option value="Budi">Budi</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="kapasitas" class="form-label">Kapasitas</label>
                            <input type="text" class="form-control" id="kapasitas" name="kapasitas" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- <div class="row">
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
    </div> --}}
@endsection
