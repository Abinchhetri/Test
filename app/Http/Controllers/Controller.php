<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends basecontroller
{
    use AuthorizesRequests, ValidatesRequests;

    public function getwelcome()
    {

        return view('welcome');
    }
    public function getMyPage(){
        return view('test.home');
    }
}




