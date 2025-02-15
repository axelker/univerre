@php
    $json = Storage::get('data/letter.json');
    $letter = json_decode($json, true);
@endphp

@vite(['resources/js/letter.js','resources/css/letter.css'])


<section class="max-w-1/2" id="letter">
    <div>
        <div class="envelop">
            <img class="envelope-top" src="/images/envelope-top.png" alt="envelope top">
            <img class="envelope-backside" src="/images/envelope-backside.png" alt="envelope backside">
            <img class="envelope-bottom" src="/images/envelope-bottom.png" alt="envelope bottom">
            <img class="nfc-pin" src="/images/nfc-pin.png" alt="nfc pin">
            <span class="message">A story of a connected bottle by Univerre</span>
        </div>
        <img src="/images/nfc-open.png"  alt="nfc pins">

        <div class="letter-content px-9 py-6 text-black text-center">
            <h2 class="mb-2">Dear {{ $letter['clientName'] }}</h2>
            <p>{{ $letter['content'] }}</p>
        </div>
        
    </div>

    <div class="text-center">
        <p>Are you interested in exploring more?</p>
        <div class="">
            <button class="button-primary explore-button">
                Yes, I want explore
            </button>
            <button class="button-secondary"> No</button>
        </div>
        
    </div>
</section>

