<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory, SoftDeletes;

    public static $created = 1;
    public static $reviwing = 2;
    public static $active = 3;
    public static $complete = 4;
    public static $canceled = 5;

    protected $fillable = [
        "name"
    ];
}
