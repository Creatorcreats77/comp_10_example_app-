<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();
        // dump and die.   Ekrana cykaryar we yzyndaky komandalary isletmeyar
        return view('home', compact('users'));
    }

    public function create() {

    }


    






    public function update() {}









    public function destroy($id)
    {

        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('home')->with('success', "Student id:{$user->id}, {$user->name} deleted!");
        }

        return redirect()->route('home')->with('error', "Student not found");
        
    }

}
