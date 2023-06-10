<x-app-layout>
<h1 class="page-title">Instellingen</h1>

<section class="py-2">
    <a class="btn margin-x" href="/settings">Profiel</a>
    <a class="btn margin-x" href="/settings/rooster">Rooster</a>
    <a class="btn margin-x btn-active" href="/settings/help">Help</a>
</section>

<section>
    <h2 class="py-1">Neem contact op met de help service</h2>

    <div class="flex align-center py-1">
        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M29.7501 21.25V26.8176C29.7544 27.2269 29.67 27.6323 29.5026 28.0058C29.3353 28.3794 29.089 28.7123 28.7807 28.9816C28.4724 29.2508 28.1094 29.4501 27.7167 29.5656C27.324 29.6812 26.9109 29.7103 26.5059 29.6509C20.8916 28.9297 15.6768 26.361 11.6833 22.3494C7.68973 18.3379 5.14442 13.1117 4.44841 7.49421C4.38922 7.09039 4.41798 6.67855 4.53271 6.28687C4.64743 5.89519 4.84543 5.53292 5.11314 5.22485C5.38085 4.91679 5.71195 4.67019 6.0838 4.50194C6.45564 4.3337 6.85945 4.24777 7.26757 4.25004H12.7501C13.1003 4.24792 13.4389 4.3756 13.7005 4.60844C13.9621 4.84128 14.1282 5.16278 14.1667 5.51088C14.3073 7.36753 14.7875 9.1826 15.5834 10.8659C15.7199 11.1847 15.7347 11.5424 15.625 11.8714C15.5154 12.2004 15.2889 12.4777 14.9884 12.6509L13.7701 13.345C13.5945 13.4416 13.4413 13.5744 13.3208 13.7345C13.2003 13.8947 13.1152 14.0785 13.071 14.274C13.0268 14.4695 13.0246 14.6722 13.0645 14.8686C13.1044 15.065 13.1856 15.2507 13.3026 15.4134C14.7041 17.4664 16.4771 19.2393 18.5301 20.6409C18.6928 20.7579 18.8785 20.839 19.0749 20.8789C19.2713 20.9189 19.4739 20.9167 19.6694 20.8725C19.8649 20.8283 20.0488 20.7431 20.2089 20.6226C20.3691 20.5021 20.5018 20.349 20.5984 20.1734L21.2926 18.955C21.4761 18.6507 21.7673 18.4263 22.1084 18.3266C22.4495 18.2269 22.8157 18.2591 23.1342 18.4167C24.8175 19.2126 26.6326 19.6928 28.4892 19.8334C28.8373 19.8719 29.1588 20.038 29.3917 20.2996C29.6245 20.5612 29.7522 20.8998 29.7501 21.25Z" stroke="#FFD66E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <p class="px-1">+32 471 14 18 11</p>
        
    </div>

    <div class="flex align-center">
        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.7791 20.7258L27.5541 14.1667C27.7671 14.0263 28.0141 13.9462 28.269 13.9346C28.5239 13.923 28.7771 13.9805 29.002 14.1009C29.2269 14.2214 29.4151 14.4003 29.5468 14.6188C29.6784 14.8374 29.7486 15.0874 29.7499 15.3425V28.3333C29.7499 28.7091 29.6007 29.0694 29.335 29.3351C29.0693 29.6007 28.709 29.75 28.3332 29.75H5.66657C5.29085 29.75 4.93051 29.6007 4.66484 29.3351C4.39916 29.0694 4.2499 28.7091 4.2499 28.3333V15.3992C4.24074 15.1393 4.30329 14.8818 4.43071 14.6551C4.55813 14.4284 4.7455 14.2412 4.97229 14.1139C5.19907 13.9866 5.45652 13.9242 5.71642 13.9335C5.97632 13.9428 6.22865 14.0235 6.44574 14.1667L16.2207 20.6692C16.4465 20.83 16.7144 20.9211 16.9914 20.9312C17.2684 20.9413 17.5423 20.8699 17.7791 20.7258ZM16.2207 20.7258C16.4521 20.8782 16.7229 20.9593 16.9999 20.9593C17.2769 20.9593 17.5478 20.8782 17.7791 20.7258L25.4999 15.5833V4.25H8.4999V15.5833L16.2207 20.7258Z" stroke="#FFD66E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <p class="px-1">help@olivr.com</p>
    </div>
</section>

<section>
    <div>
        <h2 class="py-1">Veel gestelde vragen:</h2>

        <div class="py-1 faq-box">
            <div class="flex justify-between align-center">
                <p>Hoe kan ik mijn uurrooster connecteren?</p>
                <a class="btn-round" id="more" href="#" onclick="$('.faq1').slideToggle(function(){$('#more').html($('.details').is(':visible')?'-':'+');});">+</a>
            </div>
            <div class="faq1" style="display:none">
                <p>text</p>
            </div>
        </div>

        <div class="py-1 faq-box">
            <div class="flex justify-between align-center">
                <p>Kan ik ergens notities maken van de time-out?</p>
                <a class="btn-round" id="more" href="#" onclick="$('.faq2').slideToggle(function(){$('#more').html($('.details').is(':visible')?'-':'+');});">+</a>
            </div>
            <div class="faq2" style="display:none">
                <p>text</p>
            </div>
        </div>

        <div class="py-1 faq-box">
            <div class="flex justify-between align-center">
                <p>Waar kan ik de data van mijn dashboard veranderen?</p>
                <a class="btn-round" id="more" href="#" onclick="$('.faq3').slideToggle(function(){$('#more').html($('.details').is(':visible')?'-':'+');});">+</a>
            </div>
            <div class="faq3" style="display:none">
                <p>text</p>
            </div>
        </div>

        
        
        
    </div>
    </div>
</section>
           
        
</x-app-layout>