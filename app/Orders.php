<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*add*/
//use App\Http\Controllers\CommonController;

class Orders extends Model
{
    protected $fillable = ['order_number',
                           'order_countCustomer',
                           'order_price',
                           'order_tax',
                           'order_promotion_id',
                           'order_payment_id',
                           'order_orderStatus_id',
                           'order_startTime',
                           'order_stopTime',
                           'order_user_id',
                           'order_rest_id',
                           'order_detail',
                           'order_edit_id'                           
                           ];
    protected $hidden = ['order_edit_id'];
    /* common controller for use function */    
    // public function __construct()
    // {       
    //     $this->common = new CommonController();
    // } 
    public function scopeGetOrder($query,$id) 
    {   
    	
        /* get All */
    	if($id == null) {
    		
    	}
        else /* get only id match */
        {
    		
            $data = $query
            ->leftJoin('orderstatus','orderstatus.orderstatus_id','=','orders.order_orderStatus_id')            
            ->where('orders.order_id','=', $id)
            ->select('orders.order_id as id',
            		 'orders.order_number as number',
            		 'orders.order_countCustomer as countCustomer',
            		 'orders.order_price as price',
            		 'orders.order_tax as tax',
            		 'orders.order_promotion_id as promotion',
            		 'orders.order_payment_id as payment',
            		 'orderstatus.orderStatus_name as status',
            		 'orders.order_startTime as start_time',
            		 'orders.order_user_id as user',
            		 'orders.order_rest_id as restaurant'            		 
            		
            		)   
            ->get();
            
    	}
        
        
    	return $data;
    }
    public function scopeGetOrderNumber($query,$number) 
    {   
        
        /* get All */
        if($number == null) {
            return "fail";
        }
        else /* get only id match */
        {
            
            $data = $query            
            ->where('orders.order_number','=', $number)
            ->select(
                    'orders.order_id as id', 
                    'orders.order_number as number'                                                
                    )   
            ->first();
            
        }
        
        
        return $data;
    }
    public function scopePostOrder($query,$data) 
    {   
        
        return "success";
    }
    public function scopeGetRule() 
    {   
        
        /* validation rule */
        $rule = [
            'order_number' => 'required|min:9|max:9|unique:orders,order_number',
            'order_countCustomer' => 'required|min:1|max:3',
            'order_price' => 'required|min:1|max:10',
            'order_tax' => 'required|min:1|max:10',
            'order_promotion_id' => 'min:1|max:10',
            'order_payment_id' => 'required|integer|min:1|max:9',
            'order_orderStatus_id' => 'required|min:1|max:9',
            'order_startTime' => 'required|date_format:Y-m-d H:i:s',
            'order_stopTime' => 'date_format:Y-m-d H:i:s',
            'order_user_id' => 'required|integer|min:1|max:9',
            'order_rest_id' => 'required|integer|min:1|max:9',
            'order_detail' => 'min:1|max:255',
            'order_edit_id' => 'required|min:1|max:9',
            'orderMenu_id' => 'required|min:1|max:512',
        ];    
        
        return $rule;
    }
    public function scopeGetMessage() 
    {   
        /* Validation message */
        $messages = [
            'required' => 'The :attribute field is required.',
            'order_number.unique' => 'The order number has already been data , can not to repetitive',
        ];  
        
        return $messages;
    }

}

