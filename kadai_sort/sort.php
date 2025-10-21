<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    function sort_2way($array, $order) {
      if ($order) {
        sort($array);
      } else {
        rsort($array);
      }
      return $array;  
    }

    $num = [15, 4, 18, 23, 10];

    // 昇順の結果を受け取って表示
    $asc = sort_2way($num, true);
    echo "昇順にソートします。<br>";
    foreach ($asc as $value) {
      echo $value . '<br>';
    }

    // 降順の結果を受け取って表示
    $asc = sort_2way($num, false);
    echo "降順にソートします。<br>";
    foreach ($asc as $value) {
      echo $value . '<br>';
    }
    ?>
  </p>
</body>
</html>