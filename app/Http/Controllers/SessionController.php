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


    

    public function timeout(Request $request){
        $query = Session::query();

        $studentClass = $request->query('student_class');
        if ($studentClass) {
            $query->whereHas('student', function ($q) use ($studentClass) {
                $q->where('student_class', $studentClass);
            });
        }

        $sessionDate = $request->query('session_date');
        if ($sessionDate) {
            $query->whereDate('session_date', $sessionDate);
        }

        $searchTerm = $request->query('search');
        if ($searchTerm) {
            $query->whereHas('student', function ($q) use ($searchTerm) {
                $q->where('student_name', 'like', '%' . $searchTerm . '%');
            });
        }

        $sessions = $query->orderBy('session_date', 'desc')->paginate(7);

        $sessions->getCollection()->transform(function ($session) {
            $session->session_date = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $session->session_date)->format('Y-m-d');
            return $session;
        });

        $studentClasses = Student::pluck('student_class')->unique();
        $sessionDates = Session::pluck('session_date')->unique()->map(function ($date) {
            return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('Y-m-d');
        })->unique();

        return view('/timeouts/timeout-home', compact('sessions', 'studentClasses', 'sessionDates'));
    }

    public function timeoutDetailed(Session $session){
        $session->session_date = date('d-m-Y - H:i', strtotime($session->session_date));

        return view('/timeouts/timeout-detail', [
            'session' => $session
        ]);
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
