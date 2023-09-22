<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $email = $request->get('email');
        $name = $request->get('name');
        //dd($email);

        $result = User::create(['name'=>$name, 'email'=> $email, 'password'=>bcrypt('123456donotd')]);

        return redirect('/user');
        //return response()->redirectTo('user/list');
        //return response()->redirectToRoute('user.list');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }
    
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function update(Request $request, User $user)
    {
        $result = $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect('/user');
    }

    public function destroy(Request $request, User $user)
    {
        $result = $user->destroy($user->id);
        return redirect('/user');
    }

}