<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staf extends Model
{
    // use HasFactory;
    protected $table = 'staf';

    public function divisi() : BelongsTo 
    {
        return $this->belongsTo(Divisi::class,'id_divisi');
    }
}
