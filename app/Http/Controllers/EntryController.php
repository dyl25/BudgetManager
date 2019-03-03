<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class EntryController extends Controller
{
    public function store() {
        request()->validate([
            'account_id' => 'required|numeric|exists:accounts,id',
            'description' => 'required|string|min:3',
            'amount' => 'required|numeric'
        ]);

        Entry::create([
            'account_id' => request('account_id'),
            'description' => request( 'description'),
            'amount' => request('amount')
        ]);

        return 'Entrée ajoutée !';
    }
}
