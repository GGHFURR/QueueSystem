@extends('layouts.app')

@section('title', 'Laporan Kegiatan')

@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Laporan Kegiatan</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    </head>

    <body>
        <div class="">
            <!--start breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Laporan Kegiatan</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0 align-items-center">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <ion-icon name="home-outline" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Home"></ion-icon>
                                </a>
                            </li>
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
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Jumlah Peserta</th>
                                            <th>Jumlah Kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for ($i = 1; $i <= 100; $i++)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>Kegiatan {{ $i }}</td>
                                                <td>{{ now()->subDays($i)->format('Y-m-d') }}</td>
                                                <td>{{ now()->subDays($i - 1)->format('Y-m-d') }}</td>
                                                <td>{{ rand(10, 100) }}</td>
                                                <td>{{ rand(1, 10) }}</td>
                                                <td class="d-flex align-items-center gap-2">
                                                    <button type="button" class="btn btn-primary"
                                                        onclick="window.location.href='/laporan/1'">
                                                        <ion-icon name="create-outline"></ion-icon> Detail
                                                    </button>


                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page content-->
            </div>
        </div>

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

    </body>

    </html>

@endsection
