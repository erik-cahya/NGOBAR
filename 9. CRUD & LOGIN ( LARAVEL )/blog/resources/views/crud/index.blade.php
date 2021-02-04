@extends('/crud/layout/main')

@section('title', 'Daftar Makanan')

@section('content')

<div class="wrapper-title">
    <h3>Daftar Makanan</h3>
</div>


{{-- Tombol Tambah Data --}}
<a href="/crud/create" class="btn btn-info my-2"> Tambah Data </a>

{{-- Message --}}

{{-- Menampilkan pesan hijau --}}
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

{{-- Menampilkan pesan merah --}}
@if (session('danger-status'))
<div class="alert alert-danger">
    {{ session('danger-status') }}
</div>
@endif
{{-- End Message --}}





<table class="table wrapper-table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Customer</th>
            <th scope="col">Jenis Makanan</th>
            <th scope="col">Jenis Minuman</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($foods as $food)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$food->nama}}</td>
            <td>{{$food->jenis_makanan}}</td>
            <td>{{$food->jenis_minuman}}</td>
            <td>{{$food->harga}}</td>
            <td>

                <a href="/{{$food->id}}/edit" class="btn btn-success font-weight-bold"> Edit </a>

                <form action="/foods/{{$food->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger">Delete</button>
                </form>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection