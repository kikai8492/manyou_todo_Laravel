<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>タスク一覧</h1>
  @if(session('success'))
	<div>
		{{ session('success') }}
	</div>
  @endif

  <a href="{{ route('todos.create') }}">タスク追加</a> 
  <table>
    <thead>
      <tr>
        <th><h2>タスク名</h2></th>
        <th><h2>期限</h2></th>
        <th><h2>詳細</h2></th>
        <th><h2>編集</h2></th>
        <th><h2>完了</h2></th>


      </tr>
    </thead>
    @foreach($todos as $todo)
    <tr>
      <td><h4>{{$todo->title}}</h4></td>
      <td>{{$todo->limit}}</td>
      <td><a href="{{ route('todos.show', $todo->id) }}">詳細</a></td>
      <td><a href="{{ route('todos.edit', $todo->id) }}">編集</a></td>
      <td>
        <form action="{{route('todos.destroy', ['todo' => $todo->id]) }}" method="post">
          @csrf
          @method('DELETE')
          <button>完了</button>
        </form>
      </td>
    </tr>
    <tr>

  @endforeach
  </table>
</body>
</html>