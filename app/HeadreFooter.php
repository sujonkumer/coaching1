<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeadreFooter extends Model
{
    protected $fillable = ['id','ownarName','ownerDepartment','mobile','address','copyright','status'];
}
