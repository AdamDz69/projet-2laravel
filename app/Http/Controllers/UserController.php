<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    /**
     * Assign a permission to a user.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function addPermissionToUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'permission_name' => 'required|string',
        ]);

        $user = User::findOrFail($request->user_id);
        $permission = Permission::firstOrCreate(['name' => $request->permission_name]);

        $user->givePermissionTo($permission);

        return redirect()->back()->with('success', 'Permission assigned to user successfully!');
    }

    /**
     * Assign a role to a user.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function assignRoleToUser(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'role_name' => 'required|string',
        ]);

        $user = User::findOrFail($request->user_id);
        $role = Role::firstOrCreate(['name' => $request->role_name]);

        $user->assignRole($role);

        return redirect()->back()->with('success', 'Role assigned to user successfully!');
    }
    public function deco(){
        auth()->logout();

        return redirect('goats');
    }
}
