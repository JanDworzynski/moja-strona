let licznik = 0;

function kliknij() {
  licznik++;
  let godzina = new Date().toLocaleTimeString();
  let log = document.getElementById("log");
  log.innerHTML = "<p>&gt; [" + godzina + "] kliknięcie nr " + licznik + "</p>" + log.innerHTML;
}
