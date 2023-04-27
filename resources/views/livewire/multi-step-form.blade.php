<div>
    
     <form>

         {{-- STEP 1 --}}

         @if ($currentStep == 1)
             
      
         <div class="step-one">
                <div class="width-100 flex flex-column">
                    <label class="input-label" for="name">Naam:</label>
                    <input class="width-40 input-field" value="" name="name" type="name" placeholder="">
                </div>
         </div>
         @endif

         {{-- STEP 2 --}}

         @if ($currentStep == 2)
             
        
         <div class="step-two">
                <div class="flex justify-between">
                    @foreach ($rooms as $room)
                    <div class="width-50 box padding flex">
                    <input type="radio" class="room-select" name="ruimte" id="{{ $room->id}}" value="{{ $room->id}}">
                        <label for="{{ $room->id}}">
                            <img class="room-selectiong-image" src="{{  asset('placeholder.png')  }}" alt="{{ $room->room_name }}">
                            <h2>{{ $room->room_name }}</h2>
                            <p>{{ $room->room_description }}</p>
                        </label>
                        
                    </div>

                    @endforeach
                </div>
         </div>

         @endif
         {{-- STEP 3 --}}

         @if ($currentStep == 3)
             
     
         <div class="step-three">
                <h2>Mag er audio aanwezig zijn in de ruimte?</h2>

                <div class="py-1">
                    <input type="checkbox" name="option1" value="0">
                    <label for="option1">Ja (standaard audio van de gekozen ruimte)</label>
                </div>

                <div class="py-1">
                    <input type="checkbox" name="option2" value="1">
                    <label for="option2">Nee</label>
                </div>

                <div class="py-1">
                    <input type="checkbox" name="option3" value="2">
                    <label for="option3">Aangepast</label>
                </div>
         </div>
         @endif

         {{-- STEP 4 --}}
         @if ($currentStep == 4)
             
     
         <div class="step-four">
                <div>
                    <h2>Meest gebruikt:</h2>

                    <div class="py-1">
                        <input type="checkbox" name="option1" value="0">
                        <label for="option1">Volstond deze sessie in de VR-ruimte?</label>
                    </div>
                    
                    <div class="py-1">
                        <input type="checkbox" name="option2" value="1">
                        <label for="option2">Waarom wou je naar deze VR-ruimte?</label>
                    </div>

                    <div class="py-1">
                        <input type="checkbox" name="option3" value="2">
                        <label for="option3">Ben je klaar om je volgende les te volgen?</label>
                    </div>
                    
                </div>

                <div>
                    <h2>Alle vragen:</h2>

                    <div class="py-1">
                        <input type="checkbox" name="option1" value="0">
                        <label for="option1">Volstond deze sessie in de VR-ruimte?</label>
                    </div>
                    
                    <div class="py-1">
                        <input type="checkbox" name="option2" value="1">
                        <label for="option2">Waarom wou je naar deze VR-ruimte?</label>
                    </div>

                    <div class="py-1">
                        <input type="checkbox" name="option3" value="2">
                        <label for="option3">Ben je klaar om je volgende les te volgen?</label>
                    </div>
                    
                </div>
         </div>

         @endif

         {{-- STEP 5 --}}
         @if ($currentStep == 5)
             
     
         <div class="step-five">
                <h2>Hoe lang mag de sessie duren?</h2>
                <p class="py-small">Overleg dit met degene die in de time-out gaat.</p>

                <div class="py-1">
                    <input type="checkbox" name="option1" value="0">
                    <label for="option1">10 minuten</label>
                </div>
                
                <div class="py-1">
                    <input type="checkbox" name="option2" value="1">
                    <label for="option2">15 minuten</label>
                </div>

                <div class="py-1">
                    <input type="checkbox" name="option3" value="2">
                    <label for="option3">20 minuten</label>
                </div>

                <div class="py-1">
                    <input type="checkbox" name="option4" value="3">
                    <label for="option4"> minuten</label>
                </div>
         </div>

         @endif

         <div class="flex justify-content">

            @if ($currentStep == 1)
                <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4 || $currentStep == 5)
                <button type="button" class="btn btn-blue" wire:click="decreaseStep()">Back</button>
            @endif
            
            @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="btn btn-blue" wire:click="increaseStep()">Next</button>
            @endif
            
            @if ($currentStep == 5)
                 <button type="submit" class="btn btn-blue">Submit</button>
            @endif
                
               
         </div>

     </form>


</div>