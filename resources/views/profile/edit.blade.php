<x-app-layout>
<h1 class="page-title">Instellingen</h1>

<section class="py-2">
    <a class="btn margin-x btn-active" href="/settings">Profiel</a>
    <a class="btn margin-x" href="/settings/rooster">Rooster</a>
    <a class="btn margin-x" href="/settings/help">Help</a>
</section>

@if (\Session::has('success'))
    <div id="alert" class="alert-box">
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    </div>
@endif

<section>
    @include('profile.partials.update-profile-information-form')
    @include('profile.partials.update-password-form')
</section>


<script>
    setTimeout(function() {
        $('#alert').fadeOut('slow');
    }, 5000);
</script>          
        
</x-app-layout>
