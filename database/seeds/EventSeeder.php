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
        	['id'=>1,
        	 'name' => 'Robotics Bootcamp',
        	 'category_id'=>1,
        	 'image' => 'r2d2.png',
        	 'description'=>'<p>ROBOTICS & Internet of Things WORKSHOP covers base to intermediate level of developing Robot with IoT and making you an expert in just two days of workshop.</p>
<h3>Is this course certified?</h3>
<p>This is a certification course from Kyrion and shows that the student has made extra effort apart from normal college courses to learn a skill.</p>
<h3>Who is this workshop for?</h3>
<p>Students who are passionate to gain knowledge and have the zest to learn new things.</p>
<p>No prior knowledge of IoT or Robotics is mandatory. There will be a lot to learn, no matter what your programming skills.
</p>
<h3>Topics to be covered</h3>
<ul>
  <li>Introduction to Robotics</li>
  <li>Introduction to Embedded Systems</li>
  <li>Chips & Actuators</li>
  <li>Microcontrollers & IC</li>
  <li>Developing Autonomous Robot</li>
  <li>Line Follower Robot</li>
  <li>Live project-based learning</li>
</ul>
<h3>Duration</h3>
<p>16 hours (2 days)</p>
<h3>Venue</h3>
<p>Room 124, First Floor, Cluster Innovation Centre, Inside University Stadium, North Campus, University of Delhi - 110007</p>
For more info, please visit <a href="https://goo.gl/irauCn">here</a>.
',
        	 'nm_tickets'=>44,
        	 'nm_tickets_amt'=>1100.00,
        	 'eb_tickets'=>6,
        	 'eb_tickets_amt'=>850.00,
             'room_no' => 'Engineering Kitchen - 3rd Floor',
             'participants'=>1,
        	 'start_date_time'=>'2017-10-26 10:00:00',
        	 'end_date_time'=>'2017-10-27 17:00:00'
        	],
        	['id'=>2,
        	 'name' => 'LoopHole : Ethical Hacking',
        	 'category_id'=>1,
        	 'image' => 'cnn.png',
        	 'description'=>'<p>Loophole, Ethical Hacking and Penetration Testing workshop, aims to educate users of digital media of the threats, risks and privacy concerns that go with using them. The other goal of this training module is to expose issues and vulnerabilities to drive the digital media industry to create solutions to these problems. </p>
<h3>Is this course certified?</h3>
<p>This is a certification course from Kyrion and shows that the student has made extra effort apart from normal college courses to learn a skill.</p>
<h3>Who is this workshop for?</h3>
<p>Anyone who knows the basics of programming (variables, functions, loops, if-else statements etc) and wants to venture into the field of hacking.</p>
<h3>Topics to be covered</h3>
<ul>
  <li>Information security management system with Concept of Hacking</li>
  <li>Indian Cyber Law</li>
  <li>Web Application Penetration Testing</li>
  <li>Basics of Secure Programming</li>
  <li>Hacking Emails and Social Networks</li>
  <li>Hacking and Securing Windows Systems</li>
  <li>Software Cracking: Product Key Generation</li>
  <li>Mobile Hacking Techniques and Security Concepts</li>
</ul>
<h3>Duration</h3>
<p>16 hours (2 days)</p>
<h3>Venue</h3>
<p>Room 124, First Floor, Cluster Innovation Centre, Inside University Stadium, North Campus, University of Delhi - 110007</p>
For more info, please visit <a href="https://goo.gl/Rcs8sY">here</a>.
',
        	 'nm_tickets'=>44,
        	 'nm_tickets_amt'=>1000.00,
        	 'eb_tickets'=>6,
        	 'eb_tickets_amt'=>750.00,
             'room_no' => 'Seminar Hall',
             'participants'=>1,
        	 'start_date_time'=>'2017-10-26 09:30:00',
        	 'end_date_time'=>'2017-10-27 17:30:00'
        	],
            ['id'=>3,
             'name' => 'MyDroid : Android Workshop',
             'category_id'=>1,
             'image' => 'android.png',
             'description'=>'<p>Own an Android smartphone? Ever wondered how such immersive apps are built in Android? Want to make one of your own? Come and join this amazing workshop which will help you through the process of Android app development and by the time we are finished, you will have learned enough to go on to build your very own awesome apps!</p>
<h3>Is this course certified?</h3>
<p>This is a certification course from Kyrion and shows that the student has made extra effort apart from normal college courses to learn a skill.</p>
<h3>Who is this workshop for?</h3>
<p>Anyone who knows the basics of programming (variables, functions, loops, if-else statements etc) and is interested in developing Android applications on his/her own. </p>
<p>No prior knowledge of Java or Android app development is mandatory. There will be a lot to learn, no matter what your programming skills.
</p>
<h3>Topics to be covered</h3>
<ul>
  <li>Concepts of object oriented programming</li>
  <li>Working with Android Studio and the coding for the cutting edge android versions</li>
  <li>Development and design of UI(layout) for the android application</li>
  <li>Java coding for backend of the app</li>
  <li>Testing and debugging the app on your own Android phone</li>
  <li>Live project-based learning</li>
</ul>
<h3>Duration</h3>
<p>16 hours (2 days)</p>
<h3>Venue</h3>
<p>Room 124, First Floor, Cluster Innovation Centre, Inside University Stadium, North Campus, University of Delhi - 110007</p>
For more info, please visit <a href="https://goo.gl/HuFNFi">here</a>.',
             'nm_tickets'=>44,
        	 'nm_tickets_amt'=>1000.00,
        	 'eb_tickets'=>6,
        	 'eb_tickets_amt'=>750.00,
             'room_no' => '124',
             'participants'=>1,
        	 'start_date_time'=>'2017-10-26 10:00:00',
        	 'end_date_time'=>'2017-10-27 17:00:00'
            ],
            ['id'=>4,
             'name' => 'B-Plan',
             'category_id'=>2,
             'image' => 'cnn.png',
             'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque commodo ante, et consequat tellus vestibulum vel. Nunc vel neque vel erat auctor sagittis. Curabitur tristique auctor leo, eu lobortis nisl porta non. Sed interdum varius nibh eleifend commodo. Praesent nulla eros, suscipit vitae varius nec, pulvinar ut eros. Nunc facilisis sodales mi eu fringilla. Pellentesque porta nisl sit amet urna facilisis, id ullamcorper felis sodales. Quisque volutpat venenatis dignissim. Sed ut varius justo. Vivamus ornare sit amet mi quis iaculis. Aliquam turpis quam, sagittis nec consectetur sed, finibus quis purus. Nam quis orci vel risus faucibus eleifend sit amet sed justo.',
             'nm_tickets'=>60,
             'nm_tickets_amt'=>0,
             'eb_tickets'=>0,
             'eb_tickets_amt'=>0,
             'room_no' => 'Seminar Hall',
             'participants'=>3,
             'start_date_time'=>'2017-10-28 10:00:00',
             'end_date_time'=>'2017-10-28 16:00:00'
            ],
            ['id'=>5,
             'name' => 'Robo Race',
             'category_id'=>2,
             'image' => 'r2d2.png',
             'description'=>'<p>Design a robot either wired or wireless within the specified dimensions that can be operated manually/autonomously and can move through the specified track (having 7 obstacles). The robot that will complete the most tasks in least time will be the winner.</p>
<h3>Eligibility</h3>
<ul style="list-style:none;">
  <li>Anyone with a bot is eligible.</li>
</ul>
<h3>ROBOT SPECIFICATIONS</h3>
<ul>
  <li>The maximum dimension of the robot can be _ x  cm (l x b).</li>
  <li>The robot may be wired or wireless.</li>
  <li>The length of the wire (for wired bots) should be long enough to cover the whole track and wire should remain slack during the complete run.</li>
  <li>Max weight must not exceed 6 kg.</li>
  <li>Readymade toy cars/ Lego-kits are not allowed.</li>
</ul>
<h3>TRACK SPECIFICATIONS</h3>
<ul>
  <li>The race track will be _m long.</li>
  <li>The track surface and course line may be uneven.</li>
  <li>There might be abrupt angles, but these will not exceed 30 degrees.</li>
  <li>There will be certain obstacles in the race track which will try to slow down the robot.</li>
  <li>Arena may consist of Bridge, speed breakers, marble pit, slippery path, curved ramp, seesaw etc.</li>
</ul>
<h3>PHASES IN THE EVENT</h3>
<ul>
  <li>The competition is based on time trial system i.e. one who completes the race in shortest amount of time (crossing all the hurdles) will be declared as winner.</li>
  <li>The number of rounds solely depend on the number of participants (will be informed at the time of the event).</li>
  <li>Wires should remain slack during the course of the run. Pulling the wire to aid the robot in traversing may lead to disqualification.</li>
  <li>During the time robot is on the track, a maximum of three hand touches are allowed with a penalty of 10 seconds each. For each hand touch, penalty time will be added further to overall time required by robot for completion of specified round.</li>
  <li>Your robot must be ready when call is made for your team.</li>
</ul>
<h3>RULES AND REGULATION</h3>
<ul>
  <li>The team must consist of a maximum of 3 members(including team leader).</li>
  <li>Cross college teams are allowed.</li>
  <li>The robot should follow the robot specifications mentioned above.</li>
  <li>No test practice will be allowed on the main arena after the commencement of race.</li>
  <li>Terminals for charging the battery will be provided in the college but try to bring fully charged battery to avoid any last minute mishappening.</li>
  <li>The arena is subject to change before the commencement of any round.</li>
  <li>If the Robot crosses a checkpoint, and then moves off track,then the Robot will have to start from the previous checkpoint crossed.</li>
  <li>During the race, if any part of a robot is destroyed/dismantled/damaged, the participant will be given some predefined time to repair at an expense of a penalty.</li>
  <li>The decision of the judges will be final and abiding.</li>
</ul>',
             'nm_tickets'=>120,
             'nm_tickets_amt'=>0,
             'eb_tickets'=>0,
             'eb_tickets_amt'=>0,
             'room_no' => 'Open Area',
             'participants'=>3,
             'start_date_time'=>'2017-10-28 10:00:00',
             'end_date_time'=>'2017-10-28 18:00:00'
            ],
            ['id'=>6,
             'name' => 'Robot Lineae',
             'category_id'=>2,
             'image' => 'r2d2.png',
             'description'=>'<p>The participants must create an autonomous ROBOT that will follow a specific path on the arena. The ROBOT which will start from the START position and reach the END position by following the lines with maximum points will be declared as the winner.</p>
<h3>Eligibility</h3>
<ul>
  <li>The contest is open to everyone who is interested in robotics.</li>
  <li>A team can have maximum of 5 members (including the Robot).</li>
  <li>Teams are allowed to have inter-college members.</li>
  <li>One and only one member of each team needs to be a robot.</li>
</ul>
<h3>Competition Structure</h3>
<ul>
  <li>Competition will be divided into two rounds.</li>
  <li>All teams will participate in both rounds.</li>
  <li>Each round will take place in different arenas. Though both the arenas will have lines that the robot will needs to follow, each arena will present different challenges.</li>
  <li>In each round, participating teams will be given a time slot of 15 mins (subject to change) during which they will have full access to the arena.</li>
  <li>During their time slot, teams can have unlimited trial runs on the arena but only 5 of them will be considered as MARKED RUNS for which they will be scored. Teams will have to notify the scoring staff before runs for which they wish to be MARKED.</li>
  <li>Once the competition starts, teams are allowed to test their ROBOT on the arena only during their allotted time slot.</li>
  <li>Teams are <strong>STRONGLY</strong> advised to bring some spare parts and tools to modify their robots according to the challenges of the arena as no such tools will be provided by the organizers.</li>
</ul>
<h3>Scoring</h3>
<ul>
  <li>Team with the most score (sum of both rounds) will be declared as the winner.</li>
  <li>All teams are initially given 1000 points for each round.</li>
  <li>Number of seconds taken to complete the arena will be deducted from their total points.</li>
  <li>10 points will be added for each CHECKPOINT crossed. All of the Robots body has to cross the CHECKPOINT for it to be considered as CROSSED.</li>
  <li>Robot must pass through all checkpoints.</li>
  <li>If a Robot deviates from the marked path on the arena, it will have to resume from the last checkpoint crossed.</li>
  <li>30 points will be deducted for each human touch.</li>
  <li>Best score of 5 MARKED RUNS will be used for the final result.</li>
  <li>If a team wishes to end their RUN before completing the arena, { 300 points  + 30 x [Each remaining checkpoint] } points will be deducted.</li>
</ul>
<h3>Arena</h3>
<ul>
  <li>
    <strong>ROUND 1</strong>
    <ul>
      <li>The COMPETITION ARENA consists of 2.4x1.8 SqM wooden board.</li>
      <li>Base of the ARENA can be of white/black colour with lines of the opposite colour. Teams are expected bring a modular robot that allows for quick changes to handle the surprises we have for you.</li>
      <li>Lines will be 25mm in width.</li>
      <li>Minimum distance between two parallel lines can be 15cm.</li>
      <li>Maximum angle of a turn is 90 degrees.</li>
    </ul>
  </li>
  <br>
  <li>
    <strong>ROUND 2</strong>
    <ul>
      <li>The COMPETITION ARENA consists of 1.6x1.2 SqM board.</li>
      <li>Base of the ARENA can be of white/black colour with lines of the opposite colour. Teams are expected to be ready to change their ROBOT accordingly.</li>
      <li>Lines will be 25mm in width.</li>
      <li>Minimum distance between two parallel lines can be 10cm.</li>
      <li>Maximum angle of a turn is 90 degrees.</li>
    </ul>
  </li>
  <br>
  <li>All measurements and dimensions can have up to 10% tolerance.</li>
  <li>There will be one START point and one FINISH point in the entire field.</li>
</ul>

<h3>Robot</h3>
<ul>
  <li>
    <strong>Dimensions</strong>
    <br>The following size limitations applies for each robot
    <ul>
      <li>Width – maximum 160mm</li>
      <li>Length - maximum 160mm</li>
      <li>Height – no limit</li>
    </ul>
  </li>
  <br>
  <li>
    <strong>Control</strong>
    <ul>
      <li>The robot must be controlled autonomously without any human aid.</li>
      <li>There should be no wire attached to ROBOT from any other computation source [Laptop, Smartphone etc.] during their MARKED RUN.</li>
    </ul>
  </li>
  <br>
  <li>
    <strong>Power Source</strong>
    <ul>
      <li>The robot must be powered by a power source such as a battery fixed on the robot.</li>
      <li>The Robot cannot be powered by a stationary power source connected to the robot by a cord.</li>
    </ul>
  </li>
  <br>
  <li>
    <strong>Construction</strong>
    <ul>
      <li>Any robot kit or building material may be used, as long as the robot fits the above specifications and as long as the design and construction are primarily the original work of the team.
  </li>
    </ul>
  <br>
  <li>All measurements and dimensions can have up to 10% tolerance.</li>
  <li>There will be one START point and one FINISH point in the entire field.</li>
</ul>
<h3>Rules and Regulation</h3>
<ul>
  <li>In case of any discrepancy the decision of organisers is final.</li>
  <li>MARKED RUN completion time will be clocked by the scoring staff. Any objections on clocked time will not be entertained.</li>
</ul>

',
             'nm_tickets'=>120,
             'nm_tickets_amt'=>0,
             'eb_tickets'=>0,
             'eb_tickets_amt'=>0,
             'room_no' => 'Open Area',
             'participants'=>3,
             'start_date_time'=>'2017-10-28 10:00:00',
             'end_date_time'=>'2017-10-28 18:00:00'
            ],
            ['id'=>7,
             'name' => 'Robo Soccer',
             'category_id'=>2,
             'image' => 'r2d2.png',
             'description'=>'<p>Participants brings a remote controlled robot (wired or wireless) and compete against each other in a soccer tournament.</p>
<h3>Eligibility</h3>
<ul>
  <li>The contest is open to everyone who is interested in robotics and loves soccer.</li>
  <li>The team can comprise a maximum of 4 members (including the robot).</li>
  <li>One and only one member of each team needs to be a robot.</li>
  <li>Cross college/school teams are allowed.</li>
</ul>
<h3>Rules and Regulation</h3>
<ul>
  <li>The tournament will have a group stage followed by a knock out stage.</li>
  <li>Group stage</li>
  <ul>
    <li>The matches in the group stage will be 3 minutes long.</li>
    <li>Each team can take one technical time out 30 seconds long.</li>
    <li>There will be no half time.</li>
  </ul>
  <li>Knockout stage</li>
  <ul>
    <li>The matches in the knockout stage will be 5 minutes long.</li>
    <li>Each team can take a technical time out 1 minute long.</li>
    <li>There will be a half time break of 30 seconds after 2 minutes and 30 seconds.</li>
  </ul>
    <li>Arena Specification</li>
  <ul>
    <li>Arena is 2 x 1.2 m in length.</li>
    <li>The scoring area is 50(length) x 35(height) cm.</li>
  </ul>
  <li>Ball Specification</li>
  <ul>
    <li>The ball is a cm in diameter</li>
    <li>The weight of the ball is 5 g.</li>
  </ul>
  <li>Robot Specification</li>
  <ul>
    <li>The maximum allowed size is 30 x 30 x 30 c m.</li>
    <li>The robot should not have any component that can intentionally damage the the opponent or the arena.</li>
    <li>The robot may be wired or wireless.</li>
    <li>If wired, the length of wire should be long enough to cover the entire arena.</li>
    <li>The robot should not have a design that can trap the ball.</li>
  </ul>
  <li>Any team intentionally damaging the track or the robot of competing teams will be disqualified. </li>
  <li>The decision of the organizer is final and binding.</li>
</ul>
',
             'nm_tickets'=>120,
             'nm_tickets_amt'=>0,
             'eb_tickets'=>0,
             'eb_tickets_amt'=>0,
             'room_no' => 'Open Area',
             'participants'=>3,
             'start_date_time'=>'2017-10-28 10:00:00',
             'end_date_time'=>'2017-10-28 18:00:00'
            ],
            ['id'=>8,
             'name' => 'DataJam',
             'category_id'=>2,
             'image' => 'cnn.png',
             'description'=>'<p>The motto of the competition is to make fast but efficient use of the provided dataset in order to perform predictive analysis, making the best use of data science tools and libraries under the hood. Don’t do over or under, just fit the data right!
</p>
<h3>Event Guidelines</h3>
<ul>
  <li>You will be provided with a dataset to work on.</li>
  <li>Register on Kaggle to access the dataset.</li>
  <li>The event will take place on 28th October 2017, 1000 hrs - 1600 hrs IST.
</li>
  <li>It will be a six hour event.</li>
  <li>It is an offline event.</li>
  <li>Only one account per team is allowed.</li>
  <li>Sharing of code outside  teams will be prohibited.</li>
  <li>Languages allowed: Python and R.</li>
</ul>
<h3>Judging Criteria</h3>
<ul>
  <li>The format to be used for submission of results will be duly updated on the Competition webpage.</li>
  <li>Teams will also need to upload their detailed solution on GitHub.</li>
</ul>
<h3>Eligibility</h3>
<ul>
  <li>For claiming the prize, all members of the team should be full-time students currently enrolled in an university or school. Please carry a proof (ID card, copy of transcript/result, etc.) for the same.</li>
  <li>A team can consist of <strong>at most</strong> 2 members.</li>
</ul>
',
             'nm_tickets'=>60,
             'nm_tickets_amt'=>0,
             'eb_tickets'=>0,
             'eb_tickets_amt'=>0,
             'room_no' => '124',
             'participants'=>3,
             'start_date_time'=>'2017-10-28 10:00:00',
             'end_date_time'=>'2017-10-28 16:00:00'
            ],
            ['id'=>9,
             'name' => 'Brain Battles',
             'category_id'=>2,
             'image' => 'cnn.png',
             'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque commodo ante, et consequat tellus vestibulum vel. Nunc vel neque vel erat auctor sagittis. Curabitur tristique auctor leo, eu lobortis nisl porta non. Sed interdum varius nibh eleifend commodo. Praesent nulla eros, suscipit vitae varius nec, pulvinar ut eros. Nunc facilisis sodales mi eu fringilla. Pellentesque porta nisl sit amet urna facilisis, id ullamcorper felis sodales. Quisque volutpat venenatis dignissim. Sed ut varius justo. Vivamus ornare sit amet mi quis iaculis. Aliquam turpis quam, sagittis nec consectetur sed, finibus quis purus. Nam quis orci vel risus faucibus eleifend sit amet sed justo.',
             'nm_tickets'=>120,
             'nm_tickets_amt'=>0,
             'eb_tickets'=>0,
             'eb_tickets_amt'=>0,
             'room_no' => 'Open Area',
             'participants'=>2,
             'start_date_time'=>'2017-10-27 14:00:00',
             'end_date_time'=>'2017-10-27 18:00:00'
            ],
            ['id'=>10,
             'name' => '#DEFINE',
             'category_id'=>2,
             'image' => 'cnn.png',
             'description'=>'<p>We are getting closer to ACM ICPC India regionals. With so much programming action coming your way and so little time to prepare for it, you must not leave a single stone unturned. If you are preparing for ACM ICPC or looking to challenge your programming skills you surely would not want to miss this contest.</p>
<p>Cluster Innovation Centre, University of Delhi is hosting a programming contest ‘#define’ on the hackerearth platform.
The contest is open to all, however prizes are only for students who are physically available at the venue. 
</p>
<h3>Eligibility</h3>
<p>The contest is open to all who have a knack for competitive programming and like to play around algorithms.</p>
<strong>Team size:</strong>  Maximum of 3 members per team
<br><br>
<p>Contest will have 5 questions, all of them will be data structure and algorithm intensive. In order to participate, all you have to do is register on hackerearth. After this, register on the contest using this link.
You will receive points for solving a problem (passing all test cases - no partial credit), regardless of the level of difficulty of that problem.
</p>
<h3>Judging Criteria</h3>
<ol>
  <li>You will receive points for solving a problem (passing all test cases - no partial credit), regardless of the level of difficulty of that problem. </li>
  <li>The team solving maximum number of problems will win.
</li>
</ol>
<h3>T&C</h3>
<ol>
  <li>If you encounter any problem during an ongoing contest, the problem setter will help you get over it. You can communicate your concerns to the volunteers at any time, details of which are mentioned at the bottom of this page.</li>
  <li>Avoid using any online IDEs or code sharing sites. If you’re using ideone, you can read about protecting your code on ideone here. It’s advisable to use hackerearth’s IDE or your own system’s.</li>
  <li>Taking help or using a third party code is not bad. Passing it off as your own is. If you are taking your code from some other source, it is expected that you give the due attribution to the source in your code. It is mandatory.</li>
  <li>Do not ask or discuss any aspect of any problem during an ongoing contest on any platform, online or offline. Discussion of strategy should be avoided during the contest and postponed till the end.</li>
  <li>You shall avoid sharing formulae, logic, or any other significant aspect of your problem, which can take your solutions under scanner and make you look untidy.</li>
</ol>',
             'nm_tickets'=>60,
             'nm_tickets_amt'=>0,
             'eb_tickets'=>0,
             'eb_tickets_amt'=>0,
             'room_no' => '302,303,309',
             'participants'=>3,
             'start_date_time'=>'2017-10-26 11:00:00',
             'end_date_time'=>'2017-10-26 14:00:00'
            ],
            
            ['id'=>12,
             'name' => 'Talk 1',
             'category_id'=>3,
             'image' => 'cnn.png',
             'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque commodo ante, et consequat tellus vestibulum vel. Nunc vel neque vel erat auctor sagittis. Curabitur tristique auctor leo, eu lobortis nisl porta non. Sed interdum varius nibh eleifend commodo. Praesent nulla eros, suscipit vitae varius nec, pulvinar ut eros. Nunc facilisis sodales mi eu fringilla. Pellentesque porta nisl sit amet urna facilisis, id ullamcorper felis sodales. Quisque volutpat venenatis dignissim. Sed ut varius justo. Vivamus ornare sit amet mi quis iaculis. Aliquam turpis quam, sagittis nec consectetur sed, finibus quis purus. Nam quis orci vel risus faucibus eleifend sit amet sed justo.',
             'nm_tickets'=>120,
             'nm_tickets_amt'=>0,
             'eb_tickets'=>0,
             'eb_tickets_amt'=>0,
             'room_no' => 'Open Area',
             'participants'=>1,
             'start_date_time'=>'2017-10-26 10:00:00',
             'end_date_time'=>'2017-10-26 12:00:00'
            ]
        );
        DB::table('events')->insert($data);
    }
}
