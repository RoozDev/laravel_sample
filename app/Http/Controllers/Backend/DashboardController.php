<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('backend.dashboard.index');
    }
    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification =
            [
                'message' => ' کاربر از حساب کاربری خود با موفقیت خارج شد .',
                'alert-type' => 'success'
            ];
        return redirect('/')->with($notification);
    }


}
