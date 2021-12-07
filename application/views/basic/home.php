<!DOCTYPE html>
<html>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
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
    <link rel="stylesheet" href="w3style.css">
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
        
        .cnt223 {
            /* min-width: 600px;*/
            width: 100%;
            min-height: 150px;
            margin: 100px auto;
            background-image: url("<?= base_url() ?>assets/bgatexture.jpg");
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
            background-color: #39473d;
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
            padding-bottom: 5px;
            color: white;
            font-size: 30px;
            transition: all 0.3s ease;
        }
        /* Style tab links */
        
        .tablink {
            background-image: url("<?= base_url() ?>assets/bgatexture.jpg");
            background-position: center;
            color: white;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 17px;
            width: 20%;
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
        
        .corner1 {
            width: 300px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 9;
        }
        
        .corner2 {
            width: 200px;
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
            width: 200px;
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
            background-image: url("<?= base_url() ?>assets/bgatexture.jpg");
            background-position: center;
        }
        
        #Eventwd {
            background-image: url("<?= base_url() ?>assets/bgatexture.jpg");
            background-position: center;
        }
        
        #Moment {
            background-image: url("<?= base_url() ?>assets/bgatexture.jpg");
            background-position: center;
        }
        
        #Quotewd {
            background-image: url("<?= base_url() ?>assets/bgatexture.jpg");
            background-position: center;
        }
        
        .explainbride {
            font-family: dosis;
            color: #404040;
        }
        
        .bridefont {
            font-family: litine;
            font-size: 25px;
            color: #e4a931;
        }
        
        .fontfront {
            font-family: aldine;
            font-size: 70px;
            color: #39473d;
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
        
        #clockdiv>div {
            padding: 1px;
            border-radius: 3px;
            /* background: #00BF96;  */
            display: inline-block;
        }
        
        #clockdiv div>span {
            padding: 1px;
            border-radius: 3px;
            /* background: #00816A;  */
            display: inline-block;
        }
        
        #day {
            font-size: 50px;
            color: red;
        }
        
        .smalltext {
            padding-top: 2px;
            font-size: 24px;
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
            color: #e4a931;
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
        
        @media screen and (max-width: 600px) {
            .corner1 {
                width: 200px;
            }
            .corner2 {
                width: 150px;
            }
            .corner3 {
                width: 200px;
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
        
        input[type=submit], #btn-ucapan{
            background-color: #39473d;
            width: 100%;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #527d55;
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
            <p><img src="<?= base_url() ?>assets/de13vintopwd.png" width="60%" style="text-align: center"></p>
            <p class="imgopenint"><img class='close' src="<?= base_url() ?>assets/demoopenerimg.png" style="text-align: center"></p>
            <p style="text-align: center; line-height: normal;">Kepada Yth.</p>
            <p style="color: #404040; font-size: 20px; font-weight:bold; padding-bottom:10px; border-radius:4px; text-align: center" id="write">
            </p>
            <p><a href='#' class='close'>Buka Undangan</a></p>
            <div style="clear: both;"></div>
            <p><img src="<?= base_url() ?>assets/de13vintopwd.png" width="60%" style="transform: rotate(180deg); text-align: center"></p>
        </div>

    </div>

    <!-- start button pesan via WA -->
    <a target="_blank" href="https://api.whatsapp.com/send?phone=6285706604029&amp;text=Saya%20ingin%20pesan%20Undangan%20Digital%20Pernikahan%20seperti%20Demo" id="myBtn4" title="Pesan Undangan">
        <i class="w3-bar-block fa fa-whatsapp"></i> 
        <span style="font-size:12px">Pesan</span>
    </a>
    <!-- end button pesan via WA -->

    <div class="music-box">
        <button class="music-box-toggle-btn">
            <!-- <i class="fa fa-music"></i> -->
            <audio id='song' loop>
                <source src="https://nikahankami.com/atemplate/songbiw.mp3">
            </audio>

            <button type="button" class="music" id="mute-sound">
                <img border="0" alt="" src="<?= base_url() ?>assets/soundgoldmusicwd.png"
                    width="20" height="20">
            </button>
            <button type="button" class="music" id="unmute-sound">
                <img border="0" alt="" src="<?= base_url() ?>assets/soundgoldmusicoffwd.png" width="20" height="20">
            </button>
        </button>
    </div>

    <div class="iconbar">
        <a class="tablink" onclick="openPage('Cover', this, '#ffd4ed')" id="defaultOpen"><img src="<?= base_url() ?>assets/de13tab1cover.png" width="35"></a>
        <a class="tablink" onclick="openPage('Couple', this, '#ffd4ed')"><img src="<?= base_url() ?>assets/de13tab2couple.png" width="35"></a>
        <a class="tablink" onclick="openPage('Eventwd', this, '#ffd4ed')"><img src="<?= base_url() ?>assets/de13tab3event.png" width="35"></a>
        <a class="tablink" onclick="openPage('Moment', this, '#ffd4ed')"><img src="<?= base_url() ?>assets/de13tab4moment.png" width="35"></a>
        <a class="tablink" onclick="openPage('Quotewd', this, '#ffd4ed')"><img src="<?= base_url() ?>assets/de13tab5story.png" width="35"></a>
    </div>

    <?php $this->load->view('basic/cover'); ?>
    <?php $this->load->view('basic/couple'); ?>
    <?php $this->load->view('basic/event'); ?>
    <?php $this->load->view('basic/moment'); ?>
    <?php $this->load->view('basic/quoted'); ?>

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
            document.getElementById('unmute-sound').style.display = 'none';
            document.getElementById('mute-sound').style.display = 'inline-block';
            document.getElementById('song').play();
        });

        document.getElementById('mute-sound').addEventListener('click', function(event) {
            document.getElementById('mute-sound').style.display = 'none';
            document.getElementById('unmute-sound').style.display = 'inline-block';
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

        var sn = (getParameterByName('to')) ? getParameterByName('to') : 'Nama Tamu';

        document.getElementById("write").innerHTML = sn;
    </script>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn4");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
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