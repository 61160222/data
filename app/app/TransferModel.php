<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferModel extends Model
{
    protected $table="Transfer";
    protected $fillable=[
    'TransferOrder','TransferDate','BankName','BankBranch','TotalBalance'
    ];
}
