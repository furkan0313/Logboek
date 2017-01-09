<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model {

    protected $fillable = ['name', 'course_id'];

 	public function groups() {
 		return $this->belongsToMany(Group::class);
 	}

 	public function course() {
 		return $this->belongsTo(Course::class);
 	}

 	public function questions() {
 		return $this->hasMany(JournalQuestion::class);
 	}
}
