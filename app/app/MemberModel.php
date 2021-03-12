<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberModel extends Model
{
    protected $table="Member";
    protected $fillable=[
    'Mem_ID','Mem_Username','Mem_Name','Mem_Address','Mem_BirthDate',
    'Mem_Telphephon','Mem_Email','Mem_IDCard'
    ];
}
