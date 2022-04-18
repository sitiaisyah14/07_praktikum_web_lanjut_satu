<!DOCTYPE html>
<html>

<head>
    <title>Mencetak Hasil KHS {{ $Mahasiswa->nama}} {{ $Mahasiswa->nim}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 10pt;
        }

    </style>
    <center>
        <h2>KARTU HASIL STUDI (KHS) </h2>
    </center>
    <br><br>
    <p><b>Nama : </b> {{$Mahasiswa->nama}} </p>
    <p><b>NIM : </b> {{$Mahasiswa->nim}} </p>
    <p><b>Kelas : </b> {{$Mahasiswa->kelas->nama_kelas}}
    </p>
    <div class="row ">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Matakuliah</th>
                        <th>SKS</th>
                        <th>Semester</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Mahasiswa->matakuliah as $mt)

                    <tr>
                        <td>{{$mt->nama_matkul}}</td>
                        <td>{{$mt->sks}}</td>
                        <td>{{$mt->semester}}</td>
                        <td>{{$mt->pivot->nilai}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
