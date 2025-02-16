
let animationIsAlreadyPlayed = false ;
document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector(".explore-button");
    const contactSection = document.getElementById("contact");

    button.addEventListener("click", function () {
        contactSection.scrollIntoView({ behavior: "smooth" });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const envelope = document.querySelector(".envelop");
    const letterContent = document.querySelector(".letter-content");
    const nfcCard = document.querySelector(".nfc-card-content-hidden");
    const nfcPins = document.querySelector(".nfc-pins-hidden");
    const envelopeTop = document.querySelector(".envelope-top");


    envelope.addEventListener("click", function () {
        if (animationIsAlreadyPlayed) {
            return;
        }
        if (letterContent.classList.contains("letter-content-out")) {
            animationIsAlreadyPlayed = true;
            animatedtest(letterContent,nfcCard,nfcPins,envelopeTop);

        } else if(!envelopeTop.classList.contains("closed")) {
            letterContent.classList.add("letter-content-out");
        }
    });
});


function animatedtest(letterContent,nfcCard,nfcPins,envelopeTop) {
    nfcCard.classList.add("nfc-card-content-visible");
    letterContent.classList.add("letter-content-in");

    setTimeout(() => {

        // 3️⃣ Après 4 secondes, elle disparaît
        setTimeout(() => {
            nfcCard.classList.remove("nfc-card-content-visible");

            // 4️⃣ Ensuite, les pins apparaissent et descendent
            setTimeout(() => {
                nfcPins.classList.add("nfc-pins-visible");
                
                setTimeout(() => {
                    envelopeTop.classList.add("closed");

                    // 🌟 Ajout du fondu après un court délai
                    setTimeout(() => {
                        envelopeTop.classList.add("fade-in");
                    }, 500);

                }, 1500);

            }, 1000); // Attente avant l'apparition des pins

        }, 1000); // Durée d'affichage de la carte NFC

    }, 1000);
}