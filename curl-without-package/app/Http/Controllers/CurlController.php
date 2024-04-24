<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurlController extends Controller
{
    public function fetchData(){
        $php_curl = curl_init();

        curl_setopt_array($php_curl, array(
            CURLOPT_URL => "https://reqres.in/api/products/3",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
            // Set Here Your Laravel curl Requesred Headers
                'Content-Type: application/json',
            ),
        ));
        $final_results = curl_exec($php_curl);
        $err = curl_error($php_curl);
        curl_close($php_curl);
        if ($err) {
            echo "Laravel cURL Error #:" . $err;
        } else {
            $my_array = json_decode($final_results);
            echo "<pre>";print_r(json_decode($final_results));die;
        }
    }
}
