<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Session;
use App\Models\UserRooms;
use Illuminate\Support\Facades\Auth;
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


        $selectedDay = now()->format('Y-m-d');
        $sessions = Session::whereDate('session_date', $selectedDay)
        ->orderBy('session_date', 'desc')
        ->paginate(5);

        $sessions->getCollection()->transform(function ($session) {
            $session->session_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->session_date)->format('Y-m-d');
            return $session;
        });

        

        return view('dashboard', compact('sessions', 'chart'));
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

    public function vrBuy()
    {
        $attributes = request()->validate([
            'room_id' => 'required'
        ]);
        
        $userId = Auth::id();

        $attributes['user_id'] = $userId;
        $attributes['user_id'] = auth()->id();

        UserRooms::create($attributes);

        return redirect('/vr');
    }

    
}
