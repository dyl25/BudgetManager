<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainAccount extends Model
{
    protected $table = 'main_account';

    public function accounts() {
        return $this->hasMany(Account::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
