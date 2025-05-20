<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class activityController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();

        $activitiesToday = Activity::with(['classes.participants'])
            ->whereDate('date', $today)
            ->get();

        $activitiesUpcoming = Activity::with(['classes.participants'])
            ->whereDate('date', '>', $today)
            ->get();

        return view('Activity', compact('activitiesToday', 'activitiesUpcoming'));
    }
    public function detail($id)
    {
        $activity = Activity::with(['classes.participants', 'classes.pengamat'])->findOrFail($id);
        $pengamatList = User::all(); 

        $activities = [
            'id' => $activity->id,
            'nama' => $activity->title,
            'deskripsi' => $activity->description,
            'tanggal' => $activity->date,
            'kelas' => $activity->classes->map(function ($kelas) {
                return [
                    'id' => $kelas->id,
                    'nama' => $kelas->class_code,
                    'lokasi' => $kelas->lokasi ?? 'Lokasi belum diatur',
                    'penguji' => $kelas->penguji ?? '-',
                    'pengawas' => optional($kelas->pengamat)->name ?? '-',
                    'peserta' => $kelas->participants->map(function ($peserta) {
                        return [
                            'nama' => $peserta->name,
                            'nomor_antrian' => $peserta->queue_number ?? '-',
                        ];
                    })->toArray(),
                ];
            })->toArray(),
        ];

        return view('kegiatan', compact('activities', 'pengamatList'));
    }
    public function create()
    {
        return view('tambah');
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required|string|max:200',
            'description' => 'required|string',
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
        ]);

        Activity::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date' => $request->input('tanggal'),
            'time' => $request->input('waktu'),
            'created_by' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Kegiatan berhasil ditambahkan');
    }
}
