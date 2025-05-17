@extends('layouts.view')

@section('title', 'Antrian')

@section('content')
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-5 fw-bold">Seminar Wawancara</h1>
            <p class="text-muted">Antrian Peserta Seminar</p>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-body text-center">
                <h4 class="text-secondary">Sedang Dipanggil</h4>
                <h1 class="display-3 fw-bold text-primary">A003</h1>
                <p class="fs-5">Nadhief Alfarobi</p>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-light">
                <h5 class="mb-0">Daftar Antrian</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A001</td>
                            <td>Rizky Maulana</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                        </tr>
                        <tr>
                            <td>A002</td>
                            <td>Intan Permata</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                        </tr>
                        <tr>
                            <td>A003</td>
                            <td>Nadhief Alfarobi</td>
                            <td><span class="badge bg-warning text-dark">Dipanggil</span></td>
                        </tr>
                        <tr>
                            <td>A004</td>
                            <td>Salsa Amelia</td>
                            <td><span class="badge bg-secondary">Menunggu</span></td>
                        </tr>
                        <tr>
                            <td>A005</td>
                            <td>Galang Surya</td>
                            <td><span class="badge bg-secondary">Menunggu</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
