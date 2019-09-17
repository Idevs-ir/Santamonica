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
      <img class="logo" src="img/logo.png" alt="logo">
      <div class="exit">
      <a href="{{ route('logout') }}">خروج</a>
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
          <img src="img/book.svg">
          <p onclick="window.location = 'text.php'" >محتوای متنی</p>
        </div>
        <p class="count">تعداد کل محتوا : <span id='total-count'>10</span></p>
        <hr>
        <div class="log">
          <p>آخرین بارگذاری : <span id='last-change'>1396/07/08</span></p>
          <p>توسط : <span id='authur'>alireza</span></p>
          <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>120</span></p>
        </div>
        <div class="more" onclick="showMenu(this , 'matni');"></div>
        <div id='matni-menu' class="menu">
          <span class="close" onclick="closeMenu('matni');">x</span>
          <a href="setSimple.php">متن ساده</a>
          <a href="setAshar.php">اشعار آیینی</a>
          <a href="setQuran.php">قرآن کریم</a>
          <a href="setDoa.php">متن دعا و ترجمه</a>
        </div>
      </div>
      <div class="box">
        <div class="head-box">
          <img src="img/video.svg">
          <p onclick="window.location = 'video.php'">محتوای ویدیویی</p>
        </div>
        <p class="count">تعداد کل محتوا : <span id='total-count'>10</span></p>
        <hr>
        <div class="log">
          <p>آخرین بارگذاری : <span id='last-change'>1396/07/08</span></p>
          <p>توسط : <span id='authur'>alireza</span></p>
          <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>120</span></p>
        </div>
        <div class="more" onclick="window.location = 'setVideo.php'"></div>
      </div>
      <div class="box">
        <div class="head-box">
          <img src="img/audio.svg">
          <p onclick="window.location = 'audio.php'">محتوای صوتی</p>
        </div>
        <p class="count">تعداد کل محتوا : <span id='total-count'>10</span></p>
        <hr>
        <div class="log">
          <p>آخرین بارگذاری : <span id='last-change'>1396/07/08</span></p>
          <p>توسط : <span id='authur'>alireza</span></p>
          <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>120</span></p>
        </div>
        <div class="more" onclick="window.location = 'setAudio.php'"></div>
      </div>
      <div class="box">
        <div class="head-box">
          <img src="img/slide.svg">
          <p onclick="window.location = 'slide.php'" >لینک و اسلاید</p>
        </div>
        <p class="count">تعداد کل محتوا : <span id='total-count'>10</span></p>
        <hr>
        <div class="log">
          <p>آخرین بارگذاری : <span id='last-change'>1396/07/08</span></p>
          <p>توسط : <span id='authur'>alireza</span></p>
          <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>120</span></p>
        </div>
        <div class="more" onclick="window.location = 'setSlide.php'"></div>
      </div>
      <div class="box">
        <div class="head-box">
          <img src="img/shrine.svg">
          <p onclick="window.location = 'amaken.php'">اماکن مذهبی</p>
        </div>
        <p class="count">تعداد کل محتوا : <span id='total-count'>10</span></p>
        <hr>
        <div class="log">
          <p>آخرین بارگذاری : <span id='last-change'>1396/07/08</span></p>
          <p>توسط : <span id='authur'>alireza</span></p>
          <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>120</span></p>
        </div>
        <div class="more" onclick="window.location = 'setAmaken.php'"></div>
      </div>
      <div class="box">
        <div class="head-box">
          <img src="img/photo.svg">
          <p onclick="window.location = 'aksneveshte.php'">عکس نوشته</p>
        </div>
        <p class="count">تعداد کل محتوا : <span id='total-count'>10</span></p>
        <hr>
        <div class="log">
          <p>آخرین بارگذاری : <span id='last-change'>1396/07/08</span></p>
          <p>توسط : <span id='authur'>alireza</span></p>
          <p>تعداد محتوای بارگذاری شده : <span id='authur-post'>120</span></p>
        </div>
        <div class="more" onclick="window.location = 'setAksneveshte.php'"></div>
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