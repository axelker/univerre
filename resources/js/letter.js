
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
    const envelopeTop = document.querySelector(".envelope-top");
    const envelopeTopClosed = document.querySelector(".envelope-top-closed");


    envelope.addEventListener("click", function () {
        if (animationIsAlreadyPlayed) {
            return;
        }
        if (letterContent.classList.contains("letter-content-out")) {
            animationIsAlreadyPlayed = true;
            animatedtest(letterContent,nfcCard,envelopeTop,envelopeTopClosed);

        } else if(!envelopeTop.classList.contains("closed")) {
            letterContent.classList.add("letter-content-out");
        }
    });
});


function animatedtest(letterContent,nfcCard,envelopeTop,envelopeTopClosed) {
    nfcCard.classList.add("nfc-card-content-visible");
    letterContent.classList.add("letter-content-in");
    const nfcPinsFront = document.querySelector(".nfc-pins-front");
    const nfcPinsBack = document.querySelector(".nfc-pins-back");

    setTimeout(() => {

        // 3️⃣ Après 4 secondes, elle disparaît
        setTimeout(() => {
            nfcCard.classList.remove("nfc-card-content-visible");

            // 4️⃣ Ensuite, les pins apparaissent et descendent
            setTimeout(() => {
                nfcPinsFront.classList.add("visible");
                nfcPinsBack.classList.add("visible")
                setTimeout(() => {
                    nfcPinsBack.classList.add("translate");
                    nfcPinsFront.classList.add("translate");
                    setTimeout(() => {
                        nfcPinsFront.classList.remove("visible");
                        nfcPinsBack.classList.remove("visible");
                        envelopeTop.classList.add("hidden");
                        envelopeTopClosed.classList.add("visible");
                       
                    }, 1500);
                }, 1000);
               

            }, 1000); // Attente avant l'apparition des pins

        }, 2000); // Durée d'affichage de la carte NFC

    }, 1000);
}