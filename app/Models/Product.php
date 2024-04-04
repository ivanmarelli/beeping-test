<?php

namespace App\Models;

use App\Models\OrderLine;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cost',
    ];

    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }

}
