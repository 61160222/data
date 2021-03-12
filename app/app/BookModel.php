<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table="Book";
    protected $fillable=[
    'B_Code','BT_BTCode','B_Details','B_Stock','B_Price','B_Note'
    ];
}
