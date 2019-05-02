   function cambiaImagen(sr, valor) {
            document.images.foto1.src = sr;
            document.getElementById('pietxt1').innerHTML = valor;
        }
		
	 function validarFormulario(){
					var nombre = document.getElementById("nombre").value;
					var apellidos = document.getElementById("apellido").value;
					var telefono = document.getElementById("telefono").value;
                    var sexo = document.getElementById("sexo");
                    var profesion = document.getElementById("profesion").selectedIndex;
                    var email = document.getElementById("email").value;
                    var pswd = document.getElementById("pswd").value;
                    var check = document.getElementById("check");

					var error=false;
 
					if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)){ 
							return false;
					}else if (apellido == null || apellido.length == 0 || /^\s+$/.test(apellido)){ 
							return false;
                    }else if (!(/^\d{9}$/.test(telefono))){
                            return false;
                    }for(var i = 0; i<sexo.length; i++){
                        if(sexo[i].checked){
                            error=true;
                            break;
                        }
                    }if(!error){
                        return false;
                    }
                     return true;       
				}