<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kalnoy\Nestedset\NodeTrait;

class Categs extends Model
{
    use NodeTrait;
    protected $fillable = array('ident', 'title', 'url');


	public function documents(){
		return $this->hasMany('App\Documents');
	}

}
