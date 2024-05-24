<!-- Page content holder -->
<div class="page-content" id="content">
  <div class="my-creat-new">
    <?php if (isset($_GET['adding'])): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert"  >
      <strong> Succès Ajouté !</strong> Un nouveau utilisateur a été ajouté succès.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    <?php endif; ?>

    <?php if (isset($_GET['edit'])): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert"  >
      <strong> Succès modification !</strong> La modification a été apportée à l'utilisateur succès.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    <?php endif; ?>
    <?php if (isset($_GET['remove'])): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert"  >
      <strong >Succès supression !</strong> La supression a été apportée à l'utilisateur succès.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    <?php endif; ?>
    <?php if (isset($_GET['removea'])): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert"  >
      <strong > Erreur !</strong> Le compte administrateur ne peut pas être supprimé !!..
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
    <?php endif; ?>



  

 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <form action="includs/adduser.php" method="post" id="adminn">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style=" background-color: rgb(94, 224, 207)">
              <h5 class="modal-title" id="exampleModalLabel"> Ajouter un nouvel utilisateur </h5>
              <button Type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
<!---------------------------------body----------------------------------------->

           <div class="modal-body" >
    
                  <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="inputPassword4">Nom:</label>
                            <input class="form-control" type="text" name="nom" placeholder="Nom" onkeyup="lettersOnly(this)" tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)"  required>
                      </div>
                      <div class="form-group col-md-12">
                      <label for="inputPassword4">Pénom:</label>
                        <input class="form-control" type="text" name="prnom" placeholder="Prenom" onkeyup="lettersOnly(this)" tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)"  required>
                      </div>
                        <div class="form-group col-md-12">
                        <label for="inputPassword4">utilisateur:</label>
                          <input class="form-control" type="text" name="login" placeholder="Login" onkeyup="lettersOnly(this)"  tabindex="50" maxlength="50" onkeyup="mymaxLength(this,this.value)" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">PASSWORD:</label>
                        <input class="form-control" type="text" name="password" placeholder="password" required>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Actif:</label>
                        <select class="form-control" aria-label="Default select example" name="Actif" required>
                            <option  selected disabled >choisi...</option>
                            <option value="1">Responsable </option>
                            <option value="2">Superviseur</option>
                          </select>
                        </div>
                    </div>
                    
                        
                   
                     
        
            </div>
<!---------------------------------footer----------------------------------------->      
                 <div class="modal-footer">

                      <form >
                  <button type="submit" class="btn btn-primary btn-rounded" name="save_user">Enregistrer</button>
                </form>
                <button type="button" class="btn btn-danger btn-rounded" data-dismiss="modal" >Annulation</button>
                  
               </div>
        </div>
        </div>
      </form>
    </div>
 
</div>



          


<!-- End demo content -->



<div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-body">  
                  <button type="button" class="btn btn-info mb-4 btn-rounded" data-toggle="modal" data-target="#exampleModal">
                  Ajouter <i class="fas fa-plus-circle"></i>
                    </button>
                        
                          <div class="tab-content">
                              <div class="tab-pane show active" id="basic-datatable-preview">
                                  <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                      <thead>
                                          <tr>
                                              <th >ID</th>
                                              <th >Nom</th>
                                              <th >Prenom</th>
                                              <th >Login</th>
                                              <th >password</th>
                                              <th >Actif</th>
                                              <th >Action</th>
                                          </tr>
                                      </thead>
                                    <tbody>
                                      <?php
                                      include 'includs\showintabel.php';
                                  ?>
                                      </tbody>
                                  </table>                                           
                              </div> <!-- end preview-->
                          
                            
                          
                      </div> <!-- end card body-->
                  </div> <!-- end card -->
              </div><!-- end col-->
          </div>
          
<!-- Modal     supprime-->
</div>






          <!-- end row-->
          <?php include 'includs\modals.php'; ?>
    
    </div>






