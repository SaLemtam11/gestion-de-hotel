<?php
  require 'connect.php';

  $serkey_2 = $_GET['fiche'];
  $Q_0x = "SELECT * FROM `client` WHERE num_client LIKE $serkey_2;";

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
         
         <button type="submit" class="btn btn-primary mt-4 btn-lg float-right btn-rounded"  data-toggle="modal" value="<?php echo $row['num_client'] ?>" data-target="#exampleModal" > Modifier <i class="fas fa-user-edit"></i></button>
        
       </div>
       <div  class="btn-group me-2" role="group" aria-label="third group">
         
       <button type="submit" class="btn btn-danger mt-4 btn-lg float-right btn-rounded" data-toggle="modal" data-target="#removeModal" >Supprime <i class="fas fa-trash"></i></button>
         
        </div>
        <div  class="btn-group me-2" role="group" aria-label="third group">
            <button type="button" class="btn btn btn-success btn-lg mt-4  float-left btn-rounded"  id="prnt-but_2" onclick="Print()">Imprimer <i class="fas fa-print"></i></button>
        </div>
        <div  class="btn-group me-2" role="group" aria-label="third group">
           <a href="Client.php"> <button type="submit" class="btn btn-secondary mt-4 btn-lg float-right btn-rounded" >Annulation</button>
          </a>
        </div>
   </div>
   </div>
   </div>
   <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body"> 
    <div class="innertabel" id="ta-show-2">
    <h2 style=" margin-left: 100px;margin-top: 50px;text-align: center;">Jinan EL-oumda</h2>
      <h4>Fiche de Client</h4>
      <h4 ><?php echo $row['nom_client']  ."   ". $row['prenom_client'] ; ?></h4>
    
        <table class="table table-sm text-center table-bordered" style="margin-bottom:0;" id="ta20">
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
            <td style="text-align:left;">Date de Nassance:</td> <td ><?php echo $row['date_n'] ?>  </td>
            <td style="text-align:left; ">Telephon:</td> <td colspan="2"><?php echo $row['num_phone'] ?>
          </tr>
          <tr>
            <td style="text-align:left;" colspan="1">E-mail:</td> <td colspan="3"><?php echo $row['email'] ?>  </td>
          </tr>
        </table>
        <table class="table table-sm text-center table-bordered" style="margin-bottom:0;" id="ta20">
          <tr>
            <th colspan="4">Informations de réservation</th>
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
        <td style="text-align:left;" >prix :</td> <td ><?php echo $row['prix_intial'] ?></td>
        </tr>
          <tr>
            <td style="text-align:left;" colspan="2"> Total </td> <td colspan="2"><?php echo $row['prix_somme'] ?>  </td>
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
            <p class="card-text">Êtes-vous sûr de vouloir supprimer ce client ?</p>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-rounded" data-dismiss="modal">Annulation</button>
        <form  action="includs/edit_Client.php" method="post">
          <button type="submit" class="btn btn-danger btn-rounded"  name="rem_fff" value="<?php echo $row['num_client'] ?>" >Supprime</button>
        </form>
      </div>
    </div>
  </div>
</div>
















<!-------------modal modifi------------>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<form action="includs/edit_Client.php" method="post" id="edit-client-form" >
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  btn-info ">
        <h5 class="modal-title" id="exampleModalLabel"> Modifier les Informations</h5>
        <button Type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <!---------------------------------body----------------------------------------->

 <div class="modal-body" >
    
 <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputPassword4">Nom:</label>
              <input type="text" class="form-control" value="<?php echo $row['nom_client'] ?>" name="enom_client" required data-toggle="tooltip" data-placement="top" title="Tooltip on top" onkeyup="lettersOnly(this)"  tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Prenom:</label>
              <input type="text" class="form-control" value="<?php echo $row['prenom_client'] ?>" name="eprenom_client" onkeyup="lettersOnly(this)"  tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-6">
             <label for="inputAddress2">Telephon</label>
             <input type="text" class="form-control" value="<?php echo $row['num_phone'] ?>" name="enum_phone" onkeyup="nombr(this)" placeholder="(+213)" tabindex="10" maxlength="10" onkeyup="mymaxLength(this,this.value)" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
           </div>
           <div class="form-group col-md-6">
                <label for="inputEmail4">Date de Nassance:</label>
                <input type="date" class="form-control"  value="<?php echo $row['date_n'] ?>" name="edate_n" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            </div>

          </div>
          <div class="form-row">
          <div class="form-group col-md-12">
             <label for="inputAddress">E-mail:</label>
             <input type="email" class="form-control" value="<?php echo $row['email'] ?>" name="eemail"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
           </div>
          </div>
          <div class="form-row">
             <!--نوع الحجز  -->
            <div class="form-group col-md-4">
              <label for="inputPassword4">Type de Reservation </label>
              <select class="custom-select"   name="etype_r" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                <option selected disabled value="">choisi...</option>
                <option value="1" <?php if ($row['type_r'] == "1") echo "selected"; ?>>Cérémonie de circoncision</option>
                <option value="2" <?php if ($row['type_r'] == "2") echo "selected"; ?>>Cette fête d'anniversaire</option>
                <option value="3" <?php if ($row['type_r'] == "3") echo "selected"; ?>>Remise de diplôme</option>
                <option value="4" <?php if ($row['type_r'] == "4") echo "selected"; ?>>Banquet</option>
                <option value="5" <?php if ($row['type_r'] == "5") echo "selected"; ?>>famille</option>
              </select>
            </div>
            <div class="form-group col-md-4">
          <!--نوع الخدمة  -->
            <label for="exampleFormControlTextarea1">Type de serves </label>
            <select class="custom-select"  name="eType_de_service" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            <option selected disabled value="">choisi...</option>
            <option value="1" <?php if ($row['Type_de_service'] == "1") echo "selected"; ?> >En libre service</option>
            <option value="2" <?php if ($row['Type_de_service'] == "2") echo "selected"; ?>>Service de restauration</option>
              </select>
          </div>

              <div class="form-group col-md-4">
                <label for="inputEmail4">Date d'Reservation </label>
                <input type="date" class="form-control"  value="<?php echo $row['date_Res'] ?>" name="edate_Res"  required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
              </div>
          </div>
            <div class="form-row">
            <div class="form-group col-md-4">
             <label for="inputPassword4">Nombre d'invités</label>
             <input type="text" class="form-control" id="nombre_d_individus" value="<?php echo $row['nombre_d_individus'] ?>" name="enombre_d_individus" onkeyup="nombr(this)"   tabindex="4" maxlength="4" onkeyup="mymaxLength(this,this.value)" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
           </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">prix</label>
                <input type="text" class="form-control" id="prix_intial" value="<?php echo $row['prix_intial'] ?>"  name="eprix_intial" onkeyup="nombr(this)"  tabindex="10" maxlength="10" onkeyup="mymaxLength(this,this.value)"required data-toggle="tooltip" data-placement="top" title="غير مبني">
              </div>
              <div class="form-group col-md-4">

               <label for="inputPassword4">Total</label>
                 <input type="text" class="form-control" id="prix_somme"  value="<?php echo $row['prix_somme'] ?>"  name="eprix_somme" required data-toggle="tooltip" data-placement="top" title="Tooltip on top" >
               </div>


          </div>
        
</div>
<!---------------------------------footer----------------------------------------->      
         <div class="modal-footer">
           
            <button type="submit" class="btn btn-primary"  name="x_esave_2" value="<?php echo $row['num_client'] ?>">Enregistrer</button>
          
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