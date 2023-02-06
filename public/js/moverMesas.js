var parent = document.getElementById('fondo');
var divs = parent.children;
var isDown = false;
var mesaMover = null;

var mesaPorcentajeAncho = 7;
var mesaPorcentajeAlto = 5;

var cincoPerX = parent.offsetWidth * (mesaPorcentajeAncho / 100);
var cincoPerY = parent.offsetHeight * (mesaPorcentajeAncho / 100);
for (let i = 0; i < divs.length; i++) {
    console.log("a")
    divs[i].addEventListener('mousedown', function (e) {
        mesaMover = e.target
        isDown = true;
        offset = [
            divs[i].offsetLeft - e.clientX,
            divs[i].offsetTop - e.clientY
        ];
    }, true);

    document.addEventListener('mouseup', function () {
        isDown = false;
        checkTableCollapse(mesaMover);
    }, true);

    document.addEventListener('mousemove', function (event) {
        event.preventDefault();
        if (isDown) {
            posicionPuntero = {
                x: event.clientX,
                y: event.clientY
            };

            var newLeft = Math.min(90, Math.max(5, (posicionPuntero.x + offset[0]) / parent.offsetWidth * 100));
            var newTop = Math.min(90, Math.max(5, (posicionPuntero.y + offset[1]) / parent.offsetHeight * 100));
            mesaMover.style.left = newLeft + '%';
            mesaMover.style.top = newTop + '%';
        }
    }, true);
}

function checkTableCollapse(mesa) {

    for (let i = 0; i < divs.length; i++) {
        if (divs[i] === mesa) {
            continue;
        }
        if (checkOverlapMesas(mesa, divs[i])) {
            moverMesa(mesa, divs[i]);
        }

    }
}

function checkOverlapMesas(mesa1, mesa2) {
    var mesa1X = mesa1.offsetLeft;
    var mesa1Y = mesa1.offsetTop;
    var mesa2X = mesa2.offsetLeft;
    var mesa2Y = mesa2.offsetTop;
    return ((mesa1X >= mesa2X && mesa1X <= mesa2X + cincoPerX) ||
            (mesa1X + cincoPerX >= mesa2X && mesa1X + cincoPerX <= mesa2X + cincoPerX)) &&
        ((mesa1Y >= mesa2Y && mesa1Y <= mesa2Y + cincoPerY) ||
            (mesa1Y + cincoPerY >= mesa2Y && mesa1Y + cincoPerY <= mesa2Y + cincoPerY));

}

function moverMesa(mesa, mesaEncima) {

    var newX = ((mesaEncima.offsetLeft / parent.offsetWidth * 100) + cincoPerX / parent.offsetWidth * 100);
    if (newX > parent.offsetWidth * 0.90 / parent.offsetWidth * 100) {
        mesa.style.left = ((mesaEncima.offsetLeft / parent.offsetWidth * 100) - cincoPerX / parent.offsetWidth * 100) + '%';
        var cont = divs.length - 1;
        while (checkOverlapMesas(mesa, divs[cont]) || cont > 0) {
            mesa.style.left = ((mesa.offsetLeft / parent.offsetWidth * 100) - cincoPerX / parent.offsetWidth * 100) + '%';
            cont--;
        }
    } else {
        mesa.style.left = newX + "%"
    }

}

function guardarPosicionMesas() {

    var mesas = document.getElementById('fondo').children;
    var newPosicionMesas = [];
    for (let i = 0; i < mesas.length; i++) {
        var infoMesa = {
            "id": mesas[i].getElementsByTagName('p')[0].innerHTML,
            "x": parseInt(mesas[i].style.left.replace("%", "")),
            "y": parseInt(mesas[i].style.top.replace("%", ""))
        };
        newPosicionMesas.push(infoMesa);
    }
    fetch('/guardarNuevaPosicionMesas', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            newPosicionMesas: newPosicionMesas
        })
    })
        .then(response =>  {
            if (response.ok) {
                window.location.href = '/mesas';
                // return response.json();
            } else {
                throw new Error('Something went wrong');
            }
        })
        .then(data => {
        });

}
