<?php echo app('Illuminate\Foundation\Vite')(['resources/js/contact.js','resources/css/contact.css']); ?>

<section id="contact">
     <div id="contact-details">
          <p class="title text-center mb-9">Your contact details</p>
          <form id="contact-form" class="grid gap-5 justify-center">
               <?php echo csrf_field(); ?>
               <input id="name" name="name" placeholder="Your Name" required>
               <input id="phone" name="phone" placeholder="Phone Number" required>
               <input id="email" name="email" placeholder="Email Address" type="email" required>
               <button class="button-primary mt-5" type="submit">Submit inquiry</button>
          </form>
     </div>

    <div id="submitted-message" class="submited flex flex-col items-center justify-center text-center fixed inset-0 hidden">
        <img src="/images/check-circle.png" alt="check-circle">
        <div class="grid gap-2 mt-8 mb-10">
          <p >Form Submitted Successfully.</p>
          <p>Thank you for your interest!</p>
        </div>
        <p class="visit-call-to-action">Visit <a class="website-link" href="https://www.univerre.ch/" target="_blank">Univerre.ch</a></p>
    </div>
</section>

<?php /**PATH C:\Users\33634\Desktop\dev-info\it-test\Univerre\landing-page\resources\views/sections/contact.blade.php ENDPATH**/ ?>