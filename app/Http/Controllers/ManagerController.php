<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\MainAccount;
use Illuminate\Support\Facades\Auth;

class ManagerController extends Controller
{
    public function index(MainAccount $mainAccount)
    {

        $accounts = $mainAccount->accounts;

        return view('manager.index', compact('mainAccount', 'accounts'));
    }

    public function create(MainAccount $mainAccount)
    {
        return view('manager.create', compact('mainAccount'));
    }

    public function store(Request $request, MainAccount $mainAccount)
    {
        //valider to doit etre avant from
        $this->validate($request, [
            'mainAccount' => 'bail|required|numeric|exists:main_account,id',
            'description' => 'bail|required|string|min:3',
            'from' => 'bail|required|date|before_or_equal:to',
            'to' => 'bail|required|date|after_or_equal:from'
        ]);

        if (!MainAccount::where([
            ['id', $request->mainAccount],
            ['user_id',  Auth::id()]
        ])->exists()) {
            session()->flash('errorMsg', 'Ce compte principal n\'existe pas. ');
            return redirect()->back();
        }

        Account::create([
            'main_account_id' => $request->mainAccount,
            'user_id' => Auth::id(),
            'description' => $request->description,
            'from' => $request->from,
            'to' => $request->to
        ]);

        session()->flash('notification', 'Nouveau compte créé');

        return redirect()->route('managers.index', $mainAccount->id);
    }
}
