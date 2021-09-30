<?php session_start();
   require 'connect_data1.php';
   $proy = (new MongoDB\Client)->mydb->empleados; 

   if (isset($_GET['id'])) {
      $proy =findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   if(isset($_POST['submit'])){
      $proy->updateOne(
          ['_id' => new MongoDB\BSON\ObjectID()],
          ['$set' => ['ident' => $_POST['nident'], 'nomb' => $_POST['nnomb'], 'apellid' => $_POST['napellid'], 'direct' => $_POST['ndirect'], 'telf' => $_POST['ntelf'], 'emar' => $_POST['nemar'], 'fc' => $_POST['nfc']]]
      );
      $_SESSION['success'] = "Información editada correctamente";
      header("Location: indexE.php");
   }
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
         <form method="POST">
               <p><strong>Identificación:</strong>
               <input type="text" name="nident"></p>
               <p><strong>Nombre:</strong>
               <input type="text" name="nnomb"><p>
               <p><strong>Apellidos:</strong>
               <input type="text" name="napellid"><p>
               <p><strong>Dirección:</strong>
               <input type="text" name="ndirect"><p>
               <p><strong>Telefono:</strong>
               <input type="text" name="ntelf"><p>
               <p><strong>Email:</strong>
               <input type="text" name="nemar"><p>
               <p><strong>Fecha Contratación:</strong>
               <input type="text" name="nfc"><p>

               <br>
               <button type="submit" name="submit" class="btn btn-success">Enviar</button>
            </div>
         </form>
      </div>
   </body>
</html>