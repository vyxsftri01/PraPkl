<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //
    public function menu(){
        $a = [  
            array(
                'beranda' => "Beranda",
                'berita' => "Berita",
                'Berita' => ['Politik','Manca Negara'],
                'olahraga' => 'Olahraga',
                'Olahraga' => ['Bulu Tangkis','Sepak Bola'],
                'tentang' => 'Tentang',
            )
                ];
        // dd($a);
        return view('pages1.menu',['menu' => $a]);
    }  

    public function dosen(){
        $a = [
            array('Dosen'=> 'Yusuf Bachtiar', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 1, 'Nama' => 'Muhammad Soleh', 'Nilai' => 78),
            array('Dosen'=> 'Yusuf Bachtiar', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 2, 'Nama' => 'Jujun Junaedi', 'Nilai' => 85),
            array('Dosen'=> 'Yusuf Bachtiar', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 3, 'Nama' => 'Mamat Alkatiri', 'Nilai' => 90),
            array('Dosen'=> 'Yusuf Bachtiar', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 4, 'Nama' => 'Ubay Holin', 'Nilai' => 87),
            array('Dosen'=> 'Yusuf Bachtiar', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 5, 'Nama' => 'Fadillah ', 'Nilai' => 95),

            array('Dosen'=> 'Yaris Riyadi', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 6, 'Nama' => 'Alfred McTomminay', 'Nilai' => 67),
            array('Dosen'=> 'Yaris Riyadi', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 7, 'Nama' => 'Bruno Kasmir', 'Nilai' => 90),
            array('Dosen'=> 'Yaris Riyadi', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 8, 'Nama' => 'Akid Hendra', 'Nilai' => 50),
            array('Dosen'=> 'Yaris Riyadi', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 9, 'Nama' => 'Dany Irawan', 'Nilai' => 70),
            array('Dosen'=> 'Yaris Riyadi', 'Matkul'=> 'Pemprograman Mobile','mahasiswa'=>'Mahasiswa :', 'id' => 10, 'Nama' => 'Chandra Mega Putra ', 'Nilai' => 60),

        ];

        // dd($a);

        return view('/pages1.dosen',['dosen' => $a]);
    }  

    public function stasiun(){
        $a = [
            array('sta' => 'NET TV', 'jam' => '10.00 WIB', 'acara'=>'Berita', 'tanggal'=> '2 agustus'),
            array('sta' => 'TVRI ', 'jam' => '18.30 WIB', 'acara'=>'Festival', 'tanggal'=> '4 november'),
            array('sta' => 'BEINSPORT', 'jam' => '17.00 WIB', 'acara'=>'TripAdven', 'tanggal'=> '20 Jully'),
            array('sta' => 'Ochannel', 'jam' => '17.00 WIB', 'acara'=>'Live Music', 'tanggal'=> '22 jully'),
            array('sta' => 'Indosiar', 'jam' => '17.00 WIB', 'acara'=>'Azab', 'tanggal'=> '4 agustus'),
        ];
        
        // dd($a);

        return view('/pages1.stasiun',['stasiun' => $a]);
    }
    public function belanja(){
            $belanja = [
            ['nama' => "Alfian", 'membeli'=>
            [
                ['beli'=> "Sepatu", 'harga' => 250000],
                ['beli'=> "Baju", 'harga' => 100000],
                ['beli'=> "Celana", 'harga' => 150000],
                ['beli'=> "Kupluk", 'harga' => 100000],
            ]
            ],

            ['nama' => "Dida", 'membeli'=>
            [
                ['beli'=> "Topi", 'harga' => 100000],
                ['beli'=> "Baju", 'harga' => 75000],
                ['beli'=> "Celana", 'harga' => 125000],
            ]
            ]
    ];

    return view('pages1.belanja',['belanja' => $belanja]);

}
}

