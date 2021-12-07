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
                    <h3>28 MARET 2020</h3>
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
                <h1>
                    <?= strtoupper($couple->result_array()[1]['cpl_nama_panggilan']) ?> 
                    <p style="font-size:20px">&</p> 
                    <?= strtoupper($couple->result_array()[0]['cpl_nama_panggilan']) ?>
                </h1>
                <!-- <h2>Official Invitation</h2> -->
                <!-- <p class="codrops-demos">-->
                <!--    <a href="https://www.sendysaga.com/">Sendysaga</a>-->
                <!--    <a class="current-demo" href="http://timerinc.co">Timerinc</a>-->
                <!--    <a href="https://www.instagram.com/sendysaga/">Galeri</a>-->
                <!--    <a href="https://www.instagram.com/sendysaga/">let's connect!</a>-->
                <!--</p>-->
                <div id="txt"></div>
            </header>
        </div>

        <div class="corner1">
            <img src="<?= base_url() ?>assets/de14oraset1.png" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="<?= base_url() ?>assets/de14oraset2.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="<?= base_url() ?>#" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="<?= base_url() ?>#" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="<?= base_url() ?>assets/de14oraset5.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="<?= base_url() ?>#" alt="" width="100%">
        </div>


        <div id="homewd" class="contentwd">
            <br>
            <br>
            <br>
        </div>

        <br>
        <br>
    </div>