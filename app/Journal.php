<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model {

 	public function classes() {
 		return $this->belongsToMany(\Class::class);
 	}

 	public function course() {
 		return $this->belongsTo(\Course::class);
 	}

 	public function questions() {
 		return $this->hasMany(\JournalQuestion::class);
 	}
}
