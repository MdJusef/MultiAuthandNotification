<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
//use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\Notifications\RegistrationNotification;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    //
    public function index(){
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
//            $notification = RegistrationNotification::get();
            if ($usertype == 'user'){
                return view('dashboard');
            }
            elseif ($usertype == 'admin'){
                $notification = User::orderBy('id', 'desc')->get();
                return view('admin.home',[
                    'notifications'=>$notification
                ]);
            }
            elseif ($usertype == 'editor'){
                return view('editor.home');
            }
            else{
                return redirect()->back();
            }
        }
    }

    public function post(){
        return view('admin.post');
    }

    public function notify(){

            $user = User::first();
            auth()->user()->notify(new RegistrationNotification($user));
        }


}
