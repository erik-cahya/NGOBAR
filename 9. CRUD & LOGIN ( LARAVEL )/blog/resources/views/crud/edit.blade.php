@extends('/crud/layout/main')

@section('title', 'Edit Data')

@section('content')


<div class="wrapper-title">
    <h3>Edit Data</h3>
</div>


{{-- Form Start--}}

<form class="mt-5 col-8" method="post" action="/foods/{{ $food->id }}">
    @method('patch')
    @csrf

    <div class="form-group">
        <label for="nama">Nama Customer</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{$food->nama}}">
    </div>

    <div class="form-group">
        <label for="makanan">Jenis Makanan</label>
        <input type="text" class="form-control" id="makanan" name="jenis_makanan" value="{{$food->jenis_makanan}}">
    </div>

    <div class="form-group">
        <label for="minuman">Jenis Minuman</label>
        <input type="text" class="form-control" id="minuman" name="jenis_minuman" value="{{$food->jenis_minuman}}">
    </div>

    <div class="form-group">
        <label for="harga">Harga</label>
        <input type="text" class="form-control" id="harga" name="harga" value="{{$food->harga}}">
    </div>

    <button class="btn btn-success"> Edit Data </button>
</form>

{{-- Form End --}}






@endsection