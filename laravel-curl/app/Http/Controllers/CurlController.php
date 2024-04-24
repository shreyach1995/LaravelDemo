<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
class CurlController extends Controller
{
    //
    public function getData(){
        $response = Curl::to('https://www.google.com/')
        ->get();
        dd($response);
    }
}
