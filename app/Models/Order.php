<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Order extends Model
{
    protected $table = 'orders';
    
    public function getCreatedAtAttribute($date)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s d-m-Y');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s d-m-Y');
    }
}
