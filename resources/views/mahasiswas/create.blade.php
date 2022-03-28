@extends('mahasiswas.layout')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header"> Tambah Mahasiswa </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('mahasiswas.store') }}" id="myForm">
                @csrf
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" name="nim" class="formcontrol" id="nim" aria-describedby="Nim">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="nama" name="nama" class="formcontrol" id="nama" aria-describedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="kelas" name="kelas" class="formcontrol" id="kelas" aria-describedby="password">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="jurusan" name="jurusan" class="formcontrol" id="jurusan" aria-describedby="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="ho_handphone">No_Handphone</label>
                        <input type="ho_handphone" name="no_handphone" class="formcontrol" id="ho_handphone" aria-describedby="No_Handphone">
                    </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
@endsection
