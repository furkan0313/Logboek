<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalQuestion extends Model {

    protected $fillable = ["description", "type"];

   	public function journal() {
   		return $this->belongsTo(Journal::class);
   	}

   	public function entries() {
   		return $this->belongsToMany(JournalEntry::class)->withPivot('value');
   	}
}

