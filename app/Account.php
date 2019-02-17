<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'accounts';
    protected $guarded = [];

    public function mainAccount() {
        return $this->belongsTo(MainAccount::class);
    }

    public function entries() {
        return $this->hasMany(Entry::class);
    }

}
