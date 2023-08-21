<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Welcome to the IoT ocean pollutant detection research website." />
        <meta name="keywords" content="IoT, Ocean Pollutant Detection" />
        <meta name="author" content="Ayo Abioye (abioyeayo@gmail.com)" />
        
        <title>Homepage | IoT Ocean Polutant Detection</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Boostrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

        <!-- Datatables css -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        
        <style>
            body {
                /* background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.8) 100%), url("../img/bg-masthead.jpg"); */
                background: url("bg-img.webp");
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;
                /* background-color: #fff; */
              }

            .google-maps {
                position: relative;
                padding-bottom: 75%; // This is the aspect ratio
                height: 0;
                overflow: hidden;
            }
            .google-maps iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100% !important;
                height: 100% !important;
            }
        </style>

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light border" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand display-5 fw-bold" href="/">IoTOPD</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <!-- <li class="nav-item"><a class="nav-link" href="lora-data/">LoRa Data</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="ais-data/">AIS Data</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <a href="lora-data/" class="btn btn-primary btn-sm d-none d-lg-block ms-3">LoRa Data</a>
            </div>
        </nav>
        <header>
            <div class="container col-xxl-8 px-4 py-5">
              <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center">
                  <h1 class="display-5 fw-bold lh-1 mb-3">IoT Ocean Pollutant Detection</h1>
                  <p class="lead">Have you ever wonder where all the ocean pollutants are coming from? Who are those responsible for contributing the most to ocean pollution?</p>

                </div>
                <div class="col-lg-6">
                    <div class="google-maps shadow bg-background rounded">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d228377.3565271581!2d-1.2603033824366017!3d50.77117731702802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2suk!4v1691242858699!5m2!1sen!2suk" width="600" height="450" style="border: none;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="d-lg-none d-grid">
                    <a href="lora-data/" class="btn btn-primary btn-lg px-4 me-md-2">LoRa Data</a>
                  </div>
              </div>
            </div>
        </header>

        <!-- About -->
        <section id="about">
            <div class="container px-4 px-lg-5" style="min-height: 300px;">
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-people fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Researchers</h3>
                            <p class="text-muted mb-0">We are a group of researchers from the University of Southampton, United Kindom.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-globe-europe-africa fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Sustainability</h3>
                            <p class="text-muted mb-0">Our goal is to contribute to global efforts in reducing water and air pollution. We believe in slowing down climate change for a sustainable world.</p>
                        </div>
                    </div>
                    <div id="contact" class="col-md-4 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi bi-envelope-at fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Contact Us</h3>
                            <p class="text-muted mb-0">Subscribe to our email list to be kept informed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mt-5">
          <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-6 d-flex align-items-center">
              <span class="text-muted ps-1">&copy; 2023 RCAS Lab.</span>
            </div>

            <div class="col-md-4 mt-md-0 mt-2 d-flex align-items-center">
              <span class="text-muted ps-2 pe-4 ms-auto">Powered by <a style="text-decoration: none; color: #6c757d;" href="https://setscentral.com.ng/">SetsCentral Ltd</a>.</span>
            </div>
          </footer>
        </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- Datatable Javascript -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    </body>
</html>
