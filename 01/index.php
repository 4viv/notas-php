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
              $tecnologias = ['HTML', 'CSS', 'BOOTSTRAP', 'JQUERY'];
              $lenguajes = array('C', 'GO', 'JAVASCRIPT', 'PHP', 'PYTHON', 'RUBY', 'C++', 'C#');
            ?>
            <!-- <pre>
            <?php var_dump($tecnologias);?>
            </pre> -->
            <?php 
              $lenguajes[] = 'java';
            ?>
             <pre>
              <?php print_r($lenguajes); ?>
            </pre>
            <?php 
              $extraerVariable = array_pop($lenguajes);
              echo("Extraimos el elemento: ". $extraerVariable);
              unset($lenguajes[1]); // Remover elemento en una posicion
            ?>
            <p>Quitando el elemento [1]</p>
             <pre>
              <?php print_r($lenguajes); ?>
            </pre>
            <p>extrallendo el primer elemento</p>
            <?php $extraerPrimerElement = array_shift($lenguajes);
            echo("El elemento extraido es: ". $extraerPrimerElement) ?>
             <pre>
              <?php print_r($lenguajes); ?>
            </pre>
            <p>Eliminar un rango de elementos y agregar otro</p>
            <?php 
              $extraerRango = array_splice($lenguajes,1,3,array('loquesea','nada','otro'));?>
              <p>lo que se quito</p> 
            <pre>
              <?php print_r($extraerRango); ?>
            </pre>
            <p>agregamos:</p>
            <pre>
              <?php print_r($lenguajes); ?>
            </pre>
            
        


        </div>
   
   
   
    </div>
  </body>
</html>
