<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Absensi</title>
  <link rel="stylesheet" href="<?= BASE_URL; ?>/css/style.css">
</head>

<body class="bg-blue-100">
  <!-- Content Start -->
  <div class="flex h-auto flex-wrap items-start justify-center md:h-[100vh] md:items-center">
    <div class="fixed z-10 hidden h-full w-full bg-dark opacity-50 backdrop-blur-sm" id="overlayBg" name="overlayBg"></div>
    <!-- Kode Unik Start -->
    <div class="fixed z-20 hidden w-4/5 rounded-lg bg-white p-4 shadow-lg mt-10 md:mt-0" id="setUniqueCode" name="setUniqueCode">
      <form action="<?=BASE_URL;?>/Absensi/isiDataHadir" method="post" class="flex w-full">
        <input type="text" name="nomor" placeholder="Masukkan Kode Unik..." class="mr-3 block w-3/4 rounded-md border-2 border-gray-300 pl-7 pr-12 shadow-sm focus:outline-primary"/>
        <button type="submit" class="btn-primary w-1/4">Kirim</button>
      </form>
    </div>
    <!-- Kode Unik End -->
    <!-- Kode Izin Start -->
    <div class="fixed z-20 hidden w-4/5 rounded-lg bg-white p-4 shadow-lg mt-10 md:mt-0" id="setPermCode" name="setPermCode">
      <form action="<?=BASE_URL;?>/Absensi/isiDataIzin" method="post" class="flex w-full">
        <input type="text" placeholder="Masukkan Kode Izin..." class="mr-3 block w-3/4 rounded-md border-2 border-gray-300 pl-7 pr-12 shadow-sm focus:outline-primary"/>
        <button type="submit" class="btn-primary w-1/4">Kirim</button>
      </form>
    </div>
    <!-- Kode Izin End -->
    <div class="relative z-0 mt-5 mb-5 block h-auto w-4/5 rounded-lg bg-white p-5 shadow-lg md:mt-0 md:w-[480px]">
      <div class="mb-3 flex w-full items-center justify-center">
        <div class="h-[426px] w-[240px] rounded-md md:h-[240px] md:w-[426px]" name="my_camera" id="my_camera" onclick="take_snapshot()">
        </div>
      </div>
      <div class="mb-3 block w-full justify-center md:flex">
        <div class="w-full md:w-1/2 items-center justify-center break-words p-3 text-center md:flex">
          <div class="w-full" name="qr" id="qr">
            <!-- QR Code -->
          </div>
        </div>
        <div class="block w-full items-center align-middle md:w-1/2">
          <button class="btn-primary mb-3 w-full" onclick="toggleOverlay('#setUniqueCode')">
            Kode Unik
          </button>
          <button class="btn-primary w-full" onclick="toggleOverlay('#setPermCode')">
            Kode Izin
          </button>
        </div>
      </div>
      <a href="<?= BASE_URL ?>/Login">
        <button class="btn-primary w-full">Login Sebagai Admin</button>
      </a>
    </div>
  </div>
  <!-- Content End -->
  <script src="js/script.js"></script>
  <script src="js/webcam.js"></script>
  <script>
    function take_snapshot() {
      Webcam.snap(function(data_uri) {
        document.getElementById('results').innerHTML = '<img id="base64image" src="' + data_uri + '"/><button onclick="SaveSnap();">Save Snap</button>';
      });
    }

    function ShowCam() {
      Webcam.set({
        image_format: 'jpeg',
        jpeg_quality: 100
      });
      Webcam.attach('#my_camera');
    }

    function SaveSnap() {
      document.getElementById("loading").innerHTML = "Saving, please wait...";
      var file = document.getElementById("base64image").src;
      var formdata = new FormData();
      formdata.append("base64image", file);
      var ajax = new XMLHttpRequest();
      ajax.addEventListener("load", function(event) {
        uploadcomplete(event);
      }, false);
      ajax.open("POST", "upload.php");
      ajax.send(formdata);
    }

    function uploadcomplete(event) {
      document.getElementById("loading").innerHTML = "";
      var image_return = event.target.responseText;
      var showup = document.getElementById("uploaded").src = image_return;
    }
    window.onload = ShowCam;
  </script>
</body>

</html>