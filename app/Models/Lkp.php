<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lkp extends Model
{
    protected $fillable = [
        'nama_program', 'deskripsi', 'thumbnail', 'durasi', 'biaya'
    ];

    public function programs()
    {
        return $this->hasMany(ProgramLkp::class, 'lkp_id');
    }

}
