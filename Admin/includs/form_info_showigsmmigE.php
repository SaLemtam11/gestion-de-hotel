
<?php
  require 'connect.php';

  $serkey_4 = $_GET['fiche1'];
  $Q_0x = "SELECT * FROM `entraineurs` WHERE id LIKE $serkey_4;";

  $get_0x = mysqli_query($connect , $Q_0x);  //تنفيذ التعليمة
  if (!$get_0x) {  // التحقق من نجاح جلب البيانات
    die("خطأ في ادخال بينات البعث ");
  }
      while ($row = mysqli_fetch_assoc($get_0x)) :
   ?>

<div class="card">
        <div class="card-body"> 
        <div style=" text-align: right;">
        <div  class="btn-group me-2" role="group" aria-label="third group">
            <button type="submit" class="btn btn-primary mt-4 btn-lg float-right btn-rounded"  data-toggle="modal" value="<?php echo $row['id'] ?>" data-target="#exampleModal" > Modifier <i class="fas fa-user-edit"></i></button>
       </div>
       <div  class="btn-group me-2" role="group" aria-label="third group">
       
            <button type="submit" class="btn btn-danger mt-4 btn-lg float-right btn-rounded" data-toggle="modal" data-target="#removeModal" >Supprime <i class="fas fa-trash"></i></button>
          
        </div>
        <div  class="btn-group me-2" role="group" aria-label="third group">
            <button type="button" class="btn btn btn-success btn-lg mt-4  float-left btn-rounded" id="prnt-but_2" onclick="Print_4()">Imprimer <i class="fas fa-print"></i></button>
        </div>
        <div  class="btn-group me-2" role="group" aria-label="third group">
           <a href="SwimmingE.php"> <button type="submit" class="btn btn-secondary mt-4 btn-lg float-right btn-rounded" >Annulation</button>
          </a>
        </div>
   </div>
   </div>
   </div>
   <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body"> 
                      <div class="innertabel" id="print_4">
    <h2 style=" margin-left: 100px;margin-top: 50px;text-align: center;">Jinan EL-oumda</h2>
      <h4>Fiche</h4>
      <h4 ><?php echo $row['nom_prenom'] ; ?></h4>
    
        <table class="table table-sm text-center table-bordered" style="margin-bottom:0;" id="ta20">
           <tr>
            <th colspan="4">Informations</th>
           </tr>
           <tr>
           <td style="text-align:left;" colspan="2">N° </td>
              <td colspan="2"><?php echo $row['id'] ?></td>
           </tr> 
           <tr>
           <td style="text-align:left;" colspan="2">Nom el Prénome</td> 
              <td colspan="2"><?php echo $row['nom_prenom'] ?></td>
           </tr>
           <tr>
           <td style="text-align:left;"colspan="2">E-mail</td>
              <td colspan="2"><?php echo $row['email'] ?>  </td>
           </tr> 
           <tr>
           <td style="text-align:left; "colspan="2">Telephon</td> 
              <td colspan="2"><?php echo $row['tel'] ?>
           </tr>
        </table>

        <h3 style=" margin-left: 100px;margin-top: 50px;text-align: center;">Signature</h3>


    </div>
</div>
</div>
</div>


</div>

<div class="page-content" id="">


<!-- Modal supprimer -->
<div class="modal fade" id="removeModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <h5 class="modal-title" id="exampleModalLabel1">Confirmer la suppression</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <div class="card" style="width: 100%;">
          <img src="img\img_exl.png" style="width: 100px;height: 50%;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Confirmer la suppression</h5>
            <p class="card-text">Êtes-vous sûr de vouloir supprimer  ?</p>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-rounded" data-dismiss="modal">Annulation</button>
        <form  action="includs/edtE.php" method="post">
          <button type="submit" class="btn btn-danger btn-rounded"  name="rem_fff" value="<?php echo $row['id'] ?>" >Supprime</button>
        </form>
      </div>
    </div>
  </div>
</div>
















<!-------------modal modifi------------>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<form action="includs/edtE.php" method="post" id="edit-Entraineurs" >
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-success">
        <h5 class="modal-title" id="exampleModalLabel"> Modifier les Informations</h5>
        <button Type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <!---------------------------------body----------------------------------------->

 <div class="modal-body" >
    
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="inputPassword4">Nom et Prenom:</label>
              <input type="text" class="form-control" value="<?php echo $row['nom_prenom'] ?>" name="enom_prenom" onkeyup="lettersOnly(this)" tabindex="100" maxlength="100" onkeyup="mymaxLength(this,this.value)" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            </div>
           <div class="form-group col-md-4">
             <label for="inputAddress2">Telephon</label>
             <input type="text" class="form-control" value="<?php echo $row['tel'] ?>" name="etel" onkeyup="nombr(this)" tabindex="10" maxlength="10" onkeyup="mymaxLength(this,this.value)" placeholder="(+213)" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
           </div>
          <div class="form-group col-md-8">
             <label for="inputAddress">E-mail:</label>
             <input type="email" class="form-control" value="<?php echo $row['email'] ?>" name="eemail"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
           </div>
        
          </div> 
</div>
<!---------------------------------footer----------------------------------------->      
         <div class="modal-footer">
           
            <button type="submit" class="btn btn-success" name="x_esave_E" value="<?php echo $row['id'] ?>">Enregistrer</button>
          
          <button type="button" class="btn btn-danger" data-dismiss="modal" >Annulation</button>
            
            </div>
  
  </div>
  </div>
  
  </div>
  </form>
 

 
</div>



 <?php

  endwhile;
  mysqli_free_result($get_0x);
  mysqli_close($connect);


 ?>



</div>