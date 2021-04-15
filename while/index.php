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
          $i = 0;
          while ($i < count($lenguajes)) {
            if(count($lenguajes) > 0) {
              echo $lenguajes[$i] . '<br/>';
              if($i === count($lenguajes)) {
                echo "Fin del ciclo.";
              }
            }else {
              echo "La cadena esta vacia.";
            }
            $i++;
          }

           ?>
            
        


        </div>
   
   
   
    </div>
  </body>
</html>
