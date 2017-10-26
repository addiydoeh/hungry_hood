<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
/*add*/
use Auth;
use App\Orders;
use App\OrderMenus;
use App\Http\Controllers\CommonController;
use App\URL;
use App\Http\Requests\OrderRequest;
use Validator;

class OrderController extends Controller
{
    /* common controller for use function */	
	public function __construct()
	{ 		
		$this->common = new CommonController();
	} 
	public function getOrder($id = null)
    {    
        /* get Data from Class:Model shopingMall*/
    	
    	$data = Orders::GetOrder($id);
    	
        /* return from ClassControllerCommon for encode json type*/
    	return $this->common->env_json_path($data);
		
    }
    //public function postOrder(OrderRequest $request)
    public function postOrder(Request $request)
    {   
    	/* validation rule */
    	$rule = Orders::GetRule();
    	/* Validation message */
        $messages = Orders::GetMessage();
    	/* Validation */    	
    	$validator = Validator::make($request->all(),$rule,$messages);
    	/* show error validation */
        if ($validator->fails()) {
            return $validator->messages()->toJson();;
        }

        /*==== fillter some data ====*/
        /* except some column */ /* get All request */
        $data = $request->except('orderMenu_id','api_token');
        /* get order menu */
        $menu = $request->input('orderMenu_id');
        /* sperate menu id to array */
        $menu_ar = explode(',', $menu);
        /* get number */
        $number = $request->input('order_number');

       
        /* insert Order */
        try{
            Orders::create($data);
        } 
        catch(\Exception $e){
            return "fail :".$e;
        }

        	

		/* query number */		
		$last_insert = Orders::GetOrderNumber($number);
		
        /* insert Order Menu */
		foreach ($menu_ar as $key => $value) {
			OrderMenus::create(['orderMenu_order_id' => $last_insert['id'],
			 					'orderMenu_menu_id' => $value
			 				  ]);
		}
        
        return "success";
    }
}
