<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
session_start();

date_default_timezone_set('Europe/Istanbul');

echo date('m/d/Y H:i:s');

$time = date('His');

echo "<br><br> ";

if ($time  > 060000 AND $time  < 100000 ){
    echo "Günaydın";
}
else if ($time  > 100000 AND $time  < 170000 ){
    echo "İyi Günler";
}
else if ($time  > 170000 AND $time  < 200000 ){
    echo "İyi Akşamlar";
}
else if ($time  > 200000 AND $time  < 240000 ){
    echo "İyi Geceler";
}
else if ($time  > 000000 AND $time  < 060000 ){
    echo "Esenlikler Dilerim";
}


?>
  </body>
</html>