<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferModel extends Model
{
    protected $table="Transfer";
    protected $fillable=[
    'OC_OrderID','TF_Date','TF_Bank','TF_Branch','TF_Amuont'
    ];
}
