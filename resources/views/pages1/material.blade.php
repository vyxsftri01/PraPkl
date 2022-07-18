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
     <strong> Toko bangunan </strong> <br> 
     <hr>
     </center>
     <h4> Hallo,Pesanan Anda : </h4>
      <br> <b>1.{{$pesanan}} </b>
    @if ($pesanan == 'Pasir urug')
      = Rp.50000
    @elseif ($pesanan == 'Batako besar')
      = Rp.30000
    @elseif ($pesanan == 'Bata merah')
      = Rp.40000
    @elseif ($pesanan == 'batu apung') []
      = Rp.65000
     @else
     <br>
     <b> NOTE : Mohon maaf material pertama tidak ada</b> 
     @endif
<br>
     <b>2.{{$pesanan1}} </b>
    @if ($pesanan1 == 'Pasir urug')
     = Rp.50000
    @elseif ($pesanan1 == 'Batako besar')
     = Rp.30000
    @elseif ($pesanan1 == 'Bata merah')
     = Rp.40000
    @elseif ($pesanan1 == 'batu apung')
     = Rp.65000
     @else
     <br>
     <h5>NOTE: Mohon maaf material kedua tidak ada</h5> 
     @endif
     
     
     </fieldset>
</body>
</html>