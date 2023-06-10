<div>
    
     <form class="flex flex-column height-100">

        <div class="flex ">
                <div class="flex align-center">
                    @if ($currentStep == 1)
                        <button type="button" class="steps-btn steps-btn-active" wire:click="clearForm">1</button>
                    @else
                        <button type="button" class="steps-btn" wire:click="step1">1</button>
                    @endif
                    <h2 class="px-1">Algemeen</h2>
                </div>

                <div class="flex px-1 align-center">
                    @if ($currentStep == 2)
                        <button type="button" class="steps-btn steps-btn-active" wire:click="step2">2</button>
                    @else
                        <button type="button" class="steps-btn" wire:click="step2">2</button>
                    @endif
                    <h2 class="px-1">Ruimte</h2>
                </div>

                <div class="flex px-1 align-center">
                    @if ($currentStep == 3)
                        <button type="button" class="steps-btn steps-btn-active px-1" wire:click="step3">3</button>
                    @else
                        <button type="button" class="steps-btn" wire:click="step3">3</button>
                    @endif
                    <h2 class="px-1">Tijd</h2>
                </div>
            </div>

         {{-- STEP 1 --}}

         @if ($currentStep == 1)
             
      
         <div class="height-100">
                <div class="steps-div">
                    <h2 class="py-small">Naam leerling:</h2>
                    

                    <div class="">
                    
                        <select wire:model="student_id" class="input-field" name="student_id">
                            @foreach($students as $student)
                                <option wire:model="student_id" value="{{ $student->id }}" name="student_id">{{ $student->student_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="steps-div">
                    <h2 class="py-small">Mag de resterende tijdsduur zichtbaar zijn in de time-out?</h2>
                    <p>Overleg dit met degene die in de time-out gaat.</p>

                    <div class="steps-div width-20">
                        <div class="py-1 checkbox">
                            <input type="radio" id="visibility-1" name="time_visibility" wire:model="time_visibility" value="1">
                            <label class="px-1" for="visibility-1">Ja</label>
                        </div>

                        <div class="py-1 checkbox">
                            <input type="radio" id="visibility-2" name="time_visibility" wire:model="time_visibility" value="0">
                            <label class="px-1" for="visibility-2">Nee</label>
                        </div>
                    </div>
                </div>
                
         </div>
         @endif

         {{-- STEP 2 --}}

         @if ($currentStep == 2)
             
        
         <div class="steps-div step-box">
            <h2 class="py-small">Kies een ruimte voor de time-out</h2>

            <div class="flex justify-between">
                @foreach($rooms as $room)
                    <label for="room-{{ $room->id }}" class="room-label">
                        <input type="radio" wire:model="room_id" id="room-{{ $room->id }}" value="{{ $room->id }}" name="room_id">
                        <img class="vr-item-image" src="{{ asset('storage/'. $room->room_image) }}" alt="Room Image">
                    </label>
                @endforeach
            </div>
        </div>


         @endif
         {{-- STEP 3 --}}

         @if ($currentStep == 3)
             
     
         <div class="steps-div">
                <h2 class="py-small">Hoelang mag de time-out duren?</h2>
                <p class="py-small">Overleg dit met degene die in de time-out gaat.</p>

                <div class="width-20">
                    <div class="py-1 checkbox">
                        <input type="radio" name="session_duration" wire:model="session_duration" value="0">
                        <label class="px-1" for="duration-1">10 minuten</label>
                    </div>
                    
                    <div class="py-1 checkbox">
                        <input type="radio" name="session_duration" wire:model="session_duration" value="1">
                        <label class="px-1" for="duration-2">15 minuten</label>
                    </div>

                    <div class="py-1 checkbox">
                        <input type="radio" name="session_duration" wire:model="session_duration" value="2">
                        <label class="px-1" for="duration-3">20 minuten</label>
                    </div>
                </div>
         </div>
         @endif


         <div class="steps-next">

            @if ($currentStep == 1)
                <div></div>
            @endif
            
            @if ($currentStep == 1 || $currentStep == 2)
                <a type="button" class="btn btn-yellow" wire:click="increaseStep()">Volgende</a>
            @endif
            
            @if ($currentStep == 3)
                 <a type="submit" class="btn btn-yellow">Submit</a>
            @endif
                
               
         </div>

         

     </form>


</div>