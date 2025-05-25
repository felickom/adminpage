<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Testimoni</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <link rel="stylesheet" href="./assets/css/media-queries.css"> -->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/img/logo.png">

</head>

<body>

    <!-- Top menu -->
    <nav class="navbar navbar-dark fixed-top navbar-expand-md navbar-no-bg">
        <div class="container">
            <a class="navbar-brand" href="index.html">Bootstrap 4 Carousel Fullscreen Template</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Top content -->
    <div class="top-content">
        <!-- Carousel -->
        <div id="carousel-example" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <?php
                include_once "../admin/config/dbconnect.php";
                $sql = "SELECT * from testimoni";
                $result = $conn->query($sql);
                $count = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <li data-target="#carousel-example" data-slide-to="<?php echo $count ?>" <?php
                                                                                                    if ($count == 0) {
                                                                                                    ?>
                            class="active"
                            <?php
                                                                                                    }
                            ?>></li>
                <?php
                        $count = $count + 1;
                    }
                }
                ?>
            </ol>

            <div class="carousel-inner">
                <?php
                include_once "../admin/config/dbconnect.php";
                $sql = "SELECT * from testimoni";
                $result = $conn->query($sql);
                $count = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="carousel-item <?php
                                                    if ($count == 0) {
                                                        echo "active";
                                                    } else {
                                                        echo "";
                                                    } ?>">
                            <img src="../admin<?= $row["upload_images"] ?>" class="d-block w-100" alt="slide-img-<?php echo $count ?>">
                            <div class="carousel-caption">
                                <h3>Your Company Name</h3>
                                <div class="carousel-caption-description">
                                    <p>This Testimonial Belong to Your Company Name</p>
                                </div>
                            </div>
                        </div>
                <?php
                        $count = $count + 1;
                    }
                }
                ?>
            </div>

            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- End carousel -->
    </div>


    <!-- Footer -->
    <footer class="footer-container">

        <div class="container">
            <div class="row">

                <div class="col">
                    Copyright &copy; 2025 Felic Komarno</a>
                </div>

            </div>
        </div>

    </footer>

    <!-- Javascript -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.3.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>