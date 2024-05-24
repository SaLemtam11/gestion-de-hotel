
	<div class="row">
		<div class="col-lg-12">
			<div class="card col-md-4 offset-2 bg-info float-left">
						<div class="">
							<?php
							require 'connect.php';
							$Q_0091 = "SELECT count(id) AS id FROM `admin`";
								$g_num1 = mysqli_query($connect , $Q_0091);
								$data_count1 = $g_num1->fetch_all(MYSQLI_ASSOC);
								$the_num0 = ($data_count1[0]['id']) ;

							

							?>
						</div>
				<div class="card-body text-white">
					<h4 class="text-center"><b>Utilisateur</b></h4>
					<hr>
					<span class="card-icon"><h1 class="text-center"> <i class="fas fa-users"></i></h1></span>
					<h3 class="text-center"><b><?php echo $the_num0; ?></b></h3>
				</div>
			</div>
			<div class="card col-md-4 offset-2 bg-danger ml-4 float-left">
			       <div class="">
							<?php
							require 'connect.php';
							$Q_0091 = "SELECT count(num_client) AS num_client FROM `client`";
								$g_num1 = mysqli_query($connect , $Q_0091);
								$data_count1 = $g_num1->fetch_all(MYSQLI_ASSOC);
								$the_num1 = ($data_count1[0]['num_client']) ;

							

							?>
						</div>
				<div class="card-body text-white">
					<h4 class="text-center"><b>Client</b></h4>
					<hr>
					<span class="card-icon"><h1 class="text-center" ><i class="fas fa-id-card"></i></h1></span>
					<h3 class="text-center"><b><?php echo $the_num1; ?></b></h3>
				</div>
			</div>
		</div>
    <div class="col-lg-12">
    <div class="card col-md-4 offset-2 bg-success float-left">
				<div class="">
				<?php
				require 'connect.php';
				$Q_009 = "SELECT count(num_client) AS num_client FROM archives";
					$g_num = mysqli_query($connect , $Q_009);
					$data_count = $g_num->fetch_all(MYSQLI_ASSOC);
					$the_num2 = ($data_count[0]['num_client']) ;

				?>
				</div>
				<div class="card-body text-white">
					<h4 class="text-center"><b>Archives</b></h4>
					<hr>
					<span class="card-icon"><h1 class="text-center"><i class="fas fa-archive"></i></h1></span>
					<h3 class="text-center"><b><?php echo $the_num2; ?></b></h3>
				</div>
			</div>
      <div class="card col-md-4 offset-2 bg-info ml-4 float-left">
			<div class="">
				<?php
				require 'connect.php';
				$Q_0091 = "SELECT count(id) AS id FROM `nager`";
					$g_num1 = mysqli_query($connect , $Q_0091);
					$data_count1 = $g_num1->fetch_all(MYSQLI_ASSOC);
					$the_num3 = ($data_count1[0]['id']) ;

				

				?>
			</div>
				<div class="card-body text-white">
					<h4 class="text-center"><b>La Natation</b></h4>
					<hr>
					<span class="card-icon"><h1 class="text-center"><i class="fas fa-swimmer"></i></h1></span>
					<h3 class="text-center"><b><?php echo $the_num3; ?></b></h3>
				</div>
			</div>
		</div>
    
	</div>

	<!--<div class="row mt-3 ml-3 mr-3">
			<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
<?php //var_dump($_SESSION)  ?>
									
				</div>
			</div>
			
		</div>
		</div>-->
	</div>

</div>