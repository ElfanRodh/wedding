<div id="Eventwd" class="tabcontent">

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
                <h3 style="font-family: Angelface; font-size: 35px; color: #404040">Event</h3>
                <p class="explainbride">The Happy Day!</p>
                <br>
                <p style="font-family: dosis; color: #404040">Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta'ala, kami mengundang Bapak/Ibu/Saudara(i) untuk menghadiri Resepsi Pernikahan putra-putri kami</p>

                <div class="cardevent">
                    <div class="row">
                        <div class="column">
                            <div class="card">

                                <div class="containerijabwd">

                                    <table style="color: #404040">
                                        <tr>
                                            <th style="width: 20%"><img src="<?= base_url() ?>assets/de13wdakad.png" width="100%"></th>
                                            <th></th>
                                            <th style="width: 80%">
                                                <p style="font-size: 18px; font-family: dosis; color: #404040"><b>Akad Pernikahan</b></p>
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
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="column">
                            <div class="card">
                                <div class="containerweddingwd">

                                    <table align="right" style="color: #404040">
                                        <tr>
                                            <th align="right" style="width: 80%;">
                                                <p style="font-size: 18px; font-family: dosis; color: #404040; text-align: right"><b>Resepsi Pernikahan</b></p>
                                            </th>
                                            <th></th>
                                            <th style="width: 20%"><img src="<?= base_url() ?>assets/de13wdresepsi.png" width="100%"></th>
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

                <div style="clear:both"></div>

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

                <p class="explainbride">Merupakan suatu kehormatan dan kebahagiaan<br>bagi kami apabila Bapak/Ibu/Saudara(i)<br>berkenan hadir untuk memberikan do'a restu<br>kepada kedua mempelai.</p>

                <br>
                <br>


                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.8005853713566!2d110.21351231477622!3d-7.487258394599172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8f6aa5ee45b3%3A0xdc07f0e500ac48d6!2sGedung%20Jenderal%20Achmad%20Yani%20Magelang!5e0!3m2!1sen!2sid!4v1574127059912!5m2!1sen!2sid"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                </div>
                <br>
                <div><a href="https://goo.gl/maps/1bjdKs93RDBXkmKx6" target="_blank" style="background-color: #39473d; font-family: dosis; font-size: 18px; color: white; padding: 18px 30px; text-align: center; text-decoration: none; display: inline-block; border-radius: 8px"><strong>OpenMap</strong></a>
                </div>
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