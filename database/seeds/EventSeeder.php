<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	['id'=>56083476,
        	 'name' => 'Line Following Robot (LFR)',
        	 'category_id'=>1,
        	 'image' => 'r2d2.png',
        	 'description'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque commodo ante, et consequat tellus vestibulum vel. Nunc vel neque vel erat auctor sagittis. Curabitur tristique auctor leo, eu lobortis nisl porta non. Sed interdum varius nibh eleifend commodo. Praesent nulla eros, suscipit vitae varius nec, pulvinar ut eros. Nunc facilisis sodales mi eu fringilla. Pellentesque porta nisl sit amet urna facilisis, id ullamcorper felis sodales. Quisque volutpat venenatis dignissim. Sed ut varius justo. Vivamus ornare sit amet mi quis iaculis. Aliquam turpis quam, sagittis nec consectetur sed, finibus quis purus. Nam quis orci vel risus faucibus eleifend sit amet sed justo.</p><p>Nulla pellentesque lorem eget risus gravida, nec sollicitudin dolor pulvinar. Nam mauris lectus, eleifend at nisi et, laoreet suscipit augue. Nunc dui nisi, interdum id tellus eu, fermentum commodo tortor. Nullam accumsan sed dui vel dapibus. Nulla ex odio, congue at augue non, consectetur faucibus ante. Duis sit amet dui risus. Nulla tempus maximus ipsum sed sagittis. Ut id finibus urna, sit amet convallis sapien. </p><p>In porta mauris velit, ac pretium nibh sagittis et. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tempor nisi lorem, eu porta lacus rutrum sit amet. Quisque vitae quam sit amet lorem sollicitudin pulvinar. Phasellus nunc diam, pharetra sed nunc eu, facilisis ultrices felis. Donec enim purus, sodales id sodales ac, maximus at purus. Phasellus sit amet augue nec est finibus luctus ac ac nunc. Donec in efficitur erat. Vivamus fermentum, libero nec volutpat elementum, sapien felis rutrum erat, vitae rutrum neque nibh non libero. </p>',
        	 'nm_tickets'=>30,
        	 'nm_tickets_amt'=>500.00,
        	 'eb_tickets'=>10,
        	 'eb_tickets_amt'=>350.00,
             'room_no' => 'Engineering Kitchen - 3rd Floor',
        	 'start_date_time'=>'2017-10-26 10:00:00',
        	 'end_date_time'=>'2017-10-27 17:00:00'
        	],
        	['id'=>26834642,
        	 'name' => 'Convolutional Neural Networks (CNN)',
        	 'category_id'=>1,
        	 'image' => 'cnn.png',
        	 'description'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque commodo ante, et consequat tellus vestibulum vel. Nunc vel neque vel erat auctor sagittis. Curabitur tristique auctor leo, eu lobortis nisl porta non. Sed interdum varius nibh eleifend commodo. Praesent nulla eros, suscipit vitae varius nec, pulvinar ut eros. Nunc facilisis sodales mi eu fringilla. Pellentesque porta nisl sit amet urna facilisis, id ullamcorper felis sodales. Quisque volutpat venenatis dignissim. Sed ut varius justo. Vivamus ornare sit amet mi quis iaculis. Aliquam turpis quam, sagittis nec consectetur sed, finibus quis purus. Nam quis orci vel risus faucibus eleifend sit amet sed justo.<br>In porta mauris velit, ac pretium nibh sagittis et. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tempor nisi lorem, eu porta lacus rutrum sit amet. Quisque vitae quam sit amet lorem sollicitudin pulvinar. Phasellus nunc diam, pharetra sed nunc eu, facilisis ultrices felis. Donec enim purus, sodales id sodales ac, maximus at purus. Phasellus sit amet augue nec est finibus luctus ac ac nunc. Donec in efficitur erat. Vivamus fermentum, libero nec volutpat elementum, sapien felis rutrum erat, vitae rutrum neque nibh non libero. </p><p>Nulla pellentesque lorem eget risus gravida, nec sollicitudin dolor pulvinar. Nam mauris lectus, eleifend at nisi et, laoreet suscipit augue. Nunc dui nisi, interdum id tellus eu, fermentum commodo tortor. Nullam accumsan sed dui vel dapibus. Nulla ex odio, congue at augue non, consectetur faucibus ante. Duis sit amet dui risus. Nulla tempus maximus ipsum sed sagittis. Ut id finibus urna, sit amet convallis sapien. </p>',
        	 'nm_tickets'=>30,
        	 'nm_tickets_amt'=>500.00,
        	 'eb_tickets'=>15,
        	 'eb_tickets_amt'=>300.00,
             'room_no' => '302',
        	 'start_date_time'=>'2017-10-26 10:00:00',
        	 'end_date_time'=>'2017-10-27 17:00:00'
        	],
            ['id'=>14956259,
             'name' => 'Android',
             'category_id'=>1,
             'image' => 'android.png',
             'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque commodo ante, et consequat tellus vestibulum vel. Nunc vel neque vel erat auctor sagittis. Curabitur tristique auctor leo, eu lobortis nisl porta non. Sed interdum varius nibh eleifend commodo. Praesent nulla eros, suscipit vitae varius nec, pulvinar ut eros. Nunc facilisis sodales mi eu fringilla. Pellentesque porta nisl sit amet urna facilisis, id ullamcorper felis sodales. Quisque volutpat venenatis dignissim. Sed ut varius justo. Vivamus ornare sit amet mi quis iaculis. Aliquam turpis quam, sagittis nec consectetur sed, finibus quis purus. Nam quis orci vel risus faucibus eleifend sit amet sed justo.',
             'nm_tickets'=>45,
        	 'nm_tickets_amt'=>400.00,
        	 'eb_tickets'=>15,
        	 'eb_tickets_amt'=>250.00,
             'room_no' => '124',
        	 'start_date_time'=>'2017-10-26 10:00:00',
        	 'end_date_time'=>'2017-10-26 17:00:00'
            ],
            ['id'=>12374587,
             'name' => 'B-Plan',
             'category_id'=>3,
             'image' => 'cnn.png',
             'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque commodo ante, et consequat tellus vestibulum vel. Nunc vel neque vel erat auctor sagittis. Curabitur tristique auctor leo, eu lobortis nisl porta non. Sed interdum varius nibh eleifend commodo. Praesent nulla eros, suscipit vitae varius nec, pulvinar ut eros. Nunc facilisis sodales mi eu fringilla. Pellentesque porta nisl sit amet urna facilisis, id ullamcorper felis sodales. Quisque volutpat venenatis dignissim. Sed ut varius justo. Vivamus ornare sit amet mi quis iaculis. Aliquam turpis quam, sagittis nec consectetur sed, finibus quis purus. Nam quis orci vel risus faucibus eleifend sit amet sed justo.',
             'nm_tickets'=>60,
             'nm_tickets_amt'=>0,
             'eb_tickets'=>0,
             'eb_tickets_amt'=>0,
             'room_no' => 'Seminar Hall',
             'start_date_time'=>'2017-10-26 10:00:00',
             'end_date_time'=>'2017-10-26 17:00:00'
            ]
        );
        DB::table('events')->insert($data);
    }
}
