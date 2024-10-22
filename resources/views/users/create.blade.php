<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action='{{route('users.store')}}' method='post'>
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
    <h3>ユーザー名<input type="text" name="name" id="name"></input></h3>
    <h3>email<input type="text" name="email" id="email"></input></h3>
    <h3>パスワード<input type="password" name="password" id="password"></input></h3>
    <h3>パスワード(確認用)<input type="password" name="password_confirmation" id="password_confirmation"></input></h3>
    <button type='submit'>登録</button>
   <form> 
   <a href="{{ route('login') }}">Login</a> 
</body>
</html>