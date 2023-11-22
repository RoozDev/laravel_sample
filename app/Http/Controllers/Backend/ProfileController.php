<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hekmatinasser\Verta\Verta;

class ProfileController extends Controller
{

    public function index(){
        $user_id = Auth::user()->id;

        $adminData = User::query()->findOrFail($user_id)->first();

//        foreach ($adminData->profile as  $profilePhone){
//            dd($profilePhone['phone']);
//        }
        return view('backend.profile.index',compact('adminData'));
    }
    public function store(Request $request){
        $user_id =  Auth::user()->id;
        $data =  Profile::query()->findOrFail($user_id);

        if ($request->file('photo')){

            $data->user_id = $user_id;
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));
            $fileExtension = $file->getClientOriginalExtension();
            $file_name = time() . '_' . uniqid() . '.' . $fileExtension;
            $file->move( public_path('upload/admin_images'), $file_name);
            $data->photo = $file_name;
            $phoneNumbers = $request->input('phone');
            $data->phone =  $phoneNumbers;
            $data->dob =  verta($request['dob'],'Asia/Tehran')->format('Y-m-d');
            $data->phone = $request['phone'];
            $trimmedCountry = preg_replace('/\s+/', ' ', trim($request['country']));
            $data->country = $trimmedCountry;
            $data->save();
            $notification =
                [
                    'message' => ' نمایه با موققیت ثبت شد .',
                    'alert-type' => 'success'
                ];
            return to_route('dashboard')->with($notification);
        }
        else{
            $data->user_id = $user_id;
            $data->dob =  verta($request['dob'],'Asia/Tehran');
            $data->photo = $request['photo'];
            $data->phone = $request['phone'];
            $data->country = $request['country'];
            $data->save();
            $notification =
                [
                    'message' => ' نمایه با موققیت ثبت شد .',
                    'alert-type' => 'success'
                ];
            return to_route('dashboard')->with($notification);
        }


    }
}
