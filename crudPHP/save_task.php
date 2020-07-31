<?php

include('db.php');

if (isset($_POST['save_task'])) {

  $acta = $_POST['acta'];
  $actaComp = $_POST['actaComp'];
  $lugar = $_POST['lugar'];
  $fecha = $_POST['fecha'];
  $hora = $_POST['hora'];
  $rubro = $_POST['rubro'];
  $direccion = $_POST['direccion'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $dni = $_POST['dni'];
  $domicilio = $_POST['domicilio'];
  $medidaCautelar = $_POST['medidaCautelar'];
  $dispoLegal = $_POST['dispoLegal'];
  $objetos = $_POST['objetos'];
  $inspector = $_POST['inspector'];
  $legajo = $_POST['legajo'];
  $observaciones = $_POST['observaciones'];
  $estado = $_POST['estado'];

  $nombreimg = $_FILES['archivo']['name'];
  $file = $_FILES['archivo']['tmp_name'];
  $ruta="images";
  $ruta = $ruta."/".$nombreimg;
  move_uploaded_file($file,$ruta);

  $query = "INSERT INTO actas(acta, actaComp, lugar, fecha, hora, rubro, direccion, nombre, apellido, dni, domicilio, 
  medidaCautelar, dispoLegal, objetos, inspector, legajo, observaciones, estado, img_dir) VALUES ('$acta', '$actaComp', '$lugar', '$fecha', '$hora', '$rubro', '$direccion',
  '$nombre', '$apellido' ,'$dni', '$domicilio' ,'$medidaCautelar' ,'$dispoLegal', '$objetos' ,'$inspector', '$legajo','$observaciones','$estado', '".$ruta."')";
  $result = mysqli_query($conn, $query);
  
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
