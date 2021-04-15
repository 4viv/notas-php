<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aprendiendo PHP</title>
    <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
  </head>
  <body>
    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>
        <div class="contenido">
        <!-- variables no pueden tener numeros ni - -->
            <?php 
              $lenguajes = array('C', 'GO', 'JAVASCRIPT', 'PHP', 'PYTHON', 'RUBY', 'C++', 'C#');
            ?>

          <?php
            $agenda = array();

            function contacto($nombre = "Undefined", $tel = "Undefined"){
                global $agenda;
                $agenda[] = array($nombre, $tel);
            }

            contacto("Hiram", "664 2451575");
            contacto("Ugo", "664 46788733");
            contacto("Paco", "664 73567432");
            contacto("Luis", "664 1093645");
            echo '<pre>';
             var_dump($agenda);
            echo '</pre>';

            function MostrarUsuario($id){
              global $agenda;
              $usuario = $agenda[$id];
              foreach($usuario as $user){
                echo $user . '<br/>';
              }
            }
              MostrarUsuario(2);

           ?>
            
        


        </div>
   
   
   
    </div>
  </body>
</html>
