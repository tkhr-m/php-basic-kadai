<!doctype html>
<html lang="ja">
  <head>
    <title>21章課題</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>送信内容</h1>
    <table border="1">
      <tr>
        <td>
          お名前
        </td>
        <td>
          <?php echo $_POST["name"]; ?>
        </td>
      </tr>
      <tr>
        <td>
          性別
        </td>
        <td>
          <?php echo $_POST["gender"]; ?>
        </td>
      </tr>
      <tr>
        <td>
          メールアドレス
        </td>
        <td>
          <?php echo $_POST["email"]; ?>
        </td>
      </tr>
    </table>
  </body>
</html>
