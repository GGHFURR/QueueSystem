@extends('layouts.app')

@section('title', 'Detail Kegiatan')

@section('content')

@php
    // Data dummy hardcode
    $nama_kegiatan = 'Workshop Laravel';
    $tanggal_mulai = '2025-06-01';
    $tanggal_akhir = '2025-06-05';
    $jumlah_peserta = 45;
    $jumlah_kelas = 3;

    // Contoh data kelas beserta peserta, pengamat, penguji
    $kelasList = [
        [
            'nama' => 'Kelas A',
            'pengamat' => 'Pak Budi',
            'penguji' => 'Ibu Sari',
            'peserta' => ['Andi', 'Budi', 'Cici', 'Dedi']
        ],
        [
            'nama' => 'Kelas B',
            'pengamat' => 'Pak Joko',
            'penguji' => 'Ibu Tini',
            'peserta' => ['Eka', 'Fajar', 'Gita']
        ],
        [
            'nama' => 'Kelas C',
            'pengamat' => 'Pak Agus',
            'penguji' => 'Ibu Dewi',
            'peserta' => ['Hani', 'Ivan', 'Joko', 'Kiki', 'Lina']
        ],
    ];
@endphp

<div class="">
    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Detail Kegiatan</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item">
                        {{-- Kalau mau aktifkan home, tinggal uncomment --}}
                        {{-- <a href="{{ url('/laporan') }}">
                            <ion-icon name="home-outline" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home"></ion-icon>
                        </a> --}}
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Kegiatan</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <!-- start page content wrapper-->
    <div class="">
        <div class="page-content">
            <div class="card">
                <div class="card-body">
                    <h5>Nama Kegiatan: {{ $nama_kegiatan }}</h5>
                    <h6>Tanggal: {{ $tanggal_mulai }} - {{ $tanggal_akhir }}</h6>
                    <h6>Jumlah Peserta: {{ $jumlah_peserta }}</h6>
                    <h6>Jumlah Kelas: {{ $jumlah_kelas }}</h6>
                    <hr>
                    <h5>List Kelas</h5>
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas</th>
                                    <th>Pengamat Kelas</th>
                                    <th>Penguji</th>
                                    <th>Peserta</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($kelasList as $index => $kelas)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $kelas['nama'] }}</td>
                                        <td>{{ $kelas['pengamat'] }}</td>
                                        <td>{{ $kelas['penguji'] }}</td>
                                        <td>
                                            <ul>
                                                @foreach($kelas['peserta'] as $peserta)
                                                    <li>{{ $peserta }}</li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content-->
    </div>
</div>

<!-- Load datatables scripts -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "paging": true,
            "pageLength": 10, // Jumlah baris per halaman
            "lengthMenu": [10, 25, 50, 100], // Opsi jumlah baris
            "ordering": true, // Mengaktifkan sorting
            "searching": true // Mengaktifkan fitur pencarian
        });
    });
</script>

@endsection
