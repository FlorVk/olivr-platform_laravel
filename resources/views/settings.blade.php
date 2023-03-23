<x-app-layout>
    <h1 class="page-title">Instellingen</h1>

    <section class="py-2">
        <a class="btn margin-x" href="">Profiel</a>
        <a class="btn margin-x" href="">Rooster</a>
        <a class="btn margin-x" href="">Help</a>
    </section>

    <section>
        <img class="profile-image" src="{{  asset('placeholder.png')  }}" alt="">
        
        <form class="flex flex-column py-2" action="">
            <div class="flex justify-between ">
                <div class="width-100 flex flex-column">
                    <label class="input-label" for="firstname">Voornaam</label>
                    <input class="width-80 input-field" name="firstname" type="text" placeholder="Voornaam">
                </div>

                <div  class="width-100 flex flex-column">
                    <label class="input-label" for="lastname">Achternaam</label>
                    <input class="width-80 input-field" name="lastname" type="text" placeholder="Voornaam">
                </div>
            </div>

            <div class="width-100 flex flex-column">
                <label class="input-label" for="email">E-mailadres</label>
                <input class="width-40 input-field" name="email" type="email" placeholder="email">
            </div>

            <div class="width-100 flex flex-column">
                <label class="input-label" for="password">Wachtwoord</label>
                <input class="width-40 input-field" name="password" type="text" placeholder="wachtwoord">
            </div>
            
        </form>
        
    </section>

</x-app-layout>