<?php 

$jsonkeseluruhan = file_get_contents('https://api.kawalcorona.com/indonesia/');
$keseluruhan = json_decode($jsonkeseluruhan, true);

$jsonprovinsi = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');
$provinsi = json_decode($jsonprovinsi, true);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Update COVID-19 Indonesia</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#">Update COVID-19 Indonesia</a>
            
        </div>
    </nav>

    <!-- Keseluruhan -->
    <div class="jumbotron" id="home">
        <div class="container">
            <h1>Update COVID-19 Indonesia</h1>
            <h4>Keseluruhan</h4>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-primary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Positif</h2>
                    <p class="lead"><?= $keseluruhan[0]['positif'] ?></p>
                </div>
                <div class="col-md-5 bg-danger text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Meninggal</h2>
                    <p class="lead"><?= $keseluruhan[0]['meninggal'] ?></p>
                </div>
            </div>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-success text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Sembuh</h2>
                    <p class="lead"><?= $keseluruhan[0]['sembuh'] ?></p>
                </div>
                <div class="col-md-5 bg-secondary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Dirawat</h2>
                    <p class="lead"><?= $keseluruhan[0]['dirawat'] ?></p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b6d3fe" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,192C384,192,480,160,576,170.7C672,181,768,235,864,229.3C960,224,1056,160,1152,122.7C1248,85,1344,75,1392,69.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>

    <!-- Banten -->
    <div class="jumbotron" id="banten">
        <div class="container">
            <h1>Update Banten</h1>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-primary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Positif</h2>
                    <p class="lead"><?= number_format($provinsi[6]['attributes']['Kasus_Posi'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-danger text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Meninggal</h2>
                    <p class="lead"><?= number_format($provinsi[6]['attributes']['Kasus_Meni'], 0, '.', ','); ?></p>
                </div>
            </div>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-success text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Sembuh</h2>
                    <p class="lead"><?= number_format($provinsi[6]['attributes']['Kasus_Semb'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-secondary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Dirawat</h2>
                    <p class="lead">N/A</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,181.3C96,203,192,245,288,256C384,267,480,245,576,197.3C672,149,768,75,864,74.7C960,75,1056,149,1152,192C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>

    <!-- DKI Jakarta -->
    <div class="jumbotron" id="jakarta">
        <div class="container">
            <h1>Update DKI Jakarta</h1>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-primary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Positif</h2>
                    <p class="lead"><?= number_format($provinsi[0]['attributes']['Kasus_Posi'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-danger text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Meninggal</h2>
                    <p class="lead"><?= number_format($provinsi[0]['attributes']['Kasus_Meni'], 0, '.', ','); ?></p>
                </div>
            </div>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-success text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Sembuh</h2>
                    <p class="lead"><?= number_format($provinsi[0]['attributes']['Kasus_Semb'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-secondary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Dirawat</h2>
                    <p class="lead">N/A</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b6d3fe" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,218.7C384,213,480,139,576,117.3C672,96,768,128,864,117.3C960,107,1056,53,1152,37.3C1248,21,1344,43,1392,53.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>

    <!-- Jawa Barat -->
    <div class="jumbotron" id="jawabarat">
        <div class="container">
            <h1>Update Jawa Barat</h1>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-primary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Positif</h2>
                    <p class="lead"><?= number_format($provinsi[1]['attributes']['Kasus_Posi'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-danger text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Meninggal</h2>
                    <p class="lead"><?= number_format($provinsi[1]['attributes']['Kasus_Meni'], 0, '.', ','); ?></p>
                </div>
            </div>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-success text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Sembuh</h2>
                    <p class="lead"><?= number_format($provinsi[1]['attributes']['Kasus_Semb'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-secondary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Dirawat</h2>
                    <p class="lead">N/A</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L48,197.3C96,171,192,117,288,112C384,107,480,149,576,176C672,203,768,213,864,224C960,235,1056,245,1152,256C1248,267,1344,277,1392,282.7L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>

    <!-- Jawa Tengah -->
    <div class="jumbotron" id="jawatengah">
        <div class="container">
            <h1>Update Jawa Tengah</h1>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-primary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Positif</h2>
                    <p class="lead"><?= number_format($provinsi[2]['attributes']['Kasus_Posi'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-danger text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Meninggal</h2>
                    <p class="lead"><?= number_format($provinsi[2]['attributes']['Kasus_Meni'], 0, '.', ','); ?></p>
                </div>
            </div>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-success text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Sembuh</h2>
                    <p class="lead"><?= number_format($provinsi[2]['attributes']['Kasus_Semb'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-secondary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Dirawat</h2>
                    <p class="lead">N/A</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#b6d3fe" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,154.7C384,128,480,96,576,106.7C672,117,768,171,864,170.7C960,171,1056,117,1152,85.3C1248,53,1344,43,1392,37.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>

    <!-- Yogyakarta -->
    <div class="jumbotron" id="yogyakarta">
        <div class="container">
            <h1>Update Yogyakarta</h1>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-primary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Positif</h2>
                    <p class="lead"><?= number_format($provinsi[9]['attributes']['Kasus_Posi'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-danger text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Meninggal</h2>
                    <p class="lead"><?= number_format($provinsi[9]['attributes']['Kasus_Meni'], 0, '.', ','); ?></p>
                </div>
            </div>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-success text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Sembuh</h2>
                    <p class="lead"><?= number_format($provinsi[9]['attributes']['Kasus_Semb'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-secondary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Dirawat</h2>
                    <p class="lead">N/A</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,144C96,128,192,96,288,80C384,64,480,64,576,74.7C672,85,768,107,864,128C960,149,1056,171,1152,165.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>

    <!-- Jawa Timur -->
    <div class="jumbotron" id="jawatimur">
        <div class="container">
            <h1>Update Jawa Timur</h1>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-primary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Positif</h2>
                    <p class="lead"><?= number_format($provinsi[3]['attributes']['Kasus_Posi'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-danger text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Meninggal</h2>
                    <p class="lead"><?= number_format($provinsi[3]['attributes']['Kasus_Meni'], 0, '.', ','); ?></p>
                </div>
            </div>

            <div class="row justify-content-evenly">
                <div class="col-md-5 bg-success text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Sembuh</h2>
                    <p class="lead"><?= number_format($provinsi[3]['attributes']['Kasus_Semb'], 0, '.', ','); ?></p>
                </div>
                <div class="col-md-5 bg-secondary text-light text-center rounded shadow-lg mt-3">
                    <h2 class="pt-3">Dirawat</h2>
                    <p class="lead">N/A</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,181.3C384,181,480,171,576,144C672,117,768,75,864,64C960,53,1056,75,1152,74.7C1248,75,1344,53,1392,42.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>

    

    <footer class="bg-primary text-center text-light">
        <h5>Copyright &copy; 2021 Update COVID-19 Indonesia. All rights reserved.</h5>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>