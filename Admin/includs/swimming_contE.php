<?php

 if (isset($_GET['fiche1'])):

   include 'includs\form_info_showigsmmigE.php';

 elseif (isset($_POST['edit_fichh'])) :
   $getkey_2 = $_POST['edit_fichh'];
   include 'includs\simmingE_form_edit.php';

 else : ?>
 


<!-- Page content holder -->
<div class="page-content" id="">

  <?php if (isset($_GET['add'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong> Succès Ajouté !</strong> Un nouveau fiche a été ajouté avec succès.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>

  <?php if (isset($_GET['removed'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong> Suppression réussi !</strong> Un fiche a été supprimé.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>
  <?php if (isset($_GET['editd'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong> Modifiées succès !</strong> Les informations ont été modifiées succès..
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

<!-----------------------------------------------------------------------------------------2------------entraineurs-------------------------------------------------------------------------------------------------->
          

  <div class="">
    <?php
      require 'connect.php';
      $Q_009133 = "SELECT count(id) AS id FROM `entraineurs`";
        $g_num1 = mysqli_query($connect , $Q_009133);
        $data_count1 = $g_num1->fetch_all(MYSQLI_ASSOC);
        $the_num2 = ($data_count1[0]['id']) ;

       

     ?>
 </div>


<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<form action="includs/add_swimming.php" method="post" id="add-Entraineurs" >
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-success">
        <h5 class="modal-title" id="exampleModalLabel"> Ajoute </h5>
        <button Type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <!---------------------------------body----------------------------------------->

          <div class="modal-body" >
          
                  <!--معلومات الزبون   -->
                  
                    <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="inputPassword4">Nom et Prenom: </label>
                                <input type="text" class="form-control" id="nom_prenom" name="nom_prenom"  onkeyup="lettersOnly(this)" tabindex="100" maxlength="100" onkeyup="mymaxLength(this,this.value)" placeholder="Entrer votre nom et prénom" required data-toggle="tooltip" data-placement="top" title="غير مبني">
                              </div>
                              
                              <div class="form-group col-md-4">
                                <label for="inputPassword4">Telephon :</label>
                                <input type="tel" class="form-control" id="tel" name="tel"  onkeyup="nombr(this)" tabindex="10" maxlength="10" onkeyup="mymaxLength(this,this.value)" placeholder="(+213)" required data-toggle="tooltip" data-placement="top" title="غير مبني">
                              </div>
                              <div class="form-group col-md-8">
                                <label for="inputEmail4">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="exemple@gmail.com" name="email" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                              </div>
                          </div>
                     </div>
<!---------------------------------footer----------------------------------------->      
            <div class="modal-footer"> 
            <form >
            <button type="submit" class="btn btn-success btn-rounded" name="save_4">Enregistrer</button>
          </form>
          <button type="button" class="btn btn-secondary btn-rounded" data-dismiss="modal" >Annulation</button>
            
            </div>
  
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
                         <label class="font-weight-bold"> N° :</label> <input class="form-control" type="text" disabled name="" value="<?php echo $the_num2; ?>" style="width : 50px; display: inline">
                         <button type="button" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#exampleModal1">Ajoute <i class="fas fa-user-plus"></i></button> 
                      </div>
                      <hr />
 
                          <div class="tab-content">
                              <div class="tab-pane show active" id="basic-datatable-preview">
                                  <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                      <thead>
                                        <tr style="text-align: center;">
                                        <th >ID</th>
                                        <th >Nom et Prenom</th>
                                        <th >Email</th>
                                        <th >Telephon</th>
                                        </tr>
                                        </thead >
                                        <tbody>
                                        <?php
                                                include 'includs\showintabelswimmingE.php';
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
<!-----------------------------------------------------------------------------------------2------------entraineursFIN-------------------------------------------------------------------------------------------------->

<!--------------------------------------------------------------------------------------------------------------------------------->
<div class="col-md-5">
                         

<div class="board">
                <div class="tasks" data-plugin="dragula" data-containers='["task-list-one", "task-list-two", "task-list-three", "task-list-four"]'>
                    <h5 class="mt-0 task-header">Entraineurs</h5>
                    
                   

                        <?php
require 'connect.php';

$Q_041 = "SELECT * FROM `entraineurs`;";

$get_041 = mysqli_query($connect , $Q_041);  //تنفيذ التعليمة
if (!$get_041) {  // التحقق من نجاح جلب البيانات
  die("خطأ في ادخال بينات البعث ");
}

 ?>


<!-- Vertical navbar -->

  
 
    
    
      <ul id="" class="nav flex-column bg-white mb-0">
          <?php while ($row = mysqli_fetch_assoc($get_041)) : ?>
          <li class="nav-item">

            <a href="SwimmingE.php?fiche1=<?php echo $row['id'] ?>"  id="" class=" side-item-3 nav-link ">
                <i class="fas fa-file-alt"></i>
                <?php echo $row['nom_prenom'] ?>
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
