<?php

namespace App\Models;

use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'class_id', 'mentor', 'status'];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
