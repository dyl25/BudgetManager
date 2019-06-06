<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\Account;

class EntryController extends Controller
{
    public function index(Account $account) {
       return $account->entries;
    }

    public function store() {
        request()->validate([
            'account_id' => 'required|numeric|exists:accounts,id',
            'description' => 'required|string|min:3',
            'amount' => 'required|numeric'
        ]);

        return Entry::create([
            'account_id' => request('account_id'),
            'description' => request( 'description'),
            'amount' => request('amount')
        ]);
    }

    public function destroy(Entry $entry) {
        $entry->delete();
        
        return response()->json(null, 204);
    }
}
