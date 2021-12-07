<!DOCTYPE html>
<html>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <link rel="icon" type="image/png" href="<?= base_url() ?>/images/favicon.png">
    <meta charset="UTF-8">
    <title>Jendro & Sastro wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Spesial mengundang untuk menghadiri pernikahan kami. Jendro-Sastro" />
    <meta name="keywords" content="undangan digital, undangan online, undangan nikah, website undangan, pernikahan, wedding, marriage" />
    <meta name="author" content="nikahankami (admin@nikahankami.com)" />
    <meta name="robots" content="follow, index" />
    <meta property="og:image" content="<?= base_url() ?>/assets/demoogthumbnail.jpg">
    <meta property="og:image" itemprop="image" content="<?= base_url() ?>/assets/demoogthumbnail.jpg">
    <link itemprop="thumbnailUrl" href="<?= base_url() ?>/assets/demoogthumbnail.jpg">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
      <link itemprop="url" href="<?= base_url() ?>/assets/demoogthumbnail.jpg">
    </span>
    <meta property="og:image" content="<?= base_url() ?>/assets/demoogthumbnail.jpg" />
    <meta property="og:title" content="Pernikahan Jendro-Sastro" />
    <meta property="og:description" content="Spesial mengundang untuk menghadiri pernikahan kami. Jendro-Sastro" />
    <link rel="stylesheet" href="<?= base_url() ?>w34style3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="<?= base_url() ?>/atemplate/jquery-1.8.2.js"></script>
    <style type="text/css">
      #overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #000;
      filter:alpha(opacity=70);
      -moz-opacity:0.7;
      -khtml-opacity: 0.7;
      opacity: 0.7;
      z-index: 100;
      display: none;
      }
      .cnt223 a{
      text-decoration: none;
      }
      .popup{
      width: 100%;
      margin: 0 auto;
      display: none;
      position: fixed;
      z-index: 101;
      }
      .cnt223{
      /* min-width: 600px;*/
      width: 100%;
      min-height: 150px;
      margin: 100px auto;
      background-color: #fff3f3;
      background-position: center;
      position: relative;
      z-index: 103;
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px #000;
      }
      .cnt223 p{
      clear: both;
      color: #555555;
      text-align: center;
      }
      .cnt223 p a{
      background-color: #b8765e;
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
      .cnt223 .x{
      float: right;
      height: 35px;
      left: 22px;
      position: relative;
      top: -25px;
      width: 34px;
      }
      .cnt223 .x:hover{
      cursor: pointer;
      }
      .imgopenint img {
      width: 100px;
      }
      @media  screen and (min-width: 600px) {
      .imgopenint img {
      width: 100px;
      }
      }
    </style>
    <style>
      * {
      box-sizing: border-box
      }
      .w3-half img{
      margin-bottom: -6px;
      cursor: pointer
      z-index: -99;
      }
      .w3-half img:hover{opacity: 0.6; transition: 0.3s}
      /* Set height of body and the document to 100% */
      body,
      html {
      margin: 0;
      font-family: Arial;
      }
      @font-face{
      src: url('images/aureliesmith.html');
      font-family: aureliesmith;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/font_edwarscriptic.ttf');
      font-family: edwardscript;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/font_gelato.otf');
      font-family: gelato;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/font_desmonthe.otf');
      font-family: desmonthe;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/font_gadugi.ttf');
      font-family: gadugi;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/font_calibrireg.ttf');
      font-family: calibrireg;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/Litine.ttf');
      font-family: litine;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/font_bookmanoldstyle.ttf');
      font-family: bookmanold;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/Angelface.otf');
      font-family: Angelface;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/dosis.ttf');
      font-family: dosis;
      }
      @font-face{
      src: url('<?= base_url() ?>/atemplate/Aldine.ttf');
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
      background-color: #d0896f;
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
      .cornerb1{
      width: 300px;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 9;
      }
      .corner1{
      width: 300px;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 9;
      }
      .cornerb2{
      width: 300px;
      position: absolute;
      top: 0;
      right: 0;
      z-index: 9;
      }
      .corner2{
      width: 300px;
      position: absolute;
      top: 0;
      right: 0;
      z-index: 9;
      }
      .corner3{
      width: 300px;
      position: absolute;
      bottom: 0;
      right: 0;
      z-index: 9;
      }
      .corner4{
      width: 300px;
      position: absolute;
      bottom: 0;
      left: 0;
      z-index: 9;
      }
      .corner5{
      width: 70%;
      position: absolute;
      margin-left: auto;
      margin-right: auto;
      left: 0;
      right: 0;
      top: 0;
      z-index: 9;
      }
      .corner6{
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
      background-color: #fff3f3;
      }
      #Eventwd {
      background-color: #fff3f3;
      }
      #Moment {
      background-color: #fff3f3;
      }
      #Quotewd {
      background-color: #fff3f3;
      }
      .explainbride {
      font-family: dosis;
      color: #63402f;
      }
      .bridefont {
      font-family: desmonthe;
      font-size: 35px;
      color: #b8765e;
      line-height: 1;
      }
      .fontfront {
      font-family: aldine;
      font-size: 70px;
      color: #b8765e;
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
      right:10px;
      top:10px;
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
      .music-box button i{
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
      .fa-stack{
      right:12px;
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
      h1{
      font-family: dosis;
      color: #396;
      font-weight: 100;
      font-size: 40px;
      margin: 40px 0px 20px;
      }
      #clockdiv{
      font-family: dosis;
      color: grey;
      display: inline-block;
      font-weight: 100;
      text-align: center;
      font-size: 30px;
      }
      #clockdiv > div{
      padding: 8px;
      border-radius: 3px;
      /* background: #00BF96;  */
      display: inline-block;
      }
      #clockdiv div > span{
      padding: 10px;
      border-radius: 3px;
      /* background: #00816A;  */
      display: inline-block;
      }
      #day, #hour, #minute, #second {
      font-size: 30px;
      color: #b8765e;
      border-bottom: solid 3px #b8765e;
      }
      .smalltext{
      padding-top: 2px;
      font-size: 19px;
      font-family: Angelface;
      }
      .ornamentwdtop {
      position: relative;
      margin: 0 auto;
      }
      .ornamentbg{
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
      color: #b8765e;
      }
      @media  screen and (min-width: 600px) {
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
      width: 160px;
      z-index: 9;
      }
      .corner2 {
      width: 200px;
      z-index: 9;
      }
      .corner3 {
      width: 180px;
      z-index: 9;
      }
      .corner4 {
      width: 180px;
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
      input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
      }
      input[type=submit] {
      background-color: #b8765e;
      width: 100%;       
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      }
      input[type=submit]:hover {
      background-color: #694635;
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
      color: #63402f;
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
      $(function(){
      var overlay = $('<div id="overlay"></div>');
      overlay.show();
      overlay.appendTo(document.body);
      $('.popup').show();
      $('.close').click(function(){
      $('.popup').hide();
      overlay.appendTo(document.body).remove();
      return false;
      });
      
      
      $('.x').click(function(){
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
        <p><img width="60%" style="text-align: center"></p>
        <p class="imgopenint"><img class='close' src="<?= base_url() ?>/assets/demoopenerimg.png" style="text-align: center"></p>
        <p style="text-align: center; line-height: normal;">Kepada Yth.<br><span style="font-size:12px">Bapak/Ibu/Saudara/i</span></p>
        <p style="color: #63402f; font-size: 20px; font-weight:bold; padding-bottom:10px; border-radius:4px; text-align: center" id="write"></p>
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
          <source src="<?= base_url() ?>/atemplate/song_marryme_train_instrumental.mp3">
        </audio>
      <button type="button" class="music" id="unmute2-sound">
      <img border="0" alt="" src="<?= base_url() ?>/assets/de18soundoff.png"
        width="20" height="20">
      </button>
      <button type="button" class="music" id="mute-sound">
      <img border="0" alt="" src="<?= base_url() ?>/assets/de18soundon.png"
        width="20" height="20">
      </button>
      </button>
    </div>
    <div class="iconbar">
      <a class="tablink" onclick="openPage('Cover', this, '#b8765e')" id="defaultOpen"><img src="<?= base_url() ?>/assets/de17tab1cover.png" width="35"><br><span>Home</span></a>
      <a class="tablink" onclick="openPage('Couple', this, '#b8765e')"><img src="<?= base_url() ?>/assets/de17tab2couple.png" width="35"><br><span>Couple</span></a>
      <a class="tablink" onclick="openPage('Eventwd', this, '#b8765e')"><img src="<?= base_url() ?>/assets/de17tab3event.png" width="35"><br><span>Event</span></a>
      <a class="tablink" onclick="openPage('Moment', this, '#b8765e')"><img src="<?= base_url() ?>/assets/de17tab4moment.png" width="35"><br><span>Moment</span></a>
      <a class="tablink" onclick="openPage('Quotewd', this, '#b8765e')"><img src="<?= base_url() ?>/assets/de17tab5story.png" width="35"><br><span>Story+Wish</span></a>
    </div>
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
            <h3>Jendro & Sastro</h3>
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
          <div style="line-height:80%; padding-top:30px;">
            <h6><span style="font-family: desmonthe; font-size: 46px">Jendro & Sastro</span></h6>
            <h6>Official Invitation</h6>
          </div>
          <!--<div style="line-height:180%">-->
          <!--    <h1>Riri <span>& Handi</span></h1>-->
          <!--    <h2>Wedding Announcement</h2>-->
          <!--</div>-->
          <p class="codrops-demos">
            <!-- <div class="bride4title">
              <h4>Jendro & Sastro</h4>
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
        <img src="<?= base_url() ?>/assets/de18oraset2b.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img alt="" width="100%">
      </div>
      <div class="corner4">
        <img alt="" width="100%">
      </div>
      <div class="corner5" style="opacity: 0.3">
        <img src="<?= base_url() ?>/assets/de18oraset5.png" alt="" width="100%">
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
        <img src="<?= base_url() ?>/assets/de18oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img src="<?= base_url() ?>/assets/de18oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
        <img src="<?= base_url() ?>/assets/de18oraset4.png" alt="" width="100%">
      </div>
      <div class="corner5">
        <img src="<?= base_url() ?>/assets/de18oraset5.png" alt="" width="100%">
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
            <br>
            <h3 style="font-family: Angelface; font-size: 35px; color: #b8765e;">Bismillahirrahmanirrahim</h3>
            <div class="explainbride">Assalamu`alaikum Warahmatullahi Wabarakatuh<br><br>
              Maha Suci Allah<br>yang telah menciptakan makhluk-Nya<br>berpasang-pasangan.<br>Ya Allah semoga ridha-Mu tercurah<br>mengiringi pernikahan putra-putri kami:
            </div>
          </div>
          <br>
          <div><img src="<?= base_url() ?>/assets/demowdbride.png" width="40%" alt=""><br><span class="bridefont">Jendrowatu<span style="font-size: 13px"></span></span>
          </div>
          <div class="explainbride">Putri dari<br>Bpk. Adiminto R. & Ibu Sulaiyu Asih</div>
          <br>
          <div class="explainbride">dan</div>
          <br>
          <div><img src="<?= base_url() ?>/assets/demowdgroom.png" width="40%" alt=""><br><span class="bridefont">Sastrowo<span style="font-size: 13px"></span></span>
          </div>
          <div class="explainbride">Putra dari<br>Bpk. Adipati Zouma & Ibu Nuraini Zara</div>
          <br>
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
        <img src="<?= base_url() ?>/assets/de18oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img src="<?= base_url() ?>/assets/de18oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
        <img src="<?= base_url() ?>/assets/de18oraset4.png" alt="" width="100%">
      </div>
      <div class="corner5">
        <img src="<?= base_url() ?>/assets/de18oraset5.png" alt="" width="100%">
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
          <br>
          <h3 style="font-family: Angelface; font-size: 35px; color: #b8765e">Event</h3>
          <p class="explainbride">The Happy Day!</p>
          <br>
          <p style="font-family: dosis; color: #63402f">Dengan memohon rahmat dan ridha Allah Subhanahu Wa Ta'ala, izinkan kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri acara pernikahan putra-putri kami</p>
          <div class="cardevent">
            <div class="row">
              <div class="column">
                <div class="card">
                  <div class="containerijabwd">
                    <table style="color: #63402f;">
                      <tr>
                        <th style="width: 20%"><img src="<?= base_url() ?>/assets/de18wdakad.png" width="100%"></th>
                        <th></th>
                        <th style="width: 80%">
                          <p style="font-size: 18px; font-family: dosis; color: #63402f;"><b>Akad Pernikahan</b></p>
                        </th>
                      </tr>
                      <tr>
                        <td></td>
                        <td><i class="fa fa-calendar"></i></td>
                        <td>Minggu, 26 Desember 2021</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><br></td>
                        <td><br></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><i class="fa fa-clock-o"></i></td>
                        <td>08.00 WIB</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><br></td>
                        <td><br></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><i class="fa fa-map-marker"></i></td>
                        <td>Gedung Achmad Yani</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Jl. Jend. Gatot Soebroto,</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Jurangombo Utara,</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td>Magelang</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><br></td>
                        <td><br></td>
                      </tr>
                      <!-- <tr>
                        <td></td>
                        <td></td>
                        <td><a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=MWZkMWVyODI1cmJzNG9zNzhjaDY2Y25udjEgYWRtaW4tbmlrYWhhbmthbWlAem1haWwubXkuaWQ&tmsrc=admin-nikahankami%40zmail.my.id" target="_blank" style="background-color: #b8765e; font-family: dosis; font-size: 18px; color: white; padding: 18px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>SaveTheDate</strong></a></td>
                        </tr> -->
                    </table>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="card">
                  <div class="containerweddingwd">
                    <table align="right" style="color: #63402f;">
                      <tr>
                        <th align="right" style="width: 80%;">
                          <p style="font-size: 18px; font-family: dosis; color: #63402f; text-align: right;"><b>Resepsi Pernikahan</b></p>
                        </th>
                        <th></th>
                        <th style="width: 20%"><img src="<?= base_url() ?>/assets/de18wdresepsi.png" width="100%"></th>
                      </tr>
                      <tr align="right">
                        <td>Minggu, 26 Desember 2021</td>
                        <td><i class="fa fa-calendar"></i></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td><br></td>
                        <td></td>
                      </tr>
                      <tr align="right">
                        <td>13.00 - 15.00 WIB</td>
                        <td><i class="fa fa-clock-o"></i></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><br></td>
                        <td><br></td>
                        <td></td>
                      </tr>
                      <tr align="right">
                        <td>Gedung Achmad Yani</td>
                        <td><i class="fa fa-map-marker"></i></td>
                        <td></td>
                      </tr>
                      <tr align="right">
                        <td>Jl. Jend. Gatot Soebroto,</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr align="right">
                        <td>Jurangombo Utara,</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr align="right">
                        <td>Magelang</td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr align="right">
                        <td><br></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr align="right">
                        <td><a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=MjNtdjU4dTNxazQ1dGhtdGk2aWVtYmozczEgYmxrb2M5ZHFvcGs3a2trNm9nNnAzNDlzaDRAZw&amp;tmsrc=blkoc9dqopk7kkk6og6p349sh4%40group.calendar.google.com" target="_blank" style="background-color: #b8765e; font-family: dosis; font-size: 18px; color: white; padding: 18px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>SaveTheDate</strong></a></td>
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
          <div style="clear:both"></div>
          <!-- startprotokolkesehatan -->
          <div class="explainbride" style="background-color: #b8765e; width: 100%; margin: auto; box-shadow: 1px 1px 5px #888888; padding: 10px; border-radius: 10px; color: white;">
            <p><i style="color: white;" class="fa fa-heart"></i><br>
              Guna mencegah penularan covid-19 kami harapkan kedatangan para tamu undangan tetap menerapkan protokol yang berlaku :
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
          <p class="explainbride">Merupakan suatu kehormatan dan kebahagiaan<br>bagi kami apabila Bapak/Ibu/Saudara(i)<br>berkenan untuk hadir dan memberikan do'a restu<br>kepada kedua mempelai.</p>
          <br>
          <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8005853713566!2d110.21351231477622!3d-7.487258394599172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f6aa5ee45b3%3A0xdc07f0e500ac48d6!2sGedung%20Jenderal%20Achmad%20Yani%20Magelang!5e0!3m2!1sid!2sid!4v1610687413981!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div><a href="https://goo.gl/maps/fWm7LDTq3SbK7ohB6" target="_blank" style="background-color: #b8765e; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>OpenMap</strong></a>
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
    <div id="Moment" class="tabcontent">
      <div class="corner1">
        <img alt="" width="100%">
      </div>
      <div class="corner2">
        <img src="<?= base_url() ?>/assets/de18oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img src="<?= base_url() ?>/assets/de18oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
        <img src="<?= base_url() ?>/assets/de18oraset4.png" alt="" width="100%">
      </div>
      <div class="corner5">
        <img src="<?= base_url() ?>/assets/de18oraset5.png" alt="" width="100%">
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
          <br>
          <h3 style="font-family: Angelface; font-size: 35px; color: #b8765e">Gallery</h3>
          <p class="explainbride">Momen Bahagia Jendro-Sastro</p>
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
                <img src="<?= base_url() ?>/assets/demogal01.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
                <img src="<?= base_url() ?>/assets/demogal03.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
                <img src="<?= base_url() ?>/assets/demogal05.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
                <img src="<?= base_url() ?>/assets/demogal07.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
                <img src="<?= base_url() ?>/assets/demogal09.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
              </div>
              <div class="w3-half">
                <img src="<?= base_url() ?>/assets/demogal02.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
                <img src="<?= base_url() ?>/assets/demogal04.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
                <img src="<?= base_url() ?>/assets/demogal06.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
                <img src="<?= base_url() ?>/assets/demogal08.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
                <img src="<?= base_url() ?>/assets/demogal10.jpg" style="width:100%" onclick="onClick(this)"
                  alt="LeiayuTripati">
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
        <img src="<?= base_url() ?>/assets/de18oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img src="<?= base_url() ?>/assets/de18oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
        <img src="<?= base_url() ?>/assets/de18oraset4.png" alt="" width="100%">
      </div>
      <div class="corner5">
        <img src="<?= base_url() ?>/assets/de18oraset5.png" alt="" width="100%">
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
          <br>
          <h3 style="font-family: Angelface; font-size: 35px; color: #b8765e">Story</h3>
          <p class="explainbride">Kisah Bahagia Jendro-Sastro</p>
          <p class="explainbride">--</p>
          <p class="explainbride">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</p>
          <p class="explainbride"><b>- QS. Ar-Rum: 21 -</b></p>
          <p class="explainbride">--</p>
          <!-- !PAGE CONTENT! -->
          <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">
            <!-- timeline start -->
            <div class="timeline">
              <div class="container left">
                <div class="content">
                  <div class="bg1content">
                    <h2><span style="font-size: 14px"></span>2016</h2>
                    <p>Kami pertama kali bertemu satu sama lain di sebuah acara peminatan di kampus. Kami berkenalan karena kami menjadi perwakilan masing-masing divisi kegiatan yang kami selenggarakan.</p>
                  </div>
                </div>
              </div>
              <div class="container right">
                <div class="content">
                  <div class="bg1content">
                    <h2><span style="font-size: 14px"></span>2018</h2>
                    <p>Setelah lama tidak bertemu akhirnya kami bertemu kembali di sebuah acara seminar profesional. Kebetulan kami berada di bidang yang sama.</p>
                  </div>
                </div>
              </div>
              <div class="container left">
                <div class="content">
                  <div class="bg1content">
                    <h2><span style="font-size: 14px"></span>2020</h2>
                    <p>Salah satu momen yang tidak disangka, Ken melamar saya dengan langsung menyatakan keinginannya kepada ayah saya. Kami pun bersiap dengan petualangan baru.</p>
                  </div>
                </div>
              </div>
              <div class="container right">
                <div class="content">
                  <div class="bg1content">
                    <h2><span style="font-size: 14px"></span>2021</h2>
                    <p>Momen spesial kami akan dimulai dari titik ini, momen kebahagiaan kami bersama membangun keluarga kecil kami. Semoga Allah SWT memberikan keberkahan untuk pernikahan kami.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- timeline end -->
            <br>
            <div class="">
              <p class="explainbride">Ucapan Selamat & Doa untuk<br>Jendro-Sastro</p>
            </div>
            <div class="wishspace">
              <div class="wishcontainer">
                <form action="#" method="post">
                  <label for="nama">Nama</label>
                  <input type="text" id="nama" name="nama" placeholder="Nama.." required>
                  <label for="ucap">Ucapan</label>
                  <textarea id="ucap" name="ucap" placeholder="Ucapan Doa & Harapan.." style="height:100px" required></textarea>
                  <input type="submit" name="submit" value="Send">
                </form>
              </div>
              <br>
              <div class="wishdisplay">
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Riyandanu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat untuk Leia dan Pati, Semoga dilancarkan segala urusannya yaa, kelak menjadi keluarga yang Sakinah Mawadah Warohmah, selalu diberikan kebahagiaan dan keberkahan selalu, serta cepet dapet momongan, aamiin                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Arini                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamaat Leia &amp; pasangan! Barakallah.. Semoga jadi keluarga sakinah, mawadah wa rahmah ya kaliaann, dijadikan jodoh sampai maut memisahkan dan dipertemukan lagi di jannahNya, semoga bahagia mendominasi hidup baru kalian dan dipercayakan keturunan yang sholeh dan sholeha, Aamiinn😇                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tikasari                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semalat ya Leia sayangg dan calon suami yang bentar lagi jadi suami.. Semoga lancar sampe hari H apapun itu.. Semoga kedepan bisa jadi keluarga kecil yang sakinah, mawaddah, &amp; warrahmah.. #hug&amp;lovefromtika                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Afiani dan Zidan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        MasyaAllah Tabrakallah semoga selalu diberikan kebahagian dan keberkahan dalam keluarga barunya ya Leiaa Putriii dan suami, segera di karuniai momongan dan Semoga jadi keluarga yg SAMAWA!😇❤❤❤                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mutiara Hanif                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Dear mbak Leia ku sayang, mbak kos paling bawel dan endel😘 Selamat telah menemukan teman hidup yg dinanti nanti sejak dulu. Semoga acaranya lancar, keduanya sehat selalu, tidak ada satu halangan apapun sampai hari H❤️❤️                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Maharani WD                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamaat Leia &amp; Ken! Barakallah.. Semoga jadi keluarga sakinah, mawadah wa rahmah ya kaliaann, dijadikan jodoh sampai maut memisahkan dan dipertemukan lagi di jannahNya, semoga bahagia mendominasi hidup baru kalian dan dipercayakan keturunan yang sholeh dan sholeha, Aamiinn😇                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tim Diyandra                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat bro Ken dan pasangan semoga dimudahkan semua acaranya sampai setelahnya dan selamanya, jadi keluarga yang sakina mawaddah warrahman, bahagia selalu sampai kematian memisahkan...                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        nate was here                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Angga                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga angga bisa nyusul                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Maryam                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Barakallah ^_^                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Yyu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Maria                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat mba Leia dan mas Ken. Tuhan perlancar hingga hari H yaa :)                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Arka                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya ka, semoga lancar sampe hari H. Semoga aku bisa cepet nyusul juga taun depan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tree                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat menempuh hidup baru                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        AdindaNia                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya LeiaKen, BahagiaSelalu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        AdindaNia                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya LeiaKen, BahagiaSelalu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tonida                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat untuk Leia dan Pati, Semoga dilancarkan segala urusannya yaa, kelak menjadi keluarga yang Sakinah Mawadah Warohmah, selalu diberikan kebahagiaan dan keberkahan selalu, serta cepet dapet momongan, aamiin                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dian Kharisma                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat Kak Aiu dan Ken. Bahagia selalu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Zakira Dio                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mantap Brooo...  Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Arinda                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat menempuh hidup baru                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Nick                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Happy selalu yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Nana                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat utk Leia dan Pati.. Lancar smua persiapan smp hr H. Bahagia seterusnya. Amin                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Fahmi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya semoga menjadi keluarga yang sakinah mawadah warohmah bahagia dunia dan akhirat  dan di beri keberkahan                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ceve                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        xxx                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        xxx                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        nero                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat bro                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        nabil                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        dicobaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        yayayayay ulalalalla                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit erat id nunc porttitor suscipit. Etiam scelerisque justo vitae sollicitudin pulvinar. Praesent in tellus nulla. Aliquam erat nisl,                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit erat id nunc porttitor suscipit. Etiam scelerisque justo vitae sollicitudin pulvinar. Praesent in tellus nulla. Aliquam erat nisl, interdum laoreet enim eu, ullamcorper accumsan ligula. Nulla convallis felis vitae diam vestibulum, ac fermentum erat hendrerit. Integer suscipit lorem massa, eu fermentum sapien vulputate at. Cras pretium risus a dui bibendum, sit amet blandit ipsum posuere. Ut hendrerit suscipit ante, consequat facilisis tellus facilisis vel. Donec tincidunt justo nulla, ut sollicitudin nisl suscipit et. Suspen                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit erat id nunc porttitor suscipit. Etiam scelerisque justo vitae sollicitudin pulvinar. Praesent in tellus nulla. Aliquam erat nisl,                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit erat id nunc porttitor suscipit. Etiam scelerisque justo vitae sollicitudin pulvinar. Praesent in tellus nulla. Aliquam erat nisl, interdum laoreet enim eu, ullamcorper accumsan ligula. Nulla convallis felis vitae diam vestibulum, ac fermentum erat hendrerit. Integer suscipit lorem massa, eu fermentum sapien vulputate at. Cras pretium risus a dui bibendum, sit amet blandit ipsum posuere. Ut hendrerit suscipit ante, consequat facilisis tellus facilisis vel. Donec tincidunt justo nulla, ut sollicitudin nisl suscipit et. Suspen                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit erat id nunc porttitor suscipit. Etiam scelerisque justo vitae sollicitudin pulvinar. Praesent in tellus nulla. Aliquam erat nisl,                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras blandit erat id nunc porttitor suscipit. Etiam scelerisque justo vitae sollicitudin pulvinar. Praesent in tellus nulla. Aliquam erat nisl, interdum laoreet enim eu, ullamcorper accumsan ligula. Nulla convallis felis vitae diam vestibulum, ac fermentum erat hendrerit. Integer suscipit lorem massa, eu fermentum sapien vulputate at. Cras pretium risus a dui bibendum, sit amet blandit ipsum posuere. Ut hendrerit suscipit ante, consequat facilisis tellus facilisis vel. Donec tincidunt justo nulla, ut sollicitudin nisl suscipit et. Suspen                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ok                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Isisissi
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hjj                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kntl                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ok syg                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        aaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        qqqqqqqqqqqq                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        qqqqqqqqqqqqqqq                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        priyanto                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        SELAMAT...                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ri                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Jsjak                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tggy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ggggy                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        X                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        S                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        A                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ASDA                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        nns                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        bdbd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        jaka                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        nd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aji doang                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hasrul                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bagus                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        f                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        fff                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Wkwkw                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hoho                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        arya                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ngetes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ana                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Safira                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Samawa yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Indah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Awan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        A                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        A                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ian                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mantap, happy Hondo2 seba                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Arpi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Gaplek                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Art                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Adiandari                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat LeiaKen                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Riani                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrats                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tesa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Sukses                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Cek                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rinda                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sobari                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dimas                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Basrakallah semoga lancar dalam kehidopana                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Testing                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Puri                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Sakinah , Mawaddah , warahmah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Xa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hahaha                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mediana                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga dilancarkan semuanya ya kak                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dian                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Barakallahu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Vvv                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Jj                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Adi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya dek                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rakjel                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat dek dgn pilihan mu, biar abang sakit hati sendiri yang penting adek bahagia meski bukan sama abang.                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Oke                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ciee                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rian                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tesss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rian                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asdf                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Susan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya. Semoga lancar sampai hari pelaminan.                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Demo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Demo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        samlekom                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hehe                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        TEST                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        TEST                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dillah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        P                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Makmur                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Testing
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        haha                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hihi                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Angga                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        SaMaWa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Nizam                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ppp                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Abc                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tesss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Peter                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Jadi berasa di undang.  Padahal ga kenal. Gara gara liat demo undangan. Nanti ku datang ya 😁                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Yy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrast                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        TEST                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        AGS                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asdasd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asdasd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        haha                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asdasd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        BAPAK                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        HAHAHA HIHI BACOT                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        AING JOMBLO                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        KUY NIKAH                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        G                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Qoni                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Testes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Yuhu                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Muslimah                                         
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congratulations 🎊 😊                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ff                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        fff                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        gh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ghgh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Muhammad panca muliadi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Gw g kenal sih.  Tp gw mau ucapi 
                        Hp wedding :)                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dewi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congratsss !                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mawar                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrats                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Yuhu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Arif                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat dekkeng                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Joni                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaaa Mas Tripati dan Mba Leiayu...                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Joni                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sgg                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Dfgvbb                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        .                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        .                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        rrr                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        rrr                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sssss                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        aas                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Indra sutrisno                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga menjadi keluarga sakinnah mawaddah dan warrohmah                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Riantes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrats                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Yo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Yo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Alica                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Happy wedding, semoga menjadi keluarga samawa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Alica                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Happy wedding, semoga menjadi keluarga samawa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        fauzi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat ya kak                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Biji                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tau ah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bagas                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat bahagia dengan pilihan mu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        h                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Fauzi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mantap                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Gia                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hey                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        afgansah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selmt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Nice                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        afgansah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        sah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Abdul                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Barakallahualaik                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Cindy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Jjj                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        My                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Yuhu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Cc                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Fff                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ozi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test doang                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ss                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        myd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ddd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ddd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ss                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ryan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Fgg                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ghhj                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dendi Ramdani Sutandi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hai                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Iqbal                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sukma                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Slamat ya :D                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ananda                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Vvxvbj                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mm                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bbb                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes ucapan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Amir                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaa...                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Theks                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Oke                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tukijan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hu mau nikah.                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        afri                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        rstu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Nkhn                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Testing                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ~~~                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hmmmm                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aisyah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamaat yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Anonim                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Keren Mas :)                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Selamat pagi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya yg jadi contoh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tuti                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rakaniya.                                         
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Wow                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        demo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aku siapa..                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Aku dimanaa?                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        coba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mira                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        nur                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        fddsfsdfsdfs                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        fsdfsdfsdfsfdfs                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Udin                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat mantap mantap                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Romo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Uhuy                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Unknown                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaa mba dan mas nya, semoga bahagia selaluuu🕊️✨
                        Semoga saya segera dipertemukan dengan jodoh yang mengerti agama &amp; shaleh. Insyaallah doa baik akan berbalik. Aamiin😇                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        hi!                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        aaa selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mulyadi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Cieeeeee                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ziyad                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat Yaa
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        fasf                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Zeen ahmed                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga bahagia slalu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Demo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Noki                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yah, semoga cepat dapat momongan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tessss                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tessssss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Coba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes 1                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Love                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bella                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Love                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        wawan keren                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        lorem ipsum                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        wawan keren                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        lorem ipsum                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Coba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Coba                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ani                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamatttt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kampungan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Dasar anda                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Jfjfjjf                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Samawa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Joni                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mantap mantap                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Iqbal                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrats ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ngentot                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ngentot ya                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sad                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        sad                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Fo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rara                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamattt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Adit                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mantap                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        jembut garing                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        enaaaakkkk                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ken                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Abimanyu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat berkemban biak kawan 💦                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        indah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat atas pernikahannya, semoga menjadi keluarga yg berbahagia                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Janoko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ok                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Customer                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bu tedjo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Oke                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kirito                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Chikitita                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga disegerakan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Chikitita                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga disegerakan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        reyza                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        semoga menjadi keluarga sakinah mawaddah wa rahmah dan saya menyusul menikah di tahun 2020 ini... allahumaamiin.                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        muhammad reyza ramadhan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        InsyaAllah.... saya menikah dengan fitria hafidzoh pada hari Minggu, tgl 1 November 2020                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        muhammad reyza ramadhan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        InsyaAllah saya akan menikah dengan Fitria Hafidzoh pada hari Minggu, 1 November 2020                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        muhammad reyza ramadhan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        InsyaAllah saya akan menikah dengan Fitria Hafidzoh pada hari Minggu, 1 November 2020                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        muhammad reyza ramadhan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        InsyaAllah saya akan menikah dengan Fitria Hafidzoh pada hari Minggu, 1 November 2020                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Wowo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selmat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        susu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        kental                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        R Besar                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Keren                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mantan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hiks                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        User                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat berbahagia                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        T                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aditya dan Gandhis                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga diberkahi                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Susu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Kental Manis                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Cook                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Thell                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        muhammad lzzudin Kota Tegal 2021 &amp; sofiatul azizah kota Tegal 2021                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        sofiatul azizah kota Tegal 2021 &amp; muhammad lzzudin Kota Tegal 2021                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        bebek                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        kwek kwek kwek                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        123                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Inot                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Slmt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        elian                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat ngentot yaa crot dalem                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Irman                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yak                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        J                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ♥️                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Harman, S.Pd, MM                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat untuk Leia dan Pati, Semoga dilancarkan segala urusannya yaa, kelak menjadi keluarga yang Sakinah Mawadah Warohmah, selalu diberikan kebahagiaan dan keberkahan selalu, serta cepet dapet momongan, aamiin                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Syarif Hidayat                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hdhsjkandb                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mira                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrats                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Customer                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat..                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Johan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat menempuh hidup baru                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Agus zaka                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat y bro                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Xxxxx                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Cccc                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Nae                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrats                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ngetes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat kak hehe                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        nada                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test ucapan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mrs. Y                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat kak                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Siti                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        meidy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamattt yahhh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Syarif                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ttesss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes nama                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes ucapan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        kita bersama                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aku ganteng gaesaku ganteng gaesaku ganteng gaesaku ganteng gaesaku ganteng gaes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        aku ganteng gaesaku ganteng gaesaku ganteng gaesaku ganteng gaesaku ganteng gaesaku ganteng gaes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bool                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Udh ga tahan mau berak                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Unul                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Happy wedding, samawa 😍                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Anjay lutfi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Anjay mantap                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Welcome                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;script&gt;alert(123)&lt;/script&gt; &lt;script&gt;alert(“hellox worldss”);&lt;/script&gt; javascript:alert(“hellox worldss”) &lt;img src=”javascript:alert(‘XSS’);”&gt; &lt;img src=                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;script&gt;alert(123)&lt;/script&gt;
                        &lt;script&gt;alert(“hellox worldss”);&lt;/script&gt;
                        javascript:alert(“hellox worldss”)
                        &lt;img src=”javascript:alert(‘XSS’);”&gt;
                        &lt;img src=javascript:alert(&amp;quot;XSS&amp;quot;)&gt;
                        &lt;”’;alert(String.fromCharCode(88,83,83))//’;alert(String.fromCharCode(88,83,83))//”;alert(String.fromCharCode(88,83,83))//”;alert(String.fromCharCode(88,83,83))// →&lt;/SCRIPT&gt;”&gt;’&gt;&lt;SCRIPT&gt;alert(String.fromCharCode(88,83,83))&lt;/SCRIPT&gt;
                        &lt;META HTTP-EQUIV=”refresh” CONTENT=”0;url=data:text/html;base64,P                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;script&gt;alert(123)&lt;/script&gt;                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;script&gt;alert(123)&lt;/script&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;script&gt;alert(“hellox worldss”);&lt;/script&gt;                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;script&gt;alert(“hellox worldss”);&lt;/script&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aaaddd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        aaaddd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sss                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        sss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ccdd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ccdd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Yol                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bunga                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamaaat 4 u both 😂                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tuti                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        eko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        nisa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        anjar                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hallo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Halo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        M                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        😭                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Agag                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ahshshs                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Vero                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        beben                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        happy wedding.. God Bless You 🥳🥳                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Pelakor                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Siap2 aku akan datang                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hsjsjs                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bansjsjs                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tess                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Jjjj                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Kkkkk                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Jounaldo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hahahaha                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Y                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Y                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Putri                                         
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Lucuuuu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hmm                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tia                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat semoga bahagia selalu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamet ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Susilo adi saputra                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Kerennnnn banget cokkkk                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aku                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bacot                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Cia                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Gh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ryyy                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        maya                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat ya langgeng terus                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        yg                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ttttttttt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tekun                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat atas pernikahan nya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ica                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Babang                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Baksooooo!                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Faroh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ❣️❣️❣️                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Andre                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Slamay                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        MUHAMMAD NASRULLOH                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        As u wish                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asssssssssssssssssssssssssss                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        hjhj                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hvgh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        jhj                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        dt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Lia                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Trial                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Nice                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ANAFI AULIANA                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat menikah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dodo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Wah selamat ya
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dian                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ejshsh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eea                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eea                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eea                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eea                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bejo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Opo iki                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hehe                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hehe                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Coba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Seep                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        jupri                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        kontol                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Maduu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Samawa until jannah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                      </div>
                      <div class="" style="padding-bottom: 10px">
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;style&gt;#Moment{background-color: red}&lt;/style&gt;                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        arifin                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        arifin                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Alta                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Isvi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        happy wedding yaa lancar sampr hari H                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bayu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga Sehat &amp; Bahagia selalu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Coba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Coba tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        zz                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        zz                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Wawan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Kutunggu janda mU                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Zz                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hii                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Coba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Yy lv raju                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Teni                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamattttttttt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mantan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Siap-siap aku bawa anggoto buat demo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Yfgy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Rtf                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Agsdg                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Dgsxgb                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hyy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamaat
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        dody                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        happy wedding                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Anak                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ulang tahun                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        a                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        a                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ok                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ok                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Intut                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aiueo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Aiueo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Aja                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        waw                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        A                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ayaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Huhuhehe                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ayu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Jangan lupa malam pertamanya videoin bro                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ame                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        restu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sela                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        wow                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ana                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat samawa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        yuhu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;! -                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aaaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tessss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ricky                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hi World!                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ca                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hai                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kuyung sok                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrats jok                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ahah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asasas                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sudar                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ..                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dilfi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat menempuh                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Iya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Naruto                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        yoi                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Naruto                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        YOU                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Elit quod minima qu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Voluptatem voluptas                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aap                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Happy wedding                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test5                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        siapa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ini siapa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bintang                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kekeyi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamaat Leia &amp; pasangan! Barakallah.. Semoga jadi keluarga sakinah, mawadah wa rahmah ya kaliaann, dijadikan jodoh sampai maut memisahkan dan dipertemukan lagi di jannahNya, semoga bahagia mendominasi hidup baru kalian dan dipercayakan keturunan yang sholeh dan sholeha, Aamiinn😇                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sugiono                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ntabs                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sapik                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat beb                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        miw                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hwd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        amin                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tis                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apak                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa namanya panjang apakah bisa                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Asep                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Yoga                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamaaaaat🥳🥳🥳🥳                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Anna                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Barakallah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tata                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Happy wikwik cahabatz ❤                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tws                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tws                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Asep                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Asep asep                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        cahyani                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        slamat yahh
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        DoNat                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ❤🍩.. wanita pertama yg akan selalu ad dihatiku untuk selamanya.                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Voni                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congratss                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Donny                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Cara batalin pertunangann gimana ya guyss? Stress.. dijodohin                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Fajar                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bekas tmn gue                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aaaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Aaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sdfa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        fadfadf                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mul                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Happy wedding                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Anonim                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Sukses selalu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asdasd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        kimax                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat lebaran                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mutiara                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Keren banget undangannya! 😍                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Abc                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        a                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        a                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        p                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ngntot                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        H                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        U                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        xx                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes woi                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hacker                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Cie tembus komennya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Andi thyara                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bahagia dunia akhirat😇🙏🏻                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Meuwa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Happy                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat Ya gan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hallo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        P                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aurelia Whitham                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hi there
                        If you want to get ahead of your competition then you must have a higher Domain Authority score for your website. Its just as simple as that. With our service your nikahankami.com DA score will get above 50 points in just 30 days.
                        This service is guaranteed
                        For more information, check our service here
                        https://speed-seo.net/product/moz-da50-seo-plan/
                        thank you
                        Speed SEO Digital Team
                        support@speed-seo.net                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        nikahank_ucapan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        nikahank_ucapan@localhost                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tiara                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Samawa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dhea                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        as                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        as                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Teguh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dani Aditya P                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Samawa ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Roy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ngetes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mantap                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ujang                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asik                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aaaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        candra                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hsdfsdf                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Amanda                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aaaaaaaaaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        aaaaaaaaaaaaaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aaaaaaaaaaaaaaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        qaaaaaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Iko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sapa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mencoba                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sese                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sese                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Lalala                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ajg                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ajg
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Anonym                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga sakinah mawadah warohmah                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Gins                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Jono                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        akhirnya halal juga                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        kkk                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;script&gt;alert(&quot;Dunsky&quot;)&lt;/alert&gt;                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;script&gt;alert(&quot;Dunsky&quot;)&lt;/alert&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;scriptx20type=&quot;text/javascript&quot;&gt;javascript:alert(1);&lt;/script&gt;
                        &lt;scriptx3Etype=&quot;text/javascript&quot;&gt;javascript:alert(1);&lt;/script&gt;
                        &lt;scriptx0Dtype=&quot;text/javascript&quot;&gt;javascript:alert(1);&lt;/script&gt;
                        &lt;scriptx09type=&quot;text/javascript&quot;&gt;javascript:alert(1);&lt;/script&gt;
                        &lt;scriptx0Ctype=&quot;text/javascript&quot;&gt;javascript:alert(1);&lt;/script&gt;
                        &lt;scriptx2Ftype=&quot;text/javascript&quot;&gt;javascript:alert(1);&lt;/script&gt;
                        &lt;scriptx0Atype=&quot;text/javascript&quot;&gt;javascript:alert(1);&lt;/script&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        riki                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        testimoni                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        kontol                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mntap                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Testing                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Pasti masuk                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sopo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Lha mbuh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Widya                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rine                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        adit                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        testing                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        T                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        H                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mas                                         
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Samawa kakak                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;script&gt;alert(123)&lt;/script&gt;                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;script&gt;alert(123)&lt;/script&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        TAEK                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        KOK ISO                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ddddd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Dd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mita                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Samawa ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Best Friend                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Pikacuh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hwd semoga diberi momongan secepatnya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Pikacuh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hwd semoga diberi momongan secepatnya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tiffiny Joyner                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hi there
                        Finally there is a Google Updates Free Service that has given proven results and that is backed by the customers! 
                        For more information, check our service here
                        https://speed-seo.net/product/serp-booster/
                        thank you
                        Peter Joyner
                        Speed SEO Agency
                        support@speed-seo.net                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;script&gt;alert(123)&lt;/script&gt;                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;script&gt;alert(123)&lt;/script&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;script&gt;alert(123)&lt;/script&gt;                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        CInta &lt;br&gt; &lt;br&gt; &lt;br&gt; &lt;br&gt; &lt;br&gt; &lt;br&gt; &lt;br&gt; &lt;br&gt; &lt;br&gt; &lt;br&gt; kamu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        h                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Asik                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sas                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        anto                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat ena ena                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        A                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Aa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test 05-12-2020                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Fenty Aryany                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bbb                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hwhh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hehehhwh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        hhh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        met                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Temennya kekeyi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Yey congrast                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        jsdjah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        khjkdajskdjajda                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tesa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        hamba allah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Alhamdulillah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        wildan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        waw keren                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        awa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        wow                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        wildan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;h1 &gt;wildan&lt;/h1&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ALDO                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ANNJJJAAYY                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rrr                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ygyyy                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        jasj                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        jsdksjdksa
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Nikahankami.com                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Contoh undangan online                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mantan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;script&gt;alert(1)&lt;/script&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hehe                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dedy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hari Andra                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Nuril                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ali                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        kahsias                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mamang Cireng Depan SD                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        riyandaanu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        jshgdflkjsbdfbsljbflw                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mawar                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        febrian                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat kentu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Noname                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Happy wedding                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ican                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        haii                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        hahaha                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        bahahah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Gshhs                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hahaau                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dhofiri                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Keren                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        mughu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        mughu channel                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tester                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tester                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        a                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        coba dulu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        yaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        RizkyIndahC                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        wefwe                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        wefwe                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Heuy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        cek                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        hh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Xxnx                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Siip                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ahmad                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat semoga Samawa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ecko Show                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga lancar sampe hari h yo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aku                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ciye                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Wko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semiga langens                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        coba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        cobaaa1                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Wilson                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya brader                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ggg                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ggg                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Cakrawala Jaya Sakti                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat bro                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Cakrawala Jaya Sakti                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        dddd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Gghb                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Vghh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Coba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Woi sendal gw ilang bang,, balikin dong                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tester                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mantan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Deri                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Y                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        J                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tt                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Good                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tael                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat y                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;script&gt;alert(“ok”)&lt;/script&gt;                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        muchlis                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ali Abdul Wahid Wafi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ghhgh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        U                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        J                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ria                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asas                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asasa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        rudi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat yaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;?php echo &quot;image-babi&quot; ?&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test  z                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        HELLO                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hello                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asfas                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        sasd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rey                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        din                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selmat,🎉🎉🎉                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ahyar                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ngetes selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        hh                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asmet                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        amen                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hj                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        semoga panjang umur                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tri                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Joe                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Cek                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Cek                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ipan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Cuyy                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Giroud                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ami                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Maksih                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Adamm                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mantapp                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Munir                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ddd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ddf                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Omnis sunt aut dolo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Id officia praesenti                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ucok                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aye                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hwd                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Gesta                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Asik                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        cek                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        cek                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        cek                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        cek                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rui                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        halo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Zukkal                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Loremipsum                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        To2k                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test ucapan selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        vx                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        xxb                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Cxxx                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Unch                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Riyandanu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat untuk Leia dan Pati, Semoga dilancarkan segala urusannya yaa, kelak menjadi keluarga yang Sakinah Mawadah Warohmah, selalu diberikan kebahagiaan dan keberkahan selalu, serta cepet dapet momongan, aamiin                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes123                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes aja                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        saya                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes doa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ujj                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Uyuh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kirim                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ucapan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        wo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Nama                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ucapan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Soehartoe                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Piye kabar e?                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        keren                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        AHHA                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Atta using nikahankami                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kakek Legend                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Buka xvideos.com cu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rini dodot                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat menempuh hidup baru                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        IlhamIsGod                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        GG GEMINK                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Naruto                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Yah kelewatan dattebayo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Jun vtubers                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga sakinah mawadah warahmah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        😁                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya, smg bahagia selalu :)                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Atin                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat berbahagia                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        WkWkwk                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Syukron                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        M. Fadhli                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bagus sekali undangannya..                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Javier                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Slmt yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        hihi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aku dan Kamu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test🙏
                        Semoga samawa ya🤗😇                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        mantap                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;IMG &quot;&quot;&quot;&gt;&lt;SCRIPT&gt;alert(&quot;XSS&quot;)&lt;/SCRIPT&gt;&quot;&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        kidul biru                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        kidul biru                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        memed                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;&lt;&lt;&lt;&lt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &amp;lt;&amp;lt;&amp;lt;&amp;lt;&amp;lt                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        momod                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        suka merpati                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        /?title=%26%23x003C;script%26%23x003E;alert(1)%26%23x003C;/script%26%23x003E;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Explicabo Aut volup                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Minima tempore non                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Asd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Cihuy                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        hihihi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ujang                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrats                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        SF SF                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        SF S                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tessss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ass                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asas                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        djf                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ckkcr                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ghbgbttgb                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        bggbgtbgbtgb                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ghbgbttgb                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        jkkjgkmjkhjkjhkhj                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Harfita                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        siappp                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &amp;lt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        223c7363726970743e616c6572742827776f6927293c2f7363726970743e22                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        223c7363726970743e616c6572742827776f6927293c2f7363726970743e22                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        &lt;scr&lt;script&gt;ip&gt;                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;scr&lt;script&gt;ip&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Al                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;h1&gt;mau nyoba dulu baru beli                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Gery                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Firman                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mudah&quot;an makanannya enak nnti                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ggg                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hhh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Cheryl                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat menempuh hidup baru,                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sigit                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ya ampun selamat and congratsss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes tulis html                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        &lt;strikeout&gt;coba&lt;/ strikeout&gt;                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Annisa Rahma                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sarah pebriyanti tule                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Smg jadi keluarga samawa kaka                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Andinii                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Amat                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga langgeng gaes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        agul                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        kece                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bang bejo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ..                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ashanul                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat menikah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tono                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        keren                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tetet                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tett                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        testr                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        rtess                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test aja                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Mantap jiwa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ok                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ok                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        elisabet                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        samawa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sss                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        sfsfasv                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ipul                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        -                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        😁                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asdasd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        dasfasfas                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aaaaaaaa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Asxcfvvcxdcv                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bot                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Q                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bot indo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        A                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bot indo lagi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        H                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ddd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Asd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test drive                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aas                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dede                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Nn                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ahaaay                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asasa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        asasasas                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Yas                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        😘💕                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Joko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya.                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        KONTOL                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Anjing                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Adinda                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya❣️                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes aja                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dfdd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Xxd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Budiman Santoso                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ghjkgjhjg                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ggggg                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        gggggg                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        asa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        1                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Joko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Naz                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hahaha                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dewi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        s                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        s                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Jerrod Mendes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Promote your website the easy way without paying huge advertising costs. More info: https://bit.ly/results-marketing                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        kapten amerika                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        geli ah pas baca komen
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Y                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        G                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Saya                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Halo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ber-mantab mantab semoga pancar                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        cekkkkk                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Joyin                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ujang                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        sads                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        sdfsf                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        f                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        database()
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Gag                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Haha                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        aeifvaihbv                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        jhbdfkjb                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        ssdsd                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        dsds                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        danang                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        enak                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        AzKa                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Slmt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        fdg                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        dfgdf                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Yaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Justin Dellinger                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        It is actually possible to promote your website nowdays without paying huge advertising costs. Check it out: https://urlday.cc/rqbim                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ok                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        h                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hh                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kevin                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaaa kaka                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kevin                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaaa kaka                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Y                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ooo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Yeye                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Amir                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Crot                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Hhhdd                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rina Jhora                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga bahagia dunia &amp; akherat aamiin                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Coba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Coba                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hai                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Xyz                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ok                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Ok                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        lenny                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ucapan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hkll                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Nnjk                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mencoba                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Prikitieww                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Prikitiew                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Lee jong suk                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ir. Joko Widodo                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Saya ucapkan selamat untuk pernikahan kalian.                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sule Prikitiw                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Kangen Parto                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ud7r7                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        8rir                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Templatenya biasa aja sih                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Sumpah jelek                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Rina &amp; Budie                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Congrats Dear 🌹                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        fii                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hii                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ruru                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        test ucapan                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Iissity                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Aduh jadi pengen nikah😂 btw ini siapa yaa, aku ga kenal cuma lewat di demo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Dimas Permana                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        keren                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Diego Liu                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Automatic ad submission to thousands of ad sites every month. Submit your ad now: https://cutt.ly/KRdrur7                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Test                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bla                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bla                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        reino                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        semoga bahagia                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Jokowi                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        saya kasih sepeda buat kalian. semoga kalian senang dan bahagia                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Testt                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Suzana Malaon                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tesss                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hhj                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Bagus                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Heriani wijayanti                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        T                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        lorem                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        hallo test 123                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Aku                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Kamu                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eky Noviansyah                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Semoga Langgeng                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Liem                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Panggil aja sayang                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        SAMAWA yahh                                         
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        klklklkLK                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        lklklklkl                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Test                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Cume tes woy                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Wilda Clancy                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Here is a list of sites where you can post free ads:  https://urlday.cc/g3ypr                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mantan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        kita bulan madu  bareng                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        a                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        a                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Eko                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Samawa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        adam                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        anonymouse                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Root                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        yyyyyyyyyyyyyyyyyyyyy                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Ffff                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Fff                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Sepia                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Kamu jahaaay                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Alison Hargraves                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Greetings
                        If you ever need Negative SEO to de-rank any site, you can hire us here
                        https://www.speed-seo.net/product/negative-seo-service/
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Hzja                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Jaus                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Uaus                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Jaja                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Toni                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Testo                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Fatur                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat ya                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        jajang                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        tes                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Bew                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Habede                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Adib                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Selamat yaaa                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mantap                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ah ah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mantap                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ah ah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Mantap                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        ah ah                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        G                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        G                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Testing                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        AHMAD DAHLAN                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        AAAA                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        tes                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        selamat                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Kurniawan                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Senggol y                                        
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Yulinda &amp; jason febrian hadinata                                         
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Doa                                          
                      </div>
                    </td>
                  </tr>
                </table>
                <table>
                  <tr>
                    <td style="" valign="top">
                      <img src="<?= base_url() ?>/assets/de18wish4ava.png" width="25px">
                    </td>
                    <td style="background-color: #b8765e; color: white; padding-left: 8px; padding-right: 8px; border-radius: 4px; width: 100%">
                      <div class="wishdisplayname">
                        Tono                                        
                      </div>
                      <div class="" style="padding-bottom: 10px">
                        Qkwkwk                                        
                      </div>
                    </td>
                  </tr>
                </table>
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
          document.getElementById('unmute-sound').addEventListener('click', function (event) {
              document.getElementById('unmute2-sound').style.display = 'none';
              document.getElementById('mute-sound').style.display = 'inline-block';
              document.getElementById('song').play();
          });
          
          document.getElementById('unmute2-sound').addEventListener('click', function (event) {
              document.getElementById('unmute2-sound').style.display = 'none';
              document.getElementById('mute-sound').style.display = 'inline-block';
              document.getElementById('song').play();
          });
      
          document.getElementById('mute-sound').addEventListener('click', function (event) {
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
      
      var deadline = new Date("december 26, 2021 13:00:00").getTime();
      
          var x = setInterval(function () {
      
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
    <script type="text/javascript" src="../../atemplate/jquery-1.10.1.min.js"></script>
    <script>
      //Get the button
      var mybutton = document.getElementById("myBtn4");
      
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      
    </script>
  </body>
</html>