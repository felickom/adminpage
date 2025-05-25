<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Company name</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Googles Font  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap">
    <!-- css file link -->
    <link rel="stylesheet" type="text/css" href="css/remake.css">
    <!-- icon title -->
    <link rel="icon" href="images/logo.png">
</head>

<body>

    <!-- Header Section Starts  -->
    <header class="header">
        <!-- Logo -->
        <img src="images/logo.png" class="logo">
        <!-- Menu Navigasi -->
        <nav class="navbar">
            <a href="#top">Home</a>
            <a href="#company">About Us</a>
            <a href="#our-classes">Our Services</a>
            <a href="#location">Location</a>
            <a href="testimonial/testimoni.php" target="_blank">Testimoni</a>
        </nav>
        <!-- Hamburger Menu Toggle -->
        <div id="menu-bars" class="fas fa-bars"></div>
    </header>
    <!-- Header Section Ends -->

    <!-- Main Banner Area Starts -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <?php
            include_once "../creativent/admin/config/dbconnect.php";
            $sql = "SELECT * FROM banner";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <source src="admin/<?= $row["video_url"] ?>" type="video/mp4" />
            <?php
                }
            }
            ?>
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>make your <em>event excellent</em></h6>
            </div>
        </div>
    </div>
    <!-- Main Banner Area Ends -->

    <!-- Company Glance Starts -->
    <div class="company-content" id="company">
        <div class="glance">
            <h2>Company at Glance</h2>
            <div class="paragraf">
                <?php
                include_once "../creativent/admin/config/dbconnect.php";
                $sql = "SELECT * FROM company";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $string = str_replace("</p>", "</p>|", $row['content']);
                        $arr = explode("|", $string);
                        $validArray = count($arr) - 1;
                        for ($i = 0; $i < count($arr); $i++) {
                            // if($i == $validArray) {
                            //     continue;
                            // }  
                            echo '<div class="paragraf-detail">';
                            echo $arr[$i];
                            echo '</div>';
                        }
                    }
                }
                ?>
            </div>
        </div>
        <div class="visi-misi">
            <div class="visi">
                <h2> Visi Perusahaan</h2>
                <br>
                <?php
                include_once "../creativent/admin/config/dbconnect.php";
                $sql = "SELECT * FROM visi";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <li><?= $row["visi"] ?></li>
                <?php
                    }
                }
                ?>
            </div>
            <div class="misi">
                <h2> Misi Perusahaan</h2>
            </div>
            <div class="daftar-misi">
                <div class="misi-satu">
                    <?php
                    include_once "../creativent/admin/config/dbconnect.php";
                    $sql = "SELECT * FROM misi where id <= 5";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <li><?= $row["misi"] ?></li>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="misi-dua">
                    <?php
                    include_once "../creativent/admin/config/dbconnect.php";
                    $sql = "SELECT * FROM misi where id > 5";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <li><?= $row["misi"] ?></li>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Company Glance Ends -->

    <!-- Benefit Starts -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Keuntungan Memilih <em>Kami</em></h2>
                        <p>Berikut benefit yang anda dapatkan apabila memilih kami.</p>
                    </div>
                </div>

                <?php
                include_once "../creativent/admin/config/dbconnect.php";
                $sql = "SELECT * FROM benefit";
                echo '<div class="col-lg-6"> <ul class="features-items">';
                $result = $conn->query($sql);
                $half = floor($result->num_rows / 2);
                $count = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $count++;
                ?>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="admin/<?= $row["icon"] ?>">
                            </div>
                            <div class="right-content">
                                <h4><?= $row["judul"] ?></h4>
                                <p class="right"><?= $row["isi"] ?></p>
                            </div>
                        </li>
                <?php
                        if ($count == $half) {
                            echo '</ul></div> <div class="col-lg-6"> <ul class="features-items">';
                        }
                    }
                    echo '</ul></div>';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Benefit Ends -->

    <!-- Call to Action Starts -->
    <div class="cta-content" id="call-to-action">
        <h2>Jangan <em>ragu</em>, pilihlah <em>kami</em> !</h2>
        <p>Dengan menekan tombol di bawah ini</p>
        <div class="main-button">
            <a href="contactform/contactform.html" target="_blank">Order Here</a>
        </div>
    </div>
    <!-- Call to Action Ends -->

    <!-- Our Services Starts -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Services</em></h2>
                        <p>Berikut adalah opsi paket yang kami sediakan untuk anda pilih dan sesuaikan dengan kebutuhan</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <div class="dropdown">
                        <button onclick="myFunction()" class="dropbtn">Event List & Services
                            <i class="fas fa-angle-down"></i>
                        </button>
                        <div id="myDropdown" class="dropdown-content">
                            <ul>
                                <?php
                                include_once "../creativent/admin/config/dbconnect.php";
                                $sql = "SELECT * from category";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                        <li><a href="#tabs-<?= $row["category_id"] ?>"><img src="#" alt=""><?= $row["category_name"] ?></a></li>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <?php
                        include_once "../creativent/admin/config/dbconnect.php";
                        $sql = "SELECT * from services, category WHERE services.category_id=category.category_id";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <article id='tabs-<?= $row["category_id"] ?>'>
                                    <img src="admin/<?= $row["product_image"] ?>">
                                    <h4><?= $row["category_name"] ?></h4>
                                    <p><?= nl2br($row["product_desc"]) ?></p>
                                    <div class="main-button">
                                        <form action="./ourservices/galerikami.php" method="POST">
                                            <input type="hidden" name="status" id="status" value="<?= $row["category_id"] ?>" />
                                            <input type="submit" class="button-galeri" name="submit" value="Galeri Kami">
                                        </form>
                                    </div>
                                </article>
                        <?php
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->



    <!-- Footer Starts -->
    <footer>
        <div class="footer-content" id="location">
            <div class="main-content">
                <h3>CONTACT US :</h3>
            </div>

            <div class="box">
                <div class="left-box">
                    <p>Jl. A Karang Anyar Gang XI no. 15/16</p>
                    <p>Kartini, Kecamatan Sawah Besar</p>
                    <p>Kota Jakarta Pusat</p>
                    <p>Daerah Khusus Ibukota Jakarta 10750</p>
                    <ul class="social">
                        <li><a href="#"><span class="fas fa-phone"> 021-62202131</span></a></li>
                        <li><a href="#"><span class="fas fa-envelope"> info@creativent.co.id</span></a></li>
                    </ul>
                </div>
                <div class="center-box">
                    <p>For further information please contact :</p>
                    <li><a href="#"><i class="fab fa-whatsapp"> 0819-1904-4881</i></a></li>
                    <li><a href="#"><i class="fab fa-whatsapp"> 0812-8355-6630</i></a></li>
                    <li><a href="#"><span class="fas fa-envelope"> admin@creativent.co.id</span></a></li>
                </div>
                <div class="right-box">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4855.603744879001!2d106.82910414205068!3d-6.1544519188653934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7d86e84cdef%3A0x75bb495cef13d4c1!2sCreativEnt%20Indonesia!5e0!3m2!1sen!2sid!4v1653286251541!5m2!1sen!2sid" width="400" height="250" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="footer-bottom">
                <p>Copyright &copy; 2025 Felic Komarno</p>
            </div>

    </footer>




    <!-- custom js file link  -->
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Other -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/accordions.js"></script>
    <script src="js/script.js"></script>



</body>

</html>