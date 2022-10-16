function buscarPortatiles() {
	
	// var url = 'controlers/controladorLibros.php';
	var metodo = 'POST';
	var parametros = 'Buscar=Buscar';
    var parametros2;
	parametros2 += '&gaming='+document.getElementById('gaming').value;
    console.log(parametros2);
    alert(parametros2);
	// parametros += '&autor='+document.getElementById('autor').value;
	// parametros += '&titulo='+document.getElementById('titulo').value;
	// parametros += '&genero='+document.getElementById('genero').value;
    //     parametros += '&precio='+document.getElementById('precio').value;
	// var contenedor = 'contenedor_ajax' ;
	// var cargando = '<img src="images/cargando.gif">' ;
	// // Llamada a ajax
	// ajax (url, metodo, parametros, contenedor, cargando) ;
	
}



// Función ajax
function ajax (url, metodo, parametros, contenedor, cargando) {
 
 	if (window.XMLHttpRequest) {
   	// Navegadores modernos.
   	xmlhttpreq = new XMLHttpRequest();
 	} else {
	    try{ // Para versiones posteriores a IE6
	    	xmlhttpreq = new ActiveXObject("Microsoft.XMLHTTP");
	    } catch(e1) { // Si el navegador no soporta ajax
		    alert("Navegador no compatible");
		}
	}
	xmlhttpreq.onreadystatechange = function() {
						       if(xmlhttpreq.readyState == 4) { // Resultado preparado
							       document.getElementById(contenedor).innerHTML = xmlhttpreq.responseText;
							   } else { //  A la espera de la petición
							       document.getElementById(contenedor).innerHTML = cargando;
							   }
						   	}
	xmlhttpreq.open(metodo, url, true);
	xmlhttpreq.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xmlhttpreq.send(parametros);
}