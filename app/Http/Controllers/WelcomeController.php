<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class WelcomeController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function getHello($id = null) {
    	if(!empty($id)) {
    		return 'hello kun '.$id;
    	} 
    	return 'hello controller';
    }    

    public function getPage() {
    	return 'welcomeController@getPage';
    }
    public function getContactUs($id = null) {
    	/*How to put in URL = http://localhost/booking/public/welcome/contact-us*/
    	if(!empty($id)) {
    		return 'contact us = ' .$id;
    	}
    	return 'contact us';
    }
    public function getIndex() {        
    	return "index";
    }

}
