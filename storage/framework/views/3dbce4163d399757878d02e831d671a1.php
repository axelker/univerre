<?php
    $json = Storage::get('data/letter.json');
    $letter = json_decode($json, true);
?>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/letter.js','resources/css/letter.css']); ?>


<section id="letter">
    <div>
        <div class="envelop" (click)="">
            <img class="envelope-top" src="/images/envelope-top.png" alt="envelope top">
            <img class="envelope-top-closed" src="/images/envelope-top-closed.png" alt="envelope top">
            <img class="envelope-backside" src="/images/envelope-backside.png" alt="envelope backside">
            <img class="envelope-sides" src="/images/envelope-sides.png" alt="envelope backside">
            <img class="envelope-bottom" src="/images/envelope-bottom.png" alt="envelope bottom">
            <img class="nfc-pin" src="/images/nfc-pin.png" alt="nfc pin">
            <div class="nfc-pins">
                <div class="nfc-pins-back">
                    <img src="/images/pins.png" alt="nfc pins">
                </div>
    
                <div class="nfc-pins-front">
                    <img class="nfc-pin-grey" src="/images/pins-grey.png"  alt="nfc pins grey">
                    <img class="nfc-pin-red" src="/images/pins-red.png"  alt="nfc pins red">
                    <img class="nfc-pin-black" src="/images/pins-black.png"  alt="nfc pins black">
                </div>
            </div>
           
            <img id="nfc-card" class="nfc-card-content-hidden" src="/images/nfc-card-content.png" alt="nfc card content">
            <span class="message">A story of a connected bottle by Univerre</span>
        </div>

        <div class="letter-content">
            <h2 class="client-name">Dear <?php echo e($letter['clientName']); ?></h2>
            <p class="client-message"><?php echo e($letter['content']); ?></p>
        </div>
        
    </div>

    <div class="call-to-action">
        <p class="title" >Are you interested in exploring more?</p>
        <div class="grid grid-cols-1 gap-4 justify-center place-items-center">
            <button class="button-primary explore-button">
                Yes, I want explore
            </button>
            <button class="button-secondary"> No</button>
        </div>
        
    </div>
</section>

<?php /**PATH C:\Users\33634\Desktop\dev-info\it-test\Univerre\landing-page\resources\views/sections/letter.blade.php ENDPATH**/ ?>