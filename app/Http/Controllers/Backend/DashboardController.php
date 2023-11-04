<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(){
        $user_id = Auth::user()->id;
        $adminData = User::query()->findOrFail($user_id);
        return view('backend.dashboard.index',compact('adminData'));
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
