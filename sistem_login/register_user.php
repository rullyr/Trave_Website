<?php 
	require '../konfigurasi_db.php';

	if(isset($_POST['register'])){
		$email_user = filter_input(INPUT_POST, 'email_user', FILTER_VALIDATE_EMAIL);
		//enkripsi password
	    $pass_user = password_hash($_POST['pass_user'], PASSWORD_DEFAULT);
	    $nd_user = filter_input(INPUT_POST, 'nd_user', FILTER_SANITIZE_STRING);
	    $nb_user = filter_input(INPUT_POST, 'nb_user', FILTER_SANITIZE_STRING);
	    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
	    $kodepos = filter_input(INPUT_POST, 'kodepos', FILTER_SANITIZE_STRING);
	    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

	    mysqli_query($konek, "INSERT INTO user VALUES('', '$email_user', '$pass_user', '$nd_user', '$nb_user', '$alamat', '$kodepos', '$phone')");

	    $databaru = mysqli_affected_rows($konek);

	    if ( $databaru === 1 ) {
	      header("location: ../login.php?pesan=success");
	    } else {
			echo"<script>
					setTimeout( function() {
						alert('Registration failed!');
					}, 200);
				</script>";
		}
	}
?>
