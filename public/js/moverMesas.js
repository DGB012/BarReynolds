var parent = document.getElementsByClassName('a');
var divs = parent.children;
var isDown = false;
var mesaMover = null;
for (let i = 0; i < divs.length; i++) {
    divs[i].addEventListener('mousedown', function (e) {
        mesaMover = e.target
        console.log(mesaMover.getBoundingClientRect());
        isDown = true;
        offset = [
            divs[i].offsetLeft - e.clientX,
            divs[i].offsetTop - e.clientY
        ];
    }, true);

    document.addEventListener('mouseup', function () {
        isDown = false;
        checkTableCollapse(mesaMover);
        for (let i = 0; i < divs.length; i++) {
            if (divs[i] === mesaMover) {
            } else {
                checkTableCollapse(divs[i]);
            }
        }

    }, true);

    document.addEventListener('mousemove', function (event) {
        event.preventDefault();
        if (isDown) {
            posicionPuntero = {
                x: event.clientX,
                y: event.clientY
            };

            var newLeft = Math.min(90, Math.max(5, (posicionPuntero.x + offset[0]) / parent.offsetWidth * 100));
            var newTop = Math.min(90, Math.max(10, (posicionPuntero.y + offset[1]) / parent.offsetHeight * 100));
            mesaMover.style.left = newLeft + '%';
            mesaMover.style.top = newTop + '%';
        }
    }, true);
}
function checkTableCollapse(mesa){
    var mesaX = mesa.offsetLeft;
    var mesaY = mesa.offsetTop;

    for (let i = 0; i < divs.length; i++) {
        if (divs[i] === mesa) {
        } else {
            var cincoPerX = parent.offsetWidth * 0.05;
            var cincoPerY = parent.offsetHeight * 0.05;
            if (((mesaX > divs[i].offsetLeft && mesaX < divs[i].offsetLeft + cincoPerX) ||
                    (mesaX + cincoPerX > divs[i].offsetLeft && mesaX + cincoPerX < divs[i].offsetLeft + cincoPerX)) &&
                ((mesaY > divs[i].offsetTop && mesaY < divs[i].offsetTop + cincoPerY) ||
                    (mesaY + cincoPerY > divs[i].offsetTop && mesaY + cincoPerY < divs[i].offsetTop + cincoPerY))) {
                console.log(cincoPerX);
                mesa.style.left = ((divs[i].offsetLeft/ parent.offsetWidth * 100)+cincoPerX/ parent.offsetWidth * 100) + '%';
                mesa.style.top = ((divs[i].offsetTop/ parent.offsetHeight * 100)+cincoPerY/ parent.offsetHeight * 100) + '%';
            }

        }

    }
}
