@extends('mahasiswas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2 text-center">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <br><br>
            <form action="{{ url()->current() }}" method="get" class="form-inline">
                <div class="relative mx-sm-3 mb-2">
                  <input type="search" name="keyword" value="{{ request('keyword') }}" placeholder="Search your data....." class="form-control">
                  <button type="submit" class="btn btn-secondary mb-1"> Search</button>
                  <a type="submit" class="btn btn-info mb-1" href="{{route('mahasiswa.index')}}"> Refresh</a>
                </div>
            </form>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{route('mahasiswa.create')}}"> Input Mahasiswa</a>
           </div>
       </div>
   </div>

   @if($message=Session::get('success'))
        <div class="alert alert-success">
           <p>{{$message}}</p>
        </div>
   @endif

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($mahasiswas as $Mahasiswa)
        <tr>
            <td>{{$Mahasiswa->nim}}</td>
            <td>{{$Mahasiswa->nama}}</td>
            {{-- <td>{{$Mahasiswa->kelas['nama_kelas']}}</td> --}}
            <td>{{$Mahasiswa->kelas->nama_kelas}}</td>
            <td>{{$Mahasiswa->jurusan}}</td>
            <td>{{$Mahasiswa->no_handphone}}</td>
            <td>
                <form action="{{route('mahasiswa.destroy',$Mahasiswa->nim)}}" method="POST">
                    <a href="{{route('mahasiswa.show',$Mahasiswa->nim)}}" class="btn btn-secondary">Show</a>
                    <a href="{{route('mahasiswa.edit',$Mahasiswa->nim)}}" class="btn btn-info">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{route('nilai',$Mahasiswa->nim)}}" class="btn btn-warning">Nilai</a>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
            {{-- perhatikan script di bawah ini untuk membuat paginasi dan yang berkaitan dengan paginasi  --}}
        {{-- Current Page: {{ $mahasiswas->currentPage() }}<br>
        Jumlah Data: {{ $mahasiswas->total() }}<br>
        Data perhalaman: {{ $mahasiswas->perPage() }}<br> --}}
        <br><br>


        <nav aria-label="Page navigation example">
            <div class="pagination justify-content-end">
                {!! $mahasiswas->links() !!}
            </div>
        </nav>


@endsection

