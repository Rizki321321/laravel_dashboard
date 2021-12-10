<!doctype html>
<html lan="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detail produk</title>
    <link href="{{  asset('img/catering.png')}}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
      .row {
        background: #2980b9;
        color: #fff;
      }

      h2  {
        font-family: 'Times New Roman', Times, serif;
      }
      .btn {
        border: 1px solid #fff;
      }
     
    </style>
  </head>
  <body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary ml-5" data-toggle="modal" data-target="#exampleModal">
      Bayar
    </button>
      </button>
      
      <!-- Gratis-->
      <div class="modal fade" id="free" tabindex="-1" role="dialog" aria-labelledby="free123" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="free123">Belajar Codeigniter Gratis</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h3>
                <a href="https://www.bewoksatukosong.com/">Kamu bisa kunjungi website disini bewoksatukosong.com</a>
              </h3>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    <!-- Bayar -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Penawaran Menarik</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
                <h1 class="mb-2">DETAIL PRODUK</h1>
                <img src="{{  asset('img/nasi_kotak_.jpg')}}" alt="">
                <h3 class="text-center mt-4">Rp 28.000</h3>
                <h3 class="text-center mt-4">Nasi kotak dengan banyak varian menu dalam 1 kemasan!
                  Isi Paket Nasi Kotak Ayam SandStorm:
                  Nasi Daun Pisang + Ayam Goreng Tepung + Ayam Suir Serundeng + Sayur + Orek Tempe + Kangkung Goreng + Sambal</h3>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Jangan Tampilkan Lagi</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Ya Saya Mau</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>