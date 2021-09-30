<html>
<head>
    <title>Empresa</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/united/bootstrap.min.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="index.php">Proyectos</a>
    
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        
        <li class="nav-item">
          <a class="navbar-brand" href="empleado/indexE.php">Empleados</a>
        </li>

        
      </ul>
      
    </div>
  </div>
</nav>

<?php
require 'adduser.php';
?>

<p>
    <?php
    require_once("connect_data.php");

    if ($proy->count()>0)
    {
        $datos = $proy->find();
        ?>
        <table class="table table-hover">
        <?php
        foreach ($datos as $dato) {
        ?>      
        
        <thead>
        <tr>
                        <!--td><p><label>ID: </label><?php echo $dato["_id"]; ?></p></td-->
                        <td><p><label>NC: </label><?php echo $dato["nomCla"]; ?></p></td>
                        <td><p><label>DC: </label><?php echo $dato["denoCom"]; ?></p></td>
                        <td><p><label>FI: </label><?php echo $dato["feIni"]; ?></p></td>
                        <td><p><label>FF: </label><?php echo $dato["feFin"]; ?></p></td>
                        <td><p><label>EA: </label><?php echo $dato["estAct"]; ?></p></td>

                        <!--td><a class="btn btn-success" href="edituserprueba.php?id=<?php echo $dato["_id"];?>">Editar</a></td-->
                        <td><a class="btn btn-danger" href="deluser.php?id=<?php echo $dato["_id"];?>">Eliminar</a></td>
        </tr>
       
        </thead>
        
                 <?php
         }//foreach
                 ?>
                 </table>
                 <?php
    }else{
                ?>
                        <h4></i>Sin registros en la Base de Datos</h4>
                <?php 
    } ?>

</p>

 
</body>

</html>
