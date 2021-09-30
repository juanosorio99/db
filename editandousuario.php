<?php session_start();
   require 'connect_data.php';
   $proy = (new MongoDB\Client)->mydb->proyectos; 

   if (isset($_GET['id'])) {
      $proy =findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   if(isset($_POST['submit'])){
      $proy->updateOne(
          ['_id' => new MongoDB\BSON\ObjectID()],
          ['$set' => ['nomCla' => $_POST['nnomCla'], 'denoCom' => $_POST['ndenoCom'], 'feIni' => $_POST['nfeIni'], 'feFin' => $_POST['nfeFin'], 'estAct' => $_POST['nestAct']]]
      );
      $_SESSION['success'] = "Información editada correctamente";
      header("Location: index.php");
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
         <a href="index.php" class="btn btn-primary">Ir atras</a>
         <form method="POST">
               <p><strong>Nuevo Nombre clave</strong>
               <input type="text" name="nnomCla"></p>
               <p><strong>Nueva Denominacion Comercial</strong>
               <input type="text" name="ndenoCom"><p>
               <p><strong>Nueva Fecha de Inicio</strong>
               <input type="text" name="nfeIni"><p>
               <p><strong>Nueva Fecha de Finalizacion</strong>
               <input type="text" name="nfeFin"><p>
               <p><strong>Nuevo Estado Actual</strong>
               <input type="text" name="nestAct"><p>

               <br>
               <button type="submit" name="submit" class="btn btn-success">Enviar</button>
            </div>
         </form>
      </div>
   </body>
</html>