function validar(){
  var id, nombre, apellido, correo, grado;

  nombre = document.getElementById("nombre").value;
  apellido = document.getElementById("apellido").value;
  correo = document.getElementById("correo").value;
  id = document.getElementById("ID").value;

  expresion = /\w+@\w+\.+[a-z]/;

  if(nombre === "" || apellido === "" || correo === "" || password === "" || confirma === "" || id === ""){
    alert("Los datos son obligatorios");
    return false;
  }
  else if(id.length !== 4){
    alert("El ID solo debe contener 4 digitos");
    return false;
  }
  else if(isNaN(id)){
    alert("El id debe contener solo numeros");
    return false;
  }
  else if (nombre.length > 20 ) {
    alert("El nombre es muy largo");
    return false;
  }
  else if (apellido.length > 30 ) {
    alert("El apellido es muy largo");
    return false;
  }
  else if (correo.length > 30 ) {
    alert("El correo es muy largo");
    return false;
  }
  else if (!expresion.test(correo)) {
    alert("El correo no es valido");
    return false;
  }
}
