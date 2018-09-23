<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 02 de php</title>
  </head>
  <body>
    <?php

/*
      function mayor($num1, $num2, $num3){
        If($num1 > $num2){
          If($num1 > $num3){
            echo 'numero ' . $num1 . ' es mayor';
          } else {
            echo 'numero ' . $num3 . ' es mayor';
          }
        } else {
          If($num2 > $num3){
            echo 'numero ' . $num2 . ' es mayor';
          } else {
            echo 'numero ' . $num3 . ' es mayor';
          }
        }
      }

        echo mayor(20, 50, 100);

        echo "<hr>";
/* funcion del 1 al 100 con error de finales no inclusivos para finales inclisivos =>

        function tabla($x,$y){
          for ( $i = $x; $i <= $y; $i++) {
            echo $i;
            echo "<br>";
          }
        }
        echo tabla(1, 10);

        echo '<hr>';

/* funcion numero al azar

        function numeroAl(){
          $y = (rand(0, 100));
          for ( $i = 1; $i < $y; $i++) {
            echo $i;
            echo "<br>";
          }
        }
        echo numeroAl();

        echo '<hr>';

/* funcion tabla del 2

        function tablaDelDos(){
          $resultado = 1;
          for ($i=$resultado; $i <= 10; $i++) {
            echo $resultado = $i * 2;
            echo "<br>";
          }
        }

        echo tablaDelDos(); */

/* funcion while decreciente */

          function decreciente(){
            $condicion = 100;
        while ($condicion >= 85) {
            echo $condicion;
            $condicion--;
            echo "<br>";
          }
        }
        echo decreciente();

        echo "<hr>";

/* funcion mostar numero * 2 */

          function numeroPor2(){
          $contador = 1;
          $contadorDoble = 0;

          while ($contador <= 5) {
            echo $contadorDoble = $contador * 2;
            $contador++;
            echo "<br>";
            }
          }

          echo numeroPor2();
          echo "<hr>";
/* funcion cuantas veces cara */

          function VecesCara5(){
            $cara = 0;
            $numeroDeVeces = 0;
            $numero = 0;

            while ($cara < 5) {
              $numeroDeVeces++;
              if (rand(0, 1) === 1) {
                $cara++;
              } else {
                $numero++;
              }
            }
            echo "La moneda se lanzo $numeroDeVeces";
            echo "<br>";
            echo "Numero de intentos negativos $numero";
            echo "<br>";
            echo "Numero de intentos positivos $cara";
            echo "<hr>";
          }

          echo VecesCara5();

          function hastaCara(){
            $numeroDeVeces1 = 0;
            $cara1 = 1;
            $numero2 = 0;
            var_dump($cara1);
            do {
              $numeroDeVeces1++;
              if (rand(0, 1) === 1) {
                $cara1++;
             } else {
               $numero2++;
             }
           } while ($cara1 < 1);
           echo "La moneda se lanzo $numeroDeVeces1";
           echo "<br>";
           echo "Numero de intentos numero $numero2";
           echo "<br>";
           echo "Numero de intentos cara $cara1";
           echo "<hr>";
          }
          echo hastaCara();

          function nombres(){
            $digitalHouse = ["Ivan", "Cami", "Lean", "Victor", "Edison"];

            for ($i=0; $i < count($digitalHouse) ; $i++) {
              echo "Soy $digitalHouse[$i]";
              echo "<br>";
            }
          }

          echo nombres();
          echo "<hr>";

          function conForEach(){
          $digitalHouse = ["Ivan", "Cami", "Lean", "Victor", "Edison"];
          foreach ($digitalHouse as $nombres) {
            echo "$nombres <br>";
            }
          }

          echo conForEach();

          echo "<hr>";

          function conForEachRange(){
            $digitalHouse = [];
            foreach (range("a", "o") as $piso => $letra) {
              echo "En la posición [$piso] se encuentra el valor [$letra] <br>";
            }
          }

          echo conForEachRange();

     ?>
  </body>
</html>
