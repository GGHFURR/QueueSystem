<?php

namespace App\Models;

use App\Models\User;
use App\Models\Classes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activities';

    protected $fillable = [
        'title',
        'description',
        'date',
        'time',
        'created_by',
        'classes_id'
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function classes()
    {
        return $this->hasMany(Classes::class, 'activity_id');
    }
}
