<?php

use Illuminate\Database\Seeder;

class FoodCouponSeeder extends Seeder
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
        	 'name' => 'Food Coupon',
        	 'amount' => 150.00
        	],
        	['id'=>2,
        	 'name' => 'Hashhacks',
        	 'amount' => 300.00
        	]
        );
        DB::table('food_coupons')->insert($data);
    }
}
