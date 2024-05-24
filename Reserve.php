<?php  
 include 'db_conn.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Réservation du comp </title>
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
<!-- 
           <link rel="stylesheet" href="css/mainreserve.css">
           
           <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
           
          
    
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
        <section class="bgVideo"  data-vide-bg="3" id="home">
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
                        <img src="img/unnamed.png" >
                    </div>
                    <div class="col-lg-6">
                        <div class="desc">
                            <h1>Djnan AL-OUMDA</h1>
                            <h4>Pour vous saisir, suivez les étapes suivantes :</h4>
                            <p>
                                Entrez le nom, le prénom et la date de naissance.
                            </p>
                            <p>
                                Sélectionnez le type de réservation.
                            </p>
                            <p>
                                Choisissez le type de service que vous voulez.
                            </p>
                            <p>
                                Définissez la date de réservation.
                            </p>
                            <p>
                                Entrez votre numéro de téléphone et votre courriel pour communiquer avec vous.
                            </p>
                            <!-- <button class="btn btn-primary">Explore Our Things</button> -->
                        </div>
                    </div>
                </div>
             </div><br/>
             <center>
              <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#exampleModal">Réservation</button>
                          </div></center>
        </section>
      <!------------  end about us ------------->

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form id="add-client-form" action="addResv.php" method="post"  >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header btn-success">
                <h5 class="modal-title" id="exampleModalLabel">Restauration </h5>
                <button Type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
         <!---------------------------------body----------------------------------------->
        
                  <div class="modal-body" >
                  
                          <!--معلومات الزبون   -->
                          <div class="my-creat-new">
                            <div class="form-row ">
                                      <div class="form-group col-md-12">
                                        <label for="inputPassword4">Nom: </label>
                                        <input type="text" class="form-control" id="nom_client" onkeyup="lettersOnly(this)" name="nom_client" placeholder="Entrer votre nom" required data-toggle="tooltip" tabindex="40" maxlength="40" onkeyup="mymaxLength(this,this.value)" >
                                      </div>
                                      <div class="form-group col-md-12">
                                      <label for="inputPassword4">Prénom:</label>
                                        <input type="text" class="form-control" id="prenom_client" onkeyup="lettersOnly(this)" name="prenom_client" placeholder="Entrer votre Prénom" required data-toggle="tooltip" tabindex="40" maxlength="40" onkeyup="mymaxLength(this,this.value)" data-placement="top" title="Tooltip on top">
                                      </div>
                              </div>
                              <div class="form-row ">
                                      <div class="form-group col-md-6">
                                      <label for="inputPassword4">Date de N:</label>
                                        <input type="date" class="form-control"  name="date_n" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                      </div>
                                      <div class="form-group col-md-6">
                                        <label for="inputPassword4">Telephon:</label>
                                        <input type="text" class="form-control" id="num_phone" onkeyup="nombr(this)" name="num_phone" placeholder="(+213)" required data-toggle="tooltip" data-placement="top" tabindex="10" maxlength="10" onkeyup="mymaxLength(this,this.value)" title="غير مبني">
                                      </div>
          
                                </div>
                                <div class="form-row ">
                                      <div class="form-group col-md-12">
                                        <label for="inputEmail4">Email:</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre Email :exemple@gmail.com" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                      </div> 
                                </div>   
                                <div class="form-row ">
                                         
                              <!--نوع الحجز  -->
                                      <div class="form-group col-md-6">
                                          <label for="inputPassword4">Type de R: </label>
                                          <select class="custom-select" id="type_r" name="type_r" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                            <option selected disabled value="">choisi...</option>
                                            <option value="1">Cérémonie de circoncision</option>
                                            <option value="2">Cette fête d'anniversaire</option>
                                            <option value="3">Remise de diplôme</option>
                                            <option value="4">Banquet</option>
                                            <option value="5">famille</option>
                                          </select>
                                        </div>
                                          <div class="form-group col-md-6">
                                        <!--نوع الخدمة  -->
                                          <label for="exampleFormControlTextarea1">Type de serves: </label>
                                          <select class="custom-select" id="Type_de_service" name="Type_de_service" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                              <option selected disabled value="">choisi...</option>
                                              <option value="1">En libre service</option>
                                              <option value="2">Service de restauration</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Date d'R: </label>
                                            <input type="date" class="form-control" id="" name="date_Res"  required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                          </div>
                                          <div class="form-group col-md-6">
                                          <label for="inputEmail4">Nombre d'invités:</label>
                                              <input type="text" class="form-control" id="nombre_d_individus" onkeyup="nombr(this)"  placeholder="Entrez le nombre d’invités" name="nombre_d_individus" tabindex="4" maxlength="4" onkeyup="mymaxLength(this,this.value)" required data-toggle="tooltip" data-placement="top" >
                                            </div>
                                  </div>
                             </div>
                             </div>
        <!---------------------------------footer----------------------------------------->      
                    <div class="modal-footer">
                  
                    
                    <button type="submit" class="btn btn-success"  name="save_2">Enregistrer</button>
                  
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" >Annulation</button>
                  
                    </div>
          
          </div>
          </div>
          </form>
          
        
         
        </div>
          <!------------  start what we create ------------->
          <section class="create text-center" id="Galerie">
                <div class="headTitle">
                    <h2>Galerie Djnan AL-OUMDA</h2>
                     <svg width="180px" height="20px">
                                <line x1="0" y1="10" x2="180" y2="10" stroke="#9e9e9e" stroke-width="1px"></line>
                                 <line x1="50" y1="10" x2="130" y2="10" stroke="#2196f3" stroke-width="5px"></line>        
                    </svg>
                </div>
                <div class="container">
                    
    <div class="box-container">

<?php 
         $sql = "SELECT * FROM images ORDER BY id DESC";
         $res = mysqli_query($con,  $sql);

         if (mysqli_num_rows($res) > 0) {
             while ($images = mysqli_fetch_assoc($res)) {  ?>

   <div class="box">
           
            
            
                <img src="Admin/uploads/<?=$images['image_url']?>">
          
                 
   
           <div class="content">
           <a href="#" class="btn" style="border-radius: 5px;" data-toggle="modal" data-target="#exampleModal">Réservation</a>
           </div>
       </div>	<?php } }?>
   </div>
                 </div>
        </section>
      <!------------  start what we create ------------->







        <script src="js/script.js"></script>
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

$('input[name="nom_client"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
        return true; 
    }else{
        return false;
    }
});
$('input[name="prenom_client"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x ===32 ) {
        return true; 
    }else{
        return false;
    }
});
$('input[name="num_phone"]').on('keypress',function(event){
    var x = event.which || event.keyCode;
    if (x >= 48 && x <= 57) {
        return true; 
    }else{
        return false;
    }
});
$('input[name="nombre_d_individus"]').on('keypress',function(event){
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
        if (next < document.getElementById("add-client-form").length) {
          document.getElementById("add-client-form").elements[next].focus();
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
