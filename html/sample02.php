<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sample</title>
  </head>
  <body>
    <?php
      require_once "library.php";

      /*for( $i = 0 ; $i < 10 ; $i = $i + 1 ) {
        echo $i . "番目<br>";
      }*/

      /*$i = 0;
      while( $i < 10 ) {
        echo $i . "番目<br>";
        $i = $i + 1;
      }*/

      $ary = ["apple","orange","banana"];
      echo $ary[ 0 ] . "<br>";
      echo $ary[ 1 ] . "<br>";
      echo $ary[ 2 ] . "<br>";

      for( $i = 0 ; $i < count( $ary ) ; $i = $i + 1 ) {
        echo $ary[ $i ] . "<br>";
      }

      for( $i = 0 ; $i < count( $posts ) ; $i = $i + 1 ) {
        echo $posts[ $i ][ "title" ] . "<br>";
      }
    ?>
  </body>
</html>