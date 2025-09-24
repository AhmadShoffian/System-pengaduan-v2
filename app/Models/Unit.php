<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $table = 'units';

    protected $fillable = [
        'name'
    ];

    public function pengaduan()
    {
        return $this->hasMany(\App\Models\Pengaduan::class, 'unit_id');
    }
}
