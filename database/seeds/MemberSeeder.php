<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
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
        	 'name' => 'Shreyas',
        	 'contact' => '+918750608905'
        	],
        	['id'=>2,
        	 'name' => 'Vaibhav',
        	 'contact' => '+919650159152'
        	],
            ['id'=>3,
             'name' => 'Shashwat',
             'contact' => '+917677407080'
            ],
            ['id'=>4,
             'name' => 'Ridhwan',
             'contact' => '+917838037123'
            ],
            ['id'=>5,
             'name' => 'Vikas',
             'contact' => '+918076218213'
            ],
            ['id'=>6,
             'name' => 'Pankaj',
             'contact' => '+919643531782'
            ],
            ['id'=>7,
             'name' => 'Utkarsh',
             'contact' => '+919873006032'
            ],
            ['id'=>8,
             'name' => 'Arjun',
             'contact' => '+919999202899'
            ],
            ['id'=>9,
             'name' => 'Anushtha',
             'contact' => '+919599927981'
            ],
            ['id'=>10,
             'name' => 'Abhishek Sehgal',
             'contact' => '+918800257352'
            ],
            ['id'=>11,
             'name'=>'Mukul',
             'contact'=>'+918875437603'
            ],
            ['id'=>12,
             'name'=>'Lakshay',
             'contact'=>'+919811717305'
            ],
            ['id'=>13,
             'name'=>'Aditya Gaur',
             'contact'=>'+919582961942'
            ]
        );
        DB::table('members')->insert($data);
    }
}
