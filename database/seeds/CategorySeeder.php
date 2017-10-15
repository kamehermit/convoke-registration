<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
        	 'category' => 'Workshop'
        	],
        	['id'=>2,
        	 'category' => 'Competition'
        	],
            ['id'=>3,
             'category' => 'Talk'
            ],
            ['id'=>4,
             'category' => 'Hackathon'
            ]
        );
        DB::table('categories')->insert($data);
    }
}
