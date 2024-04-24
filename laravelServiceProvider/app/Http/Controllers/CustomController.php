<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;
use App\Service\CustomServiceInterface;

class CustomController extends Controller
{
    public function doCustom(CustomServiceInterface $custom_service){
    	$custom_service->doCustomSomething();
    	
    }
}
