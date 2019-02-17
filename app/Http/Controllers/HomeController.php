<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainAccount;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mainAccount = MainAccount::where('user_id', Auth::id())->first();

        $statusClassIndicator = 'bg-primary';

        if($mainAccount) {
            if(! $mainAccount->is_positif) {
                $statusClassIndicator = 'bg-danger';
            }
        }

        return view('home', compact('mainAccount', 'statusClassIndicator'));
    }
}
