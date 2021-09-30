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


<p>
    <?php
    require_once("connect_data1.php");

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
                    
                        <td><p><label>Identificación: </label><?php echo $dato["ident"]; ?></p></td>
                        <td><p><label>Nombre: </label><?php echo $dato["nomb"]; ?></p></td>
                        <td><p><label>Apellidos: </label><?php echo $dato["apellid"]; ?></p></td>

                        <td>
                          <!--a class="btn btn-info" href="">seleccionar</a-->
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                Seleccionar
                              </label>
                            </div>
                        </td>                        
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
                    
                        <td><p><label>NC: </label><?php echo $dato["nomCla"]; ?></p></td>
                        <td><p><label>EA: </label><?php echo $dato["estAct"]; ?></p></td>

                        <td>
                          <!--a class="btn btn-info" href="">seleccionar</a-->
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                Seleccionar
                              </label>
                            </div>
                        </td>                        
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

<div align="center">
<form method="post" action="">
<table>
  <tr><td align="center"></br><input type="submit" value="Guardar" class="btn btn-info" /> </td></tr>
</table>
</form>
</div>

</body>

</html>
