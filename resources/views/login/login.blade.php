<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form class="form" action="{{ route('login') }}" method="POST">
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
      <input type="email" name="email" placeholder="example@gmail.com">
      <input type="password" name="password" placeholder="password">
      <button type="'submit" id="login-button">Login</button>
    </form>
    <a href="{{ route('users.create') }}">サインアップ</a> 
  </div>
</body>
</html>