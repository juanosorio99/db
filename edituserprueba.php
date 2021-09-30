<?php session_start();
   require 'connect_data.php';
   $proy = (new MongoDB\Client)->mydb->proyectos; 

   if (isset($_GET['id'])) {
      $proy =findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
      echo $proy;
      //$datos = $users->find();
   }
   /*foreach ($datos as $dato) { 
      $usuario = $dato["username"];
   
}
*/

?>

<!DOCTYPE html>
<html>
   <head>
      <title>Edicion</title>
   </head>
   <body>
         <br>
         <h1>Editar información</h1>
         <a href="index.php" class="btn btn-primary">Ir atras</a>
         <form method="POST" action="editandousuario.php">

               <p><strong>Nuevo Nombre clave</strong>
               <input type="text" name="nnomCla" value="<?php echo $nomclave;?>"></p>
               <p><strong>Nueva Denominacion Comercial</strong>
               <input type="text" name="ndenoCom" value="<?php echo $dencomer;?>"><p>
               <p><strong>Nueva Fecha de Inicio</strong>
               <input type="text" name="nfeIni" value="<?php echo $fechain;?>"><p>
               <p><strong>Nueva Fecha de Finalizacion</strong>
               <input type="text" name="nfeFin" value="<?php echo $fechafin;?>"><p>
               <p><strong>Nuevo Estado Actual</strong>
               <input type="text" name="nestAct" value="<?php echo $estadoac;?>"><p>


               <br>
               <button type="submit" name="submit" class="btn btn-success">Enviar</button>
            </div>
         </form>
      </div>
   </body>
</html>