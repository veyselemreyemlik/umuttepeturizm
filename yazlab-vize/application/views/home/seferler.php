<section class="rooms-n-suites">

    <div class="container" style="margin-top: 100px">

        <div class="col-12" id="innerPageHeading"></div>
        <!-- Cottage -->
        <div class="row" id="room-row">
            <center>
                <div style="height: 300px; width: 600px" id="map"></div>
            </center>
            <div class="col-12" id="left-room-col">
                <div id="harita" class="col">
                    <?php
                    if (!empty($seferler) && is_array($seferler)) {

                        ?>
                        <div class="row">
                            <label id="start" style="display:none" for="<?php echo $seferler[0]['KalkisYeri']; ?>">
                                <?php echo $seferler[0]['KalkisYeri']; ?>
                            </label>
                            <label id="end" style="display:none" for="<?php echo $seferler[0]['VarisYeri']; ?>">
                                <?php echo $seferler[0]['VarisYeri']; ?>
                            </label>

                            <table class="table table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">Nereden</th>
                                        <th scope="col">Nereye</th>
                                        <th scope="col">Tarih</th>
                                        <th scope="col">Kalkış Saati</th>
                                        <th scope="col">Varış Saati</th>
                                        <th scope="col">Fiyat</th>
                                        <th scope="col">İşlem</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($seferler as $sefer) { ?>
                                        <tr>
                                            <td>
                                                <?php echo strtoupper($sefer['KalkisYeri']); ?>
                                            </td>
                                            <td>
                                                <?php echo strtoupper($sefer['VarisYeri']); ?>
                                            </td>
                                            <td>
                                                <?php echo $sefer['Tarih']; ?>
                                            </td>
                                            <td>
                                                <?php echo $sefer['KalkisSaati'] . ".00"; ?>
                                            </td>
                                            <td>
                                                <?php echo $sefer['VarisSaati'] . ".00"; ?>
                                            </td>
                                            <td>
                                                <?php echo $sefer['Fiyat'] . " TL"; ?>
                                            </td>
                                            <td><a href="<?php echo base_url('home/bilet/' . $sefer['SeferID']) ?>"
                                                    class="btn btn-primary">Bilet Al</a></td>
                                        </tr>
                                    <?php }
                    } else {
                        echo "<h2><center> Hicbir sefer bulunamadı </center></h2>";
                    } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
                <br /><br />
                <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
                    <i class="fas fa-arrow-up"></i>
                </button>
            </div>

</section>