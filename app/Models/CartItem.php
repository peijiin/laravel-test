<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table="cart_item";
    protected $primaryKey = "id";

    protected $fillable = [
        "cust_id",
        "prod_id",
        "created_at",
        "checked_out"
    ];

    public function customer(){
        return $this->belongsTo("App\Models\Customer", "cust_id");
    }

    public function product(){
        return $this->belongsTo("App\Models\Product", "prod_id");
    }

}