	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="card">
					<div class="card-header">
						    Room Category Form
				  	</div>
					<div class="card-body">
							<div class="form-group">
								<label class="control-label">text</label>
								<textarea name="texte" class="form-control" id="" cols="30" rows="10"></textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Prix</label>
								<input type="number" class="form-control text-right" name="prix">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Image</label>
								<input type="file" class="form-control" name="image">
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary " name="sumit"> Save</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
       
       
<?php 
if (isset($_POST['sumit'])) {
	if (getimagesize($_FILES['image']['tmp_name'])==false) {
		echo "please select an image.";
	}
	else{
		$image = addslashes($_FILES['image']['tmp_name']);
		$name = addslashes($_FILES['image']['name']);
		$texte = $_POST['texte'];
		$prix = $_POST['prix'];
		$image = file_get_contents($image);
		$image = base64_encode($image);
		$folder = 'imagesuploadedf/'; 
		saveimage($name,$image,$texte,$prix); 
		move_uploaded_file($image,$folder.$name);
	}
}

function saveimage($name,$image,$texte,$prix)
{
	$con=mysqli_connect("localhost","root","","reservation");
	$query = " INSERT INTO  photo (name, image,texte,prix) VALUES ('$name','$image','$texte','$prix')";
	$rlt=mysqli_query($con,$query);
	if ($rlt) {
		echo '<script>image uploaded.</script>';
	}else {
		echo 
		'<script>image not uploaded..</script>';
	}



}
displayimage();
function displayimage()
{
	$con=mysqli_connect("localhost","root","","reservation");
	$query = " SELECT * FROM photo ";
	$rlt=mysqli_query($con,$query);
	echo '	<div class="col-md-8"> 
	<div class="card">
		<div class="card-body">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Img</th>
						<th class="text-center">text</th>
						<th class="text-center">prix</th>
					</tr>
				</thead>
				<tbody>
				';
	while ($row = mysqli_fetch_array($rlt)) {

		echo "<tr>";
		echo "<td>" . $row['id']   . "</td>" ; 
		echo "<td>";
		echo '<img height="50px" width="50px" src="data:img/jpg;base64,'.$row['image'].'">';
		"</td>" ;
		echo "<td>" . $row['texte']   . "</td>" ;
		echo "<td>" . $row['prix']   . "</td>" ;

		echo "</tr>";
		

	}
	echo ' 		</tbody>
	</table>
  </div>
   </div>
  </div>';
	mysqli_close($con);
}


?>




                                     
	                              
