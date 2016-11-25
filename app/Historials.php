<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Connection;

class Historials extends Model
{
     protected $table = 'historials';
	 
	 public static function scopeGetListHistorial($query){
		$raw = DB::raw("links_id,count(links_id) as CantVisitas");
		
		$resultado= $query->groupBy('links_id')
						->select($raw);			
		return $resultado;		
	}
}
