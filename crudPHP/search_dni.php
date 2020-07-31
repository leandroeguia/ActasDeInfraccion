<?php include('includes/header.php'); ?>
<?php
include("db.php");


if  (isset($_GET['submitear2'])) {
  $fieldValue = $_GET['searchtitle2'];
  $query = "SELECT * FROM actas WHERE dni=$fieldValue";
  $result = mysqli_query($conn, $query);
  if (!empty($result))  {
    $row = mysqli_fetch_array($result);
    $row2 = mysqli_num_rows($result); 
    $img= $row['img_dir'];

    if($row2){
        $query = "SELECT * FROM actas WHERE dni=$fieldValue";
        $result = mysqli_query($conn, $query);
        while($row3 = mysqli_fetch_assoc($result)) {
        
        ?>


            <main class="container p-4">
            <link href="css/bootstrap.min.css" rel="stylesheet">
                        <div class="row">
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
                                <tr>
                                <td><?php echo $row3['acta']; ?></td>
                                <td><?php echo $row3['actaComp']; ?></td>
                                <td><?php echo $row3['legajo']; ?></td>
                                <td> <img src="<?php echo $row3["img_dir"]; ?>" height="70" width="70" class="img-thumbnail" /> </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row3['id']?>" class="btn btn-secondary" data-toggle="tooltip" title="Editar">
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="delete_task.php?id=<?php echo $row3['id']?>" onclick="return confirm('Seguro que desea eliminar?')" class="btn btn-danger" data-toggle="tooltip" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                    </a>
                                    <a href="open_task.php?id=<?php echo $row3['id']?>" class="btn btn-success" data-toggle="tooltip" title="Abrir Acta">
                                        <i class="fa fa-window-maximize"></i>
                                    </a>
                                    <a href="full_task.php?id=<?php echo $row3['id']?>" class="btn btn-info" data-toggle="tooltip" title="Abir Ficha Completa"  >
                                        <i class="fa fa-window-maximize"></i>
                                    </a>
                                    </td>
                                    
                                </tr>
                                
                                
                                <?php } ?>
                                
                                </tbody>
                            </table>
                            </div>
                </main>
              
           



        <?php
    }else{
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <h1>No se encontraron resultados</h1>
        <?php
        die("El DNI ingresado no posee actas!");
    }
    }
    else{
        ?>
        <h1>No se encontraron resultados</h1>
        <?php
        die("No existe el acta con el DNI ingresado!");
    }
}



?>

