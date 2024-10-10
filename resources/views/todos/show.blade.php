<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>タスク詳細</h1>
  <h2>タスク名:{{$todo->title}}</h2>
  <h4>詳細:{{$todo->content}}</h4>
  <h4>期限:{{$todo->limit}}</h4>
  <p><a href="#" onClick="history.back(); return false;">もどる</a></p>
</body>

</html>