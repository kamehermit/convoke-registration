<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	['name'=>'1',
        	 'uid' => 'xh8g6js2'
        	],
        	['name'=>'2',
        	 'uid' => '9r7gh23r'
        	],
            ['name'=>'3',
             'uid' => '4876hdr7'
            ],
            ['name'=>'4',
             'uid' => '09dfg23h'
            ],
            ['name'=>'5',
             'uid' => 'hfgsd45f'
            ],
            ['name'=>'6',
             'uid' => '00maqw9x'
            ],
            ['name'=>'7',
             'uid' => '185j7hh3'
            ],
            ['name'=>'8',
             'uid' => 'ngdh8823'
            ],
            ['name'=>'9',
             'uid' => '09dhsb5s'
            ],
            ['name'=>'10',
             'uid' => '06fh3fhj'
            ]
        );
        DB::table('admins')->insert($data);
    }
}
