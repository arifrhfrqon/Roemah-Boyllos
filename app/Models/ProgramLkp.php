<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramLkp extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lkp',
        'deskripsi',
        'alamat',
        'email',
        'phone',
        'fitur',
        'foto',
        'program_name',
    ];
}
