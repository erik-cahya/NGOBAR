@extends('layout/main')



@section('jumbotron')
<h1 class="display-4">Selamat Datang di <span>JayKuliner</span> <br> dan Selamat Menikmati</h1>
@endsection


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 info-panel">
            <div class="row">
                <div class="col-lg">
                    <img src="img/ice.png" alt="employee" class="float-left">
                    <h4>24 Hours</h4>
                    <p>Selalu Melayani Anda</p>
                </div>

                <div class="col-lg">
                    <img src="img/hum.png" alt="employee" class="float-left">
                    <h4>Delivery</h4>
                    <p>Makanan Dijamin Aman Sampai Tujuan</p>
                </div>

                <div class="col-lg">
                    <img src="img/kentang.png" alt="employee" class="float-left">
                    <h4>Kualitas</h4>
                    <p>Sangat Terjaga</p>
                </div>

            </div>
        </div>
    </div>

    <div class="row workingspace">
        <div class="col-lg-6">
            <img src="img/chiken.jpg" alt="workingspace" class="img-fluid">
        </div>

        <div class="col-lg-5">
            <h3>Makanan <span> KhasBali </span></h3>
            <a href="/produk" class="btn btn-primary tombol">Order Now</a>

        </div>
    </div>

    <section class="testimonial">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h5>Terima Kasih Sudah Berkunjung Di Website Kami</h5>
            </div>
        </div>
    </section>


    <div class="row footer">
        <div class="col text-center">
            <p>2020 All Right Reserved by I Gede Putu Jaya</p>
        </div>
    </div>

</div>
@endsection