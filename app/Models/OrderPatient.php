<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo que guarda la relación entre la cita y los pacientes para atender en la cita
 */
class OrderPatient extends Model
{
    use HasFactory;

    protected $table = "order_patient";

    public $fillable = [
        "order_id",
        "patient_id",
    ];


    public function historicalServices() {
        return $this->belongsToMany(HistoricalService::class);
    }    

}
