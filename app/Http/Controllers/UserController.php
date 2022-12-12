<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{


    public function index() {

        $users = User::get();


      return view('users.index', compact('users'));

    }

    public function show($id) {

    //find vai pega todos usuários
   if (!$user = User::find($id))
      return Redirect()->back('user.index');

      dd($user->name);
      dd($user->email);

        dd('users.show', $id);

    }


}
