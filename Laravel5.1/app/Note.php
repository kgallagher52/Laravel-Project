<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    // This is making so that only the body can be changed within a note
    protected $fillable = ['body'];
    public function card(){

        return $this->belongsTo(Card::class);
    }
}
