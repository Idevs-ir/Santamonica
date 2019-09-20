<!doctype html>
<html>
<head>
  <meta charset=utf-8>
  <title> پنل مدیریت - {{ $title }} </title>
  <link rel="stylesheet" href="{{ asset('css/animation.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/main.min.css')}}">
  <script src="{{asset('js/persian-date.min.js')}}" charset="utf-8"></script>
</head>
<body>
  @if(session()->has('success'))
  <div class="result">
  <p>{{ session()->get('success') }}</p>
      </div>
  @endif
  @if(session()->has('error'))
  <div class="result" style="background-color:tomato;">
  <p>{{ session()->get('error') }}</p>
      </div>
  @endif
  <header>
    <div class="header">
      <img class="logo" src="{{ asset('img/logo.png')}}" alt="logo">
      <div class="exit">
         <a href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">خروج</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
      </div>
      <div class="title">
        <h1>{{ $title }}</h1>
        <p id="date"></p>
      </div>
    @if(isset($exbtn))
    <a class="header-nav" href="{{ route($exbtn->route) }}">{{ $exbtn->name }}</a>
    @endif
    </div>
  </header>
  <aside class="sidebar">
    <ul>
        <li><a href="{{ route('home') }}">صفحه نخست</a></li>
    <li class="{{ $sidebar->academy }}"><a href="{{ route('admin-academy') }}">آکادمی</a><img src='{{ asset('img/audio2.svg')}}'></li>
      <li class="{{ $sidebar->videos}}"><a href="{{ route('admin-videos') }}">ویدیو ها</a><img src='{{ asset('img/video2.svg')}}'></li>
      <li class="{{ $sidebar->pictures}}"><a href="{{ route('admin-pictures') }}">تصاویر</a><img src='{{ asset('img/photo2.svg')}}'></li>
      <li class="{{ $sidebar->team}}"><a href="{{ route('admin-team') }}">تیم ما</a><img src='{{ asset('img/slide2.svg')}}'></li>
      <li class="{{ $sidebar->sponser}}"><a href="{{ route('admin-sponser') }}">همکاران</a><img src='{{ asset('img/shrine2.svg')}}'></li>
      <li class="{{ $sidebar->settings}}"><a href="{{ route('admin-settings') }}">تنظیمات</a><img src='{{ asset('img/setting.svg')}}'></li>
    </ul>
  </aside>
  <main>
    <div class="container">
       @yield('main')
    </div>
  </main>

  <!-- modals -->
  <div class="modal">
    <button class="close"></button>
    <div class="modal-box">
      <div id="content-modal" class="table-modal">

      </div>
    </div>
  </div>
  <script src="{{asset('js/jquery-3.3.1.min.js')}}" charset="utf-8"></script>
  <script src="{{asset('js/functions.js')}}" charset="utf-8"></script>
<script type="text/javascript">
  document.getElementById('date').innerHTML = new persianDate().format('dddd DD MMMM YYYY');
</script>
</body>
</html>
