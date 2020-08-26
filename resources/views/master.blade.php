<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <title>Doolen</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
          <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href=""><img src="{{asset('assets/image/doolen.png')}}"></a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 mx-auto">
                  <input class="form-control mr-sm-2" type="search" placeholder="Alpukat, Lobster" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0 d-none" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="#"><img src="{{asset('assets/image/favorit.png')}}"> Favorit</a>
                  </li>
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="#"><img src="{{asset('assets/image/order.png')}}"> Pesanan</a>
                  </li>
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="#"><img src="{{asset('assets/image/notification.png')}}"> Notifikasi</a>
                  </li>
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="#"><img src="{{asset('assets/image/akun.png')}}"> Akun</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="" id="cart"><img src="{{asset('assets/image/order (2).png')}}"></a>
                  </li>
                </ul>
            </div>
          </div>
      </nav>
    </header>
    <main>
    <span class="motif-0"></span>
    @yield('content')
    <footer>
      <span class="motif-1"></span>
      <span class="motif-2"></span>
      <div class="menu">
        <div class="container row">
          <div class="apps col-5 row">
            <div class="Logo col-4">
              <a href=""><img src="{{asset('assets/image/doolen.png')}}"></a>
            </div>
            <div class="google col-4">
              <a href=""><img src="{{asset('assets/image/google.png')}}" alt="Google Play" class="google-play"></a>
            </div>
            <div class="apple col-4">
              <a href=""><img src="{{asset('assets/image/apple.png')}}" alt="Apple Store" class="apple-store"></a>
            </div>
          </div>
          <div class="footer-menu col-4 ml-3 ">
            <ul>
              <li class="d-inline"><a href="">Kontak</a></li>
              <li class="d-inline mx-2"><a href="">Tentang</a></li>
              <li class="d-inline"><a href="">Karir</a></li>
            </ul>
          </div>
          <div class="social-media col-3">
            <ul>
              <li class="d-inline"><a href=""><i class="fab fa-twitter"></i></a></li>
              <li class="d-inline mx-3"><a href=""><i class="fab fa-instagram"></i></a></li>
              <li class="d-inline"><a href=""><i class="fab fa-facebook-f"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </main>
<script src="{{asset('assets/vendor/jquery 3.4.1/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-4.3.1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/theme.js')}}"></script>
</body>
</html>