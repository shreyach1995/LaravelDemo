<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\DemoFacadeService;

class MyFacadeController extends Controller
{
    public function demo_facade(){
    	DemoFacadeService::doDemoFacadeFunc();
    }
}
