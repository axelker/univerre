document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector(".explore-button");
    const contactSection = document.getElementById("contact");

    button.addEventListener("click", function () {
        contactSection.scrollIntoView({ behavior: "smooth" });
    });
});