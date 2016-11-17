<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Cel extends Model
{
     protected $fillable = [
    	'name',
    	'photo',
    	'description',
    	'categories'
    ]; 

    public static $categories = [
    	"film" => "film",
    	"tv" => "tv"
    ];

}
