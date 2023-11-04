<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Hekmatinasser\Jalali\Jalalian;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::query()->first()->get();
        return view('backend.users.index',compact('users'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ]);
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        $notification =
            [
                'message' => ' کاربر با موفقیت اضافه شد',
                'alert-type' => 'success'
            ];
        return to_route('users.index')->with($notification);
    }
    public function edit(string $id){
        try {
            $user = User::query()->find($id);
            return response()->json(['status' => 200, 'user' => $user]);
        } catch (\Exception $e) {
            return response()->json(['status' => 500, 'error' => $e->getMessage()], 500);
        }
    }
    public function update(Request $request){

        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'password' => 'required|string',
            'password_confirmation' => 'required|same:password|min:6|string',
        ]);
        $user_id = $request['user_id'];
        $user = User::query()->where('id',$user_id)->first();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        $notification =
            [
                'message' => ' تغییرات با موفقیت انجام شد .',
                'alert-type' => 'success'
            ];
        return to_route('users.index')->with($notification);

    }
    public function destroy($id){
        $user = User::query()->findOrFail($id);
        $user->delete();
        return to_route('users.index');
    }
    public function show($id){
        try {
            $user = User::query()->findOrFail($id);
            return response()->json(['status' => 200, 'user' => $user]);

        }catch (\Exception $e){
            return response()->json(['status' => 500, 'error' => $e->getMessage()], 500);
        }

    }
}
