
var xhr = new XMLHttpRequest();
var url = '/vistas/vistas_busqueda/vistas_all/vistas_all_portatiles.php';
xhr.open('POST', url);
console.log(xhr);

xhr.onload = function(){
    if(xhr.status == 200){
        var json = JSON.parse(xhr.responseText);
        
        console.log(json);
        
    }else{
        console.log('error');
    }
}




xhr.send();