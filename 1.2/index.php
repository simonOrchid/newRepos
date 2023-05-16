<!DOCTYPE html>
<html lang='ru'>

<head>
<!DOCTYPE html>
<html lang='ru'>

<head>
  <strong>
    Исходный массив:
  </strong>
</head>

<body>
  <p>
    <?php
    if (isset($_POST['generate'])) {
      $array = [];
      for ($i = 0; $i < 20; $i++) {
        $array[] = rand(-100, 100);
        echo $array[$i] . ' ';
      }
      sort($array);
      echo '<br><br><strong>Массив после сортировки: </strong><br><br>';
      foreach ($array as $str) {
        echo $str . ' ';
      }
    }
    ?>
  </p>
  <form method="post">
    <p><input type="submit" name="generate" value="Сгенирировать новый массив:" /></p>
  </form>
</body>

</html>