<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //satu appointment hanya punya satu divisi
    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
