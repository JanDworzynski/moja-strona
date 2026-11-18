let licznik = 0;

function kliknij() {
  licznik++;
  let data = new Date().toLocaleString();
  document.getElementById("wynik").innerHTML = "Kliknięto " + licznik + " razy, " + data;
}
