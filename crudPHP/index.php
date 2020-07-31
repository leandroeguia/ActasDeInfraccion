<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
<head>
<link rel="stylesheet" href="estilos.css">
<link href="css/bootstrap.min.css" rel="stylesheet">

  <div class="row">

    <div class="col-md-8">
      
      <h2>Añadir datos</h2>
      <div class="card card-body">
      <form action="save_task.php" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <input type="number" name="acta" class="form-control" maxlength="20" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Acta" autofocus required>
                <br>
                <input type="number" name="actaComp" class="form-control" maxlength="20" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Acta comprobacion" autofocus required >
                <br>
                <input type="text" name="lugar" class="form-control" placeholder="Lugar" autofocus required>
                <br>
                <input type="text" name="fecha" class="form-control" placeholder=" Fecha AAAA-MM-DD" autofocus required>
                <br>
                <input type="text" name="hora" class="form-control"  placeholder="Hora HH:MM" autofocus required>
                <br>
                <input type="text" name="rubro" class="form-control" placeholder="Rubro" autofocus required >
                <br>
                <input type="text" name="direccion" class="form-control" placeholder="Direccion" autofocus required >
                <br>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus required>
                <br>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido" autofocus required>
            </li>
            <li>
                
                <input type="text" name="dni" class="form-control" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="DNI" maxlength="8" autofocus required>
                <br>
                <input type="text" name="domicilio" class="form-control" placeholder="Domicilio" autofocus required>
                <br>
                <input type="text" name="medidaCautelar" class="form-control" placeholder="Medida cautelar" autofocus required>
                <br>
                <input type="text" name="dispoLegal" class="form-control" placeholder="Disposicion" autofocus required>
                <br>
                <textarea name="objetos" rows="1" class="form-control" maxlength="510" placeholder="Objetos"></textarea>
                <br>
                <input type="text" name="inspector" class="form-control" placeholder="Inspector" autofocus required >
                <br>
                <input type="text" name="legajo" class="form-control" maxlength="25" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" placeholder="Legajo" autofocus required>
                <br>
                <textarea name="observaciones" rows="1" class="form-control" maxlength="510" placeholder="Observaciones"></textarea>
                <br>
                <input type="text" name="estado" class="form-control" placeholder="Estado" autofocus required>
            </li>
            
        </ul>
        <ul>
        <input type="file" name="archivo" class="form-control" autofocus accept="image/*" autofocus>
        </ul>
        <ul>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </ul>
      </div>
      </form>
    </div>

    <div class="col-md-4">
      <div class="row">
      <!-- Busqueda -->
      <h2>Panel de control</h2>
      <div class="card card-body">
        <h6>Busqueda por acta</h6>
        <form action="search_task.php" method="GET">
          <div class="form-group">
             <input type="text" name="searchtitle" class="form-control" placeholder="Acta" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" autofocus required>
          </div>
          <input type="submit" name="submitear" id="submitear" class="btn btn-success btn-block" value="Buscar por Acta">
          <br>
        </form>
          <div>
          <h6>Busqueda por DNI</h6>
          <form action="search_dni.php" method="GET">
          <div class="form-group">
             <input type="text" name="searchtitle2" class="form-control" placeholder="DNI"  maxlength="8" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" autofocus required>
          </div>
          <input type="submit" name="submitear2" id="submitear2" class="btn btn-success btn-block" value="Buscar por DNI">
          <br>
        </form>
          
          </div>
      </div>
    </div>

    <div class="row">
      
        
    </div>


    </div>


  </div>

  <br>
  
  <h4>Ultima entrada</h4>
  <div class="row"> 
  <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Acta</th>
            <th>Comprobación</th>
            <th>Legajo</th>
            <th>Fecha</th>
            <th>Imagen</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php

         
          $query = "SELECT * FROM actas ORDER BY id DESC LIMIT 1";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['acta']; ?></td>
            <td><?php echo $row['actaComp']; ?></td>
            <td><?php echo $row['legajo']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td> <img src="<?php echo $row["img_dir"]; ?>" height="70" width="70" class="img-thumbnail" /> </td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary" data-toggle="tooltip" title="Editar">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['id']?>" onclick="return confirm('Seguro que desea eliminar?')" class="btn btn-danger" data-toggle="tooltip" title="Eliminar">
                <i class="far fa-trash-alt"></i>
              </a>
              <a href="open_task.php?id=<?php echo $row['id']?>" class="btn btn-success" data-toggle="tooltip" title="Abrir Acta">
                <i class="fa fa-window-maximize"></i>
              </a>
              <a href="full_task.php?id=<?php echo $row['id']?>" class="btn btn-info" data-toggle="tooltip" title="Abir Ficha Completa"  >
                <i class="fa fa-window-maximize"></i>
              </a>
            </td>
            
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

  </div>




</head>
</main>

<?php include('includes/footer.php'); ?>

<script language="JavaScript" type="text/javascript">
  function checkDelete() {
    return confirm('Are you sure?');
  }
</script>