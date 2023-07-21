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
<body style="background-color: #F4FBFF">
    <div class="form">
        <form action="#" method="post">
            <input type="text" id="nama" name="nama" placeholder="Nama perusahaan*" required><br><br>
            <input type="email" id="email" name="email" placeholder="Email*" required><br><br>
            <input type="text" id="no" name="no" placeholder="No. Telepon*" required>
            <h1>isi hanya angka</h1><br>
            <textarea id="pesan" name="about" rows="4" placeholder="Tentang Perusahaan (Max. 200 character)*" required></textarea><br><br>
            
            <div class="input">
                <form1>
                <div class="wrapper">
                    <input class="file-input" type="file" name="file" hidden>
                    <img src="img/Vector.svg"> <br> 
                    <div class="grid">
                        <p>Upload file logo</p>
                        <l> * </l>
                    </div>
                </div>
                </form1>
                <h1>1. Format file: .png, .jpg, .jpeg <br>
                    2. Maksimal ukuran file 200KB <br>
                    3. Hindari penggunaan logo berwarna putih <br>
                    4. Minimal lebar 300px</h1>
            </div> <br>
            <div>
                <section class="progress-area"></section>
                <section class="uploaded-area"></section>
            </div>
            <div class="file-upload-wrapper" data-text="Profil Perusahaan atau Deck (opsional)">
                <input name="file-upload-field" type="file" class="file-upload-field" value="">
            </div> <br>
            <input type="text" id="link" name="link" placeholder="Link website*" required>
            <h1>Website, Sosial Media, dll. Sertakan protokol URL (https:// atau http://).</h1><br>
            <div class="checkbox">
                <input type="checkbox" name="aggre" value="aggre" style="font-size: 2%" required> Dengan menekan tombol "Daftar", Saya menyetujui syarat dan ketentuan yang berlaku<br><br>
            </div>
            <input type="submit" value="Register">
        </form>
    </div>
    <br> <br>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script2.js"></script>
</body>
</html>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_FILES['file']['name']; //getting file name
    $tmp_name = $_FILES['file']['tmp_name']; //getting temp_name of file
    $file_up_name = time().$file_name; //making file name dynamic by adding time before file name
    move_uploaded_file($tmp_name, "files/".$file_up_name); //moving the file to the specified folder with a dynamic name
  }
?>