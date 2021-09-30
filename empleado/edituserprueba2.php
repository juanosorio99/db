<?php session_start();
   require 'connect_data1.php';
   $proy = (new MongoDB\Client)->mydb->empleados; 

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
         <a href="indexE.php" class="btn btn-primary">Ir atras</a>
         <form method="POST" action="editandousuario1.php">

               <p><strong>Identificación:</strong>
               <input type="text" name="nident" value="<?php echo $identificacion;?>"></p>
               <p><strong>Nombre:</strong>
               <input type="text" name="nnomb" value="<?php echo $nombre;?>"><p>
               <p><strong>Apellidos:</strong>
               <input type="text" name="napellid" value="<?php echo $apelli;?>"><p>
               <p><strong>Dirección:</strong>
               <input type="text" name="ndirect" value="<?php echo $direc;?>"><p>
               <p><strong>Telefono:</strong>
               <input type="text" name="ntelf" value="<?php echo $telef;?>"><p>
               <p><strong>Email:</strong>
               <input type="text" name="nemar" value="<?php echo $emailt;?>"><p>
               <p><strong>Fecha Contratación:</strong>
               <input type="text" name="nfc" value="<?php echo $fechac;?>"><p>

               <br>
               <button type="submit" name="submit" class="btn btn-success">Enviar</button>
            </div>
         </form>
      </div>
   </body>
</html>