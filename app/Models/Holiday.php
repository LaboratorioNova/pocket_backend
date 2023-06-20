<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Días festivos
 */
class Holiday extends Model
{
    use HasFactory;

    protected $fillable = [
        "holiday"
    ];
}
