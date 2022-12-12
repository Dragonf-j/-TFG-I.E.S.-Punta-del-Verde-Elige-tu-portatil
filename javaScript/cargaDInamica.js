function buscar(){
    var url = 'controlers/controlador.php';
    var metodo = 'POST';
    var parametros = 'enviar=enviar';
	
    var contenedor = 'contenedor_ajax';
	var carga = '<img src="img/jim-carrey-bruce-almighty.gif">';

	ajax(url, metodo, parametros, contenedor, carga);
}

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