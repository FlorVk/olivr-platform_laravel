<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Session;
use App\Models\Student;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class SessionController extends Controller
{

    public function newSession(){
        return view('/timeouts/create/new-session', [
            'sessions' => Session::all(),
            'students' => Student::all(),
            'rooms' => Room::all()
        ]);
    }
    public function timeout(){
        return view('/timeouts/timeout-home', [
            'sessions' => Session::all()
        ]);
    }

    public function timeoutDetailed(Session $session){
        $options = [
            'chart_title' => 'Minuten in de ruimte',
            'chart_type' => 'pie',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Session',
            'group_by_field' => 'session_duration',
            'chart_height' => '100px',
        ];

        $chart = new LaravelChart($options);
        
        return view('/timeouts/timeout-detail', [
            'session' => $session
        ], 
        compact('chart'));
    }

    public function update(Session $session){
        $attributes = request()->validate([
            'session_description' => 'required',
        ]);

        $attributes['user_id'] = auth()->id();
        $session->update($attributes);

    
        return back()->with('success', 'Session updated');
    }

    public function updateDescription(Request $request, $id)
    {

        $session = Session::findOrFail($id);


        $session->session_description = $request->input('session_description');

        $session->save();

        return back()->with('success', 'Session updated');
    }


    public function sessionStore(){
       
        $attributes = request()->validate([
            'student_id' => 'required',
            'room_id' => 'required',
            'time_visibility' => 'required',
            'session_duration'=>'required'
        ]);

        $attributes['session_date'] = now();
        $attributes['user_id'] = auth()->id();

        $session = Session::create($attributes);

        return redirect('/timeout/' . $session->id);
    }
    
}
