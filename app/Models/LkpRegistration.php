<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LkpRegistration extends Model
{
    protected $fillable = ['name', 'email', 'whatsapp', 'program', 'address', 'status_pendaftaran'];

    public function lkp()
    {
        return $this->belongsTo(Lkp::class);
    }
}
