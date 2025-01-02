<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class order extends Model
{
    use HasFactory;
    protected $table='orders';
   protected $fillable = ['product_id','name',  'number',  'address',  'pincode', 'status', 'payment_method', 'payment_status' ];
        public $timestamps=false;
   
}
