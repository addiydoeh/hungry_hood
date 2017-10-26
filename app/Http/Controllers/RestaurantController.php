<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
/*add*/
use App\Restaurant;
use Auth;
use App\Http\Controllers\CommonController;

class RestaurantController extends Controller
{
	/* common controller for use function */	
	public function __construct()
	{ 		
		$this->common = new CommonController();
	} 

    public function getRestaurant($language,$id = null)
    {
    	
		/* get Data from Class:Model shopingMall*/
    	$data = Restaurant::GetRestaurant($id,$language);    	
        /* return from ClassControllerCommon for encode json type*/
    	return $this->common->env_json_path($data);
    }
}
