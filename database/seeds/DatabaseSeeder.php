<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		/* Example CMD */	
		// php artisan db:seed
        /* reset auto increment */
        // ALTER TABLE tablename AUTO_INCREMENT = 1 // put in phpmysql
        /* ALL reset */
        /*
        ALTER TABLE users AUTO_INCREMENT = 1
        ALTER TABLE imagerestaurants AUTO_INCREMENT = 1
        ALTER TABLE brandrestaurants AUTO_INCREMENT = 1  
        ALTER TABLE restaurants AUTO_INCREMENT = 1
        ALTER TABLE menus AUTO_INCREMENT = 1
        */
        /*reset All seed*/
        /*
        DB::table('restaurants')->delete(); 
        DB::table('brandrestaurants')->delete();
        DB::table('imagerestaurants')->delete();
        DB::table('menus')->delete();       
        */

        $this->call('UsersTableSeeder');     
        
        $this->call('ShopingMallTableSeeder');
        $this->call('BrandShopingMallTableSeeder');
        $this->call('RelationBrandShopingMallTableSeeder');        
        $this->call('DetailShopingMallTableSeeder');
        $this->call('ImageShopingMallTableSeeder');
        $this->call('NameShopingMallTableSeeder');
        
        $this->call('AddressTableSeeder');
        $this->call('AddressDataTableSeeder');
        $this->call('DistrictDataTableSeeder');
        $this->call('ProvicesDataTableSeeder');
        $this->call('CountryDataTableSeeder');        

        $this->call('RestaurantTableSeeder');     
        $this->call('RestaurantDataTableSeeder');
        $this->call('BrandRestaurantTableSeeder'); 
        $this->call('RelationRestaurantTableSeeder');  
        $this->call('ImageRestaurantTableSeeder');      
        
             
        $this->call('MenuTableSeeder');     
        $this->call('MenuDataTableSeeder');     
        $this->call('MenuImgTableSeeder');    

        $this->call('RelationMenuOptionMenuTableSeeder');     
        $this->call('MenuOptionTableSeeder');     
        $this->call('MenuOptionDataTableSeeder');     
        $this->call('MenuSubOptionTableSeeder');     
        $this->call('MenuSubOptionDataTableSeeder');     
        
        $this->call('OrderStatusTableSeeder');     
        $this->call('OrderTableSeeder');     
        $this->call('OrderMenuTableSeeder');     
        

        $this->call('LanguageTableSeeder');     
        
    }

}
class UsersTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();                 
        /* users -------------------------------------------------------------------  */
        DB::table('users')->insert([         
            'name' => "Ratchanon",
            'email' => 'aj6b@hotmail.com',
            'password' => '$2y$10$b.BSr7D4mijW6U/NPzaqHOgfkIkbS7tB12Ukf21ookh2ekkTWi1Li',
            'remember_token' => null,
            'api_token' => 'pwd0FbRGbYIxtl9ClY2KsLY6e9qHAY0KmoGaTwxH9pTLgk6A81aPTn7yvceu',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /* Drop users */        
        // ALTER TABLE users AUTO_INCREMENT = 1
        //DB::table('users')->delete();         
    }
}
/*--------- Shoping ------------------------------------------*/
class ShopingMallTableSeeder extends Seeder {
    public function run()
    {
        DB::table('shoping_malls')->delete();   
        DB::table('shoping_malls')->truncate();               
        /* shoping_malls -------------------------------------------------------------------  */
        DB::table('shoping_malls')->insert([   /*testco lotus samutprakan*/
            'shop_edit_id' => 1,
            'shop_address_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('shoping_malls')->insert([   /*Robinson samutprakan*/
            'shop_edit_id' => 1,
            'shop_address_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /* Drop shoping_malls */        
        // ALTER TABLE shoping_malls AUTO_INCREMENT = 1
        //DB::table('shoping_malls')->delete();         
    }
}
class BrandShopingMallTableSeeder extends Seeder {
    public function run()
    {
        DB::table('brandShopingmalls')->delete();   
        DB::table('brandShopingmalls')->truncate();               
        /* shoping_malls -------------------------------------------------------------------  */
        DB::table('brandShopingmalls')->insert([                     
            'brandShop_name' => 'เทสโก โลตัส',
            'brandShop_image' => '\picture\icon\Tesco.png',
            'brandShop_language_id' => 1,            
        ]);
        DB::table('brandShopingmalls')->insert([                     
            'brandShop_name' => 'โรบินสัน',
            'brandShop_image' => '\picture\icon\robinson.png',
            'brandShop_language_id' => 1,        
        ]);
        DB::table('brandShopingmalls')->insert([                     
            'brandShop_name' => 'Tesco Lotus',
            'brandShop_image' => '\picture\icon\Tesco.png',
            'brandShop_language_id' => 2,           
        ]);
        DB::table('brandShopingmalls')->insert([                     
            'brandShop_name' => 'Robinson',
            'brandShop_image' => '\picture\icon\robinson.png',
            'brandShop_language_id' => 2,            
        ]);
        /* Drop brandShopingmalls */        
        // ALTER TABLE brandShopingmalls AUTO_INCREMENT = 1
        //DB::table('brandShopingmalls')->delete();         
    }
}
class RelationBrandShopingMallTableSeeder extends Seeder {
    public function run()
    {
        DB::table('relation_shop_brandshop')->delete();   
        DB::table('relation_shop_brandshop')->truncate();               
        /* shoping_malls -------------------------------------------------------------------  */
        DB::table('relation_shop_brandshop')->insert([                                 
            'reShop_shop_id' => 1, /* testco lotus*/
            'reShop_brandShop_id' => 1,        
        ]);
        DB::table('relation_shop_brandshop')->insert([                                 
            'reShop_shop_id' => 1, /* testco lotus*/
            'reShop_brandShop_id' => 3,        
        ]);
        DB::table('relation_shop_brandshop')->insert([                                 
            'reShop_shop_id' => 2, /* Robinson */
            'reShop_brandShop_id' => 2,        
        ]);
        DB::table('relation_shop_brandshop')->insert([                                 
            'reShop_shop_id' => 2, /* Robinson */
            'reShop_brandShop_id' => 4,        
        ]);
       
        /* Drop brandShopingmalls */        
        // ALTER TABLE brandShopingmalls AUTO_INCREMENT = 1
        //DB::table('brandShopingmalls')->delete();         
    }
}
class DetailShopingMallTableSeeder extends Seeder {
    public function run()
    {
        DB::table('shoping_mall_details')->delete();   
        DB::table('shoping_mall_details')->truncate();               
        /* shoping_mall_details -------------------------------------------------------------------  */
        
        /* Drop shoping_mall_details */        
        // ALTER TABLE shoping_mall_details AUTO_INCREMENT = 1
        //DB::table('shoping_mall_details')->delete();         
    }
}
class ImageShopingMallTableSeeder extends Seeder {
    public function run()
    {
        DB::table('shoping_mall_images')->delete();   
        DB::table('shoping_mall_images')->truncate();               
        /* shoping_mall_images -------------------------------------------------------------------  */
        
        /* Drop shoping_mall_images */        
        // ALTER TABLE shoping_mall_images AUTO_INCREMENT = 1
        //DB::table('shoping_mall_images')->delete();         
    }
}
class NameShopingMallTableSeeder extends Seeder {
    public function run()
    {
        DB::table('shoping_mall_names')->delete();   
        DB::table('shoping_mall_names')->truncate();               
        /* shoping_mall_names -------------------------------------------------------------------  */
        DB::table('shoping_mall_names')->insert([                     
            'shopName_name' => 'เทสโกโลตัส สาขาบางปู',
            'shopName_shop_id' => 1,
            'shopName_language_id' => 1,            
        ]);
        DB::table('shoping_mall_names')->insert([                     
            'shopName_name' => 'testco lotus samutprakan',
            'shopName_shop_id' => 1,
            'shopName_language_id' => 2,            
        ]);
        DB::table('shoping_mall_names')->insert([                     
            'shopName_name' => 'โรบินสัน สาขาแพรกษา',
            'shopName_shop_id' => 2,
            'shopName_language_id' => 1,            
        ]);
        DB::table('shoping_mall_names')->insert([                     
            'shopName_name' => 'Robinson samutprakan',
            'shopName_shop_id' => 2,
            'shopName_language_id' => 2,            
        ]);
        /* Drop shoping_mall_names */        
        // ALTER TABLE shoping_mall_names AUTO_INCREMENT = 1
        //DB::table('shoping_mall_names')->delete();         
    }
}
/*---------- Address -----------------------------------------*/
class AddressTableSeeder extends Seeder {
    public function run()
    {
        DB::table('addresss')->delete();   
        DB::table('addresss')->truncate();               
        /* addresss -------------------------------------------------------------------  */
        DB::table('addresss')->insert([                     
            'address_postCode' => '10280',
            'address_phone_1' => '02 710 9504',
            'address_email' => '',
            'address_floor' => '',
            'address_lat' => '13.519863',
            'address_lon' => '100.668032',
        ]);
        DB::table('addresss')->insert([                     
            'address_postCode' => '10280',
            'address_phone_1' => '02 174 2911',
            'address_email' => '',
            'address_floor' => '',
            'address_lat' => '13.584406',
            'address_lon' => '100.609151',
        ]);
       
        /* Drop addresss */        
        // ALTER TABLE addresss AUTO_INCREMENT = 1
        //DB::table('addresss')->delete();         
    }
}
class AddressDataTableSeeder extends Seeder {
    public function run()
    {
        DB::table('address_datas')->delete();   
        DB::table('address_datas')->truncate();               
        /* address_datas -------------------------------------------------------------------  */
        DB::table('address_datas')->insert([                     
            'addrDat_address_id' => 1,
            'addrDat_addr' => '2502, เทศบาลบางปู 37 ตำบล ท้ายบ้านใหม่',
            'addrDat_detail' => '',
            'addrDat_language_id' => 1,
        ]);
        DB::table('address_datas')->insert([                     
            'addrDat_address_id' => 2,
            'addrDat_addr' => 'ถนน เพรกษา ตำบล ท้ายบ้านใหม่',
            'addrDat_detail' => '',
            'addrDat_language_id' => 1,
        ]);
        
       
        /* Drop address_datas */        
        // ALTER TABLE address_datas AUTO_INCREMENT = 1
        //DB::table('address_datas')->delete();         
    }
}
class DistrictDataTableSeeder extends Seeder {
    public function run()
    {
        DB::table('districts')->delete();   
        DB::table('districts')->truncate();               
        /* districts -------------------------------------------------------------------  */
        DB::table('districts')->insert([                     
            'dist_name' => 'เมือง',            
            'dist_language_id' => 1,
        ]);                   
        /* Drop districts */        
        // ALTER TABLE districts AUTO_INCREMENT = 1
        //DB::table('districts')->delete();         
    }
}
class ProvicesDataTableSeeder extends Seeder {
    public function run()
    {
        DB::table('provices')->delete();   
        DB::table('provices')->truncate();               
        /* provices -------------------------------------------------------------------  */
        DB::table('provices')->insert([                     
            'prov_name' => 'สมุทรปราการ',            
            'prov_language_id' => 1,
        ]);    
        DB::table('provices')->insert([                     
            'prov_name' => 'กรุงเทพ',            
            'prov_language_id' => 1,
        ]);                      
        /* Drop provices */        
        // ALTER TABLE provices AUTO_INCREMENT = 1
        //DB::table('provices')->delete();         
    }
}
class CountryDataTableSeeder extends Seeder {
    public function run()
    {
        DB::table('countries')->delete();   
        DB::table('countries')->truncate();               
        /* countries -------------------------------------------------------------------  */
        DB::table('countries')->insert([                     
            'country_name' => 'ประเทศไทย',            
            'country_language_id' => 1,
        ]);    
                          
        /* Drop countries */        
        // ALTER TABLE countries AUTO_INCREMENT = 1
        //DB::table('countries')->delete();         
    }
}
/*----------- Restaurant ----------------------------------------*/
class RestaurantTableSeeder extends Seeder {
    public function run()
    {
        DB::table('restaurants')->delete(); 
        DB::table('restaurants')->truncate(); 
        /* restaurant -------------------------------------------------------------------  */
        DB::table('restaurants')->insert([                                    
            'rest_shopingMall_id' => 2, // Robingson Samutprakran
            'rest_address_id' => 2,           
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('restaurants')->insert([            
            'rest_shopingMall_id' => 2, // Robingson Samutprakran
            'rest_address_id' => 2,
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('restaurants')->insert([            
            'rest_shopingMall_id' => 1, // Lotus Bangpoo
            'rest_address_id' => 1,            
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('restaurants')->insert([            
            'rest_shopingMall_id' => 1, // Lotus Bangpoo
            'rest_address_id' => 1,           
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /* Drop Restaurant */        
        // ALTER TABLE restaurants AUTO_INCREMENT = 1
        //DB::table('restaurants')->delete(); 
    }
}
class RestaurantDataTableSeeder extends Seeder {
    public function run()
    {
        DB::table('restaurantDatas')->delete(); 
        DB::table('restaurantDatas')->truncate(); 
        /* image Restaurants ---------------------------------------------------------------------*/
        DB::table('restaurantDatas')->insert([         
            'restDat_rest_id' => 1,
            'restDat_name' => "บลาบีคิว พลาซ่า โรบินสัน",
            'restDat_detail' => "บริษัท เดอะบาร์บีคิวพลาซ่า จำกัด ก่อตั้งขึ้นเมื่อปี 2530 โดยคุณชูพงศ์  ชูพจน์เจริญ เป็นบริษัทที่ดำเนินธุรกิจร้านอาหารทั้งในประเทศและต่างประเทศ มีแบรนด์ร้านอาหารที่อยู่ภายใต้การบริหารงานของบริษัทฯ จำนวน 3 แบรนด์ ได้แก่ บาร์บีคิวพลาซ่า จุ่มแซ่บฮัท และ ฮ็อท สตาร์ นำเสนอรูปแบบอาหารในสไตล์ที่แตกต่างกันออกไป คลอบคลุมความต้องการของลูกค้าที่หลากหลาย",
            'restDat_language_id' => 1,
        ]);  
        DB::table('restaurantDatas')->insert([         
            'restDat_rest_id' => 1,
            'restDat_name' => "BBQ Plaza Lotus Robinson",
            'restDat_detail' => "Nothing",
            'restDat_language_id' => 2,
        ]);      

        DB::table('restaurantDatas')->insert([         
            'restDat_rest_id' => 2,
            'restDat_name' => "พิซซ่า คอมพานี โรบินสัน",
            'restDat_detail' => 'Recognized as a one of the leading pioneers in the Asian food service industry, The Pizza Company introduced a fresh and innovative approach to pizza by offering pizza lovers over 20 different delicious toppings that are richer and more sumptuous than those of our competitors, as well as a selection of great tasting cheese blends and inviting appetizers to enhance the total pizza experience.',
            'restDat_language_id' => 1,
        ]);  
        DB::table('restaurantDatas')->insert([         
            'restDat_rest_id' => 2,
            'restDat_name' => "Pizza company Lotus Robinson",
            'restDat_detail' => 'Recognized as a one of the leading pioneers in the Asian food service industry, The Pizza Company introduced a fresh and innovative approach to pizza by offering pizza lovers over 20 different delicious toppings that are richer and more sumptuous than those of our competitors, as well as a selection of great tasting cheese blends and inviting appetizers to enhance the total pizza experience.',
            'restDat_language_id' => 2,
        ]);  

        DB::table('restaurantDatas')->insert([         
            'restDat_rest_id' => 3,
            'restDat_name' => "พิซซ่า คอมพานี โลตัสบางปู",
            'restDat_detail' => 'Recognized as a one of the leading pioneers in the Asian food service industry, The Pizza Company introduced a fresh and innovative approach to pizza by offering pizza lovers over 20 different delicious toppings that are richer and more sumptuous than those of our competitors, as well as a selection of great tasting cheese blends and inviting appetizers to enhance the total pizza experience.',
            'restDat_language_id' => 1,
        ]);    
        DB::table('restaurantDatas')->insert([         
            'restDat_rest_id' => 3,
            'restDat_name' => "Pizza company Lotus bangboo",
            'restDat_detail' => 'Recognized as a one of the leading pioneers in the Asian food service industry, The Pizza Company introduced a fresh and innovative approach to pizza by offering pizza lovers over 20 different delicious toppings that are richer and more sumptuous than those of our competitors, as well as a selection of great tasting cheese blends and inviting appetizers to enhance the total pizza experience.',
            'restDat_language_id' => 2,
        ]);      

        DB::table('restaurantDatas')->insert([         
            'restDat_rest_id' => 4,
            'restDat_name' => "บลาบีคิว พลาซ่า โลตัสบางปู",
            'restDat_detail' => 'Recognized as a one of the leading pioneers in the Asian food service industry, The Pizza Company introduced a fresh and innovative approach to pizza by offering pizza lovers over 20 different delicious toppings that are richer and more sumptuous than those of our competitors, as well as a selection of great tasting cheese blends and inviting appetizers to enhance the total pizza experience.',
            'restDat_language_id' => 1,
        ]); 
        DB::table('restaurantDatas')->insert([         
            'restDat_rest_id' => 4,
            'restDat_name' => "BBQ Plaza Lotus bangboo",
            'restDat_detail' => 'Recognized as a one of the leading pioneers in the Asian food service industry, The Pizza Company introduced a fresh and innovative approach to pizza by offering pizza lovers over 20 different delicious toppings that are richer and more sumptuous than those of our competitors, as well as a selection of great tasting cheese blends and inviting appetizers to enhance the total pizza experience.',
            'restDat_language_id' => 2,
        ]);       
        /* Drop restaurantDatas */      
        // ALTER TABLE restaurantDatas AUTO_INCREMENT = 1
        //DB::table('restaurantDatas')->delete();
    }
}
class BrandRestaurantTableSeeder extends Seeder {
    public function run()
    {
        DB::table('brandrestaurants')->delete(); 
        DB::table('brandrestaurants')->truncate(); 
        /* brandRestaurant ---------------------------------------------------------------------*/
        DB::table('brandrestaurants')->insert([         
            'brandRest_name' => "บลาบีคิว พลาซ่า",
            'brandRest_image' => 'picture\icon_restaurant\BBQPlaza.png',
            'brandRest_language_id' => 1,
        ]);
        DB::table('brandrestaurants')->insert([         
            'brandRest_name' => "พิซซ่า",
            'brandRest_image' => 'picture\icon_restaurant\pizza_company.png',
            'brandRest_language_id' => 1,
        ]);
        DB::table('brandrestaurants')->insert([         
            'brandRest_name' => "BBQ Plaza",
            'brandRest_image' => 'picture\icon_restaurant\BBQPlaza.png',
            'brandRest_language_id' => 2,
        ]);
        DB::table('brandrestaurants')->insert([         
            'brandRest_name' => "Pizza Company",
            'brandRest_image' => 'picture\icon_restaurant\pizza_company.png',
            'brandRest_language_id' => 2,
        ]);
        /* Drop brandRestaurant */   
        // ALTER TABLE brandrestaurants AUTO_INCREMENT = 1  
        //DB::table('brandrestaurants')->delete();
    }
}
class RelationRestaurantTableSeeder extends Seeder {
    public function run()
    {
        DB::table('relation_rest_brandRest')->delete(); 
        DB::table('imagerestaurants')->truncate(); 
        /* image reration_rest_brandRest ---------------------------------------------------------------------*/
        DB::table('relation_rest_brandRest')->insert([         
            'reRest_rest_id' => 1,
            'reRest_brandRest_id' => 1,
        ]);
        DB::table('relation_rest_brandRest')->insert([         
            'reRest_rest_id' => 1,
            'reRest_brandRest_id' => 3,
        ]);
        DB::table('relation_rest_brandRest')->insert([         
            'reRest_rest_id' => 2,
            'reRest_brandRest_id' => 2,
        ]);
        DB::table('relation_rest_brandRest')->insert([         
            'reRest_rest_id' => 2,
            'reRest_brandRest_id' => 4,
        ]);


        DB::table('relation_rest_brandRest')->insert([         
            'reRest_rest_id' => 3,
            'reRest_brandRest_id' => 2,
        ]);
        DB::table('relation_rest_brandRest')->insert([         
            'reRest_rest_id' => 3,
            'reRest_brandRest_id' => 4,
        ]);
        DB::table('relation_rest_brandRest')->insert([         
            'reRest_rest_id' => 4,
            'reRest_brandRest_id' => 1,
        ]);
        DB::table('relation_rest_brandRest')->insert([         
            'reRest_rest_id' => 4,
            'reRest_brandRest_id' => 3,
        ]);
        
        /* Drop reration_rest_brandRest */      
        // ALTER TABLE reration_rest_brandRest AUTO_INCREMENT = 1
        //DB::table('reration_rest_brandRest')->delete();
    }
}
class ImageRestaurantTableSeeder extends Seeder {
    public function run()
    {
        DB::table('imagerestaurants')->delete(); 
        DB::table('imagerestaurants')->truncate(); 
        /* image Restaurants ---------------------------------------------------------------------*/
        DB::table('imagerestaurants')->insert([         
            'imgRest_rest_id' => 1,
            'imgRest_path' => 'picture\picture_restaurant\35d7a2729817478987ec6594d28bb000.jpg',
        ]);
        DB::table('imagerestaurants')->insert([         
            'imgRest_rest_id' => 2,
            'imgRest_path' => 'picture\picture_restaurant\048e0d8864894b72be883cbabec194b8.jpg',
        ]);
        DB::table('imagerestaurants')->insert([         
            'imgRest_rest_id' => 4,
            'imgRest_path' => 'picture\picture_restaurant\35d7a2729817478987ec6594d28bb000.jpg',
        ]);
        DB::table('imagerestaurants')->insert([         
            'imgRest_rest_id' => 3,
            'imgRest_path' => 'picture\picture_restaurant\048e0d8864894b72be883cbabec194b8.jpg',
        ]);
        /* Drop imageRestaurant */      
        // ALTER TABLE imagerestaurants AUTO_INCREMENT = 1
        //DB::table('imagerestaurants')->delete();
    }
}
/*-------------- Menu -------------------------------------*/
class MenuTableSeeder extends Seeder {

   public function run()
   {
       DB::table('menus')->delete();
       DB::table('menus')->truncate(); 
       /* Menu -----------------------------------------------------------------------------------*/
        /* ++++++++++ BBQ Plaza Robinson samutprakan id = 1 +++++++*/        
        DB::table('menus')->insert([         
            'menu_rest_id' => 1,      
            'menu_price' => '399',
            'menu_isOption' => 0,                      
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 1, 
            'menu_price' => '499',   
            'menu_isOption' => 0,                    
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 1, 
            'menu_price' => '599',      
            'menu_isOption' => 0,      
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 1,         
            'menu_price' => '30', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 1,         
            'menu_price' => '30', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                    
            'menu_rest_id' => 1,           
            'menu_price' => '49', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 1,           
            'menu_price' => '59', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([                     
            'menu_rest_id' => 1,            
            'menu_price' => '29',  
            'menu_isOption' => 0,        
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 1,        
            'menu_price' => '29', 
            'menu_isOption' => 0,           
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 1,            
            'menu_price' => '29', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        /* ++++++++++ Pizza Robinson samutprakan id = 2 +++++++*/                
        DB::table('menus')->insert([                   
            'menu_rest_id' => 2,            
            'menu_price' => '299',   
            'menu_isOption' => 1,        
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 2,            
            'menu_price' => '299',  
            'menu_isOption' => 1,                 
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 2,            
            'menu_price' => '319',  
            'menu_isOption' => 1,                 
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 2,            
            'menu_price' => '99',  
            'menu_isOption' => 0,                 
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 2,            
            'menu_price' => '139', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 2,            
            'menu_price' => '199',    
            'menu_isOption' => 0,       
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 2,            
            'menu_price' => '199', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // ++++++++++ Pizza Lotus bangboo +++++++
        DB::table('menus')->insert([                   
            'menu_rest_id' => 3,            
            'menu_price' => '299',  
            'menu_isOption' => 1,        
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 3,            
            'menu_price' => '299',   
            'menu_isOption' => 1,        
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 3,            
            'menu_price' => '319',  
            'menu_isOption' => 1,         
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 3,            
            'menu_price' => '99', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 3,            
            'menu_price' => '139',
            'menu_isOption' => 0,           
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 3,            
            'menu_price' => '199',
            'menu_isOption' => 0,           
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 3,            
            'menu_price' => '199',
            'menu_isOption' => 0,           
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // ++++++++++ BBQ Plaza Lotus bangboo +++++++
        DB::table('menus')->insert([         
            'menu_rest_id' => 4,      
            'menu_price' => '399', 
            'menu_isOption' => 0,                     
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 4, 
            'menu_price' => '499', 
            'menu_isOption' => 0,                      
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 4, 
            'menu_price' => '599',   
            'menu_isOption' => 0,         
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 4,         
            'menu_price' => '30', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 4,         
            'menu_price' => '30',  
            'menu_isOption' => 0,         
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                    
            'menu_rest_id' => 4,           
            'menu_price' => '49',  
            'menu_isOption' => 0,         
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 4,           
            'menu_price' => '59', 
            'menu_isOption' => 0,          
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('menus')->insert([                     
            'menu_rest_id' => 4,            
            'menu_price' => '29',  
            'menu_isOption' => 0,        
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                     
            'menu_rest_id' => 4,        
            'menu_price' => '29', 
            'menu_isOption' => 0,           
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('menus')->insert([                   
            'menu_rest_id' => 4,            
            'menu_price' => '29',   
            'menu_isOption' => 0,        
            'rest_edit_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        /* Drop Menu*/
        // ALTER TABLE menus AUTO_INCREMENT = 1
        //DB::table('menus')->delete();   

   }
}
class MenuDataTableSeeder extends Seeder {
    public function run()
    {
        DB::table('menudatas')->delete(); 
        DB::table('menudatas')->truncate(); 
        /* image menudatas ---------------------------------------------------------------------*/
        /* ++++++++++ BBQ Plaza Robinson samutprakan +++++++*/       
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 1,
            'menuDat_name' => 'ชุดครอบครัวเนื้อสุขสันต์',
            'menuDat_type' => 'อาหารชุด',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 2,
            'menuDat_name' => 'ชุดครอบครัวรวมมิตรสุขสันต์',
            'menuDat_type' => 'อาหารชุด',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 3,
            'menuDat_name' => 'ชุดพิเศษเนื้อฮาเฮ',
            'menuDat_type' => 'อาหารชุด',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 4,
            'menuDat_name' => 'ข้าวโพดอ่อน',
            'menuDat_type' => 'อาหารปิ้งย่าง',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 5,
            'menuDat_name' => 'แครอท',
            'menuDat_type' => 'อาหารปิ้งย่าง',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 6,
            'menuDat_name' => 'เบคอน',
            'menuDat_type' => 'อาหารปิ้งย่าง',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 7,
            'menuDat_name' => 'เนื้อปลามาฮิ มาฮิ',
            'menuDat_type' => 'อาหารปิ้งย่าง',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 8,
            'menuDat_name' => 'น้ำแตงโมปั่น',
            'menuDat_type' => 'เครื่องดื่ม',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 9,
            'menuDat_name' => 'น้ำแตงโมปั่น',
            'menuDat_type' => 'น้ำมะนาวปั่น',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 10,
            'menuDat_name' => 'ชามะนาว',
            'menuDat_type' => 'เครื่องดื่ม',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        /* ++++++++++ Pizza Robinson samutprakan +++++++*/ 
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 11,
            'menuDat_name' => 'แซลมอนรมควัน',
            'menuDat_type' => 'พิซซ่า',
            'menuDat_detail' => 'พิซซ่า ซีฟู้ด สเปเชียล พิซซ่าแป้งบางกรอบ กับหน้าแซลมอนรมควัน หอมนุ่มละมุนลิ้นจากแซลมอนชั้นดี โรยหน้าผักร็อกเก็ตเคล้าน้ำสลัดเลมอน เพิ่มความสดชื่น',
            'menuDat_language_id' => 1,
        ]);    
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 12,
            'menuDat_name' => 'กุ้งอบเครื่องเทศ',
            'menuDat_type' => 'พิซซ่า',
            'menuDat_detail' => 'พิซซ่า ซีฟู้ด สเปเชียล พิซซ่าแป้งบางกรอบ กับหน้ากุ้งอบเครื่องเทศ จากกุ้งเนื้อแน่นหมักเครื่องเทศสูตรพิเศษอร่อยกลมกล่อม โรยหน้าผักร็อกเก็ตเคล้าน้ำสลัดเลมอน เพิ่มความสดชื่น',
            'menuDat_language_id' => 1,
        ]);   
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 13,
            'menuDat_name' => 'ฮาวายเอี้ยน',
            'menuDat_type' => 'พิซซ่า',
            'menuDat_detail' => 'สัปปะรด แฮม เบคอนแผ่น มอสซาเรลล่าชีส ซอสพิซซ่า',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 14,
            'menuDat_name' => 'มักกะโรนีไก่อบชีส',
            'menuDat_type' => 'พาสต้า',
            'menuDat_detail' => 'มักกะโรนีไก่อบชีส อร่อยกับมักกะโรนีนุ่มหนึบ โรยหน้าด้วยไก่บาร์บีคิวรสชาติเข้มข้น อบกับชีสสามชนิดแบบจัดเต็ม เสิร์ฟร้อนๆ ชีสยืดๆ สะใจคนรักชีส',
            'menuDat_language_id' => 1,
        ]);  
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 15,
            'menuDat_name' => 'สปาเก็ตตี้ คาโบนาร่าอบ',
            'menuDat_type' => 'พาสต้า',
            'menuDat_detail' => 'อร่อยกลมกล่อมสไตล์อิตาเลี่ยน กับไวท์ซอสปรุงรสเนื้อครีมเข้มข้น ผสมผสานจนลงตัวกับเบคอน หอมกรุ่นชั้นดี พร้อมโรยด้วยมอสซาเรลล่าชีส อบสุกเมื่อไหร่ กรุ่นชีสเกรียมข้างนอก ละมุนซอสข้างใน อร่อยเลิศทุกคำ',
            'menuDat_language_id' => 1,
        ]);    
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 16,
            'menuDat_name' => 'ปีกไก่บาร์บีคิว 10 ชิ้น',
            'menuDat_type' => 'อาหารรองท้อง',
            'menuDat_detail' => 'ปีกไก่เนื้อนุ่ม คลุกเคล้าเครื่องเทศสูตรเฉพาะ อบจนหอม เกรียมนิดๆ รสชาติกลมกล่อม',
            'menuDat_language_id' => 1,
        ]);  
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 17,
            'menuDat_name' => 'ปีกไก่ทอด สไตล์เกาหลี 10 ชิ้น',
            'menuDat_type' => 'อาหารรองท้อง',
            'menuDat_detail' => 'ไก่เนื้อแน่นคุณภาพเยี่ยม นำมาคลุกเคล้าแป้งสูตรลับเฉพาะ ที่ทอดแล้วกรอบสุดขีด ราดซอสสามรสแสนอร่อย สูตรพิเศษของ เดอะ พิซซ่า คอมปะนี',
            'menuDat_language_id' => 1,
        ]);   
        // ++++++++++ Pizza Lotus bangboo +++++++
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 18,
            'menuDat_name' => 'แซลมอนรมควัน',
            'menuDat_type' => 'พิซซ่า',
            'menuDat_detail' => 'พิซซ่า ซีฟู้ด สเปเชียล พิซซ่าแป้งบางกรอบ กับหน้าแซลมอนรมควัน หอมนุ่มละมุนลิ้นจากแซลมอนชั้นดี โรยหน้าผักร็อกเก็ตเคล้าน้ำสลัดเลมอน เพิ่มความสดชื่น',
            'menuDat_language_id' => 1,
        ]);    
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 19,
            'menuDat_name' => 'กุ้งอบเครื่องเทศ',
            'menuDat_type' => 'พิซซ่า',
            'menuDat_detail' => 'พิซซ่า ซีฟู้ด สเปเชียล พิซซ่าแป้งบางกรอบ กับหน้ากุ้งอบเครื่องเทศ จากกุ้งเนื้อแน่นหมักเครื่องเทศสูตรพิเศษอร่อยกลมกล่อม โรยหน้าผักร็อกเก็ตเคล้าน้ำสลัดเลมอน เพิ่มความสดชื่น',
            'menuDat_language_id' => 1,
        ]);   
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 20,
            'menuDat_name' => 'ฮาวายเอี้ยน',
            'menuDat_type' => 'พิซซ่า',
            'menuDat_detail' => 'สัปปะรด แฮม เบคอนแผ่น มอสซาเรลล่าชีส ซอสพิซซ่า',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 21,
            'menuDat_name' => 'มักกะโรนีไก่อบชีส',
            'menuDat_type' => 'พาสต้า',
            'menuDat_detail' => 'มักกะโรนีไก่อบชีส อร่อยกับมักกะโรนีนุ่มหนึบ โรยหน้าด้วยไก่บาร์บีคิวรสชาติเข้มข้น อบกับชีสสามชนิดแบบจัดเต็ม เสิร์ฟร้อนๆ ชีสยืดๆ สะใจคนรักชีส',
            'menuDat_language_id' => 1,
        ]);  
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 22,
            'menuDat_name' => 'สปาเก็ตตี้ คาโบนาร่าอบ',
            'menuDat_type' => 'พาสต้า',
            'menuDat_detail' => 'อร่อยกลมกล่อมสไตล์อิตาเลี่ยน กับไวท์ซอสปรุงรสเนื้อครีมเข้มข้น ผสมผสานจนลงตัวกับเบคอน หอมกรุ่นชั้นดี พร้อมโรยด้วยมอสซาเรลล่าชีส อบสุกเมื่อไหร่ กรุ่นชีสเกรียมข้างนอก ละมุนซอสข้างใน อร่อยเลิศทุกคำ',
            'menuDat_language_id' => 1,
        ]);    
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 23,
            'menuDat_name' => 'ปีกไก่บาร์บีคิว 10 ชิ้น',
            'menuDat_type' => 'อาหารรองท้อง',
            'menuDat_detail' => 'ปีกไก่เนื้อนุ่ม คลุกเคล้าเครื่องเทศสูตรเฉพาะ อบจนหอม เกรียมนิดๆ รสชาติกลมกล่อม',
            'menuDat_language_id' => 1,
        ]);  
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 24,
            'menuDat_name' => 'ปีกไก่ทอด สไตล์เกาหลี 10 ชิ้น',
            'menuDat_type' => 'อาหารรองท้อง',
            'menuDat_detail' => 'ไก่เนื้อแน่นคุณภาพเยี่ยม นำมาคลุกเคล้าแป้งสูตรลับเฉพาะ ที่ทอดแล้วกรอบสุดขีด ราดซอสสามรสแสนอร่อย สูตรพิเศษของ เดอะ พิซซ่า คอมปะนี',
            'menuDat_language_id' => 1,
        ]);  
        // ++++++++++ BBQ Plaza Lotus bangboo +++++++
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 25,
            'menuDat_name' => 'ชุดครอบครัวเนื้อสุขสันต์',
            'menuDat_type' => 'อาหารชุด',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 26,
            'menuDat_name' => 'ชุดครอบครัวรวมมิตรสุขสันต์',
            'menuDat_type' => 'อาหารชุด',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 27,
            'menuDat_name' => 'ชุดพิเศษเนื้อฮาเฮ',
            'menuDat_type' => 'อาหารชุด',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 28,
            'menuDat_name' => 'ข้าวโพดอ่อน',
            'menuDat_type' => 'อาหารปิ้งย่าง',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 29,
            'menuDat_name' => 'แครอท',
            'menuDat_type' => 'อาหารปิ้งย่าง',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 30,
            'menuDat_name' => 'เบคอน',
            'menuDat_type' => 'อาหารปิ้งย่าง',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 31,
            'menuDat_name' => 'เนื้อปลามาฮิ มาฮิ',
            'menuDat_type' => 'อาหารปิ้งย่าง',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 32,
            'menuDat_name' => 'น้ำแตงโมปั่น',
            'menuDat_type' => 'เครื่องดื่ม',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 33,
            'menuDat_name' => 'น้ำแตงโมปั่น',
            'menuDat_type' => 'น้ำมะนาวปั่น',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        DB::table('menudatas')->insert([                     
            'menuDat_menu_id' => 34,
            'menuDat_name' => 'ชามะนาว',
            'menuDat_type' => 'เครื่องดื่ม',
            'menuDat_detail' => '-',
            'menuDat_language_id' => 1,
        ]);
        /* Drop menudatas */      
        // ALTER TABLE menudatas AUTO_INCREMENT = 1
        //DB::table('menudatas')->delete();
    }
}
class MenuImgTableSeeder extends Seeder {
    public function run()
    {
        DB::table('menuimages')->delete(); 
        DB::table('menuimages')->truncate(); 
        /* image Restaurants ---------------------------------------------------------------------*/
        /* ++++++++++ BBQ Plaza Robinson samutprakan +++++++*/       
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 1,
            'menuImg_path' => 'picture\picture_menu\115909102017_Beef-set.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 2,
            'menuImg_path' => 'picture\picture_menu\115909102017_Mix-set.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 3,
            'menuImg_path' => 'picture\picture_menu\115909102017_Beef-enjoy-big.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 4,
            'menuImg_path' => 'picture\picture_menu\115909102017_Baby-Corn1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 5,
            'menuImg_path' => 'picture\picture_menu\115909102017_Carrot1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 6,
            'menuImg_path' => 'picture\picture_menu\115909102017_Bacon1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 7,
            'menuImg_path' => 'picture\picture_menu\115909102017_Mahi-Mahi-Fish1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 8,
            'menuImg_path' => 'picture\picture_menu\115909102017_Water-Melon-smoothies.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 9,
            'menuImg_path' => 'picture\picture_menu\115909102017_lemon-tea1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 10,
            'menuImg_path' => 'picture\picture_menu\115909102017_Lime-Soda2.jpg',
        ]);

        /* ++++++++++ Pizza Robinson samutprakan +++++++*/ 
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 11,
            'menuImg_path' => 'picture\picture_menu\100120171159_Smoaked_Salmon.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 12,
            'menuImg_path' => 'picture\picture_menu\100120171159_Tasty_Shrimp.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 13,
            'menuImg_path' => 'picture\picture_menu\100120171159_Pan_Hawaiian.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 14,
            'menuImg_path' => 'picture\picture_menu\100120171159_itm115503.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 15,
            'menuImg_path' => 'picture\picture_menu\100120171159_itm115506.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 16,
            'menuImg_path' => 'picture\picture_menu\100120171159_itm116539.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 17,
            'menuImg_path' => 'picture\picture_menu\100120171159_itm116561.png',
        ]);

        // ++++++++++ Pizza Lotus bangboo +++++++
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 18,
            'menuImg_path' => 'picture\picture_menu\100120171159_Smoaked_Salmon.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 19,
            'menuImg_path' => 'picture\picture_menu\100120171159_Tasty_Shrimp.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 20,
            'menuImg_path' => 'picture\picture_menu\100120171159_Pan_Hawaiian.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 21,
            'menuImg_path' => 'picture\picture_menu\100120171159_itm115503.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 22,
            'menuImg_path' => 'picture\picture_menu\100120171159_itm115506.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 23,
            'menuImg_path' => 'picture\picture_menu\100120171159_itm116539.png',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 24,
            'menuImg_path' => 'picture\picture_menu\100120171159_itm116561.png',
        ]);

        // ++++++++++ BBQ Plaza Lotus bangboo +++++++
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 25,
            'menuImg_path' => 'picture\picture_menu\115909102017_Beef-set.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 26,
            'menuImg_path' => 'picture\picture_menu\115909102017_Mix-set.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 27,
            'menuImg_path' => 'picture\picture_menu\115909102017_Beef-enjoy-big.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 28,
            'menuImg_path' => 'picture\picture_menu\115909102017_Baby-Corn1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 29,
            'menuImg_path' => 'picture\picture_menu\115909102017_Carrot1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 30,
            'menuImg_path' => 'picture\picture_menu\115909102017_Bacon1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 31,
            'menuImg_path' => 'picture\picture_menu\115909102017_Mahi-Mahi-Fish1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 32,
            'menuImg_path' => 'picture\picture_menu\115909102017_Water-Melon-smoothies.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 33,
            'menuImg_path' => 'picture\picture_menu\115909102017_lemon-tea1.jpg',
        ]);
        DB::table('menuImages')->insert([                     
            'menuImg_menu_id' => 34,
            'menuImg_path' => 'picture\picture_menu\115909102017_Lime-Soda2.jpg',
        ]);

        /* Drop menuImages */      
        // ALTER TABLE menuImages AUTO_INCREMENT = 1
        //DB::table('menuImages')->delete();
    }
}
class RelationMenuOptionMenuTableSeeder extends Seeder {
    public function run()
    {
        DB::table('relation_menu_optionmenus')->delete(); 
        DB::table('relation_menu_optionmenus')->truncate(); 
        /* relation_menu_optionmenus ---------------------------------------------------------------------*/
        /* size */        
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 11,
            'reMenu_opMenu_id' => 1,            
        ]);
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 12,
            'reMenu_opMenu_id' => 1,            
        ]);
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 13,
            'reMenu_opMenu_id' => 1,            
        ]);
        /* ขอบ */
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 11,
            'reMenu_opMenu_id' => 2,            
        ]);
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 12,
            'reMenu_opMenu_id' => 2,            
        ]);
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 13,
            'reMenu_opMenu_id' => 2,            
        ]);
        /* size */
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 18,
            'reMenu_opMenu_id' => 1,            
        ]);
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 19,
            'reMenu_opMenu_id' => 1,            
        ]);
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 20,
            'reMenu_opMenu_id' => 1,            
        ]);
        /* ขอบ */
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 18,
            'reMenu_opMenu_id' => 2,            
        ]);
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 19,
            'reMenu_opMenu_id' => 2,            
        ]);
        DB::table('relation_menu_optionmenus')->insert([                     
            'reMenu_menu_id' => 20,
            'reMenu_opMenu_id' => 1,            
        ]);
        
        /* Drop relation_menu_optionmenus */   
        // ALTER TABLE relation_menu_optionmenus AUTO_INCREMENT = 1  
        //DB::table('relation_menu_optionmenus')->delete();
    }
}
class MenuOptionTableSeeder extends Seeder {
    public function run()
    {
        DB::table('optionmenus')->delete(); 
        DB::table('optionmenus')->truncate(); 
        /* optionmenus ---------------------------------------------------------------------*/
        DB::table('optionmenus')->insert([                     
            'opMenu_min' => 1,
            'opMenu_max' => 2,
            'opMenu_default' => 1,
        ]);
        DB::table('optionmenus')->insert([                     
            'opMenu_min' => 1,
            'opMenu_max' => 4,
            'opMenu_default' => 1,
        ]);
       
        /* Drop optionmenus */   
        // ALTER TABLE optionmenus AUTO_INCREMENT = 1  
        //DB::table('optionmenus')->delete();
    }
}
class MenuOptionDataTableSeeder extends Seeder {
    public function run()
    {
        DB::table('optionmenudatas')->delete(); 
        DB::table('optionmenudatas')->truncate(); 
        /* optionmenudatas ---------------------------------------------------------------------*/
        DB::table('optionmenudatas')->insert([                     
            'opMenuDat_opMenu_id' => 1,
            'opMenuDat_name' => "ขนาด",
            'opMenuDat_language_id' => 1,
        ]);
        DB::table('optionmenudatas')->insert([                     
            'opMenuDat_opMenu_id' => 2,
            'opMenuDat_name' => "ขอบ",
            'opMenuDat_language_id' => 1,
        ]);       
       
        /* Drop optionmenudatas */   
        // ALTER TABLE optionmenudatas AUTO_INCREMENT = 1  
        //DB::table('optionmenudatas')->delete();
    }
}
class MenuSubOptionTableSeeder extends Seeder {
    public function run()
    {
        DB::table('suboptionmenus')->delete(); 
        DB::table('suboptionmenus')->truncate(); 
        /* suboptionmenus ---------------------------------------------------------------------*/
        DB::table('suboptionmenus')->insert([                     
            'subOpMenu_opMenu_id' => 1,
            'subOpMenu_image' => '',
            'subOpMenu_price' => '',
        ]);
        DB::table('suboptionmenus')->insert([                     
            'subOpMenu_opMenu_id' => 1,
            'subOpMenu_image' => '',
            'subOpMenu_price' => '+130',
        ]);

        DB::table('suboptionmenus')->insert([                     
            'subOpMenu_opMenu_id' => 2,
            'subOpMenu_image' => '',
            'subOpMenu_price' => '+0',
        ]);
        DB::table('suboptionmenus')->insert([                     
            'subOpMenu_opMenu_id' => 2,
            'subOpMenu_image' => '',
            'subOpMenu_price' => '-100',
        ]);
        DB::table('suboptionmenus')->insert([                     
            'subOpMenu_opMenu_id' => 2,
            'subOpMenu_image' => '',
            'subOpMenu_price' => '+100',
        ]);
        DB::table('suboptionmenus')->insert([                     
            'subOpMenu_opMenu_id' => 2,
            'subOpMenu_image' => '',
            'subOpMenu_price' => '+100',
        ]);
       
        /* Drop suboptionmenus */   
        // ALTER TABLE suboptionmenus AUTO_INCREMENT = 1  
        //DB::table('suboptionmenus')->delete();
    }
}
class MenuSubOptionDataTableSeeder extends Seeder {
    public function run()
    {
        DB::table('suboptionmenudatas')->delete(); 
        DB::table('suboptionmenudatas')->truncate(); 
        /* suboptionmenudatasData ---------------------------------------------------------------------*/
        DB::table('suboptionmenudatas')->insert([                     
            'subOpMenuDat_subOpMenu_id' => 1,
            'subOpMenuDat_name' => 'กลาง',
            'subOpMenuDat_language_id' => 1,
        ]);
        DB::table('suboptionmenudatas')->insert([                     
            'subOpMenuDat_subOpMenu_id' => 2,
            'subOpMenuDat_name' => 'ใหญ่',
            'subOpMenuDat_language_id' => 1,
        ]);

        DB::table('suboptionmenudatas')->insert([                     
            'subOpMenuDat_subOpMenu_id' => 3,
            'subOpMenuDat_name' => 'แป้งหนานุ่ม',
            'subOpMenuDat_language_id' => 1,
        ]);
        DB::table('suboptionmenudatas')->insert([                     
            'subOpMenuDat_subOpMenu_id' => 4,
            'subOpMenuDat_name' => 'แป้งบางกรอบ',
            'subOpMenuDat_language_id' => 1,
        ]);
        DB::table('suboptionmenudatas')->insert([                     
            'subOpMenuDat_subOpMenu_id' => 5,
            'subOpMenuDat_name' => 'เอ็กซ์ตรีมขอบชีส',
            'subOpMenuDat_language_id' => 1,
        ]);
        DB::table('suboptionmenudatas')->insert([                     
            'subOpMenuDat_subOpMenu_id' => 6,
            'subOpMenuDat_name' => 'เอ็กซ์ตีม ขอบไส้กรอกและชีส',
            'subOpMenuDat_language_id' => 1,
        ]);
       
        /* Drop suboptionmenudatasData */   
        // ALTER TABLE suboptionmenudatas AUTO_INCREMENT = 1  
        //DB::table('suboptionmenudatas')->delete();
    }
}
/*-------------- Order -------------------------------------*/
class OrderStatusTableSeeder extends Seeder {
    public function run()
    {
        DB::table('orderstatus')->delete(); 
        DB::table('orderstatus')->truncate(); 
        /* orderstatus ---------------------------------------------------------------------*/
        DB::table('orderstatus')->insert([  
            'orderStatus_id' => 1,
            'orderStatus_name' => 'orderInSystem',            
        ]);
        DB::table('orderstatus')->insert([  
            'orderStatus_id' => 2,
            'orderStatus_name' => 'orderInRestaurant',            
        ]);
        DB::table('orderstatus')->insert([  
            'orderStatus_id' => 3,
            'orderStatus_name' => 'orderReady',            
        ]);
        DB::table('orderstatus')->insert([  
            'orderStatus_id' => 4,
            'orderStatus_name' => 'success',            
        ]);
        DB::table('orderstatus')->insert([  
            'orderStatus_id' => 5,
            'orderStatus_name' => 'cancle',            
        ]);
        /* Drop orderstatus */      
        // ALTER TABLE orderstatus AUTO_INCREMENT = 1
        //DB::table('orderstatus')->delete();
    }
}
class OrderTableSeeder extends Seeder {
    public function run()
    {
        DB::table('orders')->delete(); 
        DB::table('orders')->truncate(); 
        /* orders ---------------------------------------------------------------------*/
        DB::table('orders')->insert([              
            'order_id' => 1,
            'order_number' => 'H01-00001',
            'order_countCustomer' => '4',
            'order_price' => '521.09',
            'order_tax' => '34.09',
            'order_promotion_id' => '',
            'order_payment_id' => 1,
            'order_orderStatus_id' => 1,
            'order_startTime' => '2017-10-22 12:00:00',
            'order_stopTime' => '',  
            'order_user_id' => 1,
            'order_rest_id' => 1,
            'order_detail' => '-',
            'order_edit_id' => 1, 
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),  
        ]);
        
