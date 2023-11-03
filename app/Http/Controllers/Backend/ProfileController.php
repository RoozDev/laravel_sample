<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index(){
        $user_id = Auth::user()->id;
        $adminData = User::query()->findOrFail($user_id);
        return view('backend.profile.index',compact('adminData'));
    }
    public function store(Request $request){
        $user_id = Auth::user()->id;
        $data =  User::query()->findOrFail($user_id);
        if ($request->file('photo')){

            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $fileExtension = $file->getClientOriginalExtension();
            $file_name = time() . '_' . uniqid() . '.' . $fileExtension;
            $file->move( public_path('upload/admin_images'), $file_name);
            $data->photo = $file_name;
        }
        $data->save();
        return to_route('dashboard');

    }
}
