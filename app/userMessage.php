<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userMessage extends Model
{
    public function message() {
        return $this->belongsTo(Message::class);
    }
}
