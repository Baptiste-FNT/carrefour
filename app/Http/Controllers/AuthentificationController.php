<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
    //

    function inscription(Request $request)
    {
        return view('inscription');
    }
    function register(Request $request)
    {
        $user = new UsersModel();
        $user->name = $request->nom;
        $user->firstname = $request->prenom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->roles_id = $request->role;
        $user->save();
        return redirect()->back();
    }
    function connexion(Request $request)
    {
        return view('connexion');
    }
    function authentification(Request $request)
    {
        $user = UsersModel::with('role')
            ->where('email', $request->email)
            ->first();
        if (isset($user) && Hash::check($request->password, $user->password)) {
            # code...
            $request->session()->put('user', $user);
            return redirect()->route('acceuil');
        } else {
            return redirect()->route('connexion');
        }
    }
    function deconnexion(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('connexion');
    }
}
