<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EyeOpening extends Model
{
    protected $fillable = ['name','color','title','selected','value'];
    protected $primaryKey = 'id';
}
