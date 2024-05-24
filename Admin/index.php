<?php
		session_start();

		if (isset($_SESSION['admin'])) {

			header("location: dashbord.php ");
			exit();

		}

		if (isset($_SESSION['name'])) {
			header("location: direction.php ");
			exit();
		}


    include 'includs\login_filebackup.php';

		echo '
				<body	class="bood" 		>	
		';
 ?>
<?php include 'includs\headerpage.php' ?>


<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/emda.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">

					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >

					       <div class="input-group mb-2">
                                        
								<div class="input-group-append icon-logg">
								<span class="input-group-text "><i class="fas fa-user"></i></span>
							    </div>
                                 <input class="form-control input_pass" type="text" name="user_login" id="emailaddress" required="" placeholder="Enter your User name">
                            </div>

                           
                                  <div class="input-group ">
								        <div class="input-group-append icon-logg ">
								           <span class="input-group-text"><i class="fas fa-key"></i></span>
							            </div>
                                            <input type="password" id="password" name="user_pass" class="form-control  input_pass" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                   

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn login_btn btn-rounded" name="sub" type="submit"> Log In </button>
                                    </div>
					</form>
				<!-- end form-->


                    </div> <!-- end .card-body -->
            
				<div class="mt-4">
          <?php
              if (isset($_GET['chick'])) {
                echo '
                <div class=" d-flex justify-content-center links">
                  <a class="form-check-label" href="">Incorrect Information !! </a>
                </div>
                ';
              }
           ?>
		   <div class="d-flex justify-content-center links">
						<a class="form-check-label" href="#">Forgot your password?</a>
					</div>

				

				</div>
			</div>
		</div>
	</div>






















<?php include 'includs\footerpage.php' ?>
