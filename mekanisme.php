<!-- Atika Resti Rahmanda
Universitas Diponegoro -->
<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detikfinance Business Plan Competition 2023</title>
    <link rel="icon" href="img/logodetik.png" type="image/x-icon" title="logodetik">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div style= "background-repeat: no-repeat; background-size: cover;" id="custom-background1">
    <div class="mekanisme" id="mekanisme">
        <div class="col-3">
            <h1> Mekanisme </h1>
        </div>
        <div class="col-4">
            <div class="box">
                <div class="registration">
                    <img src="img/Card Icon.svg" style="padding-right: 2%;">
                    <h3 style="margin-right: 47%"> <b>Registrasi</b></h3>
                    <h2>1 - 30 Januari 2023</h2>
                </div>
                <h1>1. Calon peserta diminta untuk mengisi formulir pendaftaran online 
                yang berisi informasi pribadi, kontak, dan rincian tim pada link berikut<br>
                2. Selain itu, peserta juga diharapkan mengunggah ringkasan rencana bisnis 
                mereka yang mencakup visi, misi, strategi, dan analisis pasar</h1>
            </div>
            <br>

            <div class="box">
                <div class="registration">
                    <img src="img/Card Icon1.svg" style="padding-right: 2%;">
                    <h3 style="margin-right: 47%"> <b>Seleksi Peserta</b></h3>
                    <h2>1 - 7 Februari 2023</h2>
                </div>
                <h1>1. Tim seleksi akan meninjau setiap pendaftaran dan mengevaluasi kualitas dan kelayakan bisnis plan yang diajukan
                <br>2. Kriteria evaluasi dapat mencakup inovasi, potensi pertumbuhan, kelayakan keuangan, dan kejelasan presentasi
                <br>3. Peserta yang memenuhi persyaratan seleksi akan dipilih sebagai finalis dan berhak melanjutkan ke tahap berikutnya</h1>
            </div>
            <br>
            <div class="box">
                <div class="registration">
                    <img src="img/Card Icon2.svg" style="padding-right: 2%;">
                    <h3 style="margin-right: 30%"> <b>Pengumuman Peserta Terpilih</b></h3>
                    <h2>8 Februari 2023</h2>
                </div>
                <h1>1. Pengumuman finalis akan dilakukan melalui email<br>
                2. Finalis akan diinformasikan tentang jadwal presentasi dan persiapan yang diperlukan<br>
                3. Pada acara pengumuman pemenang, setiap finalis akan mempresentasikan rencana bisnis mereka di hadapan panel juri <br>
                4. Setelah presentasi, panel juri akan melakukan evaluasi dan mengumumkan pemenang kompetisi business plan</h1>
            </div>
        </div>
    </div>
</div>
<script>
  // Check window width on page load and whenever the window is resized
  function checkWindowSize() {
    const divElement = document.getElementById('custom-background1');
    const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    
    // Set different background images for large and small screens
    if (windowWidth <= 700) {
      divElement.style.backgroundImage = "url('img/Background Mekanisme Section - Mobile.svg')";
      divElement.style.minHeight = "1381px"; // Set the min-height for small screens
    } else {
      divElement.style.backgroundImage = "url('img/Background Mekanisme Section.svg')";
      divElement.style.minHeight = "1000px"; // Set the min-height for small screens

    }
  }

  // Run the function on page load
  checkWindowSize();

  // Add event listener for window resize
  window.addEventListener('resize', checkWindowSize);
  </script>

    
</body>
</html>