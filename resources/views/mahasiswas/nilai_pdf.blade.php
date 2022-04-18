<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan Nilai PDF</title>
</head>

<body>
<div class="container mt-3">
        <h3 class="text-center mb-5" align = "center" >JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h3>
        <h2 class="text-center mb-4" align = "center" >KARTU HASIL STUDI (KHS)</h2>

        <br><br><br>

        <b>Nama:</b> {{ $mahasiswa->Nama}}<br>
        <b>NIM: </b>{{ $mahasiswa->Nim}}<br>
        <b>Kelas: </b> {{ $mahasiswa->kelas->nama_kelas}}<br>
        
        <br>
        <table class="table table-bordered" width="700px">
            <tr>
                <th>Matakuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach ($mahasiswa -> matakuliah as $nilai)
            <tr>
                <td>{{ $nilai->nama_matkul }}</td>
                <td  align="center">{{ $nilai->sks }}</td>
                <td align="center">{{ $nilai->semester }}</td>
                <td align="center">{{ $nilai->pivot->nilai }}</td>
            </tr>
            @endforeach
        </table>
</body>

</html>