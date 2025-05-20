<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClassesController extends Controller
{
    public function store(Request $request) {
        $validated = $request->validate([
            'class_code' => [
                'required', 'string', 'max:50',
                Rule::unique('classes')->where(function ($query) use ($request) {
                    return $query->where('activity_id', $request->activity_id);
                })
            ],
            'max_participants' => 'required|integer|min:1',
            'penguji' => 'required|string|max:100',
            'pengamat_id' => 'required|exists:users,id',
            'activity_id' => 'required|exists:activities,id',
        ]);

        // Generate enrollment key (random string, atau bisa pakai UUID)
        $validated['enrollment_key'] = strtoupper(uniqid('KEY-'));

        Classes::create($validated);

        return redirect()->back()->with('success', 'Kelas berhasil ditambahkan.');
    }
}
