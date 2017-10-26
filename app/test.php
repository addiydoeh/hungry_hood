<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*add*/
use Carbon\Carbon;

class test extends Model
{
    protected $fillable = ['test_name','test_number'];
    protected $dates = ['updated_at'];

    public function scopeGetId($query,$id) 
    {
    	$query->where('test_id',$id);
    }
}
