<?php
  require 'connect.php';

  $serkey_3 = $_GET['fiche'];
  $Q_0x = "SELECT * FROM `nager` WHERE id LIKE $serkey_3;";

  $get_0x = mysqli_query($connect , $Q_0x);  //تنفيذ التعليمة
  if (!$get_0x) {  // التحقق من نجاح جلب البيانات
    die("خطأ في ادخال بينات البعث ");
  }
      while ($row = mysqli_fetch_assoc($get_0x)) :
   ?>


<?php if (isset($_GET['add'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong Succès Ajouté !</strong> Un nouveau fiche a été ajouté avec succès.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>

  <?php if (isset($_GET['removed'])): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert"  >
    <strong Suppression réussi !</strong> Un fiche a été supprimé.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>
  <?php if (isset($_GET['editd'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong Modifiées succès !</strong> Les informations ont été modifiées succès..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>


   <div class="row">
              <div class="col-12">
                  <div class="card">            <div style=" text-align: right;">
        <div  class="btn-group me-2" role="group" aria-label="third group">
        <button type="submit" class="btn btn-primary mt-4 btn-lg float-right btn-rounded"  data-toggle="modal" value="<?php echo $row['id'] ?>" data-target="#exampleModal" > Modifier <i class="fas fa-user-edit"></i></button>
      
       </div>
       <div  class="btn-group me-2" role="group" aria-label="third group">
  
            <button type="submit" class="btn btn-danger mt-4 btn-lg float-right btn-rounded" data-toggle="modal" data-target="#removeModal" >Supprime <i class="fas fa-trash"></i></button>
          
        </div>
        <div  class="btn-group me-2" role="group" aria-label="third group">
            <button type="button" class="btn btn btn-success btn-lg mt-4  float-left btn-rounded" id="prnt-but_2" onclick="print()">Imprimer <i class="fas fa-print"></i></button>
        </div>
        <div  class="btn-group me-2" role="group" aria-label="third group">
           <a href="SwimmingN.php"> <button type="submit" class="btn btn-secondary mt-4 btn-lg float-right btn-rounded" >Annulation</button>
          </a>
        </div>
   </div>
                      <div class="card-body"> 

          
    <div class="innertabel" id="print_3">
    <h2 style=" margin-left: 100px;margin-top: 50px;text-align: center;">Jinan EL-oumda</h2>
      <h4>Fiche</h4>
      <h4 ><?php echo $row['nom']  ."   ". $row['prenom'] ; ?></h4>
    
        <table class="table table-sm text-center table-bordered" style="margin-bottom:0;" id="ta20">
           <tr>
            <th colspan="4">Informations</th>
           </tr>
           <tr>
           <td style="text-align:left;" colspan="2">N° :</td>
              <td colspan="2"><?php echo $row['id'] ?></td>
           </tr> 
           <tr>
           <td style="text-align:left;" colspan="2">Nom el Prénome :</td> 
              <td colspan="2"><?php echo $row['nom']  ."   ". $row['prenom'] ; ?></td>
           </tr>
           <td style="text-align:left;" colspan="2">Genre :</td>  
              <td colspan="2" ><?php 
            if ($row['Genre'] == "1") echo 'Femme'; 
            if ($row['Genre'] == "2") echo  'Homme';
            ?></td>
           </tr>
           <tr>
           <td style="text-align:left;"colspan="2">E-mail:</td>
              <td colspan="2"><?php echo $row['email'] ?>  </td>
           </tr> 
           <tr>
           <td style="text-align:left; "colspan="2">Telephon:</td> 
              <td colspan="2"><?php echo $row['tel'] ?>
           </tr>
           <tr>
           <td style="text-align:left;" colspan="2">Date d'n  </td>
              <td colspan="2"><?php echo $row['date_n'] ?>  </td>
           </tr> 
           <tr>
           <td style="text-align:left;" colspan="2">Entraîneur </td>
              <td colspan="2"><?php echo $row['entrain'] ?>  </td>
           </tr> 
           <tr>
           <td style="text-align:left;" colspan="2">Prix </td>
              <td colspan="2"><?php echo $row['prix'] ?>  </td>
           </tr> 
        </tr>
        </table>
        
        

        <h3 style=" margin-left: 100px;margin-top: 50px;text-align: center;">Le chef SAG</h3>


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
            <p class="card-text">Êtes-vous sûr de vouloir supprimer ?</p>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulation</button>
        <form  action="includs/edtN.php" method="post">
          <button type="submit" class="btn btn-danger btn-rounded" id="rem_fff" name="rem_fff" value="<?php echo $row['id'] ?>">Supprime</button>
        </form>
      </div>
    </div>
  </div>
</div>
















<!-------------modal modifi------------>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<form action="includs/edtN.php" method="post" id="edit-nager" >
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
              <label for="inputPassword4">Nom:</label>
              <input type="text" class="form-control" value="<?php echo $row['nom'] ?>" name="enom"  onkeyup="lettersOnly(this)" tabindex="40" maxlength="40" onkeyup="mymaxLength(this,this.value)" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            </div>
            <div class="form-group col-md-12">
              <label for="inputPassword4">Prenom:</label>
              <input type="text" class="form-control" value="<?php echo $row['prenom'] ?>" name="eprenom" onkeyup="lettersOnly(this)" tabindex="40" maxlength="40" onkeyup="mymaxLength(this,this.value)" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            </div>
         
           <div class="form-group col-md-4">
                <label for="inputEmail4">Date d'Reservation </label>
                <input type="date" class="form-control"  value="<?php echo $row['date_n'] ?>" name="edate_n" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            </div>
            <div class="form-group col-md-4">
            <label for="exampleFormControlTextarea1">Genre </label>
            <select class="custom-select"  name="eGenre" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            <option selected disabled value="">choisi...</option>
            <option value="1" <?php if ($row['Genre'] == "1") echo "selected"; ?> >Femme</option>
            <option value="2" <?php if ($row['Genre'] == "2") echo "selected"; ?>>Homme</option>
              </select>
          </div>
       
            <div class="form-group col-md-4">
             <label for="inputAddress2">Telephon</label>
             <input type="text" class="form-control" value="<?php echo $row['tel'] ?>" name="etel" onkeyup="nombr(this)" tabindex="10" maxlength="10" onkeyup="mymaxLength(this,this.value)"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
           </div>
          <div class="form-group col-md-12">
             <label for="inputAddress">E-mail:</label>
             <input type="email" class="form-control" value="<?php echo $row['email'] ?>" name="eemail"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            </div> 
            <div class="form-group col-md-8">
              <label for="inputPassword4">Entraîneur:</label>
              <input type="select" class="form-control" value="<?php echo $row['entrain'] ?>" name="eentrain"  onkeyup="lettersOnly(this)" tabindex="100" maxlength="100" onkeyup="mymaxLength(this,this.value)" required data-toggle="tooltip" data-placement="top" title="Tooltip on top">
            </div>
            <div class="form-group col-md-4">
             <label for="inputAddress2">Prix:</label>
             <input type="text" class="form-control" value="<?php echo $row['prix'] ?>" name="eprix" onkeyup="nombr(this)" tabindex="10" maxlength="10" onkeyup="mymaxLength(this,this.value)"  data-toggle="tooltip" data-placement="top" title="Tooltip on top">
           </div>
           
</div>
<!---------------------------------footer----------------------------------------->      
         <div class="modal-footer">
            <form >
            <button type="submit" class="btn btn-success btn-rounded" name="x_esave_N"  value="<?php echo $row['id']?>">Enregistrer</button>
          </form>
          <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal" >Annulation</button>
            
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