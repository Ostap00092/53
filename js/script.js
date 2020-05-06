function menu() {
    var menu = document.getElementById('menu');
    var mess = document.getElementById("mess");
    menu.classList.toggle("activated");
    mess.classList.toggle("activated");
}
var i = '';
function aside(i) {
    document.getElementById('frame').src="points/" + i + ".php";
}
