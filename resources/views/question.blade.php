<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A layout example that shows off a responsive product landing page.">
  <meta http-equiv="expires" content="<?php echo date('r'); ?>" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta http-equiv="cache-control" content="no-cache" />

  <link rel='stylesheet' href='css/mbti.css?<?php echo md5(date('r')); ?>' />
  <link rel="stylesheet" href="/css/pure/pure-min.css">
  <link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="./css/styles.css">

  <title>Test MBTI - Kelompok 5</title>
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
        <a href="#a" class="pure-button pure-button-primary">Mulai Test</a>
      </p>
    </div>
  </div>

  <div class="content-wrapper">
    <div class="content" id="a">
      <h2 class="content-head is-center">TEST - Myer Briggs Type Indicator (MBTI)</h2>
      <div>
        Di bawah ini ada 60 nomor. Masing-masing nomor memiliki dua pernyataan yang bertolak belakang (PERNYATAAN 1 & 2). Pilihlah salah satu pernyataan yang paling sesuai dengan diri Anda dengan men-check pada isian pada kolom yang sudah disediakan (KOLOM PILIHAN). Anda HARUS memilih salah satu yang dominan serta mengisi semua nomor.
      </div> <BR></BR>

      <form action="{{ route('result') }}" method='POST'>
        @csrf
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Pernyataan 1</th>
              <th colspan='2'>Pilihan</th>
              <th>Pernyataan 2</th>
            </tr>
          </thead>

          <tbody>


            @foreach ($question as $post)
            <tr>
              <td>{{ ++$i }}</td>
              <td class='right'>{{ $post->statement1 }}</td>
              <td><input type='radio' name='d[{{$post->id}}]' value='1' required /></td>
              <td><input type='radio' name='d[{{$post->id}}]' value='2' required /></td>
              <td>{{ $post->statement2 }}</td>
            </tr>
            @endforeach

          </tbody>

          <tfoot style="background-color: #FFFFFF;">
            <tr>
              <th colspan='5'>
                <br><input type='submit' value='Cek Hasil' class='btn' />
              </th>
            </tr>
          </tfoot>

        </table>
      </form>


    </div>
    <br><br>
    <div class="footer l-box is-center">
      Create by - Kelompok 5 Expert System
    </div>
  </div>



  </div>



</body>

</html>