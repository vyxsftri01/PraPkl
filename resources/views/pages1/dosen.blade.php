<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data Mahasiswa</legend>
        @foreach ($dosen as $mahasiswa)
          Id : {{$mahasiswa['id']}} <br>
          Dosen Pembimbing : {{$mahasiswa['Dosen']}} <br>
          Mata Kuliah : {{$mahasiswa['Matkul']}} <br>
          Nama Mahasiswa : {{$mahasiswa['Nama']}} <br>
          Nilai : {{$mahasiswa['Nilai']}} <br>
          Status:
          @if($mahasiswa['Nilai'] >= 90 && $mahasiswa['Nilai'] <=100)
            Grade A
          @elseif($mahasiswa['Nilai'] >= 80 && $mahasiswa['Nilai'] <= 89)
            Grade B
          @elseif($mahasiswa['Nilai'] >= 70 && $mahasiswa['Nilai'] <= 79)
            Grade C
          @elseif($mahasiswa['Nilai'] >= 50 && $mahasiswa['Nilai'] <= 69)
            Grade D
          @elseif($mahasiswa['Nilai'] > 0 && $mahasiswa['Nilai'] <= 49)
            Grade E
          @endif
          <hr>
          @endforeach
    </fieldset>
</body>
</html>