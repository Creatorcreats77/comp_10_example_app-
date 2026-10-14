<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        // dump and die.   Ekrana cykaryar we yzyndaky komandalary isletmeyar
        dd($users);   
        dd("Jennet");
        


    }

    public function create(){
      

    }

    public function update(){
    
    }


    public function delete(){
   

    }
}
