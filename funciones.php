<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 02 de php</title>
  </head>
  <body>
    <?php
/*
    // 30 20 30
    # function Mayor($num1, $num2, $num3)
    {

      if ($num1 > $num2 || $num1 > $num3 || $num3 > $num2) {
        $mayor=$num1;
      } else if ($num2 > $num1 || $num2 > $num3) {
        $mayor=$num2;
      } else if ($num3 > $num1 || $num3 > $num2) {
        $mayor=$num3;
        */
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

        echo mayor(200, 50, 100);

        echo "<hr>";

        function tabla($x,$y){
          for ($i=0; $i < ; $i++) {
            // code...
          }
        }

     ?>
  </body>
</html>
