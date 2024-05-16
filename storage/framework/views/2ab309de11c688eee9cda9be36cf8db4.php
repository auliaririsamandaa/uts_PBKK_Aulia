<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: url('img/background.jpg');
        }
         footer {
            background: rgb(45, 43, 39);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center" style="color: aliceblue">Input Barang Keperluan Alat Tulis Kantor</h1>
        <p style="color: aliceblue">Silahkan bagi pengunjung yang ingin mencari atau memilih alat kantor , silakan di isi agar sistem kami bisa memenuhi permintan konsumen.</p>
        <form action="/submit" method="POST" class="mt-4">
                <label for="ATK" style="color: aliceblue">ATK yang diperlukan:</label>
                <select class="form-control" id="atk" name=atk>
                    <option value="Pilih">Pilih Sesuai Kebutuhan</option>
                    <option value="Buku">Buku</option>
                    <option value="Map">Map</option>
                    <option value="Bulpoin">Bulpoin</option>
                    <option value="HPS A4">HPS A4</option>
                    <option value="Gunting">Gunting</option>
                    <option value="Penggaris">Penggaris</option>
                    <option value=" Kertas Polio">Kertas Polio</option>
                    <option value="Pensil">Pensil dan Tinta</option>
                </select>

                <label for="Jumlah" style="color: aliceblue">Jumlah yang diperlukan:</label>
                <select class="form-control" id="atk" name=atk>
                    <option value="Pilih">Pilih Sesuai Kebutuhan</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>

            </div>
            <div class="d-flex justify-content-center mt-3">
                <a href="clear" class="btn btn-primary btn-lg">Input Barang</a>
            </div>
        </form>
    </div>

    <footer class="bg-dark text-white text-center">
        <p>@Alat Tulis Kantor Premium - Pemograman Berbasis Kerangka Kerja (PBKK) tahun 2024
          <a href="https://www.instagram.com/tatanramadanii/" class="text-danger font-weight-bold">Tatan Ramadani</a>
        </p>
    </footer>
    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\proje\application\uts_pbkk_tatan\resources\views/iventori.blade.php ENDPATH**/ ?>