<!doctype html>
<html lang="en">
<head>
	<style>
		/*---------------------*/
		/*Posisi tombol chatbot*/
		/*---------------------*/
		.fixed-bawah {
			position: fixed;
			right: 0;
			bottom: 0;
			z-index: 1030;
		}

		/*-----------*/
		/*Box Chatbot*/
		/*-----------*/
		.chatbot {
			display: none;
			position: fixed; 
			z-index: 1030;
			left: 0;
			top: 0;
			width: 100%; 
			height: 100%;
			overflow: auto;
			background-color: transparent; 
			padding-top: 60px;
		}

		.bg_chatbot {
			box-shadow: 3px 5px 10px #E1E1E1;
			border-radius: 20 !important;
			background-color: white;
			position: fixed;
			right: 0;
			bottom: 0;
			margin-right: 15px;
			margin-bottom: 70px;
		}

		/*----------------------*/
		/*Animasi pop-up Chatbot*/
		/*----------------------*/
		.pop-up {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s;
			animation-delay: -0.5s;
		}

		@-webkit-keyframes animatezoom {
			0%   {bottom:-400px;}
			25%  {bottom:-300px;}
			50%  {bottom:-200px;}
			75%  {bottom:-100px;}
			100% {bottom:0px;}
		}
		  
		@keyframes animatezoom {
			0%   {bottom:-400px;}
			25%  {bottom:-300px;}
			50%  {bottom:-200px;}
			75%  {bottom:-100px;}
			100% {bottom:0px;}
		}

		/*--------------------*/
		/*Kolom header chatbot*/
		/*--------------------*/
		.atas {
			width: 350px;
			height: 50px;
			background-color: black;
		}

		#txthead {
			color: white;
			font-size: 18pt;
			font-weight: bold;
			padding-left: 14px;
			padding-top: 6px;
		}

		.tutup {
			color: white;
			position: absolute;
			right: 14px;
			top: -2px;
			font-size: 35px !important;
		}

		.tutup:hover, .tutup:focus {
			cursor: pointer;
		}

		/*-----------------*/
		/*Kolom isi chatbot*/
		/*-----------------*/
		.isi {
			overflow: hidden;
			width: 350px;
		}

		.kolom-isi {
			overflow-y: auto;
			height: 300px;
		}

		.kolom-chat {
			padding-top: 8px;
			margin: 0 20px 0 20px;
		}
		
		/*Pesan otomatis (Bot)*/
		.chat-bot {
			overflow-wrap: break-word;
			margin: 12px 0;
			display: inline-block;
			padding: 0;
			vertical-align: top;
			width: 92%;
		}

		.pesan-chat-bot {
			width: 65%;
		}

		.pesan-chat-bot p {
			background: #f2f2f2 none repeat scroll 0 0;
			color: #4a4a4a;
			font-size: 10pt;
			margin: 0;
			padding: 5px 10px 5px 12px;
			width: 100%;
		}

		/*Pesan dari user*/
		.chat-user {
			overflow-wrap: break-word;
			margin: 12px 0;
			display: inline-block;
			padding: 0;
			vertical-align: top;
			width: 92%;
		}

		.pesan-chat-user {
			float: left;
			width: 65%;
			margin-left: 46%;
		}

		.pesan-chat-user p {
			background: #595959 none repeat scroll 0 0;
			color: white;
			font-size: 14px;
			margin: 0;
			padding: 5px 10px 5px 12px;
			width: 100%;
		}

		/*Jam dan tanggal*/
		.waktu {
			color: #777;
			display: block;
			font-size: 7.5pt;
			margin: 8px 0 0;
		}

		/*-------------------*/
		/*Kolom input chatbot*/
		/*-------------------*/
		.bawah {
			width: 350px;
			height: 50px;
			background-color: white;
			border-top: 1px solid #e3e3e3;
		}

		.input-pesan {
			width: 290px !important;
			height: 33px !important;
			color: black;
			margin-left: 14px;
			font-size: 10pt !important;
		}

		.bawah form .form-control:focus {
			border-bottom: 0 !important;
		}

		.btnsend {
			margin-left: 3px;
			font-size: 14pt;
			transform: rotate(15deg);
			border: none !important;
			color: black !important;
			background-color: transparent;
			border: none;
			outline: none !important;
		}
	</style>
</head>
<body>
	<button type="button" class="btn btn-dark rounded-circle p-0 m-3 fixed-bawah" style="color: #312ef6; height: 45px; width: 45px; float: right;" onclick="document.getElementById('chatbot').style.display='block'">
		<i class="fa fa-comment" style="color: white; font-size: 20pt; padding-top: 1px; padding-left: 2px"></i>
	</button>

	<div class="chatbot" id="chatbot">
		<div class="bg_chatbot pop-up">
			<div class="atas">
				<p id="txthead">Inna Beautiful</p>
				<span class="tutup" onclick="document.getElementById('chatbot').style.display='none'" title="Close">&times;</span>
			</div>
			<div class="isi">
				<div class="kolom-isi">
					<div class="kolom-chat">
						<div class="chat-bot">
							<div class="pesan-chat-bot">
								<p>Hello! It's bot. Welcome to Our Inna Beautiful, do you need Help?</p>
							</div>
						</div>

<?php
	include '../konfigurasi_db.php';

	date_default_timezone_set('Asia/Jakarta');

	$chat = mysqli_query($konek, "SELECT * FROM chatbot ORDER by waktu ASC");

	while ($data = mysqli_fetch_array($chat)){
		$user = $data ['user'];
		$bot = $data ['bot'];
		$waktu = $data ['waktu'];
		$jam_tanggal = date('g:i A | d F Y', strtotime($waktu));
?>
	<div class="chat-user">			
		<div class="pesan-chat-user">				
			<p><?php echo $user; ?></p>
				<span class="waktu"><?php echo $jam_tanggal; ?></span>
			</div></div>	
		<div class="chat-bot">
			<div class="pesan-chat-bot">
				<p><?php echo $bot; ?></p>
				<span class="waktu"><?php echo $jam_tanggal; ?></span>
			</div>
		</div>
<?php } ?>

					</div>
				</div>
			</div>
			<div class="bawah">
				<form class="form-inline chatForm">
					<input type="text" class="form-control input-pesan p-1" id="pesan" placeholder="Type your message">
					<button type="button" class="btnsend"><i style="color: #4a4a4a;" class="fa fa-paper-plane"></i></button>
				</form>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){
			$('.chatbot .btnsend').on('click', function(){
				console.log($(this));
			})
		})

		$('.btnsend').click(function(e){
			e.preventDefault();

			var chatForm = $(this).parents('.chatForm');
			var pesan = chatForm.find('#pesan').val();

			$.ajax({
				type: "POST",
				url: "chatbot/chatbot_check.php",
				data: {text:pesan},
			});
		});
	</script>
</body>
</html>