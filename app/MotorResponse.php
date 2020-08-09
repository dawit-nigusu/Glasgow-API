<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotorResponse extends Model
{
    protected $fillable = ['name','color','title','selected','value'];
    protected $primaryKey = 'id';

}
