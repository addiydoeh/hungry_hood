<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
	/* index */
	public function index() {
		return "index";
	}
	/* select */
    public function getDatabaseFind($id=null) {
    	$dtest = \App\test::where(['test_id'=>$id])->get();

    	return $dtest;
    }

    /* insert */
    public function getDatabaseInsert() {
    	$db_tmp = ['test_name'=>'name1','test_number'=>'0001'];
    	$dtest = \App\test::create($db_tmp);
    	//print_r($dtest);
    	return "success";
    }
    /* update */
    public function getDatabaseUpdate($id = null,$name = null) {
    	$test = \App\test::where(['test_id'=>$id]);   	    
    	$test->update(['test_name'=>$name]);
    	return "success";
    }
    

}