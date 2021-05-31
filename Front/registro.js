var boton= document.getElementById("usuario_nuevo");

function load1(){
    document.getElementById("enviar").addEventListener("click",click);
    }

    function $(valor){
        return document.getElementById(valor);
    }
    
    function click(event){
    enviarMensajeAlServidor("../Backend/imagen.php",retornoDelclick);
    } 
    
    function retornoDelclick(respuesta){
        alert(respuesta);
        //$("txtNombre").value = respuesta;
    }


    function enviarMensajeAlServidor(servidor,funcionArealizar){

        //Declario el objeto
    var xmlhttp = new XMLHttpRequest();
    
        var datos = new FormData();
        datos.append("usuario_nuevo",$("usuario_nuevo").value);
        datos.append("contrasena_nueva",$("contrasena_nueva").value);
        datos.append("contrasena_repetida",$("contrasena_repetida").value);
        datos.append("archivo",$("archivo").files[0]); 
    //Indico hacia donde va el mensaje
    xmlhttp.open("POST",servidor,true);
    
    xmlhttp.onreadystatechange = function(){
    
        if(xmlhttp.readyState == XMLHttpRequest.DONE){
    
            if(xmlhttp.status ==200){
                console.log(xmlhttp.response);
                funcionArealizar(xmlhttp.responseText);
    
            }else{
                alert("ocurrio un Error");
            }
    
        }
    }
    xmlhttp.setRequestHeader("enctype","multipart/form-data");
    //Envio el msj
    xmlhttp.send(datos);
    
    }
    
    