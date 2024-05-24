<?php
    require 'connect.php';

    $serkey = $_GET['city'];
    $Q_05 = "SELECT * FROM `archives` WHERE num_client LIKE '%$serkey%';";
  
    $get_05 = mysqli_query($connect , $Q_05);  //تنفيذ التعليمة
    if (!$get_05) {  // التحقق من نجاح جلب البيانات
      die("خطأ في ادخال بينات البعث ");
    }
        while ($row = mysqli_fetch_assoc($get_05)) :
     ?>
<div class="card">
    <div class="card-body"> 
  <div class="page-content">
  <div style=" text-align: right;">
        <div  class="btn-group me-2" role="group" aria-label="third group">
        
        <button type="submit" class="btn btn-danger mt-4 btn-lg float-right btn-rounded" data-toggle="modal" data-target="#removeModal" >Supprime <i class="fas fa-trash"></i></button>
         
       </div>
       
        <div  class="btn-group me-2" role="group" aria-label="third group">
            <button type="button" class="btn btn btn-success btn-lg mt-4  float-left btn-rounded" id="prnt-but_2" onclick="Print_2()">Imprimer <i class="fas fa-print"></i></button>
        </div>
        <div  class="btn-group me-2" role="group" aria-label="third group">
           <a href="Archives.php"> <button type="submit" class="btn btn-secondary mt-4 btn-lg float-right btn-rounded" >Annulation</button>
          </a>
        </div>
   </div>

    <div class="innertabel" id="print_2">
    <h2 style=" margin-left: 100px;margin-top: 50px;text-align: center;">Jinan Al-Oumda</h2>
    
      <h4>Fiche de Client: </h4>
      <h4><?php echo $row['nom_client']  ."   ". $row['prenom_client'] ; ?></h4>
    
        <table class="table table-bordered border-primary table-centered mb-0" style="margin-bottom:0;" id="ta20">
          <tr>
            <th colspan="4">Informations sur le Client</th>
          </tr>
          <tr>
          <td style="text-align:left;" colspan="2">N° Client :</td> <td colspan="2"><?php echo $row['num_client'] ?></td>
          </tr>
          <tr>
            <td style="text-align:left;">Nom  :</td> <td><?php echo $row['nom_client'] ?></td>
            <td style="text-align:left;">Prénome:</td> <td><?php echo $row['prenom_client'] ?></td>
          </tr>
          <tr>
            <td style="text-align:left;">Date de Nassance:</td> <td><?php echo $row['date_n'] ?>  </td>
            <td style="text-align:left; ">Telephon:</td> <td colspan="2"><?php echo $row['num_phone'] ?>
          </tr>
          <tr>
            <td style="text-align:left;" colspan="1">E-mail:</td> <td colspan="3"><?php echo $row['email'] ?>  </td>
          </tr>
          <tr>
            <td style="text-align:left;" colspan="2">Type de Reservation :</td> 
            
            <td colspan="2" ><?php 
            if ($row['type_r'] == "1") echo 'Cérémonie de circoncision'; 
            if ($row['type_r'] == "2") echo  'Cette fête d anniversaire';
            if ($row['type_r'] == "3") echo 'Remise de diplôme';
            if ($row['type_r'] == "4") echo  'Banquet';
            if ($row['type_r'] == "5") echo  'famille';
            ?></td>
          </tr> 
          <tr>
            <td style="text-align:left;" colspan="2">Type de serves:</td>
             <td colspan="2" ><?php 
             if ($row['Type_de_service'] == "1") echo 'En libre service';
             if ($row['Type_de_service'] == "2") echo  'Service de restauration'; 
              ?></td>
          
          </tr>
          <tr>
            <td style="text-align:left;" colspan="2">Date d'Reservation  </td> <td colspan="2"><?php echo $row['date_Res'] ?>  </td>
        </tr>
        <tr>
        <td style="text-align:left;">Nombre d'invités :</td> <td><?php echo $row['nombre_d_individus'] ?></td>
        <td style="text-align:left;" >prix  :</td> <td ><?php echo $row['prix_intial'] ?></td>
        </tr>
          <tr>
            <td style="text-align:left;" colspan="2"> Total </td> <td colspan="2"><?php echo $row['prix_somme'] ?>  </td>
          </tr>
        </table>

        <h3 style=" margin-left: 100px;margin-top: 50px;text-align: center;">Signature</h3>


    </div>
</div> 
</div>



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
            <p class="card-text">Êtes-vous sûr de vouloir supprimer ce client ?</p>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-rounded" data-dismiss="modal">Annulation</button>
        <form  action="includs/edit_remov_archi.php" method="post">
          <button type="submit" class="btn btn-danger btn-rounded"  name="rem_fff" value="<?php echo $row['num_client'] ?>" >Supprime</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php
     endwhile;
     mysqli_free_result($get_05);
     mysqli_close($connect);
?>
