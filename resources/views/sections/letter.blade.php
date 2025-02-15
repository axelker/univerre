@php
    $json = Storage::get('data/letter.json');
    $letter = json_decode($json, true);
@endphp

@vite('resources/css/letter.css')

<section class="max-w-1/2" id="letter">
    <div>
        <div class="envelop">
            <img src="/images/envelope-top.png" alt="envelope top">
            <img src="/images/envelope-backside.png" alt="envelope backside">
            <img src="/images/envelope-bottom.png"  alt="envelope bottom">
            <img src="/images/nfc-pin.png" alt="nfc pin">
            <span>A story of a connected bottle by Univerre<span>
        </div>
        <img src="/images/nfc-open.png"  alt="nfc pins">

        <div class="letter-content px-9 py-6 text-black text-center">
            <h2 class="mb-2">Dear {{ $letter['clientName'] }}</h2>
            <p>{{ $letter['content'] }}</p>
        </div>
        
    </div>


    <p>Are you interested in exploring more?</p>
    <button> Yes, I want explore</button>
    <button> No</button>
</section>
