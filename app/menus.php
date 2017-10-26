<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*add*/
use App\Http\Controllers\CommonController;
use App\URL;
class menus extends Model
{
    protected $table = 'menus';
    /* common controller for use function */    
    public function __construct()
    {       
        $this->common = new CommonController();
    } 

    public function scopeGetMenu($query,$language,$id,$imageSize) 
    {

        $data = $query
                ->leftJoin('relation_menu_optionmenus', 'menus.menu_id', '=', 'relation_menu_optionmenus.reMenu_menu_id')            
                //->leftJoin('optionmenus', 'relation_menu_optionmenus.reMenu_opMenu_id', '=', 'optionmenus.opMenu_id')            
                //->leftJoin('optionmenudatas', 'optionmenus.opMenu_id', '=', 'optionmenudatas.opMenuDat_id')    
                //->leftJoin('suboptionmenus', 'optionmenus.opMenu_id', '=', 'suboptionmenus.subOpMenu_id')    
                //->leftJoin('suboptionmenudatas', 'suboptionmenus.subOpMenu_id', '=', 'suboptionmenudatas.subOpMenuDat_subOpMenu_id')    

                ->leftJoin('menudatas', 'menus.menu_id', '=', 'menudatas.menuDat_menu_id')            
                ->leftJoin('menuimages', 'menus.menu_id', '=', 'menuimages.menuImg_menu_id')            
                ->leftJoin('languages','menudatas.menuDat_language_id','=','languages.language_id')            

                ->where('menus.menu_rest_id',$id)   
                
                //->where('menus.menu_id',11)   

                ->where('languages.language_name','=', $language)       
                

                ->select('menus.menu_id as id',
                        'menudatas.menuDat_type as type',
                        'menudatas.menuDat_name as name',
                        'menus.menu_price as price',
                        'menudatas.menuDat_detail as detail',
                        'menuimages.menuImg_path as image',
                        'menus.menu_isOption as isOption'                       
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
                if($imageSize == "72") {   
                    $path_base = $path_base . "size_72x48/" . $nameImage;                           
                }
                else if($imageSize == "300") 
                {   
                    $path_base = $path_base . "size_300x300/" . $nameImage;      
                }
                else{
                    $path_base = $path_base . "size_original/" . $nameImage;
                }
                $data[$key]['image'] = $baseUrl.$path_base;                              
            }
        }catch(\Exception $e){
            $data = null;
        }
        
        

    	return $data;
    }
    public function scopeGetMenuOption($query,$language,$id) 
    {
        $data = $query
                ->leftJoin('relation_menu_optionmenus', 'menus.menu_id', '=', 'relation_menu_optionmenus.reMenu_menu_id')            
                ->leftJoin('optionmenus', 'relation_menu_optionmenus.reMenu_opMenu_id', '=', 'optionmenus.opMenu_id')            
                ->leftJoin('optionmenudatas', 'optionmenus.opMenu_id', '=', 'optionmenudatas.opMenuDat_id')    
                //->leftJoin('suboptionmenus', 'optionmenus.opMenu_id', '=', 'suboptionmenus.subOpMenu_id')    
                //->leftJoin('suboptionmenudatas', 'suboptionmenus.subOpMenu_id', '=', 'suboptionmenudatas.subOpMenuDat_subOpMenu_id')    

                       
                ->leftJoin('languages','optionmenudatas.opMenuDat_language_id','=','languages.language_id')            

                ->where('menus.menu_id',$id)   
                
                //->where('menus.menu_id',11)   

                ->where('languages.language_name','=', $language)       
                

                ->select(                    
                        'optionmenus.opMenu_id',
                        'optionmenudatas.opMenuDat_name as name',
                        'optionmenus.opMenu_min as min',
                        'optionmenus.opMenu_max as max',
                        'optionmenus.opMenu_default as default'                                    
                        )                
                ->get();                
        
        /* change \\ to / at colume menu_picture */
        // try{
        //     foreach ($data as $key => $value) {            
        //         $data[$key]['image'] = $this->common->replacePath($data[$key]['image']);
                
        //         $nameImage = substr($data[$key]['image'], 21);      
        //         $path_base = substr($data[$key]['image'], 0,21);   
        //         if($imageSize == "72") {   
        //             $path_base = $path_base . "size_72x48/" . $nameImage;                           
        //         }
        //         else if($imageSize == "300") 
        //         {   
        //             $path_base = $path_base . "size_300x300/" . $nameImage;      
        //         }
        //         else{
        //             $path_base = $path_base . "size_original/" . $nameImage;
        //         }
        //         $data[$key]['image'] = $path_base;                              
        //     }
        // }catch(\Exception $e){
        //     $data = null;
        // }
        
        

        return $data;
    }
    public function scopeGetMenuSubOption($query,$language,$id,$imageSize) 
    {
        $data = $query                
                ->leftJoin('suboptionmenus', 'optionmenus.subOpMenu_opMenu_id', '=', 'suboptionmenus.subOpMenu_id')                                                   
                ->leftJoin('languages','suboptionmenudatas.subOpMenuDat_language_id','=','languages.language_id')            

                ->where('suboptionmenus.subOpMenu_opMenu_id',$id)   
                
                //->where('menus.menu_id',11)   

                ->where('languages.language_name','=', $language)       
                

                ->select(                    
                                                          
                        )                
                ->get();                
        
        /* change \\ to / at colume menu_picture */
        // try{
        //     foreach ($data as $key => $value) {            
        //         $data[$key]['image'] = $this->common->replacePath($data[$key]['image']);
                
        //         $nameImage = substr($data[$key]['image'], 21);      
        //         $path_base = substr($data[$key]['image'], 0,21);   
        //         if($imageSize == "72") {   
        //             $path_base = $path_base . "size_72x48/" . $nameImage;                           
        //         }
        //         else if($imageSize == "300") 
        //         {   
        //             $path_base = $path_base . "size_300x300/" . $nameImage;      
        //         }
        //         else{
        //             $path_base = $path_base . "size_original/" . $nameImage;
        //         }
        //         $data[$key]['image'] = $path_base;                              
        //     }
        // }catch(\Exception $e){
        //     $data = null;
        // }
        
        

        return $data;
    }
}
