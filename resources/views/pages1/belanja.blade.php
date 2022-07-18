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
        
       <center>
       <h3>Belanja</h3>

         <hr>
        @foreach ($belanja as $data)
        @php
            $total = 0;
        @endphp
        Nama : {{ $data['nama'] }}<br>
        Jenis Barang : 
        @foreach($data['membeli'] as $belikan) 
        <li>
            Membeli : {{ $belikan['beli'] }}<br>
            Harga : Rp. {{ $belikan['harga'] }}<br>
            </li>
            <br>

        @php $total += $belikan['harga'] @endphp

        @endforeach

        Total Belanja : {{$total}}<br>

        @if ($total > 500000 )
        Selamat ! Anda Mendapatkan Cashback Sebesar 10% <br>

        @elseif ($total < 500000)
        Selamat ! Anda Mendapatkan Cashback Sebesar 5%<br>

        @else 
        Maaf, Anda Tidak Mendapatkan Cashback
        @endif

        @php $cashback = $total / count($data['membeli'])@endphp
        Total Belanja Setelah Dapat Cashback <b>{{$data['nama']}}</b>:
        {{$cashback}}<br>

           <hr>
        @endforeach
        </center>
</fieldset>
</body>
</html>