	
  <?php if (isset($_GET['add'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong> Succès Ajouté !</strong> L'image a été ajoutée avec succès.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>

  <?php if (isset($_GET['error'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong >Error !</strong> Désolé, votre fichier est trop volumineux..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>
  <?php if (isset($_GET['error1'])): ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert"  >
    <strong >Error !</strong> une erreur inconnue s'est produite!..
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>
  <?php if (isset($_GET['remove'])): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert"  >
    <strong> Suppression réussi !</strong> L'image a été supprimée avec succès.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  <?php endif; ?>
 
 
	
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-12">
            
			<form action="includs\addimage.php" method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						   Galeries de photos
				  	</div>
					<div class="card-body">
							<div class="form-group">
								<label for="" class="control-label">Image</label>
								<input type="file" class="form-control" name="my_image">
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-8">
								<button class="btn btn-sm btn-primary " name="submit"> Save</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
      
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
                                              <th >Images</th>
                                              <th >Action</th>
                                          </tr>
                                      </thead>
                                    <tbody>
                                      <?php
                                      include 'includs\showintabelimages.php';
                                  ?>
                                      </tbody>
                                  </table>                                           
                              </div> <!-- end preview-->
                      </div> <!-- end card body-->
                  </div> <!-- end card -->
              </div><!-- end col-->
          </div>
          <?php include 'includs\modals.php'; ?>
<!-- Modal     supprime-->
</div>  </div>
                                     
	                              
