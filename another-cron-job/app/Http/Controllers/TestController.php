<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class TestController extends Controller
{
    //

    public function TestCronFunc()
    {
    	Log::info("Cron running 29-03-23 from local (TestController)");
    }
}
