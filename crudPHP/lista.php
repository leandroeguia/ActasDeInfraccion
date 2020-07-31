<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
<head>
<link rel="stylesheet" href="estilos.css">


  
  
  <h4>Listado Completo</h4>
  <div class="row"> 
  <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Acta</th>
            <th>Comprobación</th>
            <th>Legajo</th>
            <th>Imagen</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php

         
          $query = "SELECT * FROM actas ORDER BY id DESC LIMIT 20";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['acta']; ?></td>
            <td><?php echo $row['actaComp']; ?></td>
            <td><?php echo $row['legajo']; ?></td>
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