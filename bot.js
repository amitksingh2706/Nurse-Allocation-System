const button = document.getElementById("DocBot");
const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
const recognition = new SpeechRecognition();

recognition.onstart = function() {
    console.log("Speech Recognition Started!");
};
recognition.onresult = function(event) {
    console.log(event);
    const spokenwords = event.results[0][0].transcript;
    console.log("Spoken words are: ", spokenwords);
    computerSpeech(spokenwords);
};

function computerSpeech(words) {
    const speech = new SpeechSynthesisUtterance();
    speech.lang = "en-US";
    speech.pitch = 0.8;
    speech.volume = 1;
    speech.rate = 1;

    determineWords(speech, words);
    window.speechSynthesis.speak(speech);
}

function determineWords(speech, words) {
    if (words.includes("Hello ")) {
        speech.text = "Hello Sir,Welcome to the Nurse for you Website";
    }
    if (words.includes("Who are you")) {
        speech.text = "I am a Doctor Chatbot created in order to help you out to solve your issues";
    }
    if (words.includes("Can you please tell me something about this website")) {
        speech.text = "Our Website is a nurse portal website,where we do allotment of nurse to the old age patients ";
    }
}
button.addEventListener("click", () => {
    recognition.start();
})