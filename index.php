<?php
  // salvo testo in variabile
  $testo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
  //
  $badword = $_GET ['ipsum'];
  // salvo testo filtrato  (parola da filtrare, con cosa filtro, dove)
  $testoFiltrato = str_replace($badword, "***", $testo);
  // salvo lunghezza testoF
  $lunghezzaP = strlen($testoFiltrato);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <!-- stampo testo filtrato -->
  <h2> <?php echo $testoFiltrato; ?> </h2>

  <!-- stampo lunghezza stringa -->
  <h5>La lunghezza della stringa è : <?php echo $lunghezzaP; ?>  </h5>





</body>
</html>
