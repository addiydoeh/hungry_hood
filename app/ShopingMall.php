<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*add*/
use App\Http\Controllers\CommonController;

class ShopingMall extends Model
{
    /* common controller for use function */    
    public function __construct()
    {       
        $this->common = new CommonController();
    } 

    public function scopeGetShopingMall($query,$id,$language) 
    {   

        /* get All */
    	if($id == null) {
    		$data = $query->leftJoin('relation_shop_brandshop','shoping_malls.shop_id','=','relation_shop_brandshop.reShop_shop_id')            
            ->leftJoin('brandshopingmalls','relation_shop_brandshop.reShop_brandshop_id','=','brandshopingmalls.brandShop_id')            
            ->leftJoin('shoping_mall_names','shoping_malls.shop_id','=','shoping_mall_names.shopName_shop_id')            
            ->leftJoin('languages','brandshopingmalls.brandShop_language_id','=','languages.language_id')            
            ->leftJoin('addresss','shoping_malls.shop_address_id','=','addresss.address_id')            
                            
            ->where('languages.language_name','=', $language)
             //->where('shoping_mall_names.shopName_language_id','!=', 'languages.language_id')
            ->whereRaw('shoping_mall_names.shopName_language_id = languages.language_id')

            ->select('shoping_malls.shop_id as id','shoping_mall_names.shopName_name as name','brandshopingmalls.brandShop_image as image','addresss.address_lat as latitude','addresss.address_lon as longitude')  
            ->get();
    	}
        else /* get only id match */
        {
    		//$data = $query->where('shop_id',$id)->first(['shop_id','shop_brandShopingMall_id','shop_name_'.$language,'shop_lat','shop_long']);	            		
    		// $data = $query->join('brandshopingmalls', 'shoping_malls.shop_brandShopingMall_id', '=', 'brandshopingmalls.brandShop_id')            
    		// ->where('shop_id',$id)
            // ->select('shoping_malls.shop_id','shoping_malls.shop_name_'.$language,'shoping_malls.shop_lat','shoping_malls.shop_long', 'brandshopingmalls.brandShop_image')
            // ->get();

            $data = $query->leftJoin('relation_shop_brandshop','shoping_malls.shop_id','=','relation_shop_brandshop.reShop_shop_id')            
            ->leftJoin('brandshopingmalls','relation_shop_brandshop.reShop_brandshop_id','=','brandshopingmalls.brandShop_id')            
            ->leftJoin('shoping_mall_names','shoping_malls.shop_id','=','shoping_mall_names.shopName_shop_id')            
            ->leftJoin('languages','brandshopingmalls.brandShop_language_id','=','languages.language_id')            
            ->leftJoin('addresss','shoping_malls.shop_address_id','=','addresss.address_id')            

            ->where('shoping_malls.shop_id','=', $id)                    
            ->where('languages.language_name','=', $language)
             //->where('shoping_mall_names.shopName_language_id','!=', 'languages.language_id')
            ->whereRaw('shoping_mall_names.shopName_language_id = languages.language_id')

            ->select('shoping_malls.shop_id as id','shoping_mall_names.shopName_name as name','brandshopingmalls.brandShop_image as image','addresss.address_lat as latitude','addresss.address_lon as longitude')  
            ->get();
            
    	}
        /*get url path*/
        $url = url('/');       
        $urlAr = ['path' => $url]; 
        $baseUrl = $urlAr['path'] . "/"; 

        /* change \\ to / at colume menu_picture */
        try{
            foreach ($data as $key => $value) {            
                $data[$key]['image'] = $baseUrl.$this->common->replacePath($data[$key]['image']);
            }
        }catch(\Exception $e){
            $data = null;
        }
       
    	return $data;
    }
}
