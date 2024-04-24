<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Service\MyCustomServiceInterface;
use App\Service\TestService;

class MyController extends Controller
{
    public function doMyCustomFunc(MyCustomServiceInterface $my_custom_service_interface){
    	return new Response($my_custom_service_interface->doCustomSomethingInt());
    }

    public function test_facade(){
    	TestService::testServFunc();
    }
}
