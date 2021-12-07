<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="icon" type="image/png" href="<?= base_url() ?>assets/demofavicon.png">
		
		<title><?= $couple->result_array()[1]['cpl_nama_panggilan'] ?> & <?= $couple->result_array()[0]['cpl_nama_panggilan'] ?> Wedding</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta name="description" content="Spesial mengundang untuk menghadiri pernikahan kami. <?= $couple->result_array()[1]['cpl_nama_panggilan'] ?>-<?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>" />
		<meta name="keywords" content="undangan digital, undangan online, undangan nikah, website undangan, pernikahan, wedding, marriage" />
		<meta name="author" content="rodhigital (admin@rodhigital.com)" />
		<meta name="robots" content="follow, index" />
		<meta property="og:image" content="<?= base_url() ?>assets/demoogthumbnail.jpg">
		<meta property="og:image" itemprop="image" content="<?= base_url() ?>assets/demoogthumbnail.jpg">
		<link itemprop="thumbnailUrl" href="<?= base_url() ?>assets/demoogthumbnail.jpg"> <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> <link itemprop="url" href="<?= base_url() ?>assets/demoogthumbnail.jpg"> </span>
		<meta property="og:image" content="<?= base_url() ?>assets/demoogthumbnail.jpg" />
		<meta property="og:title" content="UNDANGAN PERNIKAHAN | <?= $couple->result_array()[1]['cpl_nama_panggilan'] ?>-<?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>" />
		<meta property="og:description" content="Spesial mengundang untuk menghadiri pernikahan kami. <?= $couple->result_array()[1]['cpl_nama_panggilan'] ?>-<?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>" />
		<link rel="stylesheet" href="w34style.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="<?= base_url() ?>atemplate/modernizr.custom.86080.js"></script>
		<!-- <script type="text/javascript" src="<?= base_url() ?>atemplate/jquery-1.8.2.js"></script> -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<style type="text/css">
			#overlay {
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background-color: #000;
				filter: alpha(opacity=70);
				-moz-opacity: 0.7;
				-khtml-opacity: 0.7;
				opacity: 0.7;
				z-index: 100;
				display: none;
			}
			
			.cnt223 a {
				text-decoration: none;
			}
			
			.popup {
				width: 100%;
				margin: 0 auto;
				display: none;
				position: fixed;
				z-index: 101;
			}
			/* CORNER ELEMENT  */
			
			.corner-element {
				position: absolute;
				width: 150px;
			}
			
			.corner-element.top-right {
				top: 0;
				right: 0;
			}
			
			.corner-element.bottom-right {
				right: 0;
				bottom: 0;
				transform: rotate(90deg);
			}
			
			.corner-element.top-left {
				left: 0;
				top: 0;
				transform: rotate(270deg);
			}
			
			.corner-element.bottom-left {
				bottom: 0;
				left: 0;
				transform: rotate(180deg);
			}
			
			.cnt223 {
				/* min-width: 600px;*/
				width: 100%;
				min-height: 150px;
				margin: 100px auto;
				background-image: url("<?= base_url() ?>/assets/bg19texture.jpg");
				background-position: center;
				position: relative;
				z-index: 103;
				padding: 10px;
				border-radius: 5px;
				box-shadow: 0 2px 5px #000;
			}
			
			.cnt223 p {
				clear: both;
				color: #555555;
				text-align: center;
			}
			
			.cnt223 p a {
				background-color: #234f45;
				text-align: center;
				padding: 20px 30px;
				margin: auto;
				color: white;
				font-weight: bold;
				border-radius: 5px;
			}
			
			.cnt223 p img {
				text-align: center;
				margin: auto;
			}
			
			.cnt223 .x {
				float: right;
				height: 35px;
				left: 22px;
				position: relative;
				top: -25px;
				width: 34px;
			}
			
			.cnt223 .x:hover {
				cursor: pointer;
			}
			
			.imgopenint img {
				width: 100px;
			}
			
			@media screen and (min-width: 600px) {
				.imgopenint img {
					width: 100px;
				}
			}
		</style>
		<style>
			* {
				box-sizing: border-box
			}
			
			.w3-half img {
				margin-bottom: -6px;
				cursor: pointer z-index: -99;
			}
			
			.w3-half img:hover {
				opacity: 0.6;
				transition: 0.3s
			}
			/* Set height of body and the document to 100% */
			
			body,
			html {
				margin: 0;
				font-family: Arial;
			}
			
			@font-face {
				src: url('images/aureliesmith.html');
				font-family: aureliesmith;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/font_edwarscriptic.ttf');
				font-family: edwardscript;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/font_gelato.otf');
				font-family: gelato;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/font_desmonthe.otf');
				font-family: desmonthe;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/font_gadugi.ttf');
				font-family: gadugi;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/font_calibrireg.ttf');
				font-family: calibrireg;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/Litine.ttf');
				font-family: litine;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/font_bookmanoldstyle.ttf');
				font-family: bookmanold;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/Angelface.otf');
				font-family: Angelface;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/dosis.ttf');
				font-family: dosis;
			}
			
			@font-face {
				src: url('<?= base_url() ?>atemplate/Aldine.ttf');
				font-family: aldine;
			}
			
			.iconbar {
				position: fixed;
				bottom: 0;
				width: 100%;
				/* background-color: #bababa; */
				background-color: #172740;
				overflow: auto;
				z-index: 999999;
			}
			
			.iconbar a {
				float: left;
				width: 20%;
				text-align: center;
				padding-top: 5px;
				color: white;
				font-size: 10px;
				transition: all 0.3s ease;
			}
			/* Style tab links */
			
			.tablink {
				background-color: #234f45;
				/*background-image: url("https://nikahankami.com/assets/bgatexture.jpg");
				background-position: center;*/
				color: white;
				float: left;
				border: none;
				outline: none;
				cursor: pointer;
				width: 20%;
			}
			
			.tablink span {
				font-family: dosis;
				font-size: 10px;
				color: white;
			}
			
			.tablink:hover {
				opacity: 0.9;
				/*background-color: #777;*/
			}
			/* Style the tab content (and add height:100% for full page content) */
			
			.tabcontent {
				color: black;
				text-align: center;
				display: none;
				/* padding: 30px 20px; */
				padding-left: 20px;
				padding-right: 20px;
				height: 100%;
				position: relative;
			}
			
			.cornerb1 {
				width: 300px;
				position: absolute;
				top: 0;
				left: 0;
				z-index: 9;
			}
			
			.corner1 {
				width: 300px;
				position: absolute;
				top: 0;
				left: 0;
				z-index: 9;
			}
			
			.cornerb2 {
				width: 300px;
				position: absolute;
				top: 0;
				right: 0;
				z-index: 9;
			}
			
			.corner2 {
				width: 300px;
				position: absolute;
				top: 0;
				right: 0;
				z-index: 9;
			}
			
			.corner3 {
				width: 300px;
				position: absolute;
				bottom: 0;
				right: 0;
				z-index: 9;
			}
			
			.corner4 {
				width: 300px;
				position: absolute;
				bottom: 0;
				left: 0;
				z-index: 9;
			}
			
			.corner5 {
				width: 70%;
				position: absolute;
				margin-left: auto;
				margin-right: auto;
				left: 0;
				right: 0;
				top: 0;
				z-index: 9;
			}
			
			.corner6 {
				width: 70%;
				position: absolute;
				margin-left: auto;
				margin-right: auto;
				left: 0;
				right: 0;
				bottom: 0;
				z-index: 9;
			}
			
			.contentwd {
				position: relative;
				z-index: 99;
			}
			
			#Cover {
				/*background-color: #ffc2d6;
				background-image: linear-gradient(#ffc2d6, #f79cba);*/
				/*background-image: url("https://nikahankami.com/assets/bgatexture.jpg");
				background-position: center;*/
			}
			
			#Couple {
				background-image: url("<?= base_url() ?>/assets/bg19texture.jpg");
				background-position: center;
			}
			
			#Eventwd {
				background-image: url("<?= base_url() ?>/assets/bg19texture.jpg");
				background-position: center;
			}
			
			#Moment {
				background-image: url("<?= base_url() ?>/assets/bg19texture.jpg");
				background-position: center;
			}
			
			#Quotewd {
				background-image: url("<?= base_url() ?>/assets/bg19texture.jpg");
				background-position: center;
			}
			
			.explainbride {
				font-family: dosis;
				color: #404040;
			}
			
			.bridefont {
				font-family: desmonthe;
				font-size: 35px;
				color: #234f45;
				line-height: 1;
			}
			
			.fontfront {
				font-family: aldine;
				font-size: 70px;
				color: #234f45;
				text-shadow: 2px 2px 2px grey;
			}
			/*** music box ***/
			
			.music-box {
				position: fixed;
				width: 300px;
				height: 160px;
				z-index: 9999999;
				bottom: 30px;
				right: 30px;
			}
			
			@media (max-width: 991px) {
				.music-box {
					width: 50px;
					height: 150px;
					right: auto;
					right: 10px;
					top: 10px;
				}
			}
			
			.music-box .music-holder {
				width: 100%;
				height: 100%;
				position: absolute;
				right: 0;
				top: -30px;
				visibility: hidden;
				opacity: 0;
				-webkit-transition: all 0.5s ease-out;
				-o-transition: all 0.5s ease-out;
				transition: all 0.5s ease-out;
			}
			
			.music-box .music-holder iframe {
				width: 100%;
				height: 100%;
			}
			
			.music-box button {
				background: rgba(248, 246, 246, 0.85);
				width: 50px;
				line-height: 37px;
				font-size: 18px;
				font-size: 1rem;
				color: #68192b;
				border: 1px solid #e6e6e6;
				outline: 0;
				padding: 0;
				margin: 0;
				position: absolute;
				right: 0;
				bottom: 0;
				-webkit-border-radius: 50%;
				-moz-border-radius: 50%;
				-o-border-radius: 50%;
				-ms-border-radius: 50%;
				border-radius: 50%;
			}
			
			.music-box button i {
				font-size: 20px;
			}
			
			@media (max-width: 991px) {
				.music-box button {
					right: 0;
					left: auto;
				}
			}
			
			.music-box .toggle-music-box {
				top: -50px;
				visibility: visible;
				opacity: 1;
			}
			
			.music {
				padding: 0;
				background: none !important;
				border: none !important;
				position: relative;
				top: 100px;
				left: 180px;
			}
			
			.music:focus {
				outline: none;
			}
			
			.fa-stack {
				right: 12px;
				top: -65px;
				width: 0;
				height: 0;
			}
			
			.containerijabwd {
				margin-left: 5%;
				text-align: left;
				font-family: dosis;
				font-size: 14px;
				line-height: 1;
			}
			
			.containerweddingwd {
				margin-right: 5%;
				text-align: right;
				font-family: dosis;
				font-size: 14px;
				line-height: 1;
			}
			/* jam */
			
			h1 {
				font-family: dosis;
				color: #396;
				font-weight: 100;
				font-size: 40px;
				margin: 40px 0px 20px;
			}
			
			#clockdiv {
				font-family: dosis;
				color: grey;
				display: inline-block;
				font-weight: 100;
				text-align: center;
				font-size: 30px;
			}
			
			#clockdiv > div {
				padding: 8px;
				border-radius: 3px;
				/* background: #00BF96;  */
				display: inline-block;
			}
			
			#clockdiv div > span {
				padding: 10px;
				border-radius: 3px;
				/* background: #00816A;  */
				display: inline-block;
			}
			
			#day,
			#hour,
			#minute,
			#second {
				font-size: 30px;
				color: #234f45;
				border-bottom: solid 3px #234f45;
			}
			
			.smalltext {
				padding-top: 2px;
				font-size: 12px;
				font-family: Angelface;
			}
			
			.ornamentwdtop {
				position: relative;
				margin: 0 auto;
			}
			
			.ornamentbg {
				position: absolute;
				z-index: -4;
				top: 50px;
				width: 30%;
				opacity: 1;
			}
			
			.ornamentbg img {
				width: 40%;
			}
			
			.ornamentwdtop img {
				width: 60%;
			}
			
			.ornamentwdbtm img {
				width: 40%;
			}
			
			.timeline h2 {
				color: white;
			}
			
			@media screen and (min-width: 600px) {
				.cardevent {
					margin-left: 20%;
					margin-right: 20%;
				}
				.borderpair {
					width: 60%;
				}
			}
			
			@media screen and (min-width: 900px) {
				.vidline {
					padding-left: 30%;
					padding-right: 30%;
				}
			}
			
			@media screen and (max-width: 600px) {
				.cornerb1 {
					width: 150px;
				}
				.corner1 {
					width: 200px;
					z-index: 9;
				}
				.cornerb2 {
					width: 180px;
					z-index: 9;
				}
				.corner2 {
					width: 210px;
					z-index: 9;
				}
				.corner3 {
					width: 200px;
					z-index: 9;
				}
				.corner4 {
					width: 210px;
					z-index: 9;
				}
				.corner5 {
					width: 100%;
				}
				.corner6 {
					width: 100%;
				}
				.ornamentbg img {
					width: 100%;
				}
				.ornamentwdtop img {
					width: 100%;
				}
				.ornamentwdbtm img {
					width: 100%;
				}
				.containerijabwd {
					margin-left: 10%;
				}
				.containerweddingwd {
					margin-right: 10%;
				}
				.borderpair {
					width: 100%;
					margin: auto;
				}
			}
			/* comment section */
			
			input[type=text],
			select,
			textarea {
				width: 100%;
				padding: 12px;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
				margin-top: 6px;
				margin-bottom: 16px;
				resize: vertical;
			}
			
			input[type=submit], #btn-ucapan {
				background-color: #234f45;
				width: 100%;
				color: white;
				padding: 12px 20px;
				border: none;
				border-radius: 4px;
				cursor: pointer;
			}
			
			input[type=submit]:hover {
				background-color: #184033;
			}
			
			.wishcontainer {
				text-align: left;
				font-family: dosis;
			}
			
			.wishspace {
				border-radius: 5px;
				/* background-color: #f2f2f2; */
				padding-left: 20px;
				padding-right: 20px;
				padding-bottom: 20px;
				color: #404040;
			}
			
			.wishdisplay {
				text-align: left;
				padding-left: 0px;
				padding-right: 0px;
				font-family: dosis;
				max-height: 400px;
				overflow: scroll;
			}
			
			.wishdisplayname {
				font-weight: bold;
				font-size: 16px;
			}
			/* width */
			
			.wishdisplay::-webkit-scrollbar {
				width: 4px;
			}
			/* Handle */
			
			.wishdisplay::-webkit-scrollbar-thumb {
				background: #888;
			}
			/* Handle on hover */
			
			.wishdisplay::-webkit-scrollbar-thumb:hover {
				background: #555;
			}
		</style>
		<script type='text/javascript'>
			$(function() {
				var overlay = $('<div id="overlay"></div>');
				overlay.show();
				overlay.appendTo(document.body);
				$('.popup').show();
				$('.close').click(function() {
					$('.popup').hide();
					overlay.appendTo(document.body).remove();
					return false;
				});


				$('.x').click(function() {
					$('.popup').hide();
					overlay.appendTo(document.body).remove();
					return false;
				});
			});
		</script>
	</head>

	<body>
		<div class='popup'>
			<div class='cnt223'>
				<img src="<?= base_url() ?>/assets/de19cornerelement.png" class="corner-element top-right" alt="">
				<!-- <img src="https://nikahankami.com/assets/de17cornerelement.png" class="corner-element bottom-right" alt=""> -->
				<img src="<?= base_url() ?>/assets/de19cornerelement.png" class="corner-element bottom-left" alt="">
				<!-- <img src="https://nikahankami.com/assets/de17cornerelement.png" class="corner-element top-left" alt=""> -->
				<p><img width="60%" style="text-align: center"></p>
				<p class="imgopenint"><img class='close' src="<?= base_url() ?>/assets/demoopenerimg.png" style="text-align: center"></p>
				<p style="text-align: center; line-height: normal;">Kepada Yth.
					<br><span style="font-size:12px">Bapak/Ibu/Saudara/i</span></p>
				<p style="color: #404040; font-size: 20px; font-weight:bold; padding-bottom:10px; border-radius:4px; text-align: center" id="write"></p>
				</p>
				<p><a href='#' id="unmute-sound" class='close'>Buka Undangan</a></p>
				<div style="clear: both;"></div>
				<p><img width="60%" style="transform: rotate(180deg); text-align: center"></p>
			</div>
		</div>
		<!-- start button pesan via WA -->
		<!-- <button onclick="window.location.href='https://api.whatsapp.com/send?phone=6281584067118&text=NikahanKami%0ASaya%20ingin%20pesan%20Undangan%20Digital%20Pernikahan%20seperti%20Demo14'" id="myBtn4" title="Pesan Undangan"><i class="w3-bar-block fa fa-whatsapp"></i> <span style="font-size:12px">Pesan</span></button> -->
		<!-- end button pesan via WA -->
		<div class="music-box">
			<button class="music-box-toggle-btn">
				<!--
						<i class="fa fa-music"></i> -->
				<audio id='song' loop>
					<source src="https://nikahankami.com/atemplate/song_marryme_train_instrumental.mp3">
				</audio>
				<button type="button" class="music" id="unmute2-sound">
					<img border="0" alt="" src="<?= base_url() ?>/assets/de19soundoff.png" width="20" height="20">
				</button>
				<button type="button" class="music" id="mute-sound">
					<img border="0" alt="" src="<?= base_url() ?>/assets/de19soundon.png" width="20" height="20">
				</button>
			</button>
		</div>
		<div class="iconbar">
			<a class="tablink" onclick="openPage('Cover', this, '#184033')" id="defaultOpen"><img src="<?= base_url() ?>/assets/de17tab1cover.png" width="35"><br><span>Home</span></a>
			<a class="tablink" onclick="openPage('Couple', this, '#184033')"><img src="<?= base_url() ?>/assets/de17tab2couple.png" width="35"><br><span>Couple</span></a>
			<a class="tablink" onclick="openPage('Eventwd', this, '#184033')"><img src="<?= base_url() ?>/assets/de17tab3event.png" width="35"><br><span>Event</span></a>
			<a class="tablink" onclick="openPage('Moment', this, '#184033')"><img src="<?= base_url() ?>/assets/de17tab4moment.png" width="35"><br><span>Moment</span></a>
			<a class="tablink" onclick="openPage('Quotewd', this, '#184033')"><img src="<?= base_url() ?>/assets/de17tab5story.png" width="35"><br><span>Story+Wish</span></a>
		</div>

		<?php //$this->load->view('premium/cover'); ?>
		<?php //$this->load->view('premium/couple'); ?>
		<?php //$this->load->view('premium/event'); ?>
		<?php //$this->load->view('premium/moment'); ?>
		<?php //$this->load->view('premium/quoted'); ?>

		<div id="Cover" class="tabcontent">
			<!-- <h3>Home</h3>
					<p>Home is where the heart is..</p> -->
			<ul class="cb-slideshow">
				<li>
					<span>Image 01</span>
					<div>
						<h3>THE WEDDING</h3>
					</div>
				</li>
				<li>
					<span>Image 02</span>
					<div>
						<h3>26 DESEMBER 2021</h3>
					</div>
				</li>
				<li>
					<span>Image 03</span>
					<div>
						<h3>SAVE.THE.DATE</h3>
					</div>
				</li>
				<li>
					<span>Image 04</span>
					<div>
						<h3></h3>
					</div>
				</li>
				<li>
					<span>Image 05</span>
					<div>
						<h3>
							<?= ucwords($couple->result_array()[0]['cpl_nama_panggilan']) ?> & <?= ucwords($couple->result_array()[1]['cpl_nama_panggilan']) ?>
						</h3>
					</div>
				</li>
				<li>
					<span>Image 06</span>
					<div>
						<h3></h3>
					</div>
				</li>
			</ul>
			<div class="container4cover">
				<!--/ Codrops top bar -->
				<header>
					<div style="line-height:80%; padding-top:20px;">
						<h6>
							<span style="font-family: desmonthe; font-size: 46px">
								<?= ucwords($couple->result_array()[1]['cpl_nama_panggilan']) ?> 
								<p style="font-size:20px">&</p> 
								<?= ucwords($couple->result_array()[0]['cpl_nama_panggilan']) ?>
							</span>
						</h6>
						<br>
						<h6>Official Invitation</h6>
					</div>
					<!--<div style="line-height:180%">-->
					<!--    <h1>Riri <span>& Handi</span></h1>-->
					<!--    <h2>Wedding Announcement</h2>-->
					<!--</div>-->
					<p class="codrops-demos">
						<!-- <div class="bride4title">
								<h4>Leiayu & Tripati</h4>
								</div> -->
						<!-- <a href="https://www.sendysaga.com/">Sendysaga</a>
								<a class="current-demo" href="http://timerinc.co">Timerinc</a>
								<a href="https://www.instagram.com/sendysaga/">Galeri</a>
								<a href="https://www.instagram.com/sendysaga/">let's connect!</a> -->
					</p>
					<div id="txt"></div>
				</header>
			</div>
			<div class="cornerb1">
				<img alt="" width="100%">
			</div>
			<div class="cornerb2">
				<img src="<?= base_url() ?>/assets/de19oraset2.png" alt="" width="100%">
			</div>
			<div class="corner3">
				<img alt="" width="100%">
			</div>
			<div class="corner4">
				<img alt="" width="100%">
			</div>
			<div class="corner5" style="opacity: 0.3">
				<img alt="" width="100%">
			</div>
			<div class="corner6">
				<img alt="" width="100%">
			</div>
			<div id="homewd" class="contentwd">
				<br>
				<br>
				<br>
			</div>
			<br>
			<br>
		</div>
		<div id="Couple" class="tabcontent">
			<!-- <h3>News</h3>
					<p>Some news this fine day!</p> -->
			<div class="corner1">
				<img alt="" width="100%">
			</div>
			<div class="corner2">
				<img src="<?= base_url() ?>/assets/de19oraset2.png" alt="" width="100%">
			</div>
			<div class="corner3">
				<img alt="" width="100%">
			</div>
			<div class="corner4">
				<img src="<?= base_url() ?>/assets/de19oraset4.png" alt="" width="100%">
			</div>
			<div class="corner5">
				<img alt="" width="100%">
			</div>
			<div class="corner6">
				<img alt="" width="100%">
			</div>
			<div id="bridewd" class="contentwd">
				<div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
					<img alt="" style="display: inline-block;">
				</div>
				<br>
				<br>
				<div class="content4pad">
					<div>
						<h3 style="font-family: Angelface; font-size: 35px; color: #234f45;">Bismillahirrahmanirrahim</h3>
						<div class="explainbride">
							Assalamu`alaikum Warahmatullahi Wabarakatuh
							<br>
							<br> Maha Suci Allah
							<br>yang telah menciptakan makhluk-Nya
							<br>berpasang-pasangan.
							<br>Ya Allah semoga ridha-Mu tercurah
							<br>mengiringi pernikahan putra-putri kami:
						</div>
					</div>
					<br>
					<div>
							<img src="<?= base_url() ?>assets/demowdbride.png" width="40%" alt=""><br><span class="bridefont"><?= $couple->result_array()[1]['cpl_nama'] ?></span>
					</div>
					<div class="explainbride">
							Putri dari<br>
							Bpk. <?= $couple->result_array()[1]['cpl_ayah'] ?> 
							& 
							Ibu <?= $couple->result_array()[1]['cpl_ibu'] ?>
					</div>
					<br>
					<div class="explainbride">dan</div>
					<br>
					<div>
							<img src="<?= base_url() ?>assets/demowdgroom.png" width="40%" alt=""><br><span class="bridefont"><?= $couple->result_array()[0]['cpl_nama'] ?></span>
					</div>
					<div class="explainbride">
							Putra dari<br>
							Bpk. <?= $couple->result_array()[0]['cpl_ayah'] ?> 
							& 
							Ibu <?= $couple->result_array()[0]['cpl_ibu'] ?>
					</div>
					<br>
					<br>
				</div>
				<br>
				<br>
				<div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
					<img alt="" style="display: inline-block;" width="100%">
				</div>
				<br>
				<br>
				<br>
			</div>
		</div>
		<div id="Eventwd" class="tabcontent">
			<div class="corner1">
				<img alt="" width="100%">
			</div>
			<div class="corner2">
				<img src="<?= base_url() ?>/assets/de19oraset2.png" alt="" width="100%">
			</div>
			<div class="corner3">
				<img alt="" width="100%">
			</div>
			<div class="corner4">
				<img src="<?= base_url() ?>/assets/de19oraset4.png" alt="" width="100%">
			</div>
			<div class="corner5">
				<img alt="" width="100%">
			</div>
			<div class="corner6">
				<img alt="" width="100%">
			</div>
			<div id="homewd" class="contentwd">
				<div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
					<img alt="" style="display: inline-block;" width="100%">
				</div>
				<br>
				<br>
				<div class="content4pad">
					<h3 style="font-family: Angelface; font-size: 38px; color: #234f45">Event</h3>
					<p class="explainbride">The Happy Day!</p>
					<p style="font-family: dosis; color: #404040">
						Dengan memohon rahmat dan ridha Allah Subhanahu Wa Ta'ala, izinkan kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri acara pernikahan putra-putri kami
					</p>
					<div class="cardevent">
						<div class="row">
							<div class="column">
								<div class="card">
									<div class="containerijabwd">
										<table style="color: #234f45;">
											<tr>
												<th style="width: 20%"><img src="<?= base_url() ?>/assets/de19wdakad.png" width="100%"></th>
												<th></th>
												<th style="width: 80%">
													<p style="font-size: 18px; font-family: dosis; color: #234f45;"><b>Akad Nikah</b></p>
												</th>
											</tr>
											<tr>
													<td></td>
													<td><i class="fa fa-calendar"></i></td>
													<td>
															<?= longdate_indo(date('Y-m-d', strtotime($event->row()->evt_akad_waktu_start))) ?>
													</td>
											</tr>
											<tr>
													<td></td>
													<td><br></td>
													<td><br></td>
											</tr>
											<tr>
													<td></td>
													<td><i class="fa fa-clock-o"></i></td>
													<td><?= date('H:i', strtotime($event->row()->evt_akad_waktu_start)) ?> WIB</td>
											</tr>
											<tr>
													<td></td>
													<td><br></td>
													<td><br></td>
											</tr>
											<tr style="vertical-align: top">
													<td></td>
													<td><i class="fa fa-map-marker"></i></td>
													<td>
															<?= nl2br($event->row()->evt_akad_lokasi) ?>
													</td>
											</tr>
											<tr>
												<td></td>
												<td>
													<br>
												</td>
												<td>
													<br>
												</td>
											</tr>
											<!-- <tr>
													<td></td>
													<td></td>
													<td><a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=MWZkMWVyODI1cmJzNG9zNzhjaDY2Y25udjEgYWRtaW4tbmlrYWhhbmthbWlAem1haWwubXkuaWQ&tmsrc=admin-nikahankami%40zmail.my.id" target="_blank" style="background-color: #234f45; font-family: dosis; font-size: 18px; color: white; padding: 18px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>SaveTheDate</strong></a></td>
													</tr> -->
										</table>
									</div>
								</div>
							</div>
							<div class="column">
								<div class="card">
									<div class="containerweddingwd">
										<table align="right" style="color: #234f45;">
											<tr>
												<th align="right" style="width: 80%;">
													<p style="font-size: 18px; font-family: dosis; color: #234f45; text-align: right;"><b>Resepsi Pernikahan</b></p>
												</th>
												<th></th>
												<th style="width: 20%"><img src="<?= base_url() ?>/assets/de19wdresepsi.png" width="100%"></th>
											</tr>
											<tr align="right">
													<td>
															<?= longdate_indo(date('Y-m-d', strtotime($event->row()->evt_resepsi_waktu_start))) ?>
													</td>
													<td><i class="fa fa-calendar"></i></td>
													<td></td>
											</tr>
											<tr>
													<td><br></td>
													<td><br></td>
													<td></td>
											</tr>
											<tr align="right">
													<td>
															<?= date('H:i', strtotime($event->row()->evt_resepsi_waktu_start)).' - '.date('H:i', strtotime($event->row()->evt_resepsi_waktu_end)) ?> WIB
													</td>
													<td><i class="fa fa-clock-o"></i></td>
													<td></td>
											</tr>
											<tr>
													<td><br></td>
													<td><br></td>
													<td></td>
											</tr>
											<tr align="right" style="vertical-align: top;">
													<td>
															<?= nl2br($event->row()->evt_resepsi_lokasi) ?>
													</td>
													<td><i class="fa fa-map-marker"></i></td>
													<td></td>
											</tr>
											<tr align="right">
													<td><br></td>
													<td></td>
													<td></td>
											</tr>
											<tr align="right">
													<td>
															<!-- <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=NzVkYWxyOWVqaGl1czdlYmxnZnQ3NmwybzggYmxrb2M5ZHFvcGs3a2trNm9nNnAzNDlzaDRAZw&amp;tmsrc=blkoc9dqopk7kkk6og6p349sh4%40group.calendar.google.com" target="_blank" style="background-color: #39473d; font-family: dosis; font-size: 15px; color: white; padding: 12px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px;"><strong>SaveTheDate</strong></a></td> -->
															<a href="<?= $calendar ?>" target="_blank" style="background-color: #39473d; font-family: dosis; font-size: 15px; color: white; padding: 12px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px;"><strong>SaveTheDate</strong></a></td>
													<td></td>
													<td></td>
											</tr>
										</table>
										<div style="clear: both;"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br>
					<div style="clear:both"></div>
					<!-- startprotokolkesehatan -->
					<div class="explainbride" style="background-color: #edfffb; width: 100%; margin: auto; box-shadow: 1px 1px 5px #888888; padding: 10px; border-radius: 10px; color: #234f45;">
						<p><i style="color: #234f45;" class="fa fa-heart"></i>
							<br> Guna mencegah penularan covid-19 kami harapkan kedatangan para tamu undangan tetap menerapkan protokol yang berlaku :
						</p>
						<div style="padding:5px; border-bottom:1px solid #c7c7c7;">
							Wajib menggunakan masker
						</div>
						<div style="padding:5px; border-bottom:1px solid #c7c7c7;">
							Menggunakan salam namaste / salam hangat tanpa bersentuhan
						</div>
						<div style="padding:5px; border-bottom:1px solid #c7c7c7;">
							Saling menjaga jarak di dalam acara
						</div>
						<div style="padding:5px; border-bottom:1px solid #c7c7c7;">
							Menjaga kebersihan dengan menggunakan handsanitizer
						</div>
					</div>
					<!-- endprotokolkesehatan -->
					<br>
					<div id="clockdiv">
						<div>
							<span class="days" id="day"></span>
							<div class="smalltext">Days</div>
						</div>
						<div>
							<span class="hours" id="hour"></span>
							<div class="smalltext">Hours</div>
						</div>
						<div>
							<span class="minutes" id="minute"></span>
							<div class="smalltext">Minutes</div>
						</div>
						<div>
							<span class="seconds" id="second"></span>
							<div class="smalltext">Seconds</div>
						</div>
					</div>
					<p id="demo"></p>
					<p class="explainbride">
						Merupakan suatu kehormatan dan kebahagiaan
						<br>bagi kami apabila Bapak/Ibu/Saudara(i)
						<br>berkenan untuk hadir dan memberikan do'a restu
						<br>kepada kedua mempelai.</p>
					<br>
					<div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8005853713566!2d110.21351231477622!3d-7.487258394599172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f6aa5ee45b3%3A0xdc07f0e500ac48d6!2sGedung%20Jenderal%20Achmad%20Yani%20Magelang!5e0!3m2!1sid!2sid!4v1610687413981!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					<div><a href="https://goo.gl/maps/fWm7LDTq3SbK7ohB6" target="_blank" style="background-color: #234f45; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>OpenMap</strong></a>
					</div>
					<br>
					<br>
				</div>
				<br>
				<br>
				<div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
					<img alt="" style="display: inline-block;" width="100%">
				</div>
				<br>
				<br>
			</div>
		</div>
		<div id="Moment" class="tabcontent">
			<div class="corner1">
				<img alt="" width="100%">
			</div>
			<div class="corner2">
				<img src="<?= base_url() ?>/assets/de19oraset2.png" alt="" width="100%">
			</div>
			<div class="corner3">
				<img alt="" width="100%">
			</div>
			<div class="corner4">
				<img src="<?= base_url() ?>/assets/de19oraset4.png" alt="" width="100%">
			</div>
			<div class="corner5">
				<img alt="" width="100%">
			</div>
			<div class="corner6">
				<img alt="" width="100%">
			</div>
			<div id="homewd" class="contentwd">
				<div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
					<img alt="" style="display: inline-block;" width="100%">
				</div>
				<br>
				<br>
				<div class="content4pad">
					<h3 style="font-family: Angelface; font-size: 38px; color: #234f45">Gallery</h3>
					<p class="explainbride">Momen Bahagia <?= $couple->result_array()[1]['cpl_nama_panggilan'] ?>-<?= $couple->result_array()[0]['cpl_nama_panggilan'] ?></p>
					<!-- !PAGE CONTENT! -->
					<div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">
						<!-- PhotoFrame -->
						<!-- <div class="framegrid2">
								<div>
										<img src="https://nikahankami.com/assets/demogala.png" width="100%">
										<br><br>
										<img src="https://nikahankami.com/assets/demogalb.png" width="100%">
										<br><br>
										<img src="https://nikahankami.com/assets/demogalc.png" width="100%">
										<br><br>
										<img src="https://nikahankami.com/assets/demogald.png" width="100%">
								</div>
								</div> -->
						<!-- Photo grid -->
						<div class="w3-row w3-grayscale-min">
									<!-- <div class="vidline">
										<video width="100%" controls loop autoplay>
												<source src="images/andigracevid.mp4" type="video/mp4">
												<source src="video.ogg" type="video/ogg">
												Your browser does not support HTML5 video.
										</video>
									</div> -->
									<div class="w3-half">
											<img src="<?= base_url() ?>assets/demogal01.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
											<img src="<?= base_url() ?>assets/demogal03.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
											<img src="<?= base_url() ?>assets/demogal05.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
											<img src="<?= base_url() ?>assets/demogal07.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
											<img src="<?= base_url() ?>assets/demogal09.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
									</div>
									<div class="w3-half">
											<img src="<?= base_url() ?>assets/demogal02.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
											<img src="<?= base_url() ?>assets/demogal04.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
											<img src="<?= base_url() ?>assets/demogal06.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
											<img src="<?= base_url() ?>assets/demogal08.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
											<img src="<?= base_url() ?>assets/demogal10.jpg" style="width:100%" onclick="onClick(this)" alt="<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?><?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>">
									</div>
						</div>
						<!-- Modal for full size images on click-->
						<div id="modal01" class="w3-modal w3-black" style="padding-top:0;" onclick="this.style.display='none'">
							<span class="w3-button w3-black w3-xlarge w3-display-topleft">×</span>
							<div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
								<img id="img01" class="w3-image">
								<p id="caption"></p>
							</div>
						</div>
						<br>
						<br>
					</div>
				</div>
				<br>
				<br>
				<div>
					<div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
						<img alt="" style="display: inline-block;" width="100%">
					</div>
				</div>
				<br>
				<br>
				<br>
			</div>
		</div>
		<div id="Quotewd" class="tabcontent">
			<div class="corner1">
				<img alt="" width="100%">
			</div>
			<div class="corner2">
				<img src="<?= base_url() ?>/assets/de19oraset2.png" alt="" width="100%">
			</div>
			<div class="corner3">
				<img alt="" width="100%">
			</div>
			<div class="corner4">
				<img src="<?= base_url() ?>/assets/de19oraset4.png" alt="" width="100%">
			</div>
			<div class="corner5">
				<img alt="" width="100%">
			</div>
			<div class="corner6">
				<img alt="" width="100%">
			</div>
			<div id="homewd" class="contentwd">
				<div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
					<img alt="" style="display: inline-block;" width="100%">
				</div>
				<br>
				<br>
				<div class="content4pad">
					<h3 style="font-family: Angelface; font-size: 38px; color: #234f45">Story</h3>
					<p class="explainbride">Kisah Bahagia <?= $couple->result_array()[1]['cpl_nama_panggilan'] ?>-<?= $couple->result_array()[0]['cpl_nama_panggilan'] ?></p>
					<p class="explainbride">--</p>
					<p class="explainbride">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</p>
					<p class="explainbride"><b>- QS. Ar-Rum: 21 -</b></p>
					<p class="explainbride">--</p>
					<!-- !PAGE CONTENT! -->
					<div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">
						<!-- timeline start -->
						
						<div class="timeline">
								<?php foreach ($timeline->result_array() as $k => $v) : ?>
								<?php
										if ($k % 2 == 0) {
												$c = 'right';
										} else {
												$c = 'left';
										}
								?>
								<div class="container <?= $c; ?>">
										<div class="content">
												<div class="bg1content">
														<h2>
																<?= $v['tml_waktu'] ?>
														</h2>
														<p>
																<?= nl2br($v['tml_narasi']) ?>
														</p>
												</div>
										</div>
								</div>
								<?php endforeach; ?>
						</div>

						<!-- timeline end -->
						<br>
						<div class="">
							<p class="explainbride">Ucapan Selamat & Doa untuk
								<br>
								<?= $couple->result_array()[1]['cpl_nama_panggilan'] ?>-<?= $couple->result_array()[0]['cpl_nama_panggilan'] ?>
							</p>
						</div>
						<div class="wishspace">
								<div class="wishcontainer">
										<form id="form-ucapan" name="form-ucapan">
												<label for="nama">Nama</label>
												<input type="text" id="nama" name="nama" placeholder="Nama.." required>

												<label for="ucap">Ucapan</label>
												<textarea id="ucap" name="ucap" placeholder="Ucapan Doa & Harapan.." style="height:100px" required></textarea>
										</form>
										<button id="btn-ucapan" name="input">
												Kirim
										</button>
								</div>
							<br>
							<div class="wishdisplay">
									<?php foreach ($ucapan->result_array() as $k => $v) : ?>
									<div class="wishdisplayname">
											<?= $v['ucp_nama'] ?>
									</div>
									<div class="" style="padding-bottom: 10px">
											<?= nl2br($v['ucp_ucapan']) ?>    
									</div>
									<?php endforeach; ?>
							</div>
							<!-- <br>
									<br> -->
						</div>
					</div>
				</div>
				<br>
				<br>
				<div>
					<div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
						<img alt="" style="display: inline-block;" width="100%">
					</div>
				</div>
				<br>
				<br>
				<br>
			</div>
		</div>
		<script>
			function openPage(pageName, elmnt, color) {
				var i, tabcontent, tablinks;
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				tablinks = document.getElementsByClassName("tablink");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].style.backgroundColor = "";
				}
				document.getElementById(pageName).style.display = "block";
				elmnt.style.backgroundColor = color;
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();

			document.getElementById('mute-sound').style.display = 'none';
			document.getElementById('unmute-sound').addEventListener('click', function(event) {
				document.getElementById('unmute2-sound').style.display = 'none';
				document.getElementById('mute-sound').style.display = 'inline-block';
				document.getElementById('song').play();
			});

			document.getElementById('unmute2-sound').addEventListener('click', function(event) {
				document.getElementById('unmute2-sound').style.display = 'none';
				document.getElementById('mute-sound').style.display = 'inline-block';
				document.getElementById('song').play();
			});

			document.getElementById('mute-sound').addEventListener('click', function(event) {
				document.getElementById('mute-sound').style.display = 'none';
				document.getElementById('unmute2-sound').style.display = 'inline-block';
				document.getElementById('song').pause();
			});

			// Script to open and close sidebar
			function w3_open() {
				document.getElementById("mySidebar").style.display = "block";
				document.getElementById("myOverlay").style.display = "block";
			}

			function w3_close() {
				document.getElementById("mySidebar").style.display = "none";
				document.getElementById("myOverlay").style.display = "none";
			}

			// Modal Image Gallery
			function onClick(element) {
				document.getElementById("img01").src = element.src;
				document.getElementById("modal01").style.display = "block";
				var captionText = document.getElementById("caption");
				captionText.innerHTML = element.alt;
			}

			// var deadline = new Date("march 28, 2020 13:00:00").getTime();
			var deadline = new Date("<?= date('F d, Y H:i:s', strtotime($event->row()->evt_resepsi_waktu_start)) ?>").getTime();

			var x = setInterval(function() {

				var now = new Date().getTime();
				var t = deadline - now;
				var days = Math.floor(t / (1000 * 60 * 60 * 24));
				var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
				var seconds = Math.floor((t % (1000 * 60)) / 1000);
				document.getElementById("day").innerHTML = days;
				document.getElementById("hour").innerHTML = hours;
				document.getElementById("minute").innerHTML = minutes;
				document.getElementById("second").innerHTML = seconds;
				if (t < 0) {
					clearInterval(x);
					document.getElementById("demo").innerHTML = "HAPPY WEDDING";
					document.getElementById("day").innerHTML = '0';
					document.getElementById("hour").innerHTML = '0';
					document.getElementById("minute").innerHTML = '0';
					document.getElementById("second").innerHTML = '0';
				}
			}, 1000);


			function getParameterByName(name, url) {
				if (!url) url = window.location.href;
				name = name.replace(/[\[\]]/g, '\\$&');
				var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
					results = regex.exec(url);
				if (!results) return null;
				if (!results[2]) return '';
				return decodeURIComponent(results[2].replace(/\+/g, ' '));
			}

			var sn = getParameterByName('to');

			document.getElementById("write").innerHTML = sn;
		</script>
		<script>
        $(document).ready(function () {
            $(document).off("click", "#btn-ucapan").on("click", "#btn-ucapan", function(event) {
                event.preventDefault();
                kirimUcapan();
            });
        });

        function kirimUcapan() {
            var form_data = new FormData($('#form-ucapan')[0]);
            var link = "<?= site_url('basic/kirimUcapan') ?>";
            $.ajax({
                url: link,
				type: "POST",
				cache: false,
				data: form_data,
				dataType: 'json',
				contentType: false,
				processData: false,
                success: function (res) {
                    alert(res.message);
                    if (res.status == 1) {
                        $('#form-ucapan')[0].reset();
                        window.location.reload();
                    }
                }
            });
        }
    </script>

	</body>

</html>