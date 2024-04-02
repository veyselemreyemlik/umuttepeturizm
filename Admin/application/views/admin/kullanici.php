<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Kullanıcı Listesi</h2>
        </div>
        <div class="card-body">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>İsim</th>
                        <th>Soyisim</th>
                        <th>TC</th>
                        <th>Doğum Tarihi</th>
                        <th>Meslek</th>
                        <th>Cinsiyet</th>
                        <th>Tel No</th>
                        <th>Email</th>
                        <th>Parola</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kullanici as $key => $kullanici) { ?>
                        <tr>
                            <td>
                                <?= $key + 1 ?>
                            </td>
                            <td>
                                <?= $kullanici["TC"] ?>
                            </td>
                            <td>
                                <?= $kullanici["Ad"] ?>
                            </td>
                            <td>
                                <?= $kullanici["Soyad"] ?>
                            </td>
                            <td>
                                <?= $kullanici["DogumTarih"] ?>
                            </td>
                            <td>
                                <?= $kullanici["YolcuTarife"] ?>
                            </td>
                            <td>
                                <?= $kullanici["Cinsiyet"] ?>
                            </td>
                            <td>
                                <?= $kullanici["TelNo"] ?>
                            </td>
                            <td>
                                <?= $kullanici["Email"] ?>
                            </td>
                            <td>
                                <?= $kullanici["Parola"] ?>
                            </td>
                            <td><a href="<?php echo base_url("admin/delete_kullanici/" . $kullanici["KullaniciID"]) ?>"
                                    class="btn btn-danger btn-sm">Delete</a> &nbsp;
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>