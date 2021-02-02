<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navbar (sit on top)-->
    <nav class="navbar navbar-expand-lg navbar-light bg-red fixed-top">
        <!--Logo e-commerce-->
        <a class="navbar-brand" href="#">
            <img src="img/Toraja.png"alt="Image" style="width:50px;height:60px;" href="#">
        </a>

        <!--Navbar List-->
        <ul class="nav navbar-nav mr-auto font-weight-bold">
            <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Sejarah.html">Sejarah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kebudayaan.html">Kebudayaan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hub.html">Contact Us</a>
            </li>
        </ul>
    </nav>
    <div class="container" style="padding-top: 90px;">
        <div class ="jumbotron">
            <div class="card">
                <h2>Review Contact Us </h2>
            </div>
            <div class="card">
                <div class="card-body">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'test');
                $query = "SELECT * FROM form_input";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Pesan</th>
                            </tr>
                        </thead>
                        <?php
                            if($query_run)
                            {
                                foreach($query_run as $row)
                                {
                        ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $row['nama']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['telepon']; ?></td>
                                <td> <?php echo $row['judul']; ?></td>
                                <td> <?php echo $row['pesan']; ?></td>
                            </tr>
                        </tbody>
                            <?php       
                                    } 
                                }
                                else 
                                {
                                    echo "no record found";
                                }
                            ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!--Footer-->
<footer class="bg-warning text-left">
        <div class="container-fluid p-4">
            <div class="row">
                <!--Footer Website e-Commerce-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5>Tana Toraja</h5>
                    <p>
                        Kata Toraja berasal dari bahasa Bugis, To Riaja, yang berarti "orang yang berdiam di negeri atas". Pemerintah kolonial Belanda menamai suku ini 
                        Toraja pada tahun 1909. Suku Toraja terkenal akan ritual pemakaman, rumah adat tongkonan dan ukiran kayunya. Ritual pemakaman Suku Toraja
                        merupakan peristiwa sosial yang penting, biasanya dihadiri oleh ratusan orang dan berlangsung selama beberapa hari. 
                    </p>
                </div>

                <!--Footer Menus-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Menus</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="home.html" class="text-dark">Home</a>
                        </li>
                        <li>
                            <a href="Sejarah.html"class="text-dark">Sejarah</a>
                        </li>
                        <li>
                            <a href="kebudayaan.html" class="text-dark">Kebudayaan</a>
                        </li>
                        <li>
                            <a  href="hub.html" class="text-dark">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <!--Footer Contact Us-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5>Contact Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/visittorajautara" target="_blank">
                                <img src="img/facebook.png" class="rounded-circle contact-footer">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/visittorajautara/" target="_blank">
                                <img src="img/instagram.png" class="rounded-circle contact-footer">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.halotorajautara.com/" target="_blank">
                                <img src="img/twitter.png" class="rounded-circle contact-footer">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.halotorajautara.com/" target="_blank">
                                <img src="img/google.jpg" class="rounded-circle contact-footer">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center p-3" style="background-color: rgb(248, 221, 185);">
            &copy; 2020 Copyright :
            <a class="text-dark" href="#">Tana Toraja</a>
        </div>
    </footer>
    <!--End of Footer-->

</body>

</html>