<?php
include("db.php");
$title = '';
$description= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM actas WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $acta = $row['acta'];
    $actaComp = $row['actaComp'];
    $lugar = $row['lugar'];
    $fecha = $row['fecha'];
    $hora = $row['hora'];
    $rubro = $row['rubro'];
    $direccion = $row['direccion'];
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $dni = $row['dni'];
    $domicilio = $row['domicilio'];
    $medidaCautelar = $row['medidaCautelar'];
    $dispoLegal = $row['dispoLegal'];
    $objetos = $row['objetos'];
    $inspector = $row['inspector'];
    $legajo = $row['legajo'];
    $observaciones = $row['observaciones'];
    $estado = $row['estado'];
    
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $acta= $_POST['acta'];
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

  $query = "UPDATE actas set acta = '$acta', actaComp = '$actaComp' , lugar = '$lugar', fecha = '$fecha', hora = '$hora'
  , rubro = '$rubro', direccion = '$direccion', nombre = '$nombre', apellido = '$apellido', dni = '$dni'
  , domicilio = '$domicilio', medidaCautelar = '$medidaCautelar', dispoLegal = '$dispoLegal', objetos = '$objetos', inspector = '$inspector'
  , legajo = '$legajo', observaciones = '$observaciones', estado = '$estado' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<main class="container p-4">
<head>
<link rel="stylesheet" href="estilos.css">

  <div class="row">
    <div class="col-md-8">
      <div class="card card-body">

      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
      <ul>
      <li>
            <div class="form-group">
              <label>Acta</label>
              <input name="acta" type="text" class="form-control" value="<?php echo $acta; ?>" maxlength="20" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Nueva acta" required> 
            </div>
            <div class="form-group">
              <label>Acta Comprobacion</label>
              <input name="actaComp" type="text" class="form-control" value="<?php echo $actaComp; ?>"  maxlength="20" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Nueva acta comprobacion" required> 
           </div>
           <div class="form-group">
              <label>Lugar</label>
              <input name="lugar" type="text" class="form-control" value="<?php echo $lugar; ?>" placeholder="Nuevo lugar" required> 
            </div>
            <div class="form-group">
              <label>Fecha</label>
              <input name="fecha" type="text" class="form-control" value="<?php echo $fecha; ?>" placeholder="Nueva fecha" required> 
            </div>
            <div class="form-group">
              <label>Hora</label>
              <input name="hora" type="text" class="form-control" value="<?php echo $hora; ?>" placeholder="Nueva hora" required> 
            </div>
            <div class="form-group">
              <label>Rubro</label>
              <input name="rubro" type="text" class="form-control" value="<?php echo $rubro; ?>" placeholder="Nuevo rubro" required> 
            </div>
            <div class="form-group">
              <label>Direccion</label>
              <input name="direccion" type="text" class="form-control" value="<?php echo $direccion; ?>" placeholder="Nueva direccion" required> 
            </div>
            <div class="form-group">
              <label>Nombre</label>
              <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="Nuevo nombre" required> 
            </div>
            <div class="form-group">
              <label>Apellido</label>
              <input name="apellido" type="text" class="form-control" value="<?php echo $apellido; ?>" placeholder="Nuevo apellido" required> 
            </div>
            
        </li>

        <li>
              <div class="form-group">
                <label>DNI</label>
                <input name="dni" type="text" class="form-control"  maxlength="8" value="<?php echo $dni; ?>" placeholder="Nuevo DNI" required> 
              </div>
              <div class="form-group">
              <label>Domicilio</label>
              <input name="domicilio" type="text" class="form-control" value="<?php echo $domicilio; ?>" placeholder="Nuevo domicilio" required> 
              </div>
              <div class="form-group">
                <label>Medida Cautelar</label>
                <input name="medidaCautelar" type="text" class="form-control" value="<?php echo $medidaCautelar; ?>" placeholder="Nueva medida" required> 
              </div>
              <div class="form-group">
                <label>Disposicion Legal</label>
                <input name="dispoLegal" type="text" class="form-control" value="<?php echo $dispoLegal; ?>" placeholder="Nueva disposicion" required> 
              </div>
              <div class="form-group">
              <label>Objetos</label>
              <input name="objetos" type="text" class="form-control" value="<?php echo $objetos; ?>" placeholder="Nuevos objetos" required> 
            </div>
            <div class="form-group">
              <label>Inspector</label>
              <input name="inspector" type="text" class="form-control" value="<?php echo $inspector; ?>" placeholder="Nuevo inspector" required> 
            </div>
            <div class="form-group">
              <label>Legajo</label>
              <input name="legajo" type="text" class="form-control"  maxlength="20" value="<?php echo $legajo; ?>" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Nuevo legajo" required> 
            </div>
            <div class="form-group">
              <label>Observaciones</label>
              <input name="observaciones" type="text" class="form-control" value="<?php echo $observaciones; ?>" placeholder="Nueva observacion" required> 
            </div>
            <div class="form-group">
              <label>Estado</label>
              <input name="estado" type="text" class="form-control" value="<?php echo $estado; ?>" placeholder="Nuevo estado" required> 
            </div>
              
        </li>
        </ul>
        <button class="btn-success" name="update">
          Actualizar datos
        </button>
      </form>
      </div>
    </div>
  </div>
</head>
</main>
<?php include('includes/footer.php'); ?>