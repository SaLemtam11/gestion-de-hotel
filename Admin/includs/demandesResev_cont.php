<!-- Page content holder -->
<?php

 if (isset($_GET['fiche'])):

   include 'includs\form_info_demande.php';

 elseif (isset($_POST['edit_fichh'])) :
   $getkey_2 = $_POST['edit_fichh'];
   include 'includs\Client_form_edit.php';

 else : ?>
<div class="page-content" id="content">
  <div class="my-creat-new">
  
  <?php if (isset($_GET['add'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong > Succès Ajouté !</strong> Un nouveau client a été ajouté avec succès.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>

  <?php if (isset($_GET['removed'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong> Suppression réussi ! </strong> Le client a été supprimé. 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>
  <?php if (isset($_GET['editd'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong > Modifiées succès !</strong> Les informations ont été modifiées succès..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>
  <?php if (isset($_GET['errdate'])): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert"  >
    <strong> Erreur !</strong> Excusez-moi. Entrez une ancienne date. Veuillez entrer une nouvelle date.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button> 
    </div>
  <?php endif; ?> 
  <?php if (isset($_GET['adder'])): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert"  >
    <strong >Erreur !</strong> Erreur inconnue........
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>

<!-- End demo content -->



<div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body"> 
                          <div class="tab-content">
                              <div class="tab-pane show active" id="basic-datatable-preview">
                                  <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                      <thead>
                                          <tr>
                                              <th >ID</th>
                                               <th >Nom</th>
                                               <th >Prenom</th>
                                              <th >E-mail</th>
                                              <th >Numéro de téléphone </th>
                                              <th >accepter/rejetée</th>
                                          </tr>
                                      </thead>
                                    <tbody>
                                    <?php
require 'connect.php';

$Q_041 = "SELECT * FROM `demandesr`;";

$get_041 = mysqli_query($connect , $Q_041);  //تنفيذ التعليمة
if (!$get_041) {  // التحقق من نجاح جلب البيانات
  die("خطأ في ادخال بينات البعث ");
}

 ?>


 
 
          <?php while ($row = mysqli_fetch_assoc($get_041)) : ?>
           <tr>
             <td><?php echo $row['num_client']; ?></td>
             <td><?php echo $row['nom_client']; ?></td>
             <td><?php echo $row['prenom_client']; ?></td>
             <td><?php echo $row['email']; ?></td>
             <td><?php echo $row['num_phone']; ?></td>
           <td ><center>
           <h2><a href="demandesResev.php?fiche=<?php echo $row['num_client'] ?>" >
                <i class="fas fa-file-signature"></i>
            </a></h2> 
         </td></center> </tr>
         <?php endwhile; ?>
    

                                     
                                      </tbody>
                                  </table>                                           
                              </div> <!-- end preview-->
                            </div>
                       </div> <!-- end card body-->
                   </div> <!-- end card -->
      </div>
    </div><!-- end col-->
  
<?php
      endif;
     ?>

