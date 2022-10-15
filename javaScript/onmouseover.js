
function eventOver(){
    let botonAll = document.getElementById("allLaptop");
    botonAll.style.borderColor = "red";

    botonAll.style.height = "68em";
    console.log("El raton esta sobre: "+ botonAll);
}

function eventOut(){
    let botonAll2 = document.getElementById("allLaptop");
    botonAll2.style.borderColor = "whitesmoke";
    botonAll2.style.height = "96%";
    console.log("El raton ya no esta sobre: "+ botonAll2);
    
}