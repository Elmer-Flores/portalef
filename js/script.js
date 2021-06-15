
var monkey = document.getElementById("monkey");
monkey.addEventListener("click", moverMonkey);

function moverMonkey(){
    monkey.classList.add("move");
    monkey.addEventListener("animationend", function(){
        monkey.classList.remove("move");
    });
    console.log("se ha ejecutado");
}


document.addEventListener("DOMContentLoaded" , function () {
    var cuadro = document.querySelectorAll(".box");
    let i = 0;
    let evento = "";
    cuadro.forEach(element => {
        if (i == 0){
            element.addEventListener("click", function () {
                evento = "eje1";
                element.classList.toggle(evento);
                setTimeout(() => {
                    element.classList.remove(evento);
                }, 1000);
                console.log(element);
            });
        }
        else if(i == 1){
            element.addEventListener("click", function () {
                evento = "eje2";
                element.classList.toggle(evento);
                console.log(element);
            });
        }
        else if(i == 2){
            element.addEventListener("click", function () {
                evento = "eje3";
                element.classList.toggle(evento);
                console.log(element);
            });
        }
        i++;
    });
});

