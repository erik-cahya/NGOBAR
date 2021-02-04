@extends('layout/main')

@section('jumbotron')
<h1 class="display-4"><span>Tentang Kami JayKuliner</span></h1>
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <img src="img/instagram.png" alt="employee" class="float-left">
                        <h4>Instagram</h4>
                        <p>gedejaya13</p>
                    </div>

                    <div class="col-lg">
                        <img src="img/facebook.png" alt="employee" class="float-left">
                        <h4>Facebook</h4>
                        <p>Gede Jaya</p>
                    </div>

                    <div class="col-lg">
                        <img src="img/whatsapp.png" alt="employee" class="float-left">
                        <h4>WhatsApp</h4>
                        <p>089669446726</p>
                    </div>

                </div>
            </div>
        </div>
        <section class="testimonial">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h5>Terima Kasih Sudah Berkunjung Di Website Kami</h5>
                </div>
            </div>
        </section>
@endsection