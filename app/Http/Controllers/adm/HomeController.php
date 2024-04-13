<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(Request $request){

        return view('adm.home.index',['users'=>User::all(),'roles' => Role::all()]);
    }
    public function ban(User $user){
        $user->is_active = false;
        $user->save();
        return back();
    }
    public function unban(User $user){
        $user->is_active = true;
        $user->save();
        return back();
    }
    public function edit(User $user){
        return view('adm.users.edit',['user'=>$user,'roles'=>Role::all()]);
    }

    public function update(Request $request,User $user){
        $user->update([
            'id'=>$request->id,
            'role_id'=>$request->role_id
        ]);
        return redirect()->route('adm.users.index');
    }
}
