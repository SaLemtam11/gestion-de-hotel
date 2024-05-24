<?php





if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "connect.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 1250000000) {
			
		    header("Location: ../photo_1.php?error=err");

		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../uploads_natation/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO imagesn(image_url) 
				        VALUES('$new_img_name')";
				mysqli_query($connect, $sql);
				header("location: ../photo_1.php?add=done");
			}else {
				
				header("Location: ../photo_1.php?error1=err");
				
		        
			}
		}
	}else {
		

		header("Location: ../photo_1.php?error1=err");

	}

}else {
	header("Location: includs\imagesnatation_connt.php");
}
?>