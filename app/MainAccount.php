<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainAccount extends Model
{
    protected $table = 'main_account';
    protected $guarded = [];

    //Relations

    public function accounts() {
        return $this->hasMany(Account::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    //Mutators
    public function getIsPositifAttribute() {
        return $this->total >= 0;
    }

}
