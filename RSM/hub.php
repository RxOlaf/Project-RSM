<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</script> 

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navbar (sit on top)-->
    <nav class="navbar navbar-expand-lg navbar-light bg-red ">
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
        <h3 class="text-center">-- Contact Us --</h3>

    <form name="cs" method="post" action="proses.php" onsubmit="validasi()">
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Nama:</label>
      <div class="col-sm-10">
      <input type="text" class="form-control-inline" id="name" placeholder="Masukkan Nama" name="name" require  maxlength="40" minlength="3">
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
      <div class="col-sm-10">
      <input type="email" class="form-control-inline" id="email" placeholder="" name="email">
  </div>
    </div>

    <div class="form-group row">
      <label for="telepon" class="col-sm-2 col-form-label">Telepon:</label>
      <div class="col-sm-10">
      <input type="telepon" class="form-control-inline" id="telepon" placeholder="" name="telepon">
  </div>
    </div>

    <div class="form-group row">
      <label for="judul" class="col-sm-2 col-form-label">Subject:</label>
      <div class="col-sm-10">
      <div class="form-group col-md-2">
      <select name="judul">
        <option value="Subject">Subject</option>
        <option value="Kritik">Kritik</option>
        <option value="Saran">Saran</option>
      </select>
    </div>
  </div>
    </div>
 
  <div class="form-group row">
      <label for="pesan" class="col-sm-2 col-form-label">Pesan:</label>
       <div class="col-sm-10">
      <textarea class="form-control-inline" rows="5" id="pesan" name="pesan" require maxlength="40" minlength="3"></textarea>
  </div>
    </div>
    <button type="submit" value="submit" class="btn btn-primary mt-3">OK
    </button>
    <button type="reset" value="submit" class="btn btn-primary mt-3 "  >Reset
    </button>
    </div>
    
  </form>
                    
                </div>

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
