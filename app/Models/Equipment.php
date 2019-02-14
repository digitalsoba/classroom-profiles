<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table="equip";    // database table name
    protected $primaryKey="Building_Room";    //Primary key, search for room number instead of room ID
    //Timestamps
    public $timestamps=true;
    public $incrementing = false; // since our primary key is a integer, we set this to false


}
