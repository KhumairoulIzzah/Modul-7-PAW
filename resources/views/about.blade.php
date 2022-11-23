@extends('mahasiswi')
@section ('main')
<link rel="stylesheet" href={{ asset('css/style.css')}}>
<div class="row">
    <div class="container">
        <header class="d-flex flex-wrap py-3 mb-4 border-bottom" style="background-color: #87CEFA;">
            <ul class="navbar-nav">
                <li class="nav-item" style="font-size: 20px; margin-left:20px;">Simple Siakad</li>
            </ul>

            <ul class="nav nav-pills ml-auto" style="margin-right: 10px;">
                <li class="nav-item"><a href="/" class="nav-link" style="color: black;">Data Mahasiswa</a></li>
                <li class="nav-item"><a href=" {{url('mahasiswis/create')}}" class="nav-link" style="color: black;">Input Data</a></li>
                <li class="nav-item"><a href="/about" class="btn btn-outline-primary">About Me</a></li>
            </ul>
        </header>

    </div>
    <div class=" col-md-12 " style=" margin-top: 50px; color:#191970;">
        <h2> About Me</h2>
        <center>
            <div class="card mt-4 border-0" style="width: 700px; text-align:center;  ">
                <img src={{ asset('storage/img/izzah.jpeg')}} class="rounded mx-auto d-block" alt="..." width="150">
                <h3 style="margin-top: 10px;">Khumairoul Izzah</h3>
            </div>
        </center>
    </div>
    <div class="col-md-12 " style="margin-top: 50px;">
        <h2 style="color:#191970;"> Background</h2>
        <p style="text-align: justify;"> Hello!!! This is me! Izzah... <br>
            Nama saya Izzah, berasal dari Jombang. 
            Saya dulu merupakan alumni dari SMKN 3 Jombang Jurusan TKJ. 
            Saya memilih Teknik Informatika ini adalah karena Informatika ini memiliki banyak peluang kerja nantinya setelah lulus. </p>
    </div>
    <div class="col-md-12 " style="margin-top: 50px;">
        <h2 style="color:#191970;"> Suka Duka Praktikum PAW</h2>
        <p style="text-align: justify;"> Salam hangat dari saya kakak-kakak asisten praktikum PAW! :) <br>
            Hal yang menarik dalam praktikum PAW adalah saya suka pemrograman web karena itu saya bersemangat untuk mengikuti praktikum ini. 
            Namun sangat disayangkan ketika praktikum adalah asisten praktikum yang menjelaskan didepan penjelasannya terlalu cepat sehingga susah untuk diikuti oleh praktikan. 
            Dan juga deadline yang mepet menjadikan saya sedikit keteteran karena banyak tugas tugas lain yang harus saya kerjakan juga. 
            Untuk tugas kali ini saya pengumpulan terlambat dan itu pertama kalinya:)
        </p>
    </div>
</div>

@endsection