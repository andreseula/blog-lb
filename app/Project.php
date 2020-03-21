<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

	//protected $guarded=[];

    protected $fillable=['title','description','url'];

    //protected $guarded=['id','approved','created_at','updated_at'];
}
