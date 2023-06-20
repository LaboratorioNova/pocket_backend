<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo que guarda los días especiales (Días festivos y días que no se trabajan)
 */
class SpecialDay extends Model
{
    use HasFactory;

    public static $holiday = "Holiday";
    public static $noWorkDay = "NoWorkday";

    protected $fillable = [
        "date",
        "day_type",
    ];
    
    function isDateEngaged() {  
        $now = Carbon::now();
        $date = $this->getDate();
        return $now->isBefore($date) && $date->isBefore($now->copy()->addDays(14));
    }

    function getDate(){
        $now = Carbon::now();
        $components =  explode("-", $this->date);
        $day = $components[0];
        $month = $components[1];

        $created = Carbon::create($now->year, $month, $day);
        return $now->isAfter($created) ? $created->addYear(): $created;
    }


}
