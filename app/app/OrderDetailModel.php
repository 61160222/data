<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    protected $table="OrderDetail";
    protected $fillable=[
        'OrderNumber','TUnit','TPrice''DateOrder'
    ];
}
