var tipos = [
   document.getElementById('gamming').checked,
    document.getElementById('basico').checked,
    document.getElementById('Convertible').checked
];
var almacenmaiento =[document.getElementById('poco').checked,
document.getElementById('medio').checked,
document.getElementById('grande').checked
]
var ram =[];
var presupuesto = [];
var pugadas =[];
var boleanTipos;

    

function pruebas(){
    tipos.forEach(function(element){
        if(element == true){
            alert(element);
        }
    });
}