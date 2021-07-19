<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('back.users.list' , compact('users'));
    }

    public function create()
    {
        return view('back.users.create');
    }

    public function store(UserRequest $request)
    {
        $user = new User;
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->status     = $request->status;
        $user->age        = $request->age; 
        $user->tel        = $request->tel; 
        $user->job        = $request->job; 
        $user->date_birth = $request->date_birth; 
        $user->password   = Hash::make($request->password);

        if($request->hasFile('cv') && $request->hasFile('image')){
            $name = $request->file('cv')->getClientOriginalName();
            $request->file('cv')->storeAs('public/cv' , $name);
            $user->cv = $name;

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/user_image' , $file);
            $user->image = $file;
        
        }

        $user->save();
        return redirect()->route('users.index')->withSuccess('Success Create...');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id) ?? abort(403, 'User Not Found');
        return view('back.users.edit' , compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user=User::find($id) ?? abort(403, 'User not found');
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->role       = $request->role;
        $user->age        = $request->age; 
        $user->tel        = $request->tel;
        $user->job        = $request->job; 
        $user->date_birth = $request->date_birth; 
        $user->password   = Hash::make($request->password);

        if($request->hasFile('cv')){

            $name = $request->file('cv')->getClientOriginalName();
            $request->file('cv')->storeAs('public/cv' , $name);
            $user->cv = $name;
            
        }

        if($request->hasFile('image'))
        {
            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/user_image' , $file);
            $user->image = $file;
        }


        $user->save();
        return redirect()->route('users.index')->withSuccess('User update');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->withSuccess('Success Delete...');
    }
}
