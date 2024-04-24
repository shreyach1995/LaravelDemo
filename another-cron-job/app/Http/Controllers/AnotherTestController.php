<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class AnotherTestController extends Controller
{
    //
    public function TestCronFunc1()
    {
    	Log::info("Cron running 29-03-23 from local (AnotherTestController)");
    }
}
