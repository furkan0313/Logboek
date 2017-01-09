<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    protected $fillable = ['code'];

	public function users() {
		return $this->belongsToMany(User::class);
	}

	public function journals() {
		return $this->belongsToMany(Journal::class);
	}

	public function courses() {
		return $this->belongsToMany(Course::class, 'group_course');
	}
}