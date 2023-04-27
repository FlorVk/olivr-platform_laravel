<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Session;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        return view('dashboard', [
            'sessions' => Session::all()
        ]);
    }

    public function vr(){
        return view('/vr/vr', [
            'rooms' => Room::all()
        ]);
    }
    
}
