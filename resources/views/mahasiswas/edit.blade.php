@extends('mahasiswas.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Mahasiswa
            </div>
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
                <form method="post" action="{{ route('mahasiswa.update', $Mahasiswa->nim)}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" name="nim" class="form-control" id="nim" value="{{$Mahasiswa->nim}}" ariadescribedby="nim">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="{{$Mahasiswa->nama}}" ariadescribedby="nama">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control" required="required" name="foto" id="foto" value=" {{$Mahasiswa->foto}} "> <br>
                            <img width="150px" src=" {{asset('storage/' . $Mahasiswa->foto)}} " alt="images">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select name="kelas" id="kelas" class="form-control">
                                @foreach ($kelas as $kls)
                                    <option value="{{$kls->id}}" {{$Mahasiswa->kelas_id == $kls->id ? 'selected' : ''}} > {{$kls->nama_kelas}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="jurusan" name="jurusan" class="form-control" id="jurusan" value="{{$Mahasiswa->jurusan}}" ariadescribedby="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="no_handphone">No_Handphone</label>
                            <input type="no_handphone" name="no_handphone" class="form-control" id="no_handphone"
                                value="{{$Mahasiswa->no_handphone}}" ariadescribedby="no_handphone">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-success" href="{{route('mahasiswa.index')}}"> Kembali </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
