<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';
    protected $guarded = [];

    public function account() {
        return $this->belongsTo(Account::class);
    }

    public function getIsPositifAttribute() {
        return $this->amount >= 0;
    }
}
