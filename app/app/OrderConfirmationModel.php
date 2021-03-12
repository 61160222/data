<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderConfirmationModel extends Model
{
    protected $table="OrderConfirmation";
    protected $fillable=[
    'OC_OrderNumber','Mem_ID''Mem_Name','Mem_Address','Mem_Telphephon','Mem_Email'
    ];
}
