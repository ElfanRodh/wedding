<!DOCTYPE html>
<html>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/favicon.png">
    <meta charset="UTF-8">
    <title>Jendro & Sastro wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Spesial mengundang untuk menghadiri pernikahan kami. Jendro-Sastro" />
    <meta name="keywords" content="undangan digital, undangan online, undangan nikah, website undangan, pernikahan, wedding, marriage" />
    <meta name="author" content="(admin@nikahankami.com)" />
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
    <link rel="stylesheet" href="<?= base_url() ?>w3style2.css">
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
      background-image: url("<?= base_url() ?>/assets/bgsky.jpg");
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
      background-color: #637382;
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
      .procolumn {
      text-align: center;
      float: left;
      width: 50%;
      padding: 2px;
      /*height: 200px; */
      }
      .procolumntext {
      font-family: dosis;
      font-size: 12px;
      padding-right: 7px;
      padding-left: 7px;
      padding-bottom: 10px;
      }
      /* Clear floats after the columns */
      .prorow:after {
      content: "";
      display: table;
      clear: both;
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
      src: url('<?= base_url() ?>/atemplate/Litine.ttf');
      font-family: litine;
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
      background-image: url("<?= base_url() ?>/assets/bgsky.jpg");
      /*background-color: #172740;*/
      opacity: 0.7;
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
      background-image: url("<?= base_url() ?>/assets/bgsky.jpg");
      /*background-position: center;*/
      opacity: 0.7;
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
      .iconbar a:hover {
      opacity: 1;
      /*background-color: #777;*/
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
      .corner1{
      width: 200px;
      position: absolute;
      top: 0;
      left: 0;
      z-index: 9;
      }
      .corner2{
      width: 200px;
      position: absolute;
      top: 0;
      right: 0;
      z-index: 9;
      }
      .corner3{
      width: 200px;
      position: absolute;
      bottom: 0;
      right: 0;
      z-index: 9;
      }
      .corner4{
      width: 200px;
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
      background-image: url("<?= base_url() ?>/assets/bgsky.jpg");
      background-size: cover;
      background-position: center;
      }
      #Couple {
      background-image: url("<?= base_url() ?>/assets/bgsky.jpg");
      background-size: cover;
      background-position: center;
      }
      #Eventwd {
      background-image: url("<?= base_url() ?>/assets/bgsky.jpg");
      background-size: cover;
      background-position: center;
      }
      #Moment {
      background-image: url("<?= base_url() ?>/assets/bgsky.jpg");
      background-size: cover;
      background-position: center;
      }
      #Quotewd {
      background-image: url("<?= base_url() ?>/assets/bgsky.jpg");
      background-size: cover;
      background-position: center;
      }
      .explainbride {
      font-family: dosis;
      color: black;
      }
      .bridefont {
      font-family: litine;
      font-size: 25px;
      color: black;
      text-shadow: 2px 2px 2px grey;
      }
      .fontfront {
      font-family: aldine;
      font-size: 100px;
      color: white;
      text-shadow: 2px 2px 2px grey;
      }
      /*** music box ***/
      .music-box {
      position: fixed;
      width: 300px;
      height: 160px;
      z-index: 120;
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
      .containerngunduhwd {
      margin: auto;
      text-align: center;
      font-family: dosis;
      font-size: 14px;
      line-height: 1;
      }
      .containerngunduhwd table {
      margin: auto;
      text-align: left;
      }
      .container4ijabwd {
      margin: auto;
      text-align: center;
      font-family: dosis;
      font-size: 14px;
      line-height: 1;
      }
      .container4ijabwd table {
      margin: auto;
      text-align: left;
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
      padding: 1px;
      border-radius: 3px;
      /* background: #00BF96;  */
      display: inline-block;
      }
      #clockdiv div > span{
      padding: 1px;
      border-radius: 3px;
      /* background: #00816A;  */
      display: inline-block;
      }
      #day {
      font-size: 50px;
      color: red;
      }
      .smalltext{
      padding-top: 2px;
      font-size: 24px;
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
      color: black;
      }
      @media screen and (min-width: 900px) {
      .vidline {
      padding-left: 30%;
      padding-right: 30%;
      }
      }
      @media screen and (min-width: 900px) {
      .vidline {
      padding-left: 30%;
      padding-right: 30%;
      }
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
      @media screen and (max-width: 600px) {
      .corner1 {
      width: 150px;
      }
      .corner2 {
      width: 150px;
      }
      .corner3 {
      width: 150px;
      }
      .corner4 {
      width: 150px;
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
      width: 80%;
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
      background-color: #637382;
      width: 100%;       
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      }
      input[type=submit]:hover {
      background-color: #4e5a66;
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
      color: black;
      }
      .wishdisplay {
      text-align: left;
      padding-left: 20px;
      padding-right: 20px;
      font-family: dosis;
      max-height: 400px;
      overflow: scroll;
      }
      .wishdisplayname {
      font-weight: bold;
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
        <p><img src="<?= base_url() ?>/assets/de13vintopwd.png" width="60%" style="text-align: center"></p>
        <p class="imgopenint"><img class='close' src="<?= base_url() ?>/assets/demoopenerimg.png" style="text-align: center"></p>
        <p style="text-align: center; line-height: normal;">Kepada Yth.<br><span style="font-size:12px">Bapak/Ibu/Saudara/i</span></p>
        <p style="color: #404040; font-size: 20px; font-weight:bold; padding-bottom:10px; border-radius:4px; text-align: center" id="write"></p>
        </p>
        <p><a href='#' id="unmute-sound" class='close'>Buka Undangan</a></p>
        <div style="clear: both;"></div>
        <p><img src="<?= base_url() ?>/assets/de13vintopwd.png" width="60%" style="transform: rotate(180deg); text-align: center"></p>
      </div>
    </div>
    <!-- start button pesan via WA -->
    <!-- <button onclick="window.location.href='https://api.whatsapp.com/send?phone=6281584067118&text=NikahanKami%0ASaya%20ingin%20pesan%20Undangan%20Digital%20Pernikahan%20seperti%20Demo13'" id="myBtn4" title="Pesan Undangan"><i class="w3-bar-block fa fa-whatsapp"></i> <span style="font-size:12px">Pesan</span></button> -->
    <!-- end button pesan via WA -->
    <div class="music-box">
      <button class="music-box-toggle-btn">
        <!--
          <i class="fa fa-music"></i> -->
        <audio id='song' loop>
          <source src="<?= base_url() ?>/atemplate/songbiw.mp3">
        </audio>
      <button type="button" class="music" id="unmute2-sound">
      <img border="0" alt="" src="<?= base_url() ?>/assets/soundgoldmusicoffwd.png"
        width="20" height="20">
      </button>
      <button type="button" class="music" id="mute-sound">
      <img border="0" alt="" src="<?= base_url() ?>/assets/soundgoldmusicwd.png"
        width="20" height="20">
      </button>
      </button>
    </div>
    <div class="iconbar">
      <a class="tablink" onclick="openPage('Cover', this, '#ffd4ed')" id="defaultOpen"><img src="<?= base_url() ?>/assets/de2tab1cover.png" width="35"><br><span>Home</span></a>
      <a class="tablink" onclick="openPage('Couple', this, '#ffd4ed')"><img src="<?= base_url() ?>/assets/de2tab2couple.png" width="35"><br><span>Couple</span></a>
      <a class="tablink" onclick="openPage('Eventwd', this, '#ffd4ed')"><img src="<?= base_url() ?>/assets/de2tab3event.png" width="35"><br><span>Event</span></a>
      <a class="tablink" onclick="openPage('Moment', this, '#ffd4ed')"><img src="<?= base_url() ?>/assets/de2tab4moment.png" width="35"><br><span>Gallery</span></a>
      <a class="tablink" onclick="openPage('Quotewd', this, '#ffd4ed')"><img src="<?= base_url() ?>/assets/de2tab5story.png" width="35"><br><span>Story+Wish</span></a>
    </div>
    <div id="Cover" class="tabcontent">
      <!-- <h3>Home</h3>
        <p>Home is where the heart is..</p> -->
      <div class="corner1">
        <img src="<?= base_url() ?>/assets/de2oraset1.png" alt="" width="100%">
      </div>
      <div class="corner2">
        <img src="<?= base_url() ?>/assets/de2oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img src="<?= base_url() ?>/assets/de2oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
        <img src="<?= base_url() ?>/assets/de2oraset4.png" alt="" width="100%">
      </div>
      <div class="corner5">
        <img alt="" width="100%">
      </div>
      <div class="corner6">
        <img alt="" width="100%">
      </div>
      <div id="homewd" class="contentwd">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
          <img src="<?= base_url() ?>/assets/de2vintopwd.png" alt="" style="display: inline-block;" width="100%">
        </div>
        <div class="content4pad">
          <div>
            <br>
            <h2 style="color: black; font-size: 35px; font-family: Angelface; padding-top: 10px">The Wedding<br><span style="font-size:12px" class="explainbride">Official Invitation</span></h2>
          </div>
          <div class="borderpair">
            <div class="namepair" style="line-height: 200%; padding-top:70px">
              <div style="padding-right:0px"><span class="fontfront">Jendro</span></div>
              <div class="fontfront" style="color: white; font-size: 40px;">&</div>
              <div style="padding-left:0px"><span class="fontfront">Sastro</span></div>
            </div>
            <div class="behindcname w3-spin"><img src="<?= base_url() ?>/assets/de2namecirclepair.png"></div>
          </div>
          <p style="color: #404040; font-weight:bold; padding-top:10px; padding-bottom:10px; border-radius:4px" id="write"></p>
          <div>
            <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=MjNtdjU4dTNxazQ1dGhtdGk2aWVtYmozczEgYmxrb2M5ZHFvcGs3a2trNm9nNnAzNDlzaDRAZw&amp;tmsrc=blkoc9dqopk7kkk6og6p349sh4%40group.calendar.google.com" target="_blank" style="background-color: #637382; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>SaveTheDate</strong></a>
            <p style="color: black; font-size: 30px; font-family: Angelface; padding-top: 1px">| 26 . Desember . 2021 |<br><span style="font-size:12px"
              class="explainbride">Magelang</span></p>
          </div>
          <div class="ornamentbg" style="width: 100%; margin: 0px; text-align: center;">
            <img alt="" style="display: inline-block; opacity: 0.3">
          </div>
        </div>
        <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
          <img src="<?= base_url() ?>/assets/de2vinbtmwd.png" alt="" style="display: inline-block;">
        </div>
        <br>
        <br>
        <br>
      </div>
    </div>
    <div id="Couple" class="tabcontent">
      <!-- <h3>News</h3>
        <p>Some news this fine day!</p> -->
      <div class="corner1">
        <img src="<?= base_url() ?>/assets/de2oraset1.png" alt="" width="100%">
      </div>
      <div class="corner2">
        <img src="<?= base_url() ?>/assets/de2oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img src="<?= base_url() ?>/assets/de2oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
        <img src="<?= base_url() ?>/assets/de2oraset4.png" alt="" width="100%">
      </div>
      <div class="corner5">
        <img alt="" width="100%">
      </div>
      <div class="corner6">
        <img alt="" width="100%">
      </div>
      <div id="bridewd" class="contentwd">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
          <img src="<?= base_url() ?>/assets/de2vintopwd.png" alt="" style="display: inline-block;">
        </div>
        <div class="content4pad">
          <div>
            <p style="font-size: 30px; font-family: Angelface; padding-top: 30px; color: black">Bismillahirrahmanirrahim</p>
            <div class="explainbride">Assalamu`alaikum Warahmatullahi Wabarakatuh<br><br>
              Maha Suci Allah<br>yang telah menciptakan makhluk-Nya<br>berpasang-pasangan.<br>Ya Allah semoga ridho-Mu tercurah<br>mengiringi pernikahan putra-putri kami:
            </div>
          </div>
          <br>
          <div><img src="<?= base_url() ?>/assets/demowdbride.png" width="40%" alt=""><br><span class="bridefont">Jendrowati<span style="font-size: 14px"></span></span>
          </div>
          <div class="explainbride">Putri dari<br>Bpk. Adiminto R. & Ibu Sulaiyu Asih</div>
          <br>
          <div class="explainbride">dan</div>
          <br>
          <div><img src="<?= base_url() ?>/assets/demowdgroom.png" width="40%" alt=""><br><span class="bridefont">Sastrowo<span style="font-size: 14px"></span></span>
          </div>
          <div class="explainbride">Putra dari<br>Bpk. Adipati Zouma & Ibu Nuraini Zara</div>
          <br>
          <br>
          <br>
        </div>
        <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
          <img src="<?= base_url() ?>/assets/de2vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
        </div>
        <br>
        <br>
        <br>
      </div>
    </div>
    <div id="Eventwd" class="tabcontent">
      <div class="corner1">
        <img src="<?= base_url() ?>/assets/de2oraset1.png" alt="" width="100%">
      </div>
      <div class="corner2">
        <img src="<?= base_url() ?>/assets/de2oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img src="<?= base_url() ?>/assets/de2oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
        <img src="<?= base_url() ?>/assets/de2oraset4.png" alt="" width="100%">
      </div>
      <div class="corner5">
        <img alt="" width="100%">
      </div>
      <div class="corner6">
        <img alt="" width="100%">
      </div>
      <div id="homewd" class="contentwd">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
          <img src="<?= base_url() ?>/assets/de2vintopwd.png" alt="" style="display: inline-block;" width="100%">
        </div>
        <div class="content4pad">
          <br>
          <h3 style="font-family: Angelface; font-size: 35px; color: black;">Event</h3>
          <p class="explainbride">The Happy Day!</p>
          <br>
          <p style="font-family: dosis; color: black;">Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, izinkan kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri acara pernikahan putra-putri kami</p>
          <div class="container4ijabwd" style="display: none;">
            <div>
              <p style="font-size: 18px; font-family: dosis; padding-top: 10px"><b>Akad Pernikahan</b></p>
            </div>
            <table>
              <tr>
                <td><i class="fa fa-calendar"></i></td>
                <td>Jum'at, 2 Oktober 2020</td>
              </tr>
              <tr>
                <td><br></td>
                <td><br></td>
              </tr>
              <tr>
                <td><i class="fa fa-clock-o"></i></td>
                <td>10.00 WIB - Selesai</td>
              </tr>
              <tr>
                <td><br></td>
                <td><br></td>
              </tr>
              <tr>
                <td><i class="fa fa-map-marker"></i></td>
                <td>Kediaman Mempelai Wanita</td>
              </tr>
              <tr>
                <td></td>
                <td>Jl. Tanjung Berok RT 5 / RW 3,</td>
              </tr>
              <tr>
                <td></td>
                <td>Kurao Pagang,</td>
              </tr>
              <tr>
                <td></td>
                <td>Kota Padang</td>
              </tr>
            </table>
          </div>
          <div style="clear:both"></div>
          <br>
          <div class="cardevent">
            <div class="row">
              <div class="column">
                <div class="card">
                  <div class="containerijabwd">
                    <table style="color: black;">
                      <tr>
                        <th style="width: 20%"><img src="<?= base_url() ?>/assets/de2wdakad.png" width="100%"></th>
                        <th></th>
                        <th style="width: 80%">
                          <p style="font-size: 18px; font-family: dosis; color: black"><b>Akad Nikah</b></p>
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
                    </table>
                  </div>
                </div>
              </div>
              <div class="column">
                <div class="card">
                  <div class="containerweddingwd">
                    <table align="right" style="color: black;">
                      <tr>
                        <th  align="right" style="width: 80%;">
                          <p style="font-size: 18px; font-family: dosis; color: black;"><b>Resepsi Pernikahan</b></p>
                        </th>
                        <th></th>
                        <th style="width: 20%"><img src="<?= base_url() ?>/assets/de2wdresepsi.png" width="100%"></th>
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
                      <!-- <tr>
                        <td><br></td>
                        <td><br></td>
                        <td></td>
                        </tr>
                        <tr align="right">
                        <td><a href="https://calendar.google.com/event?action=TEMPLATE&tmeid=MWh0aGMwOXNuMnFucTJ2N2hjMWdyYmhnYnIgYmxrb2M5ZHFvcGs3a2trNm9nNnAzNDlzaDRAZw&tmsrc=blkoc9dqopk7kkk6og6p349sh4%40group.calendar.google.com" target="_blank" style="background-color: #637382; font-family: dosis; font-size: 18px; color: white; padding: 18px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>SaveTheDate</strong></a></td>
                        <td><i class="fa fa-heart"></i></td>
                        <td></td>
                        </tr> -->
                    </table>
                    <div style="clear: both;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="containerngunduhwd">
            <div>
                <p style="font-size: 18px; font-family: dosis; padding-top: 20px"><b>Ngunduh Mantu</b></p>
            </div>
            
            <table>
                <tr>
                    <td><i class="fa fa-calendar"></i></td>
                    <td>Sabtu, 22 februari 2020</td>
                </tr>
                <tr>
                    <td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td><i class="fa fa-clock-o"></i></td>
                    <td>11.00 - 13.00 WIB</td>
                </tr>
                <tr>
                    <td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td><i class="fa fa-map-marker"></i></td>
                    <td>Aula Supar-Yon Arhanudri 1 Pakualam,</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Serpong utara,</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Tangerang</td>
                </tr>
            </table>
            </div> -->
          <div style="clear:both"></div>
          <!-- startprotokolkesehatan -->
          <div class="explainbride" style="width: 100%; margin: auto; box-shadow: 1px 1px 5px #888888; padding: 10px; border-radius: 10px">
            <p><i style="color:#b02140" class="fa fa-heart"></i><br>
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
          <!-- <div class="explainbride" style="width: 100%; margin: auto; box-shadow: 1px 1px 5px #888888; padding: 10px; border-radius: 10px">
            <p>Protokol Kesehatan<br>Mengingat masih dalam kondisi potensi penyebaran / penularan Covid -19, maka ada beberapa catatan penting antara lain :</p>
            
            <div class="prorow">
              <div class="procolumn" style="background-color:;">
                <img src="https://nikahankami.com/assets/prokes01masker.png" width="50px">
                <div class="procolumntext">Jika memungkinkan hadir pastikan dalam kondisi sehat, tidak memiliki riwayat berasal dari zona merah atau kontak dengan pasien Covid -19. Harap datang tepat waktu. Selalu memakai masker selama acara berlangsung</div>
              </div>
              <div class="procolumn" style="background-color:;">
                <img src="https://nikahankami.com/assets/prokes02wash.png" width="50px">
                <div class="procolumntext">Mencuci tangan sebelum dan sesudah memasuki lokasi acara</div>
              </div>
            </div>
            <div style="clear:both"></div>
            <br>
            <div class="prorow">
              <div class="procolumn" style="background-color:;">
                <img src="https://nikahankami.com/assets/prokes04crowd.png" width="50px"><img src="https://nikahankami.com/assets/prokes05jarak.png" width="50px">
                <div class="procolumntext">Tidak berkerumun, dengan menjaga jarak satu sama lain +/- 2 meter</div>
              </div>
              <div class="procolumn" style="background-color:;">
                <img src="https://nikahankami.com/assets/prokes03namaste.png" width="50px">
                <div class="procolumntext">Tidak bersalaman, dapat menggantinya dengan salaman jarak jauh</div>
              </div>
            </div>
            <p>Terimakasih atas pengertian dan perhatiannya, do’a restu Bapak/Ibu yang lebih kami harapkan.</p>
            </div> -->
          <!-- <p class="explainbride">Protokol Kesehatan<br><br>Mengingat masih dalam kondisi potensi penyebaran / penularan Covid -19, maka ada beberapa catatan penting antara lain :<br><br>Harap datang tepat waktu.<br>Jika memungkinkan hadir pastikan dalam kondisi sehat, tidak memiliki riwayat berasal dari zona merah atau kontak dengan pasien Covid -19.<br>Selalu mematuhi anjuran pembatasan sosial dengan memperhatikan jarak aman.<br>Menghindari kerumunan.<br>Selalu menggunakan masker.<br>Tidak perlu berjabat tangan.<br><br>Terimakasih atas pengertian dan perhatiannya, do’a restu Bapak/Ibu yang lebih kami harapkan.</p> -->
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
          <br>
          <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8005853713566!2d110.21351231477622!3d-7.487258394599172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f6aa5ee45b3%3A0xdc07f0e500ac48d6!2sGedung%20Jenderal%20Achmad%20Yani%20Magelang!5e0!3m2!1sid!2sid!4v1610687413981!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div><a href="https://goo.gl/maps/fWm7LDTq3SbK7ohB6" target="_blank" style="background-color: #637382; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>OpenMap</strong></a>
          </div>
          <br>
          <!-- <p>--</p>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.265727986586!2d100.420272!3d-0.9536049999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwNTcnMTMuMCJTIDEwMMKwMjUnMTMuMCJF!5e0!3m2!1sid!2sid!4v1598598956629!5m2!1sid!2sid" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            
            </div>
            <br>
            <div><a href="https://goo.gl/maps/NuhFhTstX2HCyggc8" target="_blank" style="background-color: #637382; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>OpenMap Resepsi II</strong></a>
            </div> -->
          <br>
        </div>
        <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
          <img src="<?= base_url() ?>/assets/de2vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
        </div>
        <br>
        <br>
        <br>
      </div>
    </div>
    <div id="Moment" class="tabcontent">
      <div class="corner1">
        <img src="<?= base_url() ?>/assets/de2oraset1.png" alt="" width="100%">
      </div>
      <div class="corner2">
        <img src="<?= base_url() ?>/assets/de2oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img src="<?= base_url() ?>/assets/de2oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
        <img src="<?= base_url() ?>/assets/de2oraset4.png" alt="" width="100%">
      </div>
      <div class="corner5">
        <img alt="" width="100%">
      </div>
      <div class="corner6">
        <img alt="" width="100%">
      </div>
      <div id="homewd" class="contentwd">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
          <img src="<?= base_url() ?>/assets/de2vintopwd.png" alt="" style="display: inline-block;" width="100%">
        </div>
        <div class="content4pad">
          <br>
          <h3 style="font-family: Angelface; font-size: 35px; color: black;">Gallery</h3>
          <p class="explainbride">Momen Bahagia Jendro-Sastro</p>
          <!-- !PAGE CONTENT! -->
          <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">
            <!-- <div class="vidline">
              <video width="100%" controls loop autoplay>
                    <source src="images/anitacikovid.mp4" type="video/mp4">
                    <source src="video.ogg" type="video/ogg">
                    Your browser does not support HTML5 video.
              </video>
              </div> -->
            <!-- PhotoFrame -->
            <!-- <div class="framegrid2">
              <div>
                  <img src="images/gala.png" width="100%">
                  <br><br>
                  <img src="images/galb.png" width="100%">
                  <br><br>
                  <img src="images/galc.png" width="100%">
                  <br><br>
                  <img src="images/gald.png" width="100%">
              </div>
              </div> -->
            <!-- Photo grid -->
            <div class="w3-row w3-grayscale-min">
              <div class="w3-half">
                <img src="<?= base_url() ?>/assets/demogal01.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
                <img src="<?= base_url() ?>/assets/demogal03.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
                <img src="<?= base_url() ?>/assets/demogal05.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
                <img src="<?= base_url() ?>/assets/demogal07.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
                <img src="<?= base_url() ?>/assets/demogal09.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
              </div>
              <div class="w3-half">
                <img src="<?= base_url() ?>/assets/demogal02.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
                <img src="<?= base_url() ?>/assets/demogal04.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
                <img src="<?= base_url() ?>/assets/demogal06.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
                <img src="<?= base_url() ?>/assets/demogal08.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
                <img src="<?= base_url() ?>/assets/demogal10.jpg" style="width:100%" onclick="onClick(this)"
                  alt="Jendro-Sastro">
              </div>
            </div>
            <!-- Modal for full size images on click-->
            <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
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
        <div>
          <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="<?= base_url() ?>/assets/de2vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>
    </div>
    <div id="Quotewd" class="tabcontent">
      <div class="corner1">
        <img src="<?= base_url() ?>/assets/de2oraset1.png" alt="" width="100%">
      </div>
      <div class="corner2">
        <img src="<?= base_url() ?>/assets/de2oraset2.png" alt="" width="100%">
      </div>
      <div class="corner3">
        <img src="<?= base_url() ?>/assets/de2oraset3.png" alt="" width="100%">
      </div>
      <div class="corner4">
        <img src="<?= base_url() ?>/assets/de2oraset4.png" alt="" width="100%">
      </div>
      <div class="corner5">
        <img alt="" width="100%">
      </div>
      <div class="corner6">
        <img alt="" width="100%">
      </div>
      <div id="homewd" class="contentwd">
        <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
          <img src="<?= base_url() ?>/assets/de2vintopwd.png" alt="" style="display: inline-block;" width="100%">
        </div>
        <div class="content4pad">
          <br>
          <h3 style="font-family: Angelface; font-size: 35px; color: black;">Story</h3>
          <p class="explainbride">Kisah Bahagia Jendro-Sastro</p>
          <p class="explainbride">--</p>
          <p class="explainbride">Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</p>
          <p class="explainbride"><b>QS. Ar-Rum: 21</b></p>
          <p class="explainbride">--</p>
          <!-- !PAGE CONTENT! -->
          <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">
            <!-- timeline start -->
            <!-- <p class="explainbride">Our Love Story</p> -->
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
                  <input type="submit" name="submit" value="Kirim">
                </form>
              </div>
              <br>
              <div class="wishdisplay">
                <div class="wishdisplayname">
                  Riyandanu                            
                </div>
                <div class="" style="padding-bottom: 10px">
                  Selamat untuk Jendro dan Sastro, Semoga dilancarkan segala urusannya yaa, kelak menjadi keluarga yang Sakinah Mawadah Warohmah, selalu diberikan kebahagiaan dan keberkahan selalu, serta cepet dapet momongan, aamiin                             
                </div>
                <div class="wishdisplayname">
                  Arini                            
                </div>
                <div class="" style="padding-bottom: 10px">
                  Selamaat Jendro &amp; pasangan! Barakallah.. Semoga jadi keluarga sakinah, mawadah wa rahmah ya kaliaann, dijadikan jodoh sampai maut memisahkan dan dipertemukan lagi di jannahNya, semoga bahagia mendominasi hidup baru kalian dan dipercayakan keturunan yang sholeh dan sholeha, Aamiinn😇                             
                </div>
                <div class="wishdisplayname">
                  Tikasari                            
                </div>
                <div class="" style="padding-bottom: 10px">
                  Semalat ya Jendro sayangg dan calon suami yang bentar lagi jadi suami.. Semoga lancar sampe hari H apapun itu.. Semoga kedepan bisa jadi keluarga kecil yang sakinah, mawaddah, &amp; warrahmah.. #hug&amp;lovefromtika                            
                </div>
                <div class="wishdisplayname">
                  Afiani dan Zidan                            
                </div>
                <div class="" style="padding-bottom: 10px">
                  MasyaAllah Tabrakallah semoga selalu diberikan kebahagian dan keberkahan dalam keluarga barunya ya Jendroa Putriii dan suami, segera di karuniai momongan dan Semoga jadi keluarga yg SAMAWA!😇❤❤❤                            
                </div>
                <div class="wishdisplayname">
                  Mutiara Hanif                            
                </div>
                <div class="" style="padding-bottom: 10px">
                  Dear mbak Jendro ku sayang, mbak kos paling bawel dan endel😘 Selamat telah menemukan teman hidup yg dinanti nanti sejak dulu. Semoga acaranya lancar, keduanya sehat selalu, tidak ada satu halangan apapun sampai hari H❤️❤️                             
                </div>
                <div class="wishdisplayname">
                  Maharani WD                            
                </div>
                <div class="" style="padding-bottom: 10px">
                  Selamaat Jendro &amp; Sastro! Barakallah.. Semoga jadi keluarga sakinah, mawadah wa rahmah ya kaliaann, dijadikan jodoh sampai maut memisahkan dan dipertemukan lagi di jannahNya, semoga bahagia mendominasi hidup baru kalian dan dipercayakan keturunan yang sholeh dan sholeha, Aamiinn😇                            
                </div>
                <div class="wishdisplayname">
                  Tim Diyandra                            
                </div>
                <div class="" style="padding-bottom: 10px">
                  Selamat bro dan pasangan semoga dimudahkan semua acaranya sampai setelahnya dan selamanya, jadi keluarga yang sakina mawaddah warrahman, bahagia selalu sampai kematian memisahkan...                             
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
            <img src="<?= base_url() ?>/assets/de2vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
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
    <script type="text/javascript" src="<?= base_url() ?>/atemplate/jquery-1.10.1.min.js"></script>
    <script>
      //Get the button
    //   var mybutton = document.getElementById("myBtn4");
      
    //   // When the user scrolls down 20px from the top of the document, show the button
    //   window.onscroll = function() {scrollFunction()};
      
    //   function scrollFunction() {
    //     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //       mybutton.style.display = "block";
    //     } else {
    //       mybutton.style.display = "none";
    //     }
    //   }
      
    </script>
  </body>
  
</html>