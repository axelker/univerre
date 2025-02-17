let isAnimating = false;
const envelope = document.querySelector(".envelop");
const nfcCard = document.querySelector(".nfc-card-content-hidden");
const letterContent = document.querySelector(".letter-content");
const nfcPinsFront = document.querySelector(".nfc-pins-front");
const nfcPinsBack = document.querySelector(".nfc-pins-back");
const envelopeTop = document.querySelector(".envelope-top");
const envelopeTopClosed = document.querySelector(".envelope-top-closed");


document.addEventListener("DOMContentLoaded", function () {
    const button = document.querySelector(".explore-button");
    const contactSection = document.getElementById("contact");

    button.addEventListener("click", function () {
        contactSection.scrollIntoView({ behavior: "smooth" });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    envelope.addEventListener("click", async function () {
        if (isAnimating) return;
        if (envelopeTop.classList.contains("hidden")) {
            return;
        }
        isAnimating = true;
        if (letterContent.classList.contains("letter-content-out")) {
            await animateEnvelope();
        } else {
            await animateLetterOut();
        }
        isAnimating = false;
    });
});

async function animateLetterOut() {
    await new Promise(resolve => resolve(letterContent.classList.add("letter-content-out")));
}
async function animateNfcCard() {
    nfcCard.classList.add("nfc-card-content-visible");
    letterContent.classList.add("letter-content-in");
    await new Promise(resolve => setTimeout(resolve, 3000));
    nfcCard.classList.remove("nfc-card-content-visible");
}

async function animatePins() {
    await new Promise(resolve => setTimeout(resolve, 1000));
    nfcPinsFront.classList.add("visible");
    nfcPinsBack.classList.add("visible");
    await new Promise(resolve => setTimeout(resolve, 1000));
    nfcPinsBack.classList.add("translate");
    nfcPinsFront.classList.add("translate");
    await new Promise(resolve => setTimeout(resolve, 1000));

    nfcPinsFront.classList.remove("visible");
    nfcPinsBack.classList.remove("visible");
}

function closeEnvelope() {
    envelopeTop.classList.add("hidden");
    envelopeTopClosed.classList.add("visible");
}

async function animateEnvelope() {
    await animateNfcCard();
    await animatePins();
    closeEnvelope();
}