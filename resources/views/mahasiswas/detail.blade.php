@extends('mahasiswas.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Mahasiswa
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <div class="list-group-item">
                        <label for="foto"><b>Foto </b></label>
                        <img src="{{asset('storage/'.$Mahasiswa->foto)}}"
                         alt="images" width="150px">
                    </div>
                    <li class="list-group-item"><b>Nim: </b>{{$Mahasiswa->nim}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$Mahasiswa->nama}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$Mahasiswa->kelas->nama_kelas}}</li>
                    <li class="list-group-item"><b>Jurusan: </b>{{$Mahasiswa->jurusan}}</li>
                    <li class="list-group-item"><b>No_Handphone: </b>{{$Mahasiswa->no_handphone}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt3" href="{{route('mahasiswa.index')}}">Kembali</a>
        </div>
    </div>
</div>
@endsection
