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
        <legend>Acara TV</legend>
       @foreach ($stasiun as $stasiun)
        Stasiun Tv : {{$stasiun['sta']}} <br>
        Acara Tv : {{$stasiun['acara']}} <br>
        <ul> Jadwal :
        <li>
          Jam Tayang : {{$stasiun['jam']}} <br>
          </li>
          <li>
            Tanggal Tayang : {{$stasiun['tanggal']}} <br>
        </li>
        </ul>
         <hr>
         @endforeach
    </fieldset>
</body>
</html>