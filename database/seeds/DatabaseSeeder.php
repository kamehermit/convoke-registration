<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(CategorySeeder::class);
        $this->call(EventSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(EventInchargeSeeder::class);
        $this->call(FoodItemSeeder::class);
        $this->call(FoodCouponSeeder::class);
        $this->call(FoodCouponItemSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
