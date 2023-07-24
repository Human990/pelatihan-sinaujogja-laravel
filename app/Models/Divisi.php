<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Divisi extends Model
{
    // use HasFactory;
    protected $table = 'divisi';

    public function staf(): HasMany
    {
        return $this->hasMany(Staf::class, 'id_divisi', 'id');
    }
}
