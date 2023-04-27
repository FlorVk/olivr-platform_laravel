<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Session;

class MultiStepForm extends Component
{

    public $student_id;
    public $room_id;
    public $audio;
    public $session_duration;
    public $session_date;

    public $totalSteps = 5;
    public $currentStep = 1;


    public function mount(){
        $this->currentStep = 1;
    }


    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep(){
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
         
    }

    public function decreaseStep(){
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'student_id'=>'required',
            ]);
        }
        elseif($this->currentStep == 2){
            
              $this->validate([
                'room_id' => 'required|numeric'
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                  'audio'=>'required'
              ]);
        }elseif($this->currentStep == 4){
            $this->validate([
                'audio'=>'required'
            ]);
      }
    }

    public function submitForm(){
          if($this->currentStep == 5){
              $this->validate([
                  'session_duration'=>'required',
              ]);
          }

              $values = array(
                'student_id' => $this->student_id,
                'room_id' => $this->room_id,
                'audio' => $this->audio,
                'session_duration' => $this->session_duration,
                'session_date' => $this->session_date,
              );

              Session::insert($values);
            //   $this->reset();
            //   $this->currentStep = 1;
            
          
    }
}