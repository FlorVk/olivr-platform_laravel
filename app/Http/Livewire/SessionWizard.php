<?php

namespace App\Http\Livewire;

use App\Models\Session;
use Livewire\Component;


class SessionWizard extends Component
{
    public $currentStep = 1;
    public $child_id, $room_id, $audio, $session_duration, $session_date;
    public $successMessage = '';
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'child_id' => 'required'
        ]);
 
        $this->currentStep = 2;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'room_id' => 'required|numeric'
            
        ]);
  
        $this->currentStep = 3;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        Session::create([
            'child_id' => $this->child_id,
            'room_id' => $this->room_id,
            'audio' => $this->audio,
            'session_duration' => $this->session_duration,
            'session_date' => $this->session_date,
        ]);
  
        $this->successMessage = 'Sessie succesvol aangemaakt.';
  
        $this->clearForm();
  
        $this->currentStep = 1;
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;    
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {
        $this->child_id = '';
        $this->room_id = '';
        $this->audio = '';
        $this->session_duration = '';
        $this->session_date = '';
    }
}

