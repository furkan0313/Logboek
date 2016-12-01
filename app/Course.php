<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

 	public function classes() {
 		return $this->belongsToMany(\Class::class);
 	}

 	public function journals() {
 		return $this->hasMany(\Journal::class);
 	}
}
