<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug'
    ];

    public function treatments() {
        return $this->hasMany('App\Models\Treatment');
    }
}
