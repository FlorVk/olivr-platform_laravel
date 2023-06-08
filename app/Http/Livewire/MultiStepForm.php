<?php

namespace App\Http\Livewire;

use App\Models\Room;
use App\Models\Session;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepForm extends Component
{

    public $student_id;
    public $room_id = [];
    public $time_visibility = [];
    public $session_duration = [];
    public $session_date;

    public $totalSteps = 3;
    public $currentStep = 1;


    public function mount(){
       $this->currentStep = 1;
    }


    public function render()
    {
        return view('livewire.multi-step-form', ['rooms' => Room::all(), 'students' => Student::all()]);
    }

    public function increaseStep(){
        
         $this->currentStep++;
         
         
    }

    public function decreaseStep(){
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function step1(){
        $this->currentStep = 1;
    }

    public function step2(){
        $this->currentStep = 2;
    }

    public function step3(){
        $this->currentStep = 3;
    }


    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'student_id'=>'required',
                'time_visibility' => 'required|array|min:1|max:1'
            ]);
        }
        elseif($this->currentStep == 2){
            
              $this->validate([
                'room_id' => 'required|array|min:1|max:1'
              ]);
        }
    }

    public function clearForm()
    {
        $this->student_id = '';
        $this->time_visibility = '';
        $this->room_id = '';
        $this->session_duration = '';
        $this->session_date = '';

        $this->currentStep = 1;
    }

    public function submitForm(){
          if($this->currentStep == 3){
              $this->validate([
                'session_duration'=>'required|array|min:1|max:1'
              ]);
          }

              $values = array(
                'student_id' => $this->student_id,
                'time_visibility' => $this->time_visibility,
                'room_id' => $this->room_id,
                'session_duration' => $this->session_duration,
                $this->session_date = date('Y-m-d H:i:s')
              );

              Session::insert($values);


            $this->clearForm();
            
            
          
    }
}