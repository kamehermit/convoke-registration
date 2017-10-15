<?php

use Illuminate\Database\Seeder;

class EventInchargeSeeder extends Seeder
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
        	 'event_id'=>1,
        	 'member_id'=>7
        	],
        	['id'=>2,
        	 'event_id'=>1,
        	 'member_id'=>12
        	],
        	['id'=>3,
        	 'event_id'=>2,
        	 'member_id'=>7
        	],
        	['id'=>4,
        	 'event_id'=>2,
        	 'member_id'=>12
        	],
        	['id'=>5,
        	 'event_id'=>3,
        	 'member_id'=>7
        	],
        	['id'=>6,
        	 'event_id'=>3,
        	 'member_id'=>12
        	],
        	['id'=>7,
        	 'event_id'=>4,
        	 'member_id'=>11
        	],
        	['id'=>8,
        	 'event_id'=>5,
        	 'member_id'=>1
        	],
        	['id'=>9,
        	 'event_id'=>6,
        	 'member_id'=>2
        	],
        	['id'=>10,
        	 'event_id'=>7,
        	 'member_id'=>3
        	],
        	['id'=>11,
        	 'event_id'=>8,
        	 'member_id'=>8
        	],
        	['id'=>12,
        	 'event_id'=>8,
        	 'member_id'=>9
        	],
        	['id'=>13,
        	 'event_id'=>9,
        	 'member_id'=>12
        	],
        	['id'=>14,
        	 'event_id'=>10,
        	 'member_id'=>10
        	],
        	['id'=>15,
        	 'event_id'=>11,
        	 'member_id'=>11
        	],
        	['id'=>16,
        	 'event_id'=>12,
        	 'member_id'=>7
        	]
        );
        DB::table('event_incharges')->insert($data);
    }
}
