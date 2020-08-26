@extends('master')

@section('content')
<div class="container">
    <h6 class="subtitle-cart text-center mb-5">Kirim Ke Alamat</h6>
    <div class="address p-5 row">
        <div class="col-10 offset-sm-1">
            <form action="">
                <textarea class="w-100" name="" rows="5" id="address" placeholder="Jl. Nama Jalan No.01 Rt.01 Rw.01 Kel.Kelurahan Kec.Kecamatan Kab.Kabupaten, Prov.Provinsi"></textarea>
            </form>
        </div>
        <div class="col-1">
            <a href=""><img src="{{asset('assets/image/location-pin.png')}}" class="location rounded" alt=""></a>
        </div>
    </div>
    <div class="container">
        <h6 class="subtitle-cart text-center mb-5">Item yang dibeli</h6>
        <div class="cart-list row">
            <div class="col-12 col-sm-12 col-md-5 offset-sm-1 mb-3">
                <div class="box-cart p-2 row">
                    <div class="col-4">
                        <img src="{{asset('assets/image/bluberi.png')}}" alt="Blueberri">
                    </div>
                    <div class="col-4">
                        <h6 class="name"><strong>Blueberrie</strong></h6>
                        <h6 class="weight">1kg</h6>
                        <h6 class="price txt-orange mt-3">Rp  <strong>86.5k</strong></h6>
                    </div>
                    <div class="col-4 d-flex flex-column-reverse">
                        <form action="" class="">
                            <div class="quantity row">
                                <input type="button" class="btn btn-success col" name="" id="" value="-">
                                <input type="text" class="col mx-1" name="" id="" value="0">
                                <input type="button" class="btn btn-success col"  name="" id="" value="+">
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 offset-sm-1 mb-3">
                <div class="box-cart p-2 row">
                    <div class="col-4">
                        <img src="{{asset('assets/image/beras putih.png')}}" alt="Beras Putih">
                    </div>
                    <div class="col-4">
                        <h6 class="name mt-3"><strong>Beras Putih</strong></h6>
                        <h6 class="weight">1kg/Pack</h6>
                        <h6 class="price txt-orange mt-3 mb-4">Rp  <strong>16k</strong></h6>
                    </div>
                    <div class="col-4 d-flex flex-column-reverse">
                        <form action="" class="">
                            <div class="quantity row">
                                <input type="button" class="btn btn-success col" name="" id="" value="-">
                                <input type="text" class="col mx-1" name="" id="" value="0">
                                <input type="button" class="btn btn-success col"  name="" id="" value="+">
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 offset-sm-1 mb-3">
                <div class="box-cart p-2 row">
                    <div class="col-4">
                        <img src="{{asset('assets/image/salmon fillet.png')}}" alt="Filet Salmon">
                    </div>
                    <div class="col-4">
                        <h6 class="name"><strong>Filet Salmon</strong></h6>
                        <h6 class="weight">200g</h6>
                        <h6 class="price txt-orange mt-3">Rp  <strong>62k</strong></h6>
                    </div>
                    <div class="col-4 d-flex flex-column-reverse">
                        <form action="" class="">
                            <div class="quantity row">
                                <input type="button" class="btn btn-success col" name="" id="" value="-">
                                <input type="text" class="col mx-1" name="" id="" value="0">
                                <input type="button" class="btn btn-success col"  name="" id="" value="+">
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 offset-sm-1 mb-3">
                <div class="box-cart p-2 row">
                    <div class="col-4">
                        <img src="{{asset('assets/image/salmon fillet.png')}}" alt="Filet Salmon">
                    </div>
                    <div class="col-4">
                        <h6 class="name"><strong>Filet Salmon</strong></h6>
                        <h6 class="weight">200g</h6>
                        <h6 class="price txt-orange mt-3">Rp  <strong>62k</strong></h6>
                    </div>
                    <div class="col-4 d-flex flex-column-reverse">
                        <form action="" class="">
                            <div class="quantity row">
                                <input type="button" class="btn btn-success col" name="" id="" value="-">
                                <input type="text" class="col mx-1" name="" id="" value="0">
                                <input type="button" class="btn btn-success col"  name="" id="" value="+">
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 offset-sm-1 mb-3">
                <div class="box-cart p-2 row">
                    <div class="col-4">
                        <img src="{{asset('assets/image/daun parsley.png')}}" alt="Daun Parsley">
                    </div>
                    <div class="col-4">
                        <h6 class="name"><strong>Daun Parsley</strong></h6>
                        <h6 class="weight">20g</h6>
                        <h6 class="price txt-orange mt-3">Rp  <strong>33k</strong></h6>
                    </div>
                    <div class="col-4 d-flex flex-column-reverse">
                        <form action="" class="">
                            <div class="quantity row">
                                <input type="button" class="btn btn-success col" name="" id="" value="-">
                                <input type="text" class="col mx-1" name="" id="" value="0">
                                <input type="button" class="btn btn-success col"  name="" id="" value="+">
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="summary container p-5">
        <h6 class="subtitle-cart text-center mb-5">Ringkasan</h6>
        <div class="card p-5">
            <div class="coupon row">
                <div class="col-4">
                    <img src="{{asset('assets/image/coupon.png')}}" alt="">
                </div>
                <div class="col-6 offset-sm-1 diskon-title">
                    <h6 class="pl-3">Diskon 20% <i class="fas fa-check-circle pl-3"></i></h6>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <ul class="detail-cash">
                    <li>Total Harga</li>
                    <li class="my-2">Voucher</li>
                    <li>Ongkos Kirim</li>
                </ul>
                <ul class="cash">
                    <li>Rp <span>450.5k</span></li>
                    <li class="my-2 txt-green">-Rp <span>90.1k</span></li>
                    <li>Rp <span>20k</span></li>
                </ul>
            </div>
            <hr>
            <div class="total d-flex justify-content-between mt-4">
                <h6><strong>Total</strong></h6>
                <h6><strong>Rp <span>380.4k</span></strong></h6>
            </div>
        </div>
    </div>
    <div class="container payment p-5">
        <h6 class="subtitle-cart text-center mb-5">Metode Pembayaran</h6>
        <div class="card p-3">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-2">
                    <div class=" card p-2 bs-dark">
                        <a href="">
                            <img src="{{asset('assets/image/gopay.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <div class=" card p-2 bs-dark">
                        <a href="">
                            <img src="{{asset('assets/image/ovo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <div class=" card p-2 bs-dark">
                        <a href="">
                            <img src="{{asset('assets/image/dana.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <div class=" card p-2 bs-dark">
                        <a href="">
                            <img src="{{asset('assets/image/linkaja.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <h6 class="virAccount mt-5 mb-4">Virtual Account</h6>
            <div class="row">
                <div class="col-4 col-sm-4 col-md-2">
                    <div class=" card p-2 bs-dark">
                        <a href="">
                            <img src="{{asset('assets/image/mandiri.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <div class=" card p-2 bs-dark">
                        <a href="">
                            <img src="{{asset('assets/image/bca.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <div class=" card p-2 bs-dark">
                        <a href="">
                            <img src="{{asset('assets/image/bni.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <div class=" card p-2 bs-dark">
                        <a href="">
                            <img src="{{asset('assets/image/bri.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-2">
                    <div class=" card p-2 bs-dark">
                        <a href="">
                            <img src="{{asset('assets/image/logo ijo.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-success checkout mb-5">Checkout <span> Rp </span>380.4k</button>
</div>
    
@endsection