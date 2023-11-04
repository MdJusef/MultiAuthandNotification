<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoFactorController extends Controller
{

    public function index()
    {
        return view('auth.verify');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        $user = auth()->user();
        if ($request->input('code') == $user->code){
            $user->resetCode();
            return redirect()->route('home');
        }
        return redirect()->back()->withErrors(['code'=>'input valid code']);
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
