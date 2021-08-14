<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    function __construct()
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        $this->middleware('permission:user-index'   , ['only' => ['index']]) ?? abort('Icaze Yoxdu');
        $this->middleware('permission:user-create'  , ['only' => ['create']]);
        $this->middleware('permission:user-store'   , ['only' => ['store']]);
        $this->middleware('permission:user-edit'    , ['only' => ['edit']]);
        $this->middleware('permission:user-update'  , ['only' => ['update']]);
        $this->middleware('permission:user-destroy' , ['only' => ['destroy']]);
    }


    public function index()
    {
        // $permissions = ['user-index' , 'user-create' , 'user-store' , 'user-edit' , 'user-update' , 'user-destroy'];
        // foreach($permissions as $per){
        //     $pers = New Permission;
        //     $pers->name = $per;
        //     $pers->guard_name = 'web';
        //     $pers->save();
        // }
        
        $users = User::all();
        return view('back.users.list', compact('users'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('back.users.create', compact('permission'));
    }

    public function store(UserRequest $request)
    {
        $user = new User;
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->age        = $request->age;
        $user->tel        = $request->tel;
        $user->job        = $request->job;
        $user->date_birth = $request->date_birth;
        $user->password   = Hash::make($request->password);

        if ($request->hasFile('cv') && $request->hasFile('image')) {
            $name = $request->file('cv')->getClientOriginalName();
            $request->file('cv')->storeAs('public/cv', $name);
            $user->cv = $name;

            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/user_image', $file);
            $user->image = $file;
        }
        $user->save();
        

        $role = Role::create(['name' => $request->input('name')]);

        $role->syncPermissions($request->input('permission'));

        $user->assignRole($request->input('name'));

        // return $user .'<br>'. $role;

        return redirect()->route('users.index')->withSuccess('Success Create...');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id) ?? abort(403, 'User Not Found');
        $role = Role::find($id) ?? abort(403, 'Roles Not Found');
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_id", $id)
            ->pluck('permission_id', 'permission_id')
            ->all();

        return view('back.users.edit', compact('user', 'role', 'permission', 'rolePermissions'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id) ?? abort(403, 'User not found');
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->age        = $request->age;
        $user->tel        = $request->tel;
        $user->job        = $request->job;
        $user->date_birth = $request->date_birth;
        if ($request->filled('password')) {
            $user->password   = Hash::make($request->password);
        }

        if ($request->hasFile('cv')) {

            $name = $request->file('cv')->getClientOriginalName();
            $request->file('cv')->storeAs('public/cv', $name);
            $user->cv = $name;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/user_image', $file);
            $user->image = $file;
        }
        $user->save();

        $role = Role::find($id);
        $role->update(['name' => $request->input('name')]);

        if($request->permission){
            $role->syncPermissions($request->input('permission'));
            $role->save();
        }else{
            DB::table("model_has_permissions")->where('model_id', $user->id)->delete();
        }


        return redirect()->route('users.index')->withSuccess('User update');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->back()->withSuccess('Success Delete...');
    }
}
