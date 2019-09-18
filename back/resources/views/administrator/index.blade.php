<html>
<head>
  <meta charset=utf-8>
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="{{ asset('css/animation.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/index.min.css')}}">
  <script src="{{asset('js/persian-date.min.js')}}" charset="utf-8"></script>
</head>
<body>
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
    </div>
</header>    
   <main>
    <div class="container">
      <div class="box">
        <div class="head-box">
          <img src="{{ asset('img/video.svg')}}">
        <p onclick="window.location = '{{ route('admin-videos')}}'">ویدیو ها</p>
        </div>
      <p class="count">تعداد کل محتوا : <span id='total-count'>{{ $count['videos'] }}</span></p>
        <hr>
        <div class="log">
          <p>آخرین بارگذاری : <span id='last-change'>{{ $timestamps['videos'] }}</span></p>
          <p>توسط : <span id='authur'>Admin</span></p>
          <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>{{ $count['videos'] }}</span></p>
        </div>
        <div class="more" onclick="window.location = '{{ route('admin-videos-new')}}'"></div>
      </div>
      <div class="box">
        <div class="head-box">
          <img src="{{ asset('img/audio.svg')}}">
          <p onclick="window.location = '{{ route('admin-academy')}}'">آکادمی</p>
        </div>
        <p class="count">تعداد کل محتوا : <span id='total-count'>{{ $count['academy'] }}</span></p>
        <hr>
        <div class="log">
          <p>آخرین بارگذاری : <span id='last-change'>{{ $timestamps['academy'] }}</span></p>
          <p>توسط : <span id='authur'>Admin</span></p>
          <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>{{ $count['academy'] }}</span></p>
        </div>
        <div class="more" onclick="window.location = '{{ route('admin-academy-new')}}'"></div>
      </div>
      <div class="box">
        <div class="head-box">
          <img src="{{ asset('img/slide.svg')}}">
          <p onclick="window.location = '{{ route('admin-team')}}'" >تیم ما</p>
        </div>
        <p class="count">تعداد کل محتوا : <span id='total-count'>{{ $count['team'] }}</span></p>
        <hr>
        <div class="log">
            <p>آخرین تغییرات : <span id='last-change'>{{ $timestamps['team'] }}</span></p>
            <p>توسط : <span id='authur'>Admin</span></p>
            <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>{{ $count['team'] }}</span></p>

        </div>
        <div class="more" onclick="window.location = '{{ route('admin-team-new')}}'"></div>
      </div>
      <div class="box">
        <div class="head-box">
          <img src="{{ asset('img/photo.svg')}}">
          <p onclick="window.location = '{{ route('admin-pictures')}}'">تصاویر</p>
        </div>
        <p class="count">تعداد کل محتوا : <span id='total-count'>{{ $count['pictures'] }}</span></p>
        <hr>
        <div class="log">
          <p>آخرین بارگذاری : <span id='last-change'>{{ $timestamps['pictures'] }}</span></p>
          <p>توسط : <span id='authur'>Admin</span></p>
          <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>{{ $count['pictures'] }}</span></p>
        </div>
        <div class="more" onclick="window.location = '{{ route('admin-pictures-new')}}'"></div>
      </div>
      <div class="box">
          <div class="head-box">
            <img src="{{ asset('img/setting.svg')}}">
            <p onclick="window.location = '{{ route('admin-settings')}}'" >تنظیمات سایت</p>
          </div>
          <hr>
          <div class="log">
              <p>آخرین تغییرات : <span id='last-change'>{{ $timestamps['settings'] }}</span></p>
              <p>توسط : <span id='authur'>Admin</span></p>
          </div>
          <div class="more" onclick="window.location = '{{ route('admin-settings')}}'"></div>
        </div>
    </div>
  </main>

<script src="{{ asset('js/jquery-3.3.1.min.js')}}" charset="utf-8"></script>
<script src="{{ asset('js/functions.js') }}" charset="utf-8"></script>
<script type="text/javascript">
  document.getElementById('date').innerHTML = new persianDate().format('dddd DD MMMM YYYY');
  function showMenu(el , menu) {
    el.style.display="none";
    document.getElementById(menu+'-menu').style.display = 'block';
  }
  function closeMenu(menu) {
    document.getElementById(menu+'-menu').style.display = 'none';
    var more = document.getElementsByClassName('more');
    for(var i =0 ;i<6 ;i++)
    {
      more[i].style.display='block';
    }
  }
</script>
</body>
</html>