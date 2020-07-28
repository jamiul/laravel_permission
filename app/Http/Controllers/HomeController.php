<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // create roles and permissions
        // Role::create(['name' => 'admin']);
        // Role::create(['name' => 'writer']);
        // Role::create(['name' => 'publisher']);
        // Role::create(['name' => 'editor']);
        // Permission::create(['name' => 'write post']);
        // Permission::create(['name' => 'edit post']);
        // Permission::create(['name' => 'publish post']);

        // role has permission
        // $role = Role::findById(2);
        // $permission = Permission::findById(1);

        // permission via role (model has role)
        // $user = User::findOrFail(4);
        // $user->assignRole(4);

        // model has permission
        // $user = User::findOrFail(4);
        // $user->hasPermissionTo(Permission::find(1)->id);
        // $role->revokePermissionTo($permission);
        // $permission->removeRole($role);

        // auth()->user()->givePermissionTo('create articles');
        // return auth()->user()->permissions;
        // auth()->user()->assignRole('writer');


        // $role->givePermissionTo($permission);
        return view('home');
    }
}
