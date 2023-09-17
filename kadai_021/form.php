<!doctype html>
<html lang="ja">
  <head>
    <title>21章課題</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>個人情報入力フォーム</h1>
    <form action="confirmation.php" method="post">
      <table>
        <tr>
          <td>
            <label for="name">お名前</label>
          </td>
          <td>
            <input id="name" type="text" name="name">
          </td>
        </tr>
        <tr>
          <td>
            性別
          </td>
          <td>
            <input id="men" type="radio" name="gender" value="男性">
            <label for="men">男性</label>
            <input id="women" type="radio" name="gender" value="女性">
            <label for="women">女性</label>
          </td>
        </tr>
        <tr>
          <td>
            <label for="email">メールアドレス</label>
          </td>
          <td>
            <input id="email" type="email" name="email">
          </td>
        </tr>
        <tr>
          <td></td>
          <td style="text-align: right;">
            <input type="submit" value="送信">
          </td>
        </tr>
      </table>
    </form>

  </body>
</html>
