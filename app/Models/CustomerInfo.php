<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Información de usuario de tipo cliente
 */
class CustomerInfo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "patient_id", //Default patient id
        "birthdate",
        "gender",
        
    ];

    protected $hidden = [
        "created_at", 
        "updated_at",
        "deleted_at"
    ];

    public function user(){
        return $this->morphOne(User::class, 'info');
    }

    public function orders(){
        return $this->hasMany(Order::class, "customer_info_id");
    }

    public function patient(){
        return $this->belongsTo(Patient::class, "patient_id");
    }

    public function patients(){
        return $this->hasMany(Patient::class);
    }

    public function addresses(){
        return $this->hasMany(Address::class, "customer_info_id");
    }
}
