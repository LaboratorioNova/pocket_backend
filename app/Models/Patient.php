<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

/**
 * Modelo de datos de paciente
 */
class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "name",
        "last_name_father",
        "last_name_mother",
        "gender",
        "birthdate",
        "customer_info_id",
        "primary_key",
    ];

    protected $hidden = [
        'pivot',
    ];
    
    protected $casts = [
        'birthdate' => 'datetime',
    ];

    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function services(){
        if(is_null($this->pivot)) return null; 
        
        $id = OrderPatient::where("order_id", $this->pivot->order_id)->where("patient_id", $this->id)->first()->id;
        $historicalServicesID = DB::table("historical_service_order_patient")->where("order_patient_id", $id)->select("historical_service_id")->get()->pluck("historical_service_id"); 
        return HistoricalService::whereIn("id", $historicalServicesID)->get();
    }

}
