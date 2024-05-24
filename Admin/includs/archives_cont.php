<?php

 if (isset($_GET['city'])):

   include 'includs\form_info_showigarchi.php';

   elseif (isset($_POST['edit_fichh'])) :
    $getkey_2 = $_POST['edit_fichh'];
    include 'includs\Client_form_edit.php';

 else : ?>


<!-- Page content holder -->
<div class="page-content" id="">



  <?php if (isset($_GET['removed'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong > Suppression réussi !</strong> Le client a été supprimé.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>
 

  <div class="">
    <?php
      require 'connect.php';
      $Q_009 = "SELECT count(num_client) AS num_client FROM archives";
        $g_num = mysqli_query($connect , $Q_009);
        $data_count = $g_num->fetch_all(MYSQLI_ASSOC);
        $the_num = ($data_count[0]['num_client']) ;

     ?>
    


  <div class="row">
              <div class="col-md-7">
                  <div class="card">
                      <div class="card-body">  
                      <div class="inovo-button">
                         <label class="font-weight-bold"> N°:</label> <input class="form-control" type="text" disabled name="" value="<?php echo $the_num;; ?>" style="width : 50px; display: inline">
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
                                                  include 'includs\showintblarchives.php';
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
                    <h5 class="mt-0 task-header">Archives</h5>
                    
                   
                    <?php
require 'connect.php';

$Q_041 = "SELECT * FROM `archives`;";

$get_041 = mysqli_query($connect , $Q_041);  //تنفيذ التعليمة
if (!$get_041) {  // التحقق من نجاح جلب البيانات
  die("خطأ في ادخال بينات البعث ");
}

 ?>


<!-- Vertical navbar -->

      <ul id="" class="nav flex-column bg-white mb-0">
          <?php while ($row = mysqli_fetch_assoc($get_041)) : ?>
          <li class="nav-item">

            <a href="Archives.php?city=<?php echo $row['num_client'] ?>"  id="" class="side-item-3 nav-link ">
                <i class="fas fa-file-alt"></i>
                <?php echo $row['nom_client'] ?>
            </a>
          </li>
         <?php endwhile; ?>
    </ul>
 

                            
                            
                            

                      
                        
                        
                    </div> <!-- end company-list-1-->
          </div>

               



              
               
</div>
            </div></div> <!-- end .board-->
    <?php
      endif;
     ?>
</div>