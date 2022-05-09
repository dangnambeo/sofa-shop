<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function listUser(){
        $user = User::all();
        return view('admin.user.list-user',compact('user'));
    }
    public function getAddUser(){
        $user = User::all();
        return view('admin.user.add-user');
    }
    public function postAddUser(Request $request){
        $eror1 = [
            'full_name.required' => 'Bạn chưa nhập tên người dùng',
            'user_name.required' => 'Bạn chưa nhập tên đăng nhập',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password2.required' => 'Bạn chưa nhập lại mật khẩu ',
            'password2.same' => 'Mật Khẩu nhập lại không khớp ',
        ];
        $this->validate($request, [
            "full_name" => "required",
            "user_name" => "required",
            "password" => "required",
            "password2" => "required|same:password"
        ], $eror1);
        $user = new User;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->user_name = $request->user_name;
        $user->role_id = $request->role_id;
        $user->password = bcrypt($request->password);

        if ($user->save()) {
            if ($request->hasFile('avatar')) {
                $file = $request->avatar;
                // $file_name=$file->getClientOriginalName();
                $file->move('upload/avatar', $file->getClientOriginalName());
                $user->avatar = "upload/avatar/" . $file->getClientOriginalName();
                $user->save();
            }
        }
        return redirect(route('list-user'));
    }
}
