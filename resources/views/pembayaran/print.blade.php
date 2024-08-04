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

        <style>
            /* body{
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                color:#333;
                text-align:left;
                font-size:18px;
                margin:0;
            }
            .container{
                margin:0 auto;
                margin-top:35px;
                padding:40px;
                width:750px;
                height:auto;
                background-color:#fff;
            } */
            caption{
                text-align: center;
                font-size:28px;
                margin-bottom:15px;
            }
            table{
                border:1px solid #333;
                border-collapse:collapse;
                margin:0 auto; */
                /* /* width:740px; */
            }
            td, tr, th{
                padding:12px;
                border:1px solid #333;
                width:185px;
            }
            th{
                background-color: #f0f0f0;
            }
            h4, p{
                margin:0px;
            }
        </style>
    </head>
    <body>
        <div>
            <img src="C:\xampp\htdocs\electric pay\public\assets\img\logo2.png" class="w-32" alt="logo elpay">
            <table>
                <caption>
                    Electric Pay Invoice
                </caption>
                <thead>
                    <tr>
                        <th colspan="3">Invoice <strong>#{{$pembayaran->id}}</strong></th>
                        <th>{{ \Carbon\Carbon::parse($pembayaran->tanggal_pembayaran)->translatedFormat('l, d-m-Y') }}</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4>Perusahaan :</h4>
                            <h5>Electric Pay</h5>
                            <p>Jl. Bidara Anggrek No.21, <br>
                                Jakarta Barat, indonesia</p>
                                <p>089696634771</p>
                                <p>elpay@gmail.com</p>
                        </td>
                        <td colspan="2">
                            <h4>Pelanggan :</h4>
                            <p>Nama : {{$tagihan->pelanggan->user->name }}</p>
                            <p>Id : {{$tagihan->pelanggan->id_pelanggan }}</p>
                            <p>Nomor KWh : {{$tagihan->pelanggan->nomor_kwh }}</p>
                            <p>Daya : {{$tagihan->pelanggan->tarif->daya }}VA</p>
                            <p>Alamat : {{$tagihan->pelanggan->alamat}}</p>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Meter Awal</th>
                        <th>Meter Akhir</th>
                        <th>Jumlah Meter</th>
                        <th>Sub Total</th>
                    </tr>
                    <tr>
                        <td>{{$tagihan->meter_awal}} kWh</td>
                        <td>{{$tagihan->meter_akhir}} kWh</td>
                        <td>{{$tagihan->jumlah_meter}} kWh</td>
                        <td>Rp. {{number_format($tagihan->jumlah_meter * $tagihan->pelanggan->tarif->tarifperkwh)}}</td>
                    </tr>
                    <tr>
                        <th colspan="3">Biaya Admin</th>
                        <td>Rp. {{ number_format($pembayaran->biaya_admin)}}</td>
                    </tr>
                    <tr>
                        <th colspan="3">Total</th>
                        <td>Rp. {{ number_format($pembayaran->total_bayar)}}</td>
                    </tr>
                </tbody>
            </table>


            <footer class="fixed bottom-0 bg-white ps-10">
                <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                  <footer>
                    <p> &copy; 2024 Electric Pay™. All Rights Reserved.  </p>
                  </div>
                  </footer>
                </div>
              </footer>
        </div>
    

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