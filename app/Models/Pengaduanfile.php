<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduanfile extends Model
{
    use HasFactory;

    protected $table = 'pengaduan_file';
    protected $fillable = ['pengaduan_id', 'file_path', 'file_name'];

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }
}
