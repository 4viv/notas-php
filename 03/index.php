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
            'Datos' => array(
                            'nombre' => 'Hiram',
                            'pais' => 'Mexico',
                            'Profecion' => 'Programador'),
            'Lenguajes' => array('FrontEnd'=> array('HTML','Javascript','css','jQuery'),
                                'BackEnd' => array('C','C++','PHP','Python')
                              ),
            'Hobis' => array('Hardware', 'Musica', 'Ejercicio', 'Videojuegos', 'Correr', 'comer')
          );
        ?>

        <pre>
        <?php print_r($persona); ?>
        </pre>
        <?php print_r($persona['Lenguajes']['BackEnd'][1]); ?>

        <pre>
        <?php  $existe = in_array('Python',$persona['Lenguajes']['BackEnd']);
        ?>
        </pre>
        <pre>
        <!-- <?php var_dump($existe); ?> -->
        </pre>
        <?php 
        $hobbies = array('Hardware','Musica','Ejercicio','Videojuegos','Correr','comer');
        ?>
        <h2>Hobbies.</h2>
        <ul>
          <?php foreach($hobbies as $hobbie): ?>
          <li><?php echo $hobbie; ?></li>
          <?php endforeach ?>
        </ul>
          <?php
            $dPersona = array(
              'nombre' => 'Hiram',
              'pais' => 'Mexico',
              'Profecion' => 'Programador');
          ?>
          <h2>Datos de persona</h2>
          <ul>
          <?php foreach($dPersona as $key => $val ){ ?>
            <li><?php echo $key. ": ". $val; ?></li>
          <?php } // {} son otra forma de escribir foreach ?> 
            </ul>

            <h2>ARREGLO</h2>
          <ul>
          <p>Datos</p>
          <?php foreach($persona['Datos'] as $key => $val ): ?>
            <li><?php echo $key. ": ". $val; ?></li>
          <?php endforeach ?>
          <p>Lenguajes FreonEnd</p>
          <?php foreach($persona['Lenguajes']['FrontEnd'] as $key => $val ): ?>
            <li><?php echo $key. ": ". $val; ?></li>
          <?php endforeach ?>
          <p>Lenguajes BackEnd</p>
          <?php foreach($persona['Lenguajes']['BackEnd'] as $key => $val ): ?>
            <li><?php echo $key. ": ". $val; ?></li>
          <?php endforeach ?>
          <p>Hobbies</p>
          <?php foreach($persona['Hobis'] as $val ): ?>
            <li><?php echo $key. ": ". $val; ?></li>
          <?php endforeach ?>
          </ul>
            <h2>Arreglo con for </h2>
          <?php for ($i=0; $i < count($hobbies) ; $i++) { 
            echo $hobbies[$i] . '<br>';
          } ?>
   
   
    </div>
  </body>
</html>
