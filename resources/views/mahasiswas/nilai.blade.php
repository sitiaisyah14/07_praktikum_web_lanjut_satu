@extends('mahasiswas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2 text-center">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <br><br>
            <div class="pull-left mt-2 text-center">
                <h1>KARTU HASIL STUDI (KHS)</h1>
            </div>
            <br><br>
       </div>
   </div>
   <div>
       <p><b>Nama &nbsp: </b> {{$Mahasiswa->nama}} </p>
       <p><b>NIM &nbsp: </b> {{$Mahasiswa->nim}} </p>
       <p><b>Kelas &nbsp: </b> {{$Mahasiswa->kelas->nama_kelas}} </p>
   </div>
   <div class="row ">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th class="text-center">Matakuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach ($Mahasiswa->matakuliah as $mt)

            <tr>
                {{-- {{dd($mahasiswas->matakuliah)}} --}}
                <td>{{$mt->nama_matkul}}</td>
                <td>{{$mt->sks}}</td>
                <td>{{$mt->semester}}</td>
                <td>{{$mt->pivot->nilai}}</td>
            </tr>
            @endforeach
        </table>
        <br>
        <form class="d-grid gap-2 col-2 mx-auto">
            <a href="{{route('cetak_pdf' , $Mahasiswa->nim)}}" class="btn btn-danger btn-lg btn-block">Print to PDF</a>
        </form>
        <form>
            <a href="{{route('mahasiswa.index')}}" class="btn btn-success btn-lg btn-block">Kembali</a>
        </form>
    </div>
   </div>
@endsection

