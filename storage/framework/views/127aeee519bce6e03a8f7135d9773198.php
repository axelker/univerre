<?php echo app('Illuminate\Foundation\Vite')(['resources/js/contact.js','resources/css/contact.css']); ?>

<section class="max-w-80" id="contact">
    <h2 class="text-center">Your contact details</h2>

    <div class="grid gap-5">
        <form id="contact-form" class="flex flex-col">
            <?php echo csrf_field(); ?>
            <input id="name" name="name" placeholder="Your name" required>
            <input id="phone" name="phone" placeholder="Phone number" required>
            <input id="email" name="email" placeholder="Email address" type="email" required>
            <button class="button-primary" type="submit">Submit inquiry</button>
        </form>
    </div>

    <div id="submitted-message" class="submited text-center hidden">
        <img src="/images/check-circle.png" alt="check-circle">
        <p>Form Submitted Successfully. Thank you for your interest!</p>
        <p>Visit <a href="https://www.univerre.ch/" target="_blank">Univerre.ch</a></p>
    </div>
</section>

<?php /**PATH C:\Users\33634\Desktop\dev-info\it-test\Univerre\landing-page\resources\views/sections/contact.blade.php ENDPATH**/ ?>