<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Livewire\WithFileUploads;

class RegisterWizard extends Component
{
    use WithFileUploads;

    public $user;

    public $name;
    public $email;
    public $avatar;
    public $username;
    public $password;

    public $page;

    public $bar1="";
    public $bar2="";

    public function render()
    {
        return view('livewire.auth.register-wizard')
            ->layout('layouts.guest');
    }

    public function mount(Request $request)
    {
            if ($request->session()->has('user_data'))
            {
                $this->name = $request->session()->get('user_data')->name;
                $this->email = $request->session()->get('user_data')->email;
                $this->avatar = $request->session()->get('user_data')->avatar;
                $this->username = $request->session()->get('user_data')->username;

                if($this->page == "profile")
                {
                    $this->bar2 = "";
                    $this->bar1 = "";
                }
                else if($this->page == "account")
                {
                    $this->bar2 = "";
                    $this->bar1 = "w-1/2";

                }
                else if($this->page == "done")
                {
                    $this->bar2 = "w-full";
                    $this->bar1 = "w-1/2";
                }
            }
            else
            {
                return redirect()->route('register');
            }
    }

    public function changePage($data)
    {
        $this->page = $data;
        if($this->page == "profile")
        {
            $this->bar2 = "";
            $this->bar1 = "";
        }
        else if($this->page == "account")
        {
            $this->bar2 = "";
            $this->bar1 = "w-1/2";

        }
        else if($this->page == "verify")
        {
            $this->bar2 = "w-full";
            $this->bar1 = "w-1/2";
        }
    }
    
    public function submit($data)
    {
        dd($data);
        $this->page = "verify";
        $this->username = $data["username"];
        $this->bar2 = "w-full";
        $this->bar1 = "w-1/2";
        
    }
}
