<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;

/*add*/
use Request;
use App\Http\Requests\TestRequest;
/*Database*/
use App\Test;


class TestViewController extends Controller
{
    /* Authorization middleware */
    public function __construct()
    {
        /* Solution 1 :have to login every page */
        //$this->middleware('auth');
        /* Solution 2 :have to login only page */
        //$this->middleware('auth',['only'=>['create','store']);
        /* Solution 3 :have to login but except page */
        $this->middleware('auth',['except'=>['index']]);
    }

    public function index() {
        /*get User Login*/
        //$user = Auth::user();
        //echo $user->name();

    	$db_test = Test::get();        
    	return view('testView.index',compact('db_test'));
        //return $db_test; // return json object
    }

    public function show($id) {
    	$db_test = Test::GetId($id)->first();
    	if(empty($db_test))
    		abort(404);
    	return view('testView.show',compact('db_test'));
    }

    public function create() {
        return view('testView.create');
    }
    /* not use Requese Validate */
    /*
    public function store() {
        $input = Request::all();
        //dd($input);
        Test::create($input);
        return redirect('testView');
    }
    */
    public function store(TestRequest $req) {
        
        $input = $req->all();       
        //dd($input);
        Test::create($input);
        return redirect('testView');
    }

    public function edit($id) {
        $db_test = Test::GetId($id)->first();        
        if(empty($db_test))
            abort(404);
        return view('testView.edit',compact('db_test'));
    }

    public function update($id,TestRequest  $req) {    

        /* Solution 1 : Except */                    
        $newRequest = \Illuminate\Http\Request::capture();
        $newRequest->replace($req->except(['_token','_method']));                  
        
        $db = Test::GetId($id);
        $db->update($newRequest->all());            
        return redirect('testView');
    }

    public function destroy($id) {
        $db = Test::GetId($id);
        $db->delete();
        return redirect('testView');
    }

    public function curl()
    {

        return view('testView/curl');
    }
}
