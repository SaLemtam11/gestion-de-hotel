<?php  
 include 'db_conn.php';
 ?>
<!DOCTYPE html> 
<html>
  <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Djnan AL-OUMDA </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/swiper.min.css">
           <link rel="stylesheet" href="css/main.css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
           <link rel="shortcut icon" href="assets/images/jnan.png">
           <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- [if lt IE 9]>
                <script src="js/html5shiv.min.js"></script>
        <![endif]-->
       
  </head>
  <body>
         <!---------------   start preload ------------>
        	<div class="loading-overlay text-center" >
			    <div class="loader">
                   <div class="loader-div">
                   <div class="loader-div">
                   <div class="loader-div">
                   <div class="loader-div">
                       <div class="loader-div">
                   </div>
                   </div>
                   </div>
                   </div>
                   </div>
            </div>
	  	</div>	
      <!---------------   end preload ------------>
         <!---------------   start navbar ------------>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" >
      <div class="container-fluid">
              <a class="navbar-brand" href="#">
                Djnan <span> AL-OUMDA</span> 
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="navbar-nav mr-auto w-100 justify-content-end">
                            <li class="nav-item active">
                                <a class="nav-link " href="#home">ACCUEIL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">POUR NOUS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#services">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#GALERIE">GALERIE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contactez nous</a>
                            </li>
                            <li class="nav-item">
                              
                                <a class="nav-link" href="Admin/index.php">Connexion <i class=" fas fa-user "></i></a>
                            </li>
                        </ul>
                      </div>
                    </div>
                </nav>

        <!------------   end navbar ------------->
        <!------------   start header bg video ------------->
        <section class="bgVideo"  data-vide-bg="4" id="home">
            <div class="overlay">
                 <div class="wave"></div>
                <div class="title">
                    <h1><span class="type" > </span></h1>
                    <p> <br>Djnan AL-OUMDA.</p>
                    <a href="#contact">
                        <svg><rect></rect></svg>
                        Contactez nous
                    </a>
                </div>
            </div>
        </section>
       <!------------   end header bg video ------------->
       <!------------  start about us ------------->
         <section class="about-us" id="about" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="img/FB_IMG_1628427463655.jpg" style="border-radius: 20px;">
                    </div>
                    <div class="col-lg-6">
                        <div class="desc">
                            <h1>Bienvenue à nos précieux clients à Jinan Al-Omda.</h1>
                            <p>
                            Tous les services sont disponibles :
                            </p>
                            <p>
                            Alimentation.
                            </p>
                            <p>
                            Lieux de divertissement et piscine familiale.
                            </p>
                            <!-- <button class="btn btn-primary">Explore Our Things</button> -->
                        </div>
                    </div>
                </div>
             </div>
        </section>
      <!------------  end about us ------------->
      <!------------  start what we create ------------->
          <section class="create text-center" id="services">
                <div class="headTitle">
                    <h2>SERVICES</h2>
                     <svg width="180px" height="20px">
                                <line x1="0" y1="10" x2="180" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                 <line x1="50" y1="10" x2="130" y2="10" stroke="#2196f3" stroke-width="5px"></line>        
                    </svg>
                    <p >Nous offrons de bons services à notre équipe.</p>
                </div>
                <div class="container">
                    <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="content">
                                    <i class="fas fa-clipboard-list"></i>
                                    <h3>Réservation du comp</h3>
                                    <p></p>
                                     <a href="Reserve.php">Lire la suite</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="content">
                                    <i class="fas fa-house-user"></i>
                                    <h3></h3>
                                    <p></p>
                                     <a href="#about">Lire la suite</a>
                              </div>
                            </div>
                         <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="content">
                                    <i class="fas fa-swimmer "></i>
                                    <h3>Cours de Natation</h3>
                                    <p></p>
                                     <a href="nager.php">Lire la suite</a>
                             </div>
                            </div>
                          
                    </div>
                 </div>
        </section>
      <!------------  start what we create ------------->
        <!------------- start portfilo --------------->
        <section class="protfolio" id="GALERIE">
             <div class="headTitle">
                    <h2>GALERIE</h2>
                     <svg width="180px" height="20px">
                                <line x1="0" y1="10" x2="180" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                 <line x1="50" y1="10" x2="130" y2="10" stroke="#2196f3" stroke-width="5px"></line>        
                    </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="filters text-center">
                            <li class="active" data-filter="*"><a href="#!">Montrer tous</a><span>&#47;</span></li>
                            <li data-filter=".Jinan"><a href="#!">Jinan Al-Omda</a><span>&#47;</span></li>
                            <li data-filter=".natation"><a href="#!">natation</a><span>&#47;</span></li>
                        </ul>
                        <div class="projects">
                           <div class="row">
                               
                               <div class="box-container element-item Jinan">

                                <?php 
                                        $sql0 = "SELECT * FROM images ORDER BY id DESC";
                                        $res0 = mysqli_query($con,  $sql0);
                                        

                                        if (mysqli_num_rows($res0) > 0) {
                                            while ($images = mysqli_fetch_assoc($res0)) {  ?>

                                  <div class="box">
                                                <img src="Admin/uploads/<?=$images['image_url']?>">
                                          
                                         
                                      </div>	<?php } }?>
                                  </div> 



                             
            <div class="box-container element-item natation" style="padding-top: 10px;">

              <?php 
                      
                      $sql1 = "SELECT * FROM imagesn ORDER BY id DESC";
                      $res1 = mysqli_query($con,  $sql1);

                      if (mysqli_num_rows($res1) > 0) {
                          while ($images = mysqli_fetch_assoc($res1)) {  ?>

                <div class="box">
                        
                              <img src="Admin/uploads_natation/<?=$images['image_url']?>">
                        
                    </div>	<?php } }?>
                </div>
                                
                                 
                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------- end portfilo --------------->

