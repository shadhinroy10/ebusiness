<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'product_id',
        'price',
        'status_id',
        ];

    public function product()
    {
        return $this->belongsTo('App\Models\product','product_id');
    }
    public function status()
    {
        return $this->belongsTo('App\Models\Status', 'status_id');
    }
}
