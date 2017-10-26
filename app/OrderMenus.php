<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderMenus extends Model
{
	protected $table = 'ordermenus';
	public $timestamps = false; // delete column  created_at updated_at
    protected $fillable = ['orderMenu_order_id',
                           'orderMenu_menu_id'                                             
                           ];
    //protected $hidden = ['order_edit_id'];
}
