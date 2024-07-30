<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

        @vite('resources/css/app.css')

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <title>Print Struk Pembayaran</title>
    </head>
    <body>
        {{-- <img src="{{ public_path('/assets/img/logo2.png') }}" alt="Logo"> --}}
        
        <p>Jl. Bidara Anggrek No.21, <br>
            Jakarta Barat, indonesia</p>
        <p>089696634771</p>
        <h5>Struk Pembayaran Tagihan Listrik Elpay</h5>
        </br>
        <table class="table font-mono">
            <tr>
                <th scope="col" class="font-mono">Tanggal Dibayar</th>
                <th scope="col">: {{date('d-m-Y', strtotime($pembayaran->tanggal_pembayaran))}}</th>
            </tr>
            <tr>
                <th scope="col">Id Pelanggan</th>
                <th scope="col">: {{$tagihan->pelanggan->id_pelanggan }}</th>
            </tr>
            <tr>
                <th scope="col">Nama Pelanggan</th>
                <th scope="col">: {{$tagihan->pelanggan->user->name }}</th>
            </tr>
            <tr>
                <th scope="col">Nomor KWH</th>
                <th scope="col">: {{$tagihan->pelanggan->nomor_kwh }}</th>
            </tr>
            <tr>
                <th scope="col">Daya</th>
                <th scope="col">: {{$tagihan->pelanggan->tarif->daya }}VA</th>
            </tr>
            
            <tr>
                <th scope="col">Biaya Admin</th>
                <th scope="col">: Rp. {{ number_format($pembayaran->biaya_admin)}}</th>
            </tr>
            <tr>
                <th scope="col">Jumlah Meter</th>
                <th scope="col">: {{$tagihan->jumlah_meter}}</th>
            </tr>
            <tr>
                <th scope="col">Total Bayar</th>
                <th scope="col">: Rp. {{ number_format($pembayaran->total_bayar)}}</th>
            </tr>
        </table>
        <p>Elpay Menyatakan Struk ini sebagai bukti pembayaran yang sah, mohon disimpan.</p>


        <footer class="fixed bottom-0 bg-white">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
              <footer>
                <p> &copy; 2024 Electric Pay™. All Rights Reserved.  </p>
              </div>
              </footer>
            </div>
          </footer>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>