<?php

namespace App\Models;

use App\Models\User;
use App\Models\Participant;
use App\Models\ClassObservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classes extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'class_code',
        'max_participants',
        'penguji',
        'pengamat_id',
        'activity_id',
        'enrollment_key',
    ];

    public function pengamat()
    {
        return $this->belongsTo(User::class, 'pengamat_id');
    }

    public function participants()
    {
        return $this->hasMany(Participant::class, 'class_id');
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activity_id');
    }

    public function observations()
    {
        return $this->hasMany(ClassObservation::class, 'class_id');
    }
}
