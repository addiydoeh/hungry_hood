<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
/*add*/
use App\menus;
use App\subOptionMenus;
use Auth;
use App\Http\Controllers\CommonController;

class MenuController extends Controller
{
    /* common controller for use function */	
	public function __construct()
	{ 		
		$this->common = new CommonController();
	} 

    public function getMenu($language,$id,$imageSize=null)
    {
    	
		/* get Data from Class:Model shopingMall*/
    	$data = menus::GetMenu($language,$id,$imageSize);    	
        /* return from ClassControllerCommon for encode json type*/            	
        return $this->common->env_json_path($data);
    }
    public function getMenuOption($language,$id)
    {
        
        /* get Data from Class:Model shopingMall*/
        $data = menus::GetMenuOption($language,$id);       
        /* return from ClassControllerCommon for encode json type*/             
        return $this->common->env_json_path($data);
    }
    public function getMenuSubOption($language,$id,$imageSize=null)
    {        
        /* get Data from Class:Model shopingMall*/
        $data = subOptionMenus::GetMenuSubOption($language,$id,$imageSize);       
        /* return from ClassControllerCommon for encode json type*/             
        return $this->common->env_json_path($data);
    }
}
