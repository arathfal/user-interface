@extends("master")

@section('content')
    <div class="container">
        <div class="news row mt-100">
            <div class="col-12 col-sm-12 col-md-7">
                <div id="carouselSlider" class="carousel slide" data-ride="carousel">
                    <div class="caption">
                        <h3>Nutrisi untuk <br> kamu yang <br> <span>#dirumahaja</span></h3>
                    </div>
                    <div class="person">
                        <img src="{{asset('assets/image/orangfix.png')}}" alt="...">
                    </div>
                    <ol class="carousel-indicators">
                      <li data-target="#carouselSlider" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselSlider" data-slide-to="1"></li>
                      <li data-target="#carouselSlider" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('assets/image/fbcover.png')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('assets/image/fbcover.png')}}" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('assets/image/fbcover.png')}}" class="d-block w-100" alt="...">
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5">
                <div class="col-12">
                    <div class="banner-pasta py-3 mb-3">
                        <div class="d-flex justify-content-around align-items-center">
                            <h2>Aneka <br> Pasta</h2>
                            <div class="img-bg text-center">
                                <img src="{{asset('assets/image/pasta.png')}}" class="rounded" alt="Pasta">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="banner-green py-3">
                        <div class="d-flex justify-content-around align-items-center">
                            <h2>Aneka <br> Sayur</h2>
                            <div class="img-bg text-center">
                                <img src="{{asset('assets/image/vegetable.png')}}" alt="Vegetable">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter row p-5">
            <div class="col">
                <div class="box bgr-green bs d-flex flex-row justify-content-center align-items-center mb-3">
                    <img src="{{asset('assets/image/menu.png')}}" alt="...">
                    <a href="#" class="txt-green pl-1">Semua</a>
                </div>
            </div>
            <div class="col">
                <div class="box bgr-pastel d-flex flex-row justify-content-center align-items-center mb-3">
                    <img src="{{asset('assets/image/seafood.png')}}" alt="...">
                    <a href="#" class="txt-orange pl-1">Beku</a>
                </div>
            </div>
            <div class="col">
                <div class="box bgr-orange d-flex flex-row justify-content-center align-items-center mb-3">
                    <img src="{{asset('assets/image/fruits.png')}}" alt="...">
                    <a href="#" class="txt-yellow pl-1">Buah</a>
                </div>
            </div>
            <div class="col">
                <div class="box bgr-green d-flex flex-row justify-content-center align-items-center mb-3">
                    <img src="{{asset('assets/image/vegetable.png')}}" alt="...">
                    <a href="#" class="txt-green pl-1">Sayur</a>
                </div>
            </div>
            <div class="col">
                <div class="box bgr-pastel d-flex flex-row justify-content-center align-items-center mb-3">
                    <img src="{{asset('assets/image/spices.png')}}" alt="...">
                    <a href="#" class="txt-orange pl-1">Rempah</a>
                </div>
            </div>
            <div class="col">
                <div class="box bgr-pastel d-flex flex-row justify-content-center align-items-center mb-3">
                    <img src="{{asset('assets/image/seasoning.png')}}" alt="...">
                    <a href="#" class="txt-orange pl-1">Season</a>
                </div>
            </div>
            <div class="col">
                <div class="box bgr-orange d-flex flex-row justify-content-center align-items-center mb-3">
                    <img src="{{asset('assets/image/pasta.png')}}" alt="...">
                    <a href="#" class="txt-orange pl-1">Pasta</a>
                </div>
            </div>
            <div class="col">
                <div class="box bgr-pastel d-flex flex-row justify-content-center align-items-center mb-3">
                    <img src="{{asset('assets/image/snack.png')}}" alt="...">
                    <a href="#" class="txt-orange pl-1">Snack</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5">
        <div class="items row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-2 offset-sm-1">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/bluberi.png')}}" alt="Blueberry">
                    <img src="{{asset('assets/image/heart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Blueberrie</strong></h6>
                    <h6 class="weight">1kg</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>86.5k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/beras putih.png')}}" alt="Beras Putih">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Beras Putih</strong></h6>
                    <h6 class="weight">1kg/Pack</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>16k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/daun parsley.png')}}" alt="Daun Parsley">
                    <img src="{{asset('assets/image/heart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Daun Parsley</strong></h6>
                    <h6 class="weight">20g</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>33k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/salmon fillet.png')}}" alt="Filet Salmon">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Filet Salmon</strong></h6>
                    <h6 class="weight">200g</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>62k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/diet coke.png')}}" alt="Diet Coke Coca Cola">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Diet Coke Coca Cola</strong></h6>
                    <h6 class="weight">355ml/Cans</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>44k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2 offset-sm-1">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/white truffle oil.png')}}" alt="White Truffle Oil">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>White Truffle Oil</strong></h6>
                    <h6 class="weight">250ml/Bottle</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>331k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/pringles.png')}}" alt="Pringles Sour Cream Onions">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Pringles Sour Cream Onions</strong></h6>
                    <h6 class="weight">110/Pack</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>23.9k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/lobster.png')}}" alt="Lobster">
                    <img src="{{asset('assets/image/heart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Lobster</strong></h6>
                    <h6 class="weight">900g</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>135k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/bluberi.png')}}" alt="Blueberry">
                    <img src="{{asset('assets/image/heart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Blueberrie</strong></h6>
                    <h6 class="weight">1kg</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>86.5k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/beras putih.png')}}" alt="Beras Putih">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Beras Putih</strong></h6>
                    <h6 class="weight">1kg/Pack</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>16k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2 offset-sm-1">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/daun parsley.png')}}" alt="Daun Parsley">
                    <img src="{{asset('assets/image/heart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Daun Parsley</strong></h6>
                    <h6 class="weight">20g</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>33k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/salmon fillet.png')}}" alt="Filet Salmon">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Filet Salmon</strong></h6>
                    <h6 class="weight">200g</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>62k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/diet coke.png')}}" alt="Diet Coke Coca Cola">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Diet Coke Coca Cola</strong></h6>
                    <h6 class="weight">355ml/Cans</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>44k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/white truffle oil.png')}}" alt="White Truffle Oil">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>White Truffle Oil</strong></h6>
                    <h6 class="weight">250ml/Bottle</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>331k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="card p-2 mb-5">
                    <img src="{{asset('assets/image/pringles.png')}}" alt="Pringles Sour Cream Onions">
                    <img src="{{asset('assets/image/myheart.png')}}" alt="..." class="icon">
                    <h6 class="name mt-3"><strong>Pringles Sour Cream Onions</strong></h6>
                    <h6 class="weight">110/Pack</h6>
                    <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>23.9k</strong></h6>
                    <button type="button" class="btn btn-success">+</button>
                </div>
            </div>
        </div>
        <button id="requestItem" type="button" class="btn btn-outline-success py-2"><i class="fa-lg fas fa-chevron-down"></i></button>
        <div id="result" class="text-center mt-5"></div>
    </div>
@endsection