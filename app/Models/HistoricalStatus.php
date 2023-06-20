<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Guardar historico de estatus de una solicitud
 */
class HistoricalStatus extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "order_id",
        "status_id",
    ];
}
