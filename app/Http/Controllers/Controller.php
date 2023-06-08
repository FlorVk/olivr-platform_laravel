<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Session;
use Illuminate\Routing\Controller as BaseController;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        $options = [
            'chart_title' => 'Time-outs deze week',
            'chart_type' => 'bar',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Session',
            'group_by_field' => 'session_date',
            'group_by_period' => 'day',
            'entries_number' => '7',
            'style_class' => 'chart',
            'chart_color' => '128,216,152',
            'date_format' => 'd-m',
            'chart_height' => '200px',
            'filter_field' => 'session_date',
            'filter_period' => 'week',
            
            
        ];

        $chart = new LaravelChart($options);
        
        return view('dashboard', [
            'sessions' => Session::paginate(5)
        ], 
        compact('chart'));
    }

    public function vr(){
        return view('/vr/vr', [
            'rooms' => Room::all()
        ]);
    }

    public function roomCreate(){
        return view('admin.rooms.create', [
            
        ]);
    }

    
}
