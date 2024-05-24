<?php  include 'db_conn.php'; ?>
<!DOCTYPE html>
<html>
  <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cours de Natation </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/swiper.min.css">
           <link rel="stylesheet" href="css/mainnager.css">
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
           <link rel="shortcut icon" href="assets/images/jnan.png">
           <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

           <!-- ------------------------------ -->
           <link href="assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
           <link href="assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
           <link href="assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">



           <!-- -------------------------------------- -->
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
                                <a class="nav-link " href="index.php">ACCUEIL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php/../#about">POUR NOUS</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="index.php/../#services">SERVICES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Galerie">GALERIE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php/../#contact">Contactez nous</a>
                            </li>
                        </ul>
                      </div>
                    </div>
                </nav>

        <!------------   end navbar ------------->
        <!------------   start header bg video ------------->
        <section class="bgVideo"  data-vide-bg="img/vido" id="home">
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
                        <img src="img/دروس-السباحة-في-دبي-825x510.jpg" >
                    </div>
                    <div class="col-lg-6">
                        <div class="desc">
                            <h1>La natation</h1>
                            <p>
                                La natation, un sport complet pour tous
                                Un sport idéal pour muscler l'ensemble du corps
                                La natation a l'avantage de pouvoir être pratiquée à tous les âges et n'importe quel moment de l'année. Elle fait partie des sports dits "complets" qui sollicitent tous les muscles du corps. Raffermir et tonifier le système musculaire permet d'éviter certaines douleurs comme le mal de dos, les douleurs aux genoux et aux hanches.
                                La natation permet également d'assouplir les articulations et de réduire le risque d'arthrose, grâce à quasi apesanteur de l'eau qui supprime les chocs
                            </p>
                            <!-- <button class="btn btn-primary">Explore Our Things</button> -->
                        </div>
                    </div>
                </div>
             </div>
        </section>
        
        <section class="about-us" id="about" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="desc">
                            <h1>Steps to teach swimming at the beginning</h1>
                            <p> Grab a flotation device and try out one of the swimming sessions. </p>
                            <p>
                                Pool board, or Styrofoam options are ideal.
                            </p>
                            <p>
                                Don't use arm supports or anything around your circumference because these types of flotation devices interfere rather than help.
                            </p>
                            <p>
                                Hold the swim board in front of you with straight arms.
                            </p>
                            <p>
                                Run off the wall with a scissor kick with your legs straight behind you.
                            </p>
                            <p>
                                Rotating your head to the side to breathe in, complete one turn.
                            </p>
                            <p>
                                It can rest along the way when necessary.
                            </p>
                            <p>
                                Try another roll using your arms, hold the flotation device in front of you with straight arms, push off the wall and do a straight leg scissors kick.
                            </p>
                            <p>
                                Lift one arm off the board, pull it down through the water and raise it, returning your arm to the starting position.
                            </p>
                            <p>
                                Switch arms and repeat, then rotate your head to breathe from the side as necessary.
                            </p>
                            <p>
                                Take a break and repeat until you feel comfortable with the exercise.
                            </p>
    
                            <!-- <button class="btn btn-primary">Explore Our Things</button> -->
                        </div>
                    </div>
                   
                </div>
             </div>
             <center>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#exampleModal">INSCRIPTION <i class="fas fa-user-plus"></i></button> 
                            </div></center>
        </section>
      <!------------  end about us ------------->
      
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="addResv.php" method="post" id="nager" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header btn-info">
            <h5 class="modal-title" id="exampleModalLabel"> INSCRIPTION </h5>
            <button Type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
     <!---------------------------------body----------------------------------------->
    
              <div class="modal-body" >
               
                      <!--معلومات الزبون   -->
                      
                        <div class="form-row">
                                  <div class="form-group col-md-12">
                                    <label for="inputPassword4">Nom: </label>
                                    <input type="text" class="form-control" id="nom" name="nom" onkeyup="lettersOnly(this)"  required data-toggle="tooltip" data-placement="top" title="غير مبني" tabindex="40" maxlength="40" onkeyup="mymaxLength(this,this.value)" placeholder="Entrer votre nom">
                                  </div>
                                  <div class="form-group col-md-12">
                                  <label for="inputPassword4">Prenom:</label>
                                    <input type="text" class="form-control" id="prenom" name="prenom" onkeyup="lettersOnly(this)"  required data-toggle="tooltip" data-placement="top" title="Tooltip on top" tabindex="40" maxlength="40" onkeyup="mymaxLength(this,this.value)" placeholder="Entrer votre Prenom">
                                  </div>
                                     <div class="form-group col-md-6">
                                        <label for="inputEmail4">Date d'N: </label>
                                        <input type="date" class="form-control" id="" name="date_n"  required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                      </div>
                                      <div class="form-group col-md-6">
                                      <label for="exampleFormControlTextarea1">Genre: </label>
                                      <select class="custom-select" id="Genre" name="Genre" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                          <option selected disabled value="">choisi...</option>
                                          <option value="1">Femme</option>
                                          <option value="2">Homme</option>
                                        </select>
                                        </div>
                                  <div class="form-group col-md-12">
                                    <label for="inputPassword4">Telephon :</label>
                                    <input type="tel" class="form-control" id="tel" name="tel" onkeyup="nombr(this)"  required data-toggle="tooltip" data-placement="top" title="غير مبني" tabindex="10" maxlength="10" onkeyup="mymaxLength(this,this.value)" placeholder="(+213)">
                                  </div> 
                                  <div class="form-group col-md-12">
                                    <label for="inputEmail4">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required data-toggle="tooltip" data-placement="top" title="Tooltip on top" placeholder="Entrez votre Email">
                                  </div>
                              </div>
                         </div>
    <!---------------------------------footer----------------------------------------->      
                <div class="modal-footer">
                <form >
                <button type="submit" class="btn btn-success" name="Enregistrer">Enregistrer</button>
              </form>
              <button type="button" class="btn btn-secondary btn-rounded" data-dismiss="modal" >Annulation</button>
                
                </div>
      
      </div>
      </div>
      
      </div>
      </form>
      
    
     
    </div>
    
      <!------------  start what we create ------------->
          <section class="create text-center" id="Galerie">
                <div class="headTitle">
                    <h2>Galerie de cours de natation</h2>
                     <svg width="180px" height="20px">
                                <line x1="0" y1="10" x2="180" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                 <line x1="50" y1="10" x2="130" y2="10" stroke="#2196f3" stroke-width="5px"></line>        
                    </svg>
                </div>
                <div class="container">
                    
    <div class="box-container">

<?php 
         $sql = "SELECT * FROM imagesn ORDER BY id DESC";
         $res = mysqli_query($con,  $sql);

         if (mysqli_num_rows($res) > 0) {
             while ($images = mysqli_fetch_assoc($res)) {  ?>

   <div class="box">
           
            
            
                <img src="Admin/uploads_natation/<?=$images['image_url']?>">
          
                 
   
           <div class="content">
           <a href="#" class="btn" style="border-radius: 5px;" data-toggle="modal" data-target="#exampleModal">INSCRIPTION</a>
           </div>
       </div>	<?php } }?>
   </div>
                 </div>
        </section>
      <!------------  start what we create ------------->

     
        
        
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

$('input[name="nom"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
        return true; 
    }else{
        return false;
    }
});
$('input[name="prenom"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
        return true; 
    }else{
        return false;
    }
});
$('input[name="tel"]').on('keypress',function(event){
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
        if (next < document.getElementById("nager").length) {
          document.getElementById("nager").elements[next].focus();
        }
      }
    }
    </script>

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
