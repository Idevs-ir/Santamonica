<!doctype html>
<html>
<head>
  <meta charset=utf-8>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>ورود</title>
  <link rel="stylesheet" href="{{ asset('css/animation.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.min.css')}}">
  <script src="{{asset('js/persian-date.min.js')}}" charset="utf-8"></script>
</head>
<body>
  <head>
    <div class="header">
      <img class="logo" src="{{ asset('img/logo.png') }}" alt="logo">
      <div class="title">
        <h1>پنل مدیریت </h1>
        <p id="date"></p>
      </div>
    </div>
  </head>
  <main>
    <div class="login">
      <h3>پنل مدیریت </h3>
      @error('email')
        <p class="invalid-feedback" role="alert">
          <strong>نام کاربری یا رمز ورود اشتباه است</strong>
        </p>
      @enderror
      @error('password')
        <p class="invalid-feedback" role="alert">
          <strong>نام کاربری یا رمز ورود اشتباه است</strong>
        </p>
      @enderror
      <form class="login-form" action="{{ route('login') }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="نام کاربری" required autocomplete="email" autofocus value="{{ old('email') }}">
        <input type="password" name="password" placeholder="گذرواژه" required autocomplete="current-password">
        <button type="submit">ورود</button>
      </form>
    </div>
  </main>

<script type="text/javascript">
  document.getElementById('date').innerHTML = new persianDate().format('dddd DD MMMM YYYY');
</script>
</body>
</html>
