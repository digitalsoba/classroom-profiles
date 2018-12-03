<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    // table name
    protected $table="equip";
    //Primary key, search for room number instead of ID
    protected $primaryKey="Building_Room";
    //Timestamps
    public $timestamps=true;
    public $incrementing = false;


}
