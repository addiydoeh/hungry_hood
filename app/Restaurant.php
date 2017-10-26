<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*add*/
use App\Http\Controllers\CommonController;

class Restaurant extends Model
{
    /* common controller for use function */    
    public function __construct()
    {       
        $this->common = new CommonController();
    } 
    
    public function scopeGetRestaurant($query,$id,$language) 
    {
        

        /* get All */
    	if($id == null) {
    		
    		$data = $query->leftJoin('relation_rest_brandrest', 'restaurants.rest_id', '=', 'relation_rest_brandrest.reRest_rest_id')            
            ->leftJoin('brandrestaurants','relation_rest_brandrest.reRest_brandRest_id','=','brandrestaurants.brandRest_id')            
            ->leftJoin('restaurantdatas','restaurants.rest_id','=','restaurantdatas.restDat_rest_id')            
            ->leftJoin('languages','brandrestaurants.brandRest_language_id','=','languages.language_id')            
            
            
            ->where('languages.language_name','=', $language)
            ->whereRaw('restaurantdatas.restDat_language_id = languages.language_id')
            ->select('restaurants.rest_id as id','restaurantdatas.restDat_name as name','brandrestaurants.brandRest_image as brand')
            ->get();

    	}
        else /* get only id match */
        {            
    		// $data = $query->join('brandrestaurants', 'restaurants.rest_brandRest_id', '=', 'brandrestaurants.brandRest_id')            
    		// ->where('restaurants.rest_shopingMall_id',$id)
            // ->select('restaurants.rest_id', 'brandrestaurants.brandRest_image')
            // ->get();
            $data = $query->leftJoin('relation_rest_brandrest', 'restaurants.rest_id', '=', 'relation_rest_brandrest.reRest_rest_id')            
            ->leftJoin('brandrestaurants','relation_rest_brandrest.reRest_brandRest_id','=','brandrestaurants.brandRest_id')            
            ->leftJoin('restaurantdatas','restaurants.rest_id','=','restaurantdatas.restDat_rest_id')            
            ->leftJoin('languages','brandrestaurants.brandRest_language_id','=','languages.language_id')            
            
            ->where('restaurants.rest_shopingMall_id',$id)
            ->where('languages.language_name','=', $language)
            ->whereRaw('restaurantdatas.restDat_language_id = languages.language_id')
            ->select('restaurants.rest_id as id','restaurantdatas.restDat_name as name','brandrestaurants.brandRest_image as brand_image')
            ->get();
            

    	}
        /*get url path*/
        $url = url('/');       
        $urlAr = ['path' => $url]; 
        $baseUrl = $urlAr['path'] . "/"; 

        /* change \\ to / at colume menu_picture */
        try{
            foreach ($data as $key => $value) {            
                $data[$key]['brand_image'] = $baseUrl.$this->common->replacePath($data[$key]['brand_image']);
            }
        }catch(\Exception $e){
            $data = null;
        }

    	return $data;
    }
}
