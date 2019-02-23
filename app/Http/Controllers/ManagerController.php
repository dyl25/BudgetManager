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
        $this->validate($request, [
            'mainAccount' => 'bail|required|numeric|exists:main_account,id',
            'description' => 'bail|required|string|min:3',
            'to' => 'bail|required|date',
            'from' => 'bail|required|date'
        ]);

        if (!MainAccount::where([
            ['id', $request->mainAccount],
            ['user_id',  Auth::id()]
        ])->exists()) {
            session()->flash('errorMsg', 'Ce compte principal n\'existe pas. ');
            return redirect()->back();
        }

        MainAccount::create([
            'main_acount' => $request->mainAccount,
            'user_id' => Auth::id(),
            'description' => $request->description
        ]);

        session()->flash('notification', 'Nouveau compte créé');

        return redirect()->route('managers.index', $mainAccount->id);
    }
}
