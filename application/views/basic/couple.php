<div id="Couple" class="tabcontent">
        <!-- <h3>News</h3>
        <p>Some news this fine day!</p> -->

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

        <div id="bridewd" class="contentwd">

            <div class="ornamentwdtop" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/de13vintopwd.png" alt="" style="display: inline-block;">
            </div>

            <div class="content4pad">
                <div>
                    <p style="font-size: 30px; font-family: Angelface; padding-top: 30px; color: #404040">Bismillahirrahmanirrahim</p>
                    <div class="explainbride">
                        Assalamu`alaikum Warahmatullahi Wabarakatuh<br><br> 
                        Maha Suci Allah<br>
                        yang telah menciptakan makhluk-Nya<br>
                        berpasang-pasangan.<br>
                        Ya Allah semoga ridho-Mu tercurah<br>
                        mengiringi pernikahan putra-putri kami:
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
                <br>
            </div>
            <div class="ornamentwdbtm" style="width: 100%; margin: 0px; text-align: center;">
                <img src="<?= base_url() ?>assets/de13vinbtmwd.png" alt="" style="display: inline-block;" width="100%">
            </div>
            <br>
            <br>
            <br>

        </div>



    </div>