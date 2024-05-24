
<?php

 if (isset($_GET['fiche'])):

   include 'includs\form_info_showig_2.php';

 elseif (isset($_POST['edit_fichh'])) :
   $getkey_2 = $_POST['edit_fichh'];
   include 'includs\Client_form_edit.php';

 else : ?>


<!-- Page content holder -->
<div class="page-content" id="">

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
 


  <div class="">
    <?php
      require 'connect.php';
      $Q_0091 = "SELECT count(num_client) AS num_client FROM `client`";
        $g_num1 = mysqli_query($connect , $Q_0091);
        $data_count1 = $g_num1->fetch_all(MYSQLI_ASSOC);
        $the_num1 = ($data_count1[0]['num_client']) ;

       

     ?>
 </div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form id="add-client-form" action="includs/add_Client.php" method="post" >
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-info">
        <h5 class="modal-title" id="exampleModalLabel">Ajouté un nouveau client </h5>
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
                                <input type="text" class="form-control" id="nom_client" name="nom_client" placeholder="Entrer votre nom" onkeyup="lettersOnly(this)"  tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)" required data-toggle="tooltip" data-placement="10" title="غير مبني" pattern="[A-Za-z]+" >
                              </div>
                              <div class="form-group col-md-12">
                              <label for="inputPassword4">Prénom:</label>
                                <input type="text" class="form-control" id="prenom_client" name="prenom_client" placeholder="Entrer votre Prénom" onkeyup="lettersOnly(this)"  tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                              </div>
                      </div>
                      <div class="form-row">
                              <div class="form-group col-md-6">
                              <label for="inputPassword4">Date de Nassance:</label>
                                <input type="date" class="form-control"  name="date_n" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="inputPassword4">Telephon :</label>
                                <input type="text" class="form-control" id="num_phone" name="num_phone" onkeyup="nombr(this)" placeholder="(+213)" tabindex="13" maxlength="13" onkeyup="mymaxLength(this,this.value)" required data-toggle="tooltip" data-placement="top" title="غير مبني">
                              </div>
                      </div>
                      <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="inputEmail4">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre Email" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                              </div> 
                              
                      </div>
                      <!--نوع الحجز  -->
                      <div class="form-row">
                              <div class="form-group col-md-4">
                                  <label for="inputPassword4">Type de Reservation: </label>
                                  <select class="custom-select" id="type_r" name="type_r" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                    <option selected disabled value="">choisi...</option>
                                    <option value="1">Cérémonie de circoncision</option>
                                    <option value="2">Cette fête d'anniversaire</option>
                                    <option value="3">Remise de diplôme</option>
                                    <option value="4">Banquet</option>
                                    <option value="5">famille</option>
                                  </select>
                                </div>
                                  <div class="form-group col-md-4">
                                <!--نوع الخدمة  -->
                                  <label for="inputEmail4">Type de serves: </label>
                                  <select class="custom-select" id="Type_de_service" name="Type_de_service" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                      <option selected disabled value="">choisi...</option>
                                      <option value="1">En libre service</option>
                                      <option value="2">Service de restauration</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Date d'Reservation: </label>
                                    <input type="date" class="form-control" id="" name="date_Res" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                                  </div>
                        </div>
                        
                    
    <!---------------------------------Informations de paiement----------------------------------------->
                    <div class="form-row">
                                  <div class="form-group col-md-4">
                                  <label for="inputEmail4">Nombre d'invités:</label>
                                      <input type="text" class="form-control" id="nombre_d_individus" onkeyup="nombr(this)"   tabindex="4" maxlength="4" onkeyup="mymaxLength(this,this.value)" name="nombre_d_individus" required data-toggle="tooltip" data-placement="top" >
                                    </div>
                                  <div class="form-group col-md-4">
                                    <label for="inputPassword4">prix :</label>
                                    <input type="text" class="form-control" id="prix_intial" onkeyup="nombr(this)"  tabindex="10" maxlength="10" onkeyup="mymaxLength(this,this.value)" name="prix_intial" required data-toggle="tooltip" data-placement="top" >
                                  </div>
                                  <div class="form-group col-md-4">
                                  <label for="inputPassword4">Total:</label>
                                  <input type="text" class="form-control " id="prix_somme"  name="prix_somme"   required >
                                  </div>
                              
                                              
                          </div>
                     </div>
<!---------------------------------footer----------------------------------------->      
            <div class="modal-footer">
            
            <button type="submit" class="btn btn-primary" id="saveBtn" name="save_2">Enregistrer</button>
          
          <button type="button" class="btn btn-secondary" data-dismiss="modal" >Annulation</button>
            
            </div>
  
  </div>
  </div>
  </form>
  

 
</div>

<div class="row">
              <div class="col-md-7">
                  <div class="card">
                      <div class="card-body">  
                      <div class="inovo-button">
                         <label class="font-weight-bold"> N° Fiches :</label> <input class="form-control" type="text" disabled name="" value="<?php echo $the_num1; ?>" style="width : 50px; display: inline">
                         <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#exampleModal">Ajouté <i class="fas fa-user-plus"></i></button> 
                      </div>
                      <hr />
 
                          <div class="tab-content">
                              <div class="tab-pane show active" id="basic-datatable-preview">
                                  <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                      <thead>
                                        <tr style="text-align: center;">
                                        <th >ID</th>
                                        <th >Nom</th>
                                        <th >Prenom</th>
                                        <th>Date de N </th>
                                        <th >Email</th>
                                        <th >Telephon</th>
                                        <th >Type_Res</th>
                                        <th >Type_sev</th>
                                        <th >Date d'Res</th>
                                        <th >N°d'invités</th>
                                        <th >prix</th>
                                        <th >Total</th>
                                        </tr>
                                        </thead >
                                        <tbody>
                                        <?php
                                                include 'includs\showintblclient.php';
                                            ?>
                                        </tbody>
                                  </table>                                           
                              </div> <!-- end preview-->
                          
                            
                          
                      </div> <!-- end card body-->
                  </div> <!-- end card -->
              </div><!-- end col-->
          </div>
          <!-- end row-->
<!-- End demo content -->
<div class="col-md-5">
                 
<div class="board">
                <div class="tasks" data-plugin="dragula" data-containers='["task-list-one", "task-list-two", "task-list-three", "task-list-four"]'>
                    <h5 class="mt-0 task-header">Client</h5>
                    
                    

                        <?php
require 'connect.php';

$Q_041 = "SELECT * FROM `client`;";

$get_041 = mysqli_query($connect , $Q_041);  //تنفيذ التعليمة
if (!$get_041) {  // التحقق من نجاح جلب البيانات
  die("خطأ في ادخال بينات البعث ");
}

 ?>


<!-- Vertical navbar -->

  
 
    
    
      <ul id="" class="nav flex-column bg-white mb-0">
          <?php while ($row = mysqli_fetch_assoc($get_041)) : ?>
          <li class="nav-item">

            <a href="Client.php?fiche=<?php echo $row['num_client'] ?>"  id="" class=" side-item-3 nav-link ">
                <i class="fas fa-file-alt"></i>
                <?php echo $row['nom_client'] ?>
            </a>
          </li>
         <?php endwhile; ?>
    </ul>
    

  



                            
                            
                            

                      
                        
                        
                    </div> <!-- end company-list-1-->
              

               
                

                    </div>
              
                </div>

            </div> <!-- end .board-->
    <?php
      endif;
     ?>
