<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';

    public function account() {
        return $this->belongsTo(Account::class);
    }
}
