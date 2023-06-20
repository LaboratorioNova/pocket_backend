<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo que guarda los estudios que ofrece nova
 */
class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        "request",
        "public_cost",
        "process_time",
        "historical_service_id",
        "available_outside",
        "enable",
    ];

    protected $hidden = [
        "pivot",
    ];
    
    protected $casts = [
        "public_cost" => "double",
        "process_time" => "integer",
        "enable" => "boolean",
        "available_outside" => "boolean",
    ];

    public function values(){
        return [
            "name" => $this->name,
            "request" => $this->request,
            "public_cost" => $this->public_cost,
            "process_time" => $this->process_time,
            "historical_service_id" => $this->historical_service_id,
            "enable" => $this->enable,
            "available_outside" => $this->available_outside,
        ];
    }
}
