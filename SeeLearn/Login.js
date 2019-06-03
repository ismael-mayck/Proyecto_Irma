function val(){
  var NoControl, CodCurso, password;

  CodCurso = document.getElementById("CodCurso").value;
  password = document.getElementById("password").value;
  NoControl = document.getElementById("NoControl").value;


  if(CodCurso === "" || password === "" || NoControl === ""){
    alert("Los datos son obligatorios");
    return false;
  }
  else if(NoControl.length > 10){
    alert("El No_Control solo debe contener 10 digitos");
    return false;
  }
  else if (CodCurso.length > 30 ) {
    alert("El Codigo es muy largo");
    return false;
  }
  else if (password.length > 20 ) {
    alert("La contraseña es muy larga");
    return false;
  }
}
