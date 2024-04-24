<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    
    public function optimize(){//dd('comes here');
       // Artisan::call('optimize:clear');
        try{
            Artisan::call('optimize:clear');
            
        }catch(\Exception $e){
            return $e->getMessage();
        }
        
    }
}
