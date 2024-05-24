
<!-- Modal -->
<div class="modal fade" id="removeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <h5 class="modal-title" id="exampleModalLabel">Confirmer la suppression</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <div class="card" style="width: 100%;">
          <img src="img\img_exl.png" style="width: 100px;height: 50%;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Confirmer la suppression</h5>
            <p class="card-text">Êtes-vous sûr de vouloir supprimer cet utilisateur?</p>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulation</button>
        <form class="" action="includs/edit_remov_user.php" method="post">
          <button type="submit" class="btn btn-danger" id="rem_sub" name="rem_sub"   value="<?php echo $row['id'] ?>">supprimé</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal supprime photos-->
<div class="modal fade" id="removeModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <h5 class="modal-title" id="exampleModalLabel">Confirmer la suppression</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <div class="card" style="width: 100%;">
          <img src="img\img_exl.png" style="width: 100px;height: 50%;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Confirmer la suppression</h5>
            <p class="card-text">Voulez-vous vraiment supprimer ces photos ?</p>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulation</button>
        <form class="" action="includs/edit_remov_img.php" method="post">
          <button type="submit" class="btn btn-danger" id="rem_sub1" name="rem_sub1"   value="<?php echo $row['id'] ?>">supprimé</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal supprime photosN-->
<div class="modal fade" id="removeModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <h5 class="modal-title" id="exampleModalLabel">Confirmer la suppression</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <div class="card" style="width: 100%;">
          <img src="img\img_exl.png" style="width: 100px;height: 50%;" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Confirmer la suppression</h5>
            <p class="card-text">Voulez-vous vraiment supprimer ces photos ?</p>

          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulation</button>
        <form class="" action="includs/edit_remov_imgN.php" method="post">
          <button type="submit" class="btn btn-danger" id="rem_sub2" name="rem_sub2"   value="<?php echo $row['id'] ?>">supprimé</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal modifi admin-->
<div class="modal fade" id="editModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form class="" action="includs/edit_remov_user.php" method="post" id="edit-admin">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header btn-success">
        <h5 class="modal-title" id="exampleModalLabel">Modifier utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="my-creat-new">
       
          <div class="form-row">
             
              <div class="form-group col-md-4">
                <label for="inputPassword4">Nom:</label>
                <input class="form-control" type="text" id="nom" name="e_nom" onkeyup="lettersOnly(this)" tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)" placeholder="Nom" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">Prenom:</label>
                <input class="form-control" type="text"  id="prnom"  name="e_prnom" onkeyup="lettersOnly(this)" tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)" placeholder="Prenom" required>
              </div>
              <div class="form-group col-md-4">
                <label for="inputPassword4">Username:</label>
                <input class="form-control" type="text"  id="login" name="e_login"  onkeyup="lettersOnly(this)"  tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)" placeholder="Login" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">PASSWORD:</label>
                <input class="form-control" type="text" id="password" name="e_password" placeholder="Password" required>
              </div>
              
              <div class="form-group col-md-6">
              <label for="inputPassword4">Actif</label>
                <select class="form-control" aria-label="Default select example"  id="Actif" name="e_Actif" required>
                <option selected disabled value="">choisi...</option>
                <option value="1" >Responsible </option>
                <option value="2" >Supervisor </option>
              </select>
                

                </div>
          
              

          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-success"  name="edit_sub" value="<?php echo $row['id'] ?>">Enregistrer</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" >Annulation</button>
      </div>
    </div>
  </div>
  </form>
</div>
