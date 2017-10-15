<?php

use Illuminate\Database\Seeder;

class FoodItemSeeder extends Seeder
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
        	 'item'=>'Pizza'
        	],
        	['id'=>2,
        	 'item'=>'Coke'
        	],
        	['id'=>3,
        	 'item'=>'Burger'
        	],
        	['id'=>4,
        	 'item'=>'Dinner'
        	],
        	['id'=>5,
        	 'item'=>'Breakfast'
        	],
        	['id'=>6,
        	 'item'=>'Lunch'
        	],
        	['id'=>7,
        	 'item'=>'Coffee 1'
        	],
        	['id'=>8,
        	 'item'=>'Coffee 2'
        	],
        	['id'=>9,
        	 'item'=>'Evening Snacks'
        	]
        );
        DB::table('food_items')->insert($data);
    }
}
