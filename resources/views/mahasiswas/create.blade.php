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
                <form method="post" action="{{route('mahasiswa.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="nim">Nim</label> <br>
                        <input type="text" name="nim" class="form-control" id="nim" aria-describedby="nim">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label> <br>
                        <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label> <br>
                        <select class="form-control" name="kelas" id="kelas">
                            @foreach ($kelas as $kls)
                                <option value="{{ $kls->id }}">{{$kls->nama_kelas}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label> <br>
                        <input type="text" name="jurusan" class="form-control" id="jurusan" aria-describedby="jurusan">
                    </div>
                    <div class="form-group">
                        <label for="no_handphone">No_Handphone</label> <br>
                        <input type="text" name="no_handphone" class="form-control" id="no_handphone"
                            aria-describedby="no_handphone">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-success" href="{{route('mahasiswa.index')}}"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
