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
            'sessions' => Session::all()
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
    
}
