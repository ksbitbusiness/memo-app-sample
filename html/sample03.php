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
      require_once "./library.php";

      for( $i = 0 ; $i < count( $posts ) ; $i = $i + 1 ) {
        if( $i == 0 ) {
          echo "new0 " . $posts[ $i ][ "title" ] . "<br>";
        } else if( $i == 1 ) {
          echo "new1 " . $posts[ $i ][ "title" ] . "<br>";
        } else {
          echo $posts[ $i ][ "title" ] . "<br>";
        }
      }
    ?>
  </body>
</html>