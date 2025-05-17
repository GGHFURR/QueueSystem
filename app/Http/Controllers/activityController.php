<?php

namespace App\Http\Controllers;

class activityController extends Controller
{
    public function index()
    {
        $seminarList = [
            [
                'id' => 1,
                'nama' => 'Seminar Profesi',
                'tanggal' => '2025-07-25',
                'kelas' => [
                    [
                        'nama' => 'Kelas A',
                        'lokasi' => 'Ruang Kelas C-103',
                        'peserta' => [
                            ['nama' => 'Budi', 'nomor_antrian' => 1, 'status' => 'Hadir'],
                            ['nama' => 'Sari', 'nomor_antrian' => 2, 'status' => 'Belum Hadir'],
                        ],
                    ],
                    [
                        'nama' => 'Kelas B',
                        'lokasi' => 'Ruang Kelas C-104',
                        'peserta' => [
                            ['nama' => 'Andi', 'nomor_antrian' => 1, 'status' => 'Hadir'],
                        ],
                    ],
                ],
            ],
        ];

        return view('activity', ['seminarList' => $seminarList]);
    }
    public function detail($id)
    {
        $seminarList = [
            [
                'id' => 1,
                'nama' => 'Seminar Profesi',
                'tanggal' => '2025-07-25',
                'kelas' => [
                    [
                        'nama' => 'Kelas A',
                        'lokasi' => 'Ruang Kelas C-103',
                        'peserta' => [
                            ['nama' => 'Budi', 'nomor_antrian' => 1, 'status' => 'Hadir'],
                            ['nama' => 'Sari', 'nomor_antrian' => 2, 'status' => 'Belum Hadir'],
                        ],
                    ],
                    [
                        'nama' => 'Kelas B',
                        'lokasi' => 'Ruang Kelas C-104',
                        'peserta' => [
                            ['nama' => 'Andi', 'nomor_antrian' => 1, 'status' => 'Hadir'],
                        ],
                    ],
                ],
            ],
            // tambah seminar lain jika perlu
        ];

        $seminar = collect($seminarList)->firstWhere('id', (int)$id);

        if (!$seminar) {
            abort(404);
        }

        return view('kegiatan', compact('seminar'));
    }
}
