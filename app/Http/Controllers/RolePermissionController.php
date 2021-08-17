<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    public  function createRole(){
        /*$role = Role::create(['name' => 'admin']);
        $permission = Permission::create(['name' => 'user list']);
        $role->givePermissionTo($permission);*/
        Auth::user()->assignRole('admin');


    }
}
