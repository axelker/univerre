document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("contact-form");
        const submittedMessage = document.getElementById("submitted-message");

        form.addEventListener("submit", function (event) {
            event.preventDefault();
            form.classList.add("hidden");
            submittedMessage.classList.remove("hidden");
        });
});
