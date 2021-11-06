<!doctype html>
<html>

<head>
  <title>MBTI Result</title>
  <link rel="stylesheet" href="/css/pure/pure-min.css">
  <link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
      <a class="pure-menu-heading" href="">Your Site</a>

      <ul class="pure-menu-list">
        <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tour</a></li>
        <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sign Up</a></li>
      </ul>
    </div>
  </div>

  <div class="splash-container">
    <div class="splash">
      <h1 class="splash-head">MBTI TEST</h1>
      <p class="splash-subhead">
        Dibuat untuk memenuhi tugas sistem pakar.<br>
        Daftar Kelompok : Muhammad Dzulfiqar Ramadhan Wibawanto - 00000032892 || Rido Hendrawan - 00000032861 || Yulia Novita - 00000032713
      </p>
      <p>
        <a href="#a" class="pure-button pure-button-primary">Lihat Hasil</a>
      </p>
    </div>
  </div>

  <div class='content-wrapper container' id="a">
    <h1>{{$result_final->symbol}}</h1>
    <h2>{{$result_final->short}}</h2>
    <div class='result'>
    </div>
    <div class='result'>
      <b>Deskripsi</b><br />
      <p>{{$result_final->description}}</p>
    </div>
    <div class='result'>
      <b>Saran Pengembangan:</b><br />
      <ul>
        <p>{{$result_final->improvement}}</p>
      </ul>
    </div>
    <div class='result'>
      <b>Saran Profesi:</b><br />
      <li>{{$result_final->profession}}</li>
    </div>
    <div class='result'>
      <b>Pasangan/Partner Alami:</b><br />
      {{$result_final->partner}}
    </div><br><br><br>
    <div class="footer l-box is-center">
      Create by - Kelompok 5 Expert System
    </div>
  </div>


</body>

</html>
<?php
