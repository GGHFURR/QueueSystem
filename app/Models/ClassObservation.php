<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassObservation extends Model
{
    use HasFactory;

    protected $fillable = ['class_id', 'started_at', 'ended_at'];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
