<?php
  // Verifica si no está vacío
  if(isset($_POST["segundos"]) && $_POST["segundos"] != "") {
    // Asegúrate de que la entrada sea un número entero
    $segundos = (int)$_POST["segundos"];

    // Verifica que el número sea válido
    if($segundos < 0) {
      echo "Por favor, ingresa un número válido de segundos.";
    } else {
      // Convierte los segundos
      $horas = floor($segundos / 3600);
      $segundos %= 3600;
      $minutos = floor($segundos / 60);
      $segundos %= 60;

      echo "Horas: $horas, Minutos: $minutos, Segundos: $segundos";
    }
  } else {
    echo "Por favor, ingresa una cantidad de segundos.";
  }
?>
