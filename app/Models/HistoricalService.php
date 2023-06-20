<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Almacenar historico de actualizaciones en los datos de los estudios
 */
class HistoricalService extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        "request",
        "public_cost",
        "process_time",
        "enable",
        "service_id"
    ];

    protected $hidden = [
        "pivot",
    ];
    
    protected $casts = [
        "public_cost" => "double",
        "process_time" => "integer",
        "enable" => "boolean",
    ];


    public function service(){
        return $this->hasOne(Service::class, "historical_service_id");
    }

    public function patients() {
        return $this->belongsToMany(
            OrderPatient::class, 
            "historical_service_order_patient", 
            "historical_service_id"
        );
    }    

    public function values(){
        return [
            "name" => $this->name,
            "request" => $this->request,
            "public_cost" => $this->public_cost,
            "process_time" => $this->process_time,
            "historical_service_id" => $this->historical_service_id,
            "enable" => $this->enable,
        ];
    }
}
