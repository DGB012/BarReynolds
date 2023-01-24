//import './bootstrap';
/*
import 'https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js';
import 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js';
import 'https://cdn.jsdelivr.net/npm/bootstrap@5.0/dist/js/bootstrap.bundle.min.js';
 */

window.addEventListener("load", function (){
    var prueba = document.getElementsByClassName('prueba');
        for (var f = 0; f < prueba.length; f++) {
            prueba[f].style.visibility = "hidden";
        }
});
function cambiarVisibilidad(nombreCat, numeroCat) {
    for (var i = 0; i < numeroCat; i++) {
        var productos = document.getElementsByName(nombreCat);
        var prueba = document.getElementsByClassName('prueba');
        for (var f = 0; f < prueba.length; f++) {
            prueba[f].style.visibility = "hidden";
            prueba[f].style.display = "none";
        }
        for (var v = 0; v < productos.length; v++) {
            productos[v].style.display = "inline";
            productos[v].style.visibility = "visible";
        }
    }
}
