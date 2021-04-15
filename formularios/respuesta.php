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
      <!-- <?php $informacion = $_GET; ?>  -->
        <?php $informacion = $_POST; 
          $nombre = $informacion['nombre'];
          $apellido = $informacion['apellido'];

        if (! (filter_has_var(INPUT_POST, 'nombre') && 
            (strlen(filter_input(INPUT_POST, 'nombre')) > 0 ))) {
          echo "El nobre es obligatorio";
        } else {
          echo "<p>". "Nombre: ". $nombre. "</p>";
        }
          //////  Segunda forma de validar
        if (!isset($apellido) || trim($apellido) != '') {
          echo '<p>'. 'Apellido: '. $apellido. '</p>'; 
        } else {
          echo '<p>'. 'El apellido es obligatorio.'. '</p>';
        }
        //   validando checkbox
        if (isset($_POST['notificaciones'])){
          $notificaciones = $_POST['notificaciones'];
          if ($notificaciones == 'on') {
            echo "Te has inscrito a las notificaciones.";
          }
        }
        echo '<br/>';
          //////    validacion de checkboxes
        if (isset($_POST['curso'])) {
          $cursos = $_POST['curso'];
          echo '<p>'. "Tus Cursos son: ". '</p>';
          foreach ($cursos as $curso) {
            echo $curso. '<br/>';
          } 
        } else {
          echo "No seleccionaste ningun curso.";
        }
        echo '<hr/>';
        ////   validar Selects
        if (isset($_POST['area'])) {
          $area = $_POST['area'];
          echo "Area de especialidad: ". '<br/>';
          switch ($area) {
            case 'fe': echo "Area de FrontEnd.";
              break;
            case 'be': echo "Area de BackEnd.";
              break;
            case 'fs': echo "Area de FullStack.";
              break;
            default:
              echo "Selecciona una Area";
              break;
          }
        }
        ?>   
        
        <?php
          $opciones = array(
            'pres' => 'Presencial',
            'online' => 'En Linia'
          );
          echo '<h2>'. "Validando Radio booton". '</h2>';
          if(array_key_exists($_POST['opciones'], $opciones)) {
            $tipo_curso = $_POST['opciones'];
            switch ($tipo_curso) {
              case 'pres': echo "presencial";
                break;
              case 'online': echo "En Linea";
              break;
            }
          } else { echo "no seleccionaste tipo de curso"; }
        ?> 
        <hr>
        <h2>Mensaje</h2>
        <?php 
          if(isset($_POST['mensaje'])){ //revisa que no este vacia
            $mensaje = $_POST['mensaje'];
            $nuevo_mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING); //remueve etiquetas
            if(strlen($nuevo_mensaje) >0 && trim($nuevo_mensaje) ) {
              echo $nuevo_mensaje;
            } else { echo "Mensaje vacio"; }
          }
        ?>       
    </div>

  </body>
</html>
