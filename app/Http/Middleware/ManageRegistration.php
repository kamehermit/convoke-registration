<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Event;
use App\Team;

class ManageRegistration
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $model = new User;
        $validator = app('validator')->make($request->input(), $model->rules($request));
        //$this->validate($request,User::$event_id_validation_rule);
        $data = $request->all();   
        if($u_id = User::where('email',$data['email'])->get()->first()){
            $check = User::find($u_id->id)->registration;
            foreach($check as $key) {
                if($key->event_id == $data['id'])
                    return redirect()->back()->withErrors('You are already registered for this event!')->withInput();
            }
        }
        if(isset($data['code'])){
            $participants = Event::find($data['id']);
            $team_id = Team::where('code',$data['code'])->get(['id'])->first();
            $members = Team::find($team_id->id)->user;
            if($participants->participants >= $members->count()){
                return redirect()->back()->withErrors('Maximum number of members reached!')->withInput();
            }
        }
        return $next($request);
    }
}
