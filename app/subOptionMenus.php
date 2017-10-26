<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*add*/
use App\Http\Controllers\CommonController;

class subOptionMenus extends Model
{
	protected $table = 'suboptionmenus';
    /* common controller for use function */    
    public function __construct()
    {       
        $this->common = new CommonController();
    } 
    public function scopeGetMenuSubOption($query,$language,$id,$imageSize) 
    {

        $data = $query                
                ->leftJoin('suboptionmenudatas', 'suboptionmenudatas.subOpMenuDat_subOpMenu_id', '=', 'suboptionmenus.subOpMenu_id')                                                   
                ->leftJoin('languages','suboptionmenudatas.subOpMenuDat_language_id','=','languages.language_id')            

                ->where('suboptionmenus.subOpMenu_opMenu_id',$id)   
                
                

                ->where('languages.language_name','=', $language)       
                

                ->select(                    
                           'suboptionmenus.subOpMenu_id as id',
                           'suboptionmenudatas.subOpMenuDat_name as name',
                           'suboptionmenus.subOpMenu_price as pricePlus',
                           'suboptionmenus.subOpMenu_image as image'
                        )                
                ->get();                
        /*get url path*/
        $url = url('/');       
        $urlAr = ['path' => $url]; 
        $baseUrl = $urlAr['path'] . "/"; 
        /* change \\ to / at colume menu_picture */
        try{
            foreach ($data as $key => $value) {            
                $data[$key]['image'] = $this->common->replacePath($data[$key]['image']);
              
                $nameImage = substr($data[$key]['image'], 21);      
                $path_base = substr($data[$key]['image'], 0,21);   
                
                $data[$key]['image'] = $baseUrl.$path_base;                              
            }
        }catch(\Exception $e){
            $data = null;
        }
        
        

        return $data;
    }
}
