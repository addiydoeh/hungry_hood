<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class CommonController extends Controller
{
	    /* function common */
	    public function env_json($data)
	    {
	    	$responsecode = 200;
	        $header = array (
	                'Content-Type' => 'application/json; charset=UTF-8',
	                'charset' => 'utf-8'
	            );
	    	return response()->json($data , $responsecode, $header, JSON_UNESCAPED_UNICODE);
	    }
	    public function env_json_path($data)
	    {	    	
	        header('Content-Type: application/json, charset: utf-8');
	        return json_encode($data,JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE);
	    }
	    
	    public function ReplacePath($str)
	    {	    		       	             
            return ($str === '\\')? 
            str_replace('/', '\\', $str): 
            str_replace('\\', '/', $str);	            	        
	    }
    
}
