<!doctype html>
<html lang="ja">
  <head>
    <title>11章課題</title>
    <meta charset="utf-8">
  </head>
  <body>
    <p>
      <?php
      $onion = [
        '名前' => '玉ねぎ',
        '値段' => 200,
        '産地' => '北海道'
      ];

      foreach ($onion as $key => $value) {
        echo "{$key}：{$value}<br>";
      }
      ?>
    </p>
  </body>
</html>
