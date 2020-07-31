<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-5">
<h2>Acta de infraccion - Ficha completa</h2> 
<br>
<br>
<div class="card card-body">
  <div class="row">
    
    
    <br>
    <br>
    <div class="col-md-12" style="padding-left:0px">
    <br>
    <br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Acta</th>
            <th>Acta comprobacion</th>
            <th>Lugar</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Rubro</th>
            <th>Direccion</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Imagen</th>
            
          </tr>
        </thead>

        <tbody>

          <?php

          $id = $_GET['id']; 
          $query = "SELECT * FROM actas WHERE id=$id";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['acta']; ?></td>
            <td><?php echo $row['actaComp']; ?></td>
            <td><?php echo $row['lugar']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['hora']; ?></td>
            <td><?php echo $row['rubro']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td> <img src="<?php echo $row["img_dir"]; ?>" height="70" width="70" class="img-thumbnail" /> </td>
          </tr>
          <?php } ?>
        </tbody>

        
        
      </table>

      <br>
      <br>
      

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>DNI</th>
            <th>Domicilio</th>
            <th>Medida Cautelar</th>
            <th>Disposicion Legal</th>
            <th>Objetos</th>
            <th>Inspector</th>
            <th>Legajo</th>
            <th>Observaciones</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>

        <tbody>

          <?php

          $id = $_GET['id']; 
          $query = "SELECT * FROM actas WHERE id=$id";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['dni']; ?></td>
            <td><?php echo $row['domicilio']; ?></td>
            <td><?php echo $row['medidaCautelar']; ?></td>
            <td><?php echo $row['dispoLegal']; ?></td>
            <td><?php echo $row['objetos']; ?></td>
            <td><?php echo $row['inspector']; ?></td>
            <td><?php echo $row['legajo']; ?></td>
            <td><?php echo $row['observaciones']; ?></td>
            <td><?php echo $row['estado']; ?></td>
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
            </td>
          </tr>
          <?php } ?>
        </tbody>

        
        
      </table>



    </div>
  </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
