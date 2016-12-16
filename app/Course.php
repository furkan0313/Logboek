<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

 	public function groups() {
 		return $this->belongsToMany(Group::class);
 	}

 	public function journals() {
 		return $this->hasMany(Journal::class);
 	}

 	public function getPublicImageLocationAttribute() {
        return asset('uploads/courses/' . $this->image);
    }
}
