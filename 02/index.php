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
        <?php 
          $persona = array(
            'nombre' => 'Hiram',
            'pais' => 'Mexico',
            'Profecion' => 'Programador'
          );
          echo $persona['Profecion'];
        ?>
        <pre>
        <?php print_r($persona); ?>
        </pre>
        <pre>
        <?php  // acceder por indice
         print_r(array_values($persona)); ?>
        </pre>            
        <pre>
        <?php print_r(array_keys($persona)); ?>
        </pre>
        </div>
   
   
   
    </div>
  </body>
</html>