        /* Drop orders */      
        // ALTER TABLE orders AUTO_INCREMENT = 1
        //DB::table('orders')->delete();
    }
}
class OrderMenuTableSeeder extends Seeder {
    public function run()
    {
        DB::table('ordermenus')->delete(); 
        DB::table('ordermenus')->truncate(); 
        /* ordermenus ---------------------------------------------------------------------*/
        DB::table('ordermenus')->insert([              
            'orderMenu_order_id' => 1,
            'orderMenu_menu_id' => 1,                   
        ]);        
        DB::table('ordermenus')->insert([              
            'orderMenu_order_id' => 1,
            'orderMenu_menu_id' => 5,                   
        ]);
        DB::table('ordermenus')->insert([              
            'orderMenu_order_id' => 1,
            'orderMenu_menu_id' => 8,                   
        ]);
        DB::table('ordermenus')->insert([              
            'orderMenu_order_id' => 1,
            'orderMenu_menu_id' => 10,                   
        ]);
        /* Drop ordermenus */      
        // ALTER TABLE ordermenus AUTO_INCREMENT = 1
        //DB::table('ordermenus')->delete();
    }
}
/*------------- Language --------------------------------------*/
class LanguageTableSeeder extends Seeder {
    public function run()
    {
        DB::table('languages')->delete(); 
        DB::table('languages')->truncate(); 
        /* languages ---------------------------------------------------------------------*/
        DB::table('languages')->insert([                     
            'language_name' => 'TH',
        ]);
        DB::table('languages')->insert([         
            'language_name' => 'EN',
        ]);
        /* Drop languages */   
        // ALTER TABLE languages AUTO_INCREMENT = 1  
        //DB::table('languages')->delete();
    }
}
