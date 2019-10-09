<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject_Strands extends Model
{
    public function subject()
    {
    	return $this->belongsTo(Subjects::class);
    }
    public function strand()
    {
    	return $this->belongsTo(Strands::class);
    }

}
