<?php 
	require '../konfigurasi_db.php';

	if(isset($_POST['login'])){
		//mengambil data yang diinput melalui form login
		$email_user = $_POST["email_user"];
	    $pass_user = $_POST["pass_user"];

	    //memilih semua data pada tabel user yang sesuai dg email yang diinput
	    $query = mysqli_query($konek,"SELECT * FROM user WHERE email_user = '$email_user'");

	    //jika ada
	    if (mysqli_num_rows($query) === 1) {

			$data = mysqli_fetch_assoc($query);
			
			//cek password
			if (password_verify($pass_user, $data['pass_user'])){   //password_verify() : dekripsi password
				session_start();

				$_SESSION['email_user'] = $email_user;
				$_SESSION['nama_user'] = $data['nd_user'] . ' ' . $data['nb_user'];

				//login sukses alihkan ke halaman akun user
				header("location: ../akun_user.php");
			} else {
				//jika password salah tampilkan:
				echo"<script>
				      	setTimeout( function() {
				        	alert('Password Incorrect!');
				      	}, 200);
				   	 </script>";
			}
	    } else{
	    	//jika email tidak ditemukan
			echo"<script>
					setTimeout( function() {
						alert('You are not a Member!');
					}, 200);
			   </script>";
		}
	}
?>