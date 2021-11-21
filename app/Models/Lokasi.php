<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $with = ['pinjam'];

    public function pinjam()
    {
        return $this->hasMany(Pinjam::class);
    }
}
