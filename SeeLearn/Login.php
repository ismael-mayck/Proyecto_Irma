<?php
include 'ConectarDB.php';

$codcurso = $_POST["CodCurso"];
$nocontrol = $_POST["NoControl"];
$Password = $_POST["password"];

//consulta para insertar
/*$inse = "INSERT INTO login(ID_Usuario, correo, password) VALUES
('$id', '$correo', '$password')";*/

$verificar_usua = mysqli_query($conexion, "SELECT * FROM login WHERE Password = '$Password'");
if(mysqli_num_rows($verificar_usua) == 0){
echo '<script>
      alert("contraseña incorrecta");
      window.history.go(-1);
      </script>';
exit;
}

$verificar_usua = mysqli_query($conexion, "SELECT * FROM login WHERE Cod_Curso = '$codcurso'");
if(mysqli_num_rows($verificar_usua) == 0){
echo '<script>
      alert("Codigo incorrecto");
      window.history.go(-1);
      </script>';
exit;
}

$verificar_usua = mysqli_query($conexion, "SELECT * FROM login WHERE No_Control = '$nocontrol'");
if(mysqli_num_rows($verificar_usua) == 0){
echo '<script>
      alert("No_Control incorrecto");
      window.history.go(-1);
      </script>';
exit;
}


//cerrar conexion
mysqli_close($conexion);
