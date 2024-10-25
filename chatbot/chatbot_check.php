<?php
	include '../konfigurasi_db.php';

	date_default_timezone_set('Asia/Jakarta');
	$current_time = date("yy-m-d H:i:s");

	if (isset($_POST['text'])) {
		$pesan = mysqli_real_escape_string($konek, $_POST['text']);
		$cek = mysqli_query($konek, "SELECT * FROM chatbot_qna WHERE pertanyaan RLIKE '[[:<:]]".$pesan."[[:>:]]'");
		$count = mysqli_num_rows($cek);

		if ($count == "0") {
			$data = "Sorry I couldn't understand that";
			$recordcht = mysqli_query($konek, "INSERT INTO chatbot(user,bot,waktu) VALUES ('$pesan','$data','$current_time')");
		}
		else {
			while($row = mysqli_fetch_array($cek)){
				$data = $row['jawaban'];
				$recordcht = mysqli_query ($konek, "INSERT INTO chatbot(user,bot,waktu) VALUES ('$pesan','$data','$current_time')");
			}
		}

	}
?>
