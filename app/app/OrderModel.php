<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    protected $table="Order";
    protected $fillable=[
    'Mem_ID','OrderNumber','BookCode','BookName''BookPrice','OrderUnit'
    ];
}
