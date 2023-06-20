<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo de datos de las citas
 */
class Order extends Model {
    use HasFactory, SoftDeletes;
    const VISIT_COST = 90.00; 
    const PATIENT_COST = 40.00;

    public $fillable = [
        "cost",    
        "survey_answered",
        "customer_info_id",
        "order_state_id",
        "start_date",
        "end_date",
        "user_id",
        "start_time",
        "arrive_time",
        "end_time",
        "comments",
        "phlebotomist_schedule_id",
        "address_id",
        "patient_cost",
        "visit_cost",
        
    ];

    public $casts = [
        "survey_answered" => "boolean",
    ];

    protected $hidden = [
        "pivot",
    ];

    public function address(){
        return $this->belongsTo(Address::class, "address_id");
    }

    public function customer(){
        return $this->belongsTo(CustomerInfo::class, "customer_info_id");
    }
    
    public function user() {
        return $this->belongsTo(User::class, "user_id");
    }

    public function history(){
        return $this->belongsToMany(OrderState::class)->withTimestamps();
    }
    
    public function status(){
        return $this->belongsTo(OrderState::class, "order_state_id");
    }

    public function phlebotomistSchedule(){
        return $this->belongsTo(PhlebotomistSchedule::class, "phlebotomist_schedule_id");
    }

    public function patients(){
        return $this->belongsToMany(
            Patient::class,    /// Módelo al que queremos referirnos
            "order_patient",   /// Nombre de la tabla
            "order_id",        /// 1. Referencial del modelo en curso de la primary key en la tabla pivote
            "patient_id",      /// 2. Referencial del modelo objetivo de la primary key en la tabal pivote
            "id",              /// 3. Primary key del modelo en curso
            "id"               /// 4. Primary key del modelo objetivo
        );
    }


    public function getWhole(){
        $orderPatients = OrderPatient::with("historicalServices")->where("order_id", $this->id)->get();

        return [
            "id" => $this->id,
            "cost" => $this->cost,
            "start_date" => $this->start_date,
            "end_date" => $this->end_date,
            "default_patient_id" => $this->customer->patient_id,
            "survey_answered" => $this->survey_answered,
            "customer" => $this->customer->user,
            "status" => $this->status,
            "address" => $this->address,
            "patients" => $this->patients,
            "history" => $this->history,
            "order_patients" => $orderPatients,
            "updated_at" => $this->updated_at,
            "created_at" => $this->created_at,
            "address_id" => $this->address_id,
            "customer_info_id" => $this->customer_info_id,
            "order_state_id" => $this->order_state_id,
            "start_time" => $this->start_time,
            "arrive_time" => $this->arrive_time,
            "end_time" => $this->end_time,
            "comments" => $this->comments,
            "phlebotomist_schedule_id" => $this->phlebotomist_schedule_id,
            "phlebotomist" => $this->user,
            "patient_cost" => $this->patient_cost,
            "visit_cost" => $this->visit_cost,
            "actual_patient_cost" => Order::PATIENT_COST,
            "actual_visit_cost" => Order::VISIT_COST,
        ];
    }
}
