<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strands extends Model
{
    public function subject()
    {
    	return $this->hasMany(Subject::class);
    }
}
