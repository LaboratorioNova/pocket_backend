<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo que guarda los diferentes estatus que puede tener una cita
 */
class OrderState extends Model
{
    use HasFactory, SoftDeletes;

    const CREATED = 1;
    const APPROVED = 2;
    const ACTIVE = 3;
    const COMPLETE = 4;
    const CANCELED = 5;

    public $fillable = [
        "name"
    ];

    protected $hidden = [
        "pivot",
        "deleted_at",
        "updated_at"
    ];
}
