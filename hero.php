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
<body >
  <div style= "background-repeat: no-repeat; background-size: cover;" id="custom-background">
    <div class="container">
        <div class="col-1">
            <div class="align"  style="color: #FFF">
                <h3 > Detikfinance Business Plan Competition 2023</h3>
                <h2><b>EMPOWERING INDONESIA STARTUP</b></h2>
                <h4> Detikfinance memberikan ruang kepada para startup indonesia
                    untuk menunjukkan, serta mempromosikan 
                    brand mereka untuk mendapatkan perhatian dari venture
                    capital atau angel investor
                </h4>
                <a href="Registration page.php" class="btn-primary"><b>Daftarkan startup kamu</b></a>
            </div>
        </div>
    </div> 
  </div> 

  <script>
  // Check window width on page load and whenever the window is resized
  function checkWindowSize() {
    const divElement = document.getElementById('custom-background');
    const windowWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    
    // Set different background images for large and small screens
    if (windowWidth <= 700) {
      divElement.style.backgroundImage = "url('img/Background\ Hero\ Section\ -\ Mobile.svg')";
      divElement.style.minHeight = "736px"; // Set the min-height for small screens
    } else {
      divElement.style.backgroundImage = "url('img/Background\ Hero\ Section.svg')";
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