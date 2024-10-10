<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @if($errors->any())
    <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
      <ul>
        @foreach($errors->all() as $error)
          <li class="text-red-400">{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <h1>タスク編集</h1>
  <form action='{{route('todos.update', ['todo' => $todo->id])}}' method='post'>
    @csrf
    @method('PUT')
    <div>
      <h4>タスク名:</h4><input type="text" name="title" id="title"/>
    </div>

    <div>
      <h4>タスク詳細:</h4><input type="text" name="content" id="content"/>
    </div>

    <h4>期限:<input type="datetime-local" name="limit"></h4>

    <div class="button">
      <button type="submit">更新</button>
    </div>
</form>

  
<a href="{{ route('todos.index') }}">戻る</a> 
</body>
</html>