<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo de direcciones del cliente
 */
class Address extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        "street",
        "neighborhood",
        "num_ext",
        "num_int",
        "state",
        "city",
        "references",
        "zip_code",
        "latitude",
        "longitude",
        "customer_info_id",
    ];

    protected $casts = [
        'latitude' => 'double',
        'longitude' => 'double',
    ];

    public function info(){
        //TODO, revisar esto. Debería ser a CustomerInfo::class
        return $this->belongsTo(CustomerInfo::class, "customer_info_id");
    }

    public function isEngaged(){
        return Order::select("id")
            ->where("address_id", $this->id)
            ->where(function($query){
                return $query->where("order_state_id", OrderState::CREATED)
                    ->orWhere("order_state_id", OrderState::ACTIVE);
            })->get()->isNotEmpty();
    }
}
