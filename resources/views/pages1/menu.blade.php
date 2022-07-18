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
    <legend>Menu</legend>
        <ul>
            @foreach($menu as $navbar)
                <li>{{$navbar['beranda']}}</li>
                <li>{{$navbar['berita']}}</li>
                <ul>
                    <li>{{$navbar['olahraga']}}</li>
                    <ul>
                        @foreach($navbar['Olahraga'] as $olahraga)
                        <li>{{$olahraga}}</li>
                        @endforeach
                    </ul>
                    @foreach($navbar['Berita'] as $berita)
                    <li>{{$berita}}</li>
                    @endforeach
                </ul>
                <li>{{$navbar['tentang']}}</li>
            @endforeach
        </ul>

        
    </fieldset>
</body>
</html>