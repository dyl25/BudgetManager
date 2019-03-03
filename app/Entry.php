<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $table = 'entries';
    protected $fillable = ['account_id', 'amount', 'description'];

    public function account() {
        return $this->belongsTo(Account::class);
    }

    public function getIsPositifAttribute() {
        return $this->amount >= 0;
    }
}
