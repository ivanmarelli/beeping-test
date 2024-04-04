<?php

namespace App\Models;

use App\Models\OrderLine;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_ref',
        'customer_name',
    ];

    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }

}
