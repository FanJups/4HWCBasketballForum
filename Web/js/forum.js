


setTimeout(function(){ 


	var msg = new SpeechSynthesisUtterance();

	var voices = window.speechSynthesis.getVoices();

	msg.voice = voices[10]; // Note: some voices don't support altering params

	msg.voiceURI = 'native';

	msg.volume = 1; // 0 to 1

	msg.rate = 1; // 0.1 to 10

	msg.pitch = 2; //0 to 2

	msg.text = 'Forum de Basketball Mondial. Du basketball, encore et encore !!!';

	msg.lang = 'fr';

	speechSynthesis.speak(msg);





 }, 30000);




