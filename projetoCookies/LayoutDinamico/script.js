// variável para controlar o modo (iniciando no modo claro)
var isDarkMode1 = false;
var isDarkMode2 = false;
// função para alternar entre os modos claro e escuro
function doMode1() {
    isDarkMode1 = !isDarkMode1;
    var body = document.body;
    if (isDarkMode1) {
        // Modo Claro
        body.style.backgroundColor = "#f8f2f2";
        body.style.color = "#495057";
    }
}
function doMode2() {
  isDarkMode2 = !isDarkMode2;
  var body = document.body;
  if (isDarkMode2) {
      // Modo Escuro
      body.style.backgroundColor = "495057"; 
      body.style.color = "#f8f2f2";
    }
}
// função para alternar entre os modo claro e escuro
// na página web
function doMode(mode) {
  document.body.className = mode; //define a classe no corpo da página
}

