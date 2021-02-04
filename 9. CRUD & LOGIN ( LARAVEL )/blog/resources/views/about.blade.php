@extends('layout/main') 


@section('jumbotron')
    <h1 class="display-4"><span>Profile Usaha</span></h1>
    <h1>JayKuliner</h1>
@endsection



@section('content')
    
    <div id="about" class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 style="text-transform: none !important">Deskripsi Profile Usaha</h1>
                    <p>JayKuliner adalah usaha rumahan yang menyajikan beberapa kuliner khasbali,Usaha di dirikian pada tanggal 25 Agustus 2020, usaha ini di dirikan oleh keluarga saya sendiri dengan modal seadanya. </p>
                    <h1 style="text-transform: none !important">Visi Dan Misi</h1>
                    <h3>Visi</h3>
                    <p>- Menjadikan JayKuliner sebagai perusahaan yang maju, inspirasi, dan produktif.</p>
                    <h3>Misi</h3>
                    <p>- Mampu bersaing dengan banyak pesaing</p>
                    <p>- Menghadirkan kualitas mewah dengan harga yang ramah</p>
                </div>
                <div class="col-md-6 offset-md-1">
                    <img src="img/bali.jpg" alt="workingspace" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    @endsection
    