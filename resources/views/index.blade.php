<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>トップページ</p>
  <form action="/thanks" method="post">
    @csrf
    <tr>
      <th>氏名</th>
      <br><td><input type="text" name="name"></td>
    </tr><br>
    <tr>
      <th>メールアドレス</th>
      <br><td><input type="email" name="email"></td>
    </tr>
    <br><button>送信する</button>
  </form>
</body>
</html>