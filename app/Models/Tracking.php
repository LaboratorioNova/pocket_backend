<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo que guarda los datos de pusher
 */
class Tracking extends Model
{
    use HasFactory;

    protected $fillable = [
        "lat",
        "lng",
        "user_id",
        "order_id",
    ];

    protected $hidden = [
        "updated_at",
    ];
}
