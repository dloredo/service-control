<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(){

        $users = User::where("role_id",2)->get();

        return view("admin-users",compact("users"));
    }

    public function change_status($id){
        $user = User::find($id);

        $user->status = ($user->status == 1)? 0 : 1;
        $user->save();

        return back();
    }
    
    public function user_services($id){
        $user = User::find($id);
        $services = $user->services; 
        
        return view("admin-users-services",compact("user", "services"));

    }

    public function web_service(){

        $users = User::with("services:user_id,id,name")->select("id", "name")->get();

        return response()->json([
            "status" => "OK",
            "data" => [
                "users" => $users
            ]
        ]);
    }
}
