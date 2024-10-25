<?php 
	require '../konfigurasi_db.php';

	//jika tombol login diklik
	if(isset($_POST['login'])){
		//mengambil data yang diinput
		$username_admin = $_POST['username_admin'];
		$pass_admin = $_POST['pass_admin'];

		//query untuk memilih semua data pada tabel admin yang sesuai dg username dan pass yang diinput
		$query = mysqli_query($konek,"SELECT * FROM admin WHERE username_admin='$username_admin' AND pass_admin='$pass_admin'");

		//mengambil data admin (username,pass,nd,nb,status)
		$data = mysqli_fetch_assoc($query);

		//jika data admin ada
		if($data){
			//membuat session
			session_start();

			$_SESSION['username_admin'] = $username_admin;
			$_SESSION['nd_admin'] = $data['nd_admin'];
			$_SESSION['nb_admin'] = $data['nb_admin'];
			
			//login sukses alihkan ke halaman akun admin
			header("location: ../admin/akun.php");
		}else{
			//login gagal kirimkan pesan failed
			header("location: ../admin/index.php?pesan=failed");
		}
	}
?>

