<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Carbon\Carbon;

class HomeController extends Controller{

    public function home(){
        return view('welcome');
    }

    public function submit(UserRequest $req){
        $user = new User();
        $user->name = $req->input('name');
        $user->country = $req->input('country');
        $user->dateofbirth = $req->input('dateofbirth');

        $user->save();

        return view('userdata',['data'=> User::where('created_at','>',now()->subMinutes(5))->get()]);

    }


}
