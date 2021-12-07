<div id="Moment" class="tabcontent">

        <div class="corner1">
            <img src="<?= base_url() ?>assets/de14oraset1.png" alt="" width="100%">
        </div>

        <div class="corner2">
            <img src="<?= base_url() ?>assets/de14oraset2.png" alt="" width="100%">
        </div>

        <div class="corner3">
            <img src="<?= base_url() ?>assets/de14oraset3.png" alt="" width="100%">
        </div>

        <div class="corner4">
            <img src="<?= base_url() ?>assets/de14oraset4.png" alt="" width="100%">
        </div>

        <div class="corner5">
            <img src="<?= base_url() ?>assets/de14oraset5.png" alt="" width="100%">
        </div>

        <div class="corner6">
            <img src="<?= base_url() ?>assets/de14oraset6.png" alt="" width="100%">
        </div>

        <div id="homewd" class="contentwd">

            <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/de13vintopwd.png" alt="" style="display: inline-block;" width="100%">
            </div>
            <div class="content4pad">
                <br>
                <h3 style="font-family: Angelface; font-size: 35px; color: #404040">Gallery</h3>
                <p class="explainbride">Momen Bahagia <?= $couple->result_array()[1]['cpl_nama_panggilan'] ?>-<?= $couple->result_array()[0]['cpl_nama_panggilan'] ?></p>

                <!-- !PAGE CONTENT! -->
                <div class="w3-main w3-content" style="max-width:1600px;margin-top:20px">

                    <!-- PhotoFrame -->
                    <!-- <div class="framegrid2">
                    <div>
                        <img src="<?= base_url() ?>https://nikahankami.com/assets/demogala.png" width="100%">
                        <br><br>
                        <img src="<?= base_url() ?>https://nikahankami.com/assets/demogalb.png" width="100%">
                        <br><br>
                        <img src="<?= base_url() ?>https://nikahankami.com/assets/demogalc.png" width="100%">
                        <br><br>
                        <img src="<?= base_url() ?>https://nikahankami.com/assets/demogald.png" width="100%">
                    </div>
                </div> -->

                    <!-- Photo grid -->
                    <div class="w3-row w3-grayscale-min">

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
                <br>
                <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
                    <img src="<?= base_url() ?>assets/de13vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
                </div>

            </div>
            <br>
            <br>
            <br>

        </div>
    </div>