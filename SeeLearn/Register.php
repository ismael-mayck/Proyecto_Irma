<?php
include 'ConectarDB.php';
//recibir los datos y almacenarlos en las variables
$no_control = $_POST["ID"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["Correo"];
$grado = $_POST["Grado"];
//consulta para insertar
$insert = "INSERT INTO register_students (Nombre, Apellido, Correo, No_Control, Grado) VALUES
('$nombre', '$apellido', '$correo', '$no_control', '$grado')";

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM register_students  WHERE No_Control = '$no_control'");
if(mysqli_num_rows($verificar_usuario) > 0){
echo '<script>
      alert("Error!! El ID ya esta registrado");
      window.history.go(-1);
      </script>';
exit;
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM register_students  WHERE Correo = '$correo'");
if(mysqli_num_rows($verificar_usuario) > 0){
echo '<script>
      alert("Error!! El ID ya esta registrado");
      window.history.go(-1);
      </script>';
exit;
}

//ejecutar consulta
$resultado = mysqli_query($conexion, $insert);
//prueba para ver si se regustra exitosamente
if (!$resultado) {
  echo '<script>
        alert("Error al registrarse");
        </script>';
}
else {
  echo '<script>
        alert("Usuario registrado exitosamente!");
        window.history.go(-3);
        </script>';
}
//cerrar conexion
mysqli_close($conexion);
?>




