<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    public function rol(): BelongsTo {
        return $this->belongsTo(Roles::class, 'id_rol');
    }
}
