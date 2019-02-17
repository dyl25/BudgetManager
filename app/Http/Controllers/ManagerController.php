<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\MainAccount;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    public function index(MainAccount $mainAccount) {
        $accounts = $mainAccount->accounts;
    
        return view('manager.index', compact('accounts'));
    }

    public function create() {
        return view('manager.create');
    }

    public function store(Request $request) {
        
        $this->validate($request, [
            'description' => 'bail|required|string',
            'to' => 'bail|required|date',
            'from' => 'bail|required|date'
        ]);

        session()->flash('notification', 'Nouveau compte créé');

        return redirect()->route('managers.index');

    }
}
