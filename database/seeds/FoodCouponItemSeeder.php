<?php

use Illuminate\Database\Seeder;

class FoodCouponItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	['id'=>1,
        	 'food_coupon_id'=>1,
        	 'food_item_id'=>1 
        	],
        	['id'=>2,
        	 'food_coupon_id'=>1,
        	 'food_item_id'=>2
        	],
        	['id'=>3,
        	 'food_coupon_id'=>1,
        	 'food_item_id'=>3
        	],
        	['id'=>4,
        	 'food_coupon_id'=>2,
        	 'food_item_id'=>4
        	],
        	['id'=>5,
        	 'food_coupon_id'=>2,
        	 'food_item_id'=>5
        	],
        	['id'=>6,
        	 'food_coupon_id'=>2,
        	 'food_item_id'=>6
        	],
        	['id'=>7,
        	 'food_coupon_id'=>2,
        	 'food_item_id'=>7
        	],
        	['id'=>8,
        	 'food_coupon_id'=>2,
        	 'food_item_id'=>8
        	],
        	['id'=>9,
        	 'food_coupon_id'=>2,
        	 'food_item_id'=>9
        	]
        );
        DB::table('food_coupon_items')->insert($data);
    }
}
