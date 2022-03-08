<?php

namespace App\Http\Controllers;

use App\Models\RolesModel;
use App\Models\UsersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function index(Request $request)
    {
        $users = UsersModel::with('role')->get();
        $roles = RolesModel::get();
        return view('users', [
            'users' => $users,
            'roles' => $roles,
            'isAdmin' => $request->isAdmin
        ]);
    }

    function update(Request $request, $id)
    {
        $user = UsersModel::find($id);
        if (isset($user)) {

            $user->name = $request->nom;
            $user->firstname = $request->prenom;
            $user->email = $request->email;
            $user->roles_id = $request->role;
            $user->save();
            
        }
        return redirect()->back();
    }

    function delete(Request $request, $id)
    {
        UsersModel::destroy($id);
        return redirect()->back();
    }
}
