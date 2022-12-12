<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateRequest;
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

      return view('users.show', compact('user'));


    }
    public function create()
    {


      return view('users.create');
    }

    public function store(StoreUpdateRequest  $request) // request consigo pega todos os dados
    {


   if ($data = $request->all());
    $data['password'] = bcrypt($request->password);

    $user = User::create($data);

    return redirect()->route('users.index');

     // $user = new  User;
     // $user->name = $request->name;
    //  $user->email = $request->email;
     // $user->password = $request->password;
     //   $user->save;

    }
}