<!------------- start contact us --------------->
<section class="contact" id="contact">
    <div class="container">
      <div class="content">
            <div class="image-box">
              <img src="img/contact-img (1).svg" alt="">
            </div>
      <form action="ContactUs.php"  method="post" autocomplete="off" id="ContactUs">
        <div class="topic">Nous Envoyer Un Message</div>
        <div class="input-box">
          <input type="text" name="name" onkeyup="lettersOnly(this)"   tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)" required>
          <label>Entrer votre nom</label>
        </div>
        <div class="input-box">
          <input type="email" name="email" required>
          <label>Entrez votre email</label>
        </div>
        <div class="input-box">
          <input type="tel" name="phone" onkeyup="nombr(this)" required>
          <label>Entrez votre Telephon</label>
        </div>
        <div class="input-box">
          <input type="text" name="subject" required>
          <label>Entrez votre subject</label>
        </div>
        <div class="message-box">
          <textarea name="message" id="" cols="10" rows="10"></textarea>
          <label>Entrer votre message</label>
        </div>
        <div class="input-box">
          <input type="submit" name="submit" value="Envoyer">
        </div>
      </form>
    </div>
    </div>
  </section>      
  <!------------- End contact us --------------->
  <!-------------  start footer --------------->
      
  <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fas fa-campground"></i>
          <span class="logo_name">Djnan AL-OUMDA</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Entreprise</li>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="#contact">Contactez nous</a></li>
          <li><a href="#about">POUR NOUS</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Services</li>
          <li><a href="Reserve.php">Réservation du comp</a></li>
          <li><a href="nager.php">Cours de natation pour femmes</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Galerie</li>
          <li><a href="#GALERIE">Galerie de photos de Jinan Al-Omda</a></li>
          <li><a href="#GALERIE">Galerie de cours de natation</a></li>
        </ul>
        <ul class="box">
        <div style="text-align:center;padding:1em 0;">
          <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=fr&size=medium&timezone=Africa%2FAlgiers" width="100%" height="115" frameborder="0" seamless></iframe>
           </div>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
     
      <div class="bottom_text">
      <span class="copyright_text">TAMANRASSET  <a href="#">Djnan.</a>Al-OUMDA</span>
      </div>
    </div>
  </footer>
 <!-------------  start footer --------------->

     
        
        
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugin.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.vide.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/sweetalert.js"></script>



<script type="text/javascript">

    $('input[name="name"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
            return true; 
        }else{
            return false;
        }
    });
    $('input[name="phone"]').on('keypress',function(event){
        var x = event.which || event.keyCode;
        if (x >= 48 && x <= 57) {
            return true; 
        }else{
            return false;
        }
    });

</script>
<script>
function lettersOnly(input) {
    var  regex = /[^a-z]\s/gi;
    input.value = input.value.replace(regex,"") ;
    
}
function nombr(input) {
    var  regex = /[^0-9]/gi;
    input.value = input.value.replace(regex,'') ;
    
}

</script>
<script>
    function mymaxLength(x, y) {
      if (y.length == x.maxLength) {
        var next = x.tabIndex;
        if (next < document.getElementById("ContactUs").length) {
          document.getElementById("ContactUs").elements[next].focus();
        }
      }
    }
    </script>

<script src="js/sweetalert.js"></script>
<?php 

if (isset($_SESSION['status']) && $_SESSION['status'] != '' ) {


?>
            <script>
                Swal.fire({
                    title:"<?php echo  $_SESSION['status']; ?>",
                  /*   text:"", */
                    icon:"<?php echo  $_SESSION['status_cod']; ?>",
                    button:"OK",
                });
            </script>

    <?php
    unset($_SESSION['status']);
    
}



?>
    </body>
</html>
