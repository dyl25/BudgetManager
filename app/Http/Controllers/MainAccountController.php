<?php

namespace App\Http\Controllers;

use App\MainAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('mainAccount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'total' => 'required|numeric'
        ]);

        MainAccount::create([
            'user_id' => Auth::id(),
            'total' => $request->total,
            'is_positif' => $request->total > 0
        ]);

        session()->flash('notification', 'Votre compte a bien été créé');

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MainAccount  $mainAccount
     * @return \Illuminate\Http\Response
     */
    public function show(MainAccount $mainAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainAccount  $mainAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(MainAccount $mainAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainAccount  $mainAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainAccount $mainAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainAccount  $mainAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainAccount $mainAccount)
    {
        //
    }
}
