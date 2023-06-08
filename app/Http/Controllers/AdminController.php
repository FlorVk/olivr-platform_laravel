<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Session;
use App\Models\Student;
use Illuminate\Routing\Controller as BaseController;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(){
        return view('admin.admin');
    }

    public function indexRooms(){
        return view('admin.rooms.rooms', [
            'rooms' => Room::paginate(10)
        ]);
    }

    public function roomCreate(){
        return view('admin.rooms.create', [
            
        ]);
    }

    public function roomStore(){

        $attributes = request()->validate([
            'room_name' => 'required',
            'room_description' => 'required',
            'room_image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);


        $attributes['user_id'] = auth()->id();
        $attributes['room_image'] = request()->file('room_image')->store('rooms');

        Room::create($attributes);

        return redirect('/');
    }

    public function editRoom(Room $room){
        return view('admin.rooms.edit', ['room' => $room]);
    }

    public function updateRoom (Room $room){

        $attributes = request()->validate([
            'room_name' => 'required',
            'room_description' => 'required',
            'room_image' => 'mimes:jpg,png,jpeg|max:5048',
            
        ]);


        if (isset($attributes['room_image'])){
            $attributes['room_image'] = request()->file('room_image')->store('rooms');
        }
        
        $room->update($attributes);

    
        return back()->with('success', 'Room updated');
    }

    public function destroyRoom(Room $room){
        $room->delete();

        return back()->with('success', 'Room deleted');
    }





    public function indexStudents(){
        return view('admin.students.students', [
            'students' => Student::paginate(5)
        ]);
    }

    public function studentCreate(){
        return view('admin.students.create', [
            
        ]);
    }

    public function studentStore(){

        $attributes = request()->validate([
            'student_name' => 'required',
            'student_class' => 'required',
            'student_image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);


        $attributes['user_id'] = auth()->id();
        $attributes['student_image'] = request()->file('student_image')->store('students');

        Student::create($attributes);

        return redirect('/');
    }

    public function editStudent(Student $student){
        return view('admin.students.edit', ['student' => $student]);
    }

    public function updateStudent (Student $student){

        $attributes = request()->validate([
            'student_name' => 'required',
            'student_class' => 'required',
            'student_image' => 'mimes:jpg,png,jpeg|max:5048',
        ]);


        if (isset($attributes['student_image'])){
            $attributes['student_image'] = request()->file('student_image')->store('students');
        }
        
        $student->update($attributes);

    
        return back()->with('success', 'Student updated');
    }

    public function destroyStudent(Student $student){
        $student->delete();

        return back()->with('success', 'Student deleted');
    }
}
