document.addEventListener("DOMContentLoaded", function () {
        const contactDetails = document.getElementById("contact-details");
        const form = document.getElementById("contact-form");
        const submittedMessage = document.getElementById("submitted-message");

        form.addEventListener("submit", function (event) {
            event.preventDefault();
            contactDetails.classList.add("hidden");
            submittedMessage.classList.remove("hidden");
        });
});
