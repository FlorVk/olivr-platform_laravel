<x-app-layout>
<h1 class="page-title">Instellingen</h1>

<section class="py-2">
    <a class="btn margin-x btn-blue" href="/settings">Profiel</a>
    <a class="btn margin-x" href="/settings/rooster">Rooster</a>
    <a class="btn margin-x" href="/settings/help">Help</a>
</section>

<section>
    @include('profile.partials.update-profile-information-form')
    @include('profile.partials.update-password-form')
</section>


           
        
</x-app-layout>
