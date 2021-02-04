@extends('/crud/layout/main')

@section('title', 'Tambah Data Baru')

@section('content')


<div class="wrapper-title">
    <h3>Tambah Data Baru</h3>
</div>


{{-- Form Start--}}

<form class="mt-5 col-8" method="post" action="/foods">

    @csrf

    <div class="form-group">
        <label for="nama">Nama Customer</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Customer" name="nama">
    </div>

    <div class="form-group">
        <label for="makanan">Jenis Makanan</label>
        <input type="text" class="form-control" id="makanan" placeholder="Masukkan Jenis Makanan " name="jenis_makanan">
    </div>

    <div class="form-group">
        <label for="minuman">Jenis Minuman</label>
        <input type="text" class="form-control" id="minuman" placeholder="Masukkan Jenis Minuman " name="jenis_minuman">
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga " name="harga">
    </div>

    <button class="btn btn-success"> Input Data </button>
</form>

{{-- Form End --}}






@endsection