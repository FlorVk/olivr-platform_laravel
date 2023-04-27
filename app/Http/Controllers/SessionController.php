<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function newSession(){
        return view('/timeouts/create/new-session', [
            'rooms' => Room::all(),
            
        ]);
    }

    public function timeout(){
        return view('/timeouts/timeout-home', [
            'sessions' => Session::all()
        ]);
    }
}
