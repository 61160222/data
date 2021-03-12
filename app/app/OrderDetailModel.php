<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    protected $table="OrderDetail";
    protected $fillable=[
    'OC_IDOrder','B_BookCode','OD_NumberBook','OD_ProducPrice''OD_TotalPrice','OD_Date'
    ];
}
