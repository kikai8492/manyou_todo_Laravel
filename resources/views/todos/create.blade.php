<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action='{{route('todos.store')}}' method='post'>
  @csrf
  @if($errors->any())
      <div class="mb-8 py-4 px-6 border border-red-300 bg-red-50 rounded">
        <ul>
          @foreach($errors->all() as $error)
            <li class="text-red-400">{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <h1>タスク追加</h1>
    <h3>タスク名:<input type='text' name='title'></input><h3>
    <h4>タスク詳細:<input type='text' name='content'></input><h4>
    <h4>期限:<input type="datetime-local" name="limit"></h4>
    <button type='submit'>追加</button>
  </form>
</body>
</html>