<div id="Quotewd" class="tabcontent">

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
                <h3 style="font-family: Angelface; font-size: 35px; color: #404040">Story</h3>
                <p class="explainbride">Kisah Bahagia <?= $couple->result_array()[1]['cpl_nama_panggilan'] ?>-<?= $couple->result_array()[0]['cpl_nama_panggilan'] ?></p>
                <p class="explainbride">--</p>
                <p class="explainbride">
                    Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian
                    itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</p>
                <p class="explainbride"><b>QS. Ar-Rum: 21</b></p>
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
                    </div>

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