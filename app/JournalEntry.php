<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalEntry extends Model
{
    protected $fillable = ['remark', "user_id"];

    public function questions() {
   		return $this->belongsToMany(JournalQuestion::class)->withPivot('value');
   	}

   	public function getQuestionAnswer($id) {
   		return $this->questions->whereId($id)->first()->pivot;
   	}

   	public function user() {
   		return $this->belongsTo(User::class);
   	}
}
