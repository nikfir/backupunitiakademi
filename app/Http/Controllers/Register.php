<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\TempUser;

class Register extends Controller
{
    public function byEmail(Request $data)
    {
        
        $user = new TempUser;

        $user->name = $data->name;
        $user->email = $data->email;
        $user->avatar = "https://www.seekpng.com/png/full/514-5147412_default-avatar-icon.png";
        $user->username = "";
        $user->page = "profile";

        session(['user_data' => $user]);
        
        return redirect()->route('registerwizard');
    }
}