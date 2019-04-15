<?php
/**
 * Created by PhpStorm.
 * User: mbendandour
 * Date: 11/30/18
 * Time: 3:39 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class NextClass extends Model
{
    protected $table="roster";
    protected $primaryKey="classes_members_members_id";
    public $incrementing = false;


}