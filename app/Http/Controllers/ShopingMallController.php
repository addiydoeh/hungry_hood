<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/*add*/
use Auth;
use App\ShopingMall;
use App\Http\Controllers\CommonController;
use App\URL;

class ShopingMallController extends Controller
{
	/* common controller for use function */	
	public function __construct()
	{ 		
		$this->common = new CommonController();
	} 
	/* function Request */
	/* example :
		http://localhost/booking/public/api/ShopingMall/getMall/en/2?api_token=pwd0FbRGbYIxtl9ClY2KsLY6e9qHAY0KmoGaTwxH9pTLgk6A81aPTn7yvceu 
		http://localhost/booking/public/api/ShopingMall/getMall/en?api_token=pwd0FbRGbYIxtl9ClY2KsLY6e9qHAY0KmoGaTwxH9pTLgk6A81aPTn7yvceu 
	*/
    public function getMall($language,$id = null)
    {    
        /* get Data from Class:Model shopingMall*/
    	$data = ShopingMall::GetShopingMall($id,$language);

        /* Change Name Array */
        // $key = 'shop_name_'.$language;
        // $data[0]['shop_name'] = $data[0][$key];
        // unset($data[0][$key]);
    
        /* return from ClassControllerCommon for encode json type*/
    	return $this->common->env_json_path($data);
		
    }
    /* get name */
    public function getBasePath()
    {
        $url = url('/');       
        $data = ['path' => $url]; 
        $data['path'] = $data['path'] . "/"; 
               
        return $this->common->env_json_path($data);
        //return $this->common->env_json($data);
    }
    /* End function request */

    
    /*
    Example
    http://localhost/booking/public/api/ShopingMall/getNameMall/en/1?api_token=pwd0FbRGbYIxtl9ClY2KsLY6e9qHAY0KmoGaTwxH9pTLgk6A81aPTn7yvceu
    http://findvan.biz/eatit/public/api/ShopingMall/getBasePath?api_token=Z793Wiul7X7pi0pG6YQPuh11ZOd0R07WpBPrvlrlaQFOKm30itscGaHKXFTP
    */
    public function getNameMall($language,$id = null)
    {        	    	    	
    	if($id != null) {    		
    		$data = ShopingMall::where(['shop_id'=>$id])->first(['shop_name_'.$language]);	       
	        return $this->common->env_json($data);
    	}else{
			
    		$data = ShopingMall::all(['shop_name_'.$language]);
    		return $this->common->env_json($data);
    	}		
    }

}
