<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Otobüs Düzenle</h2>
        </div>
        <div class="card-body">
            <form class="database_operation_form" data-url="<?= base_url("admin/update_otobus/".$otobusler["OtobusID"]) ?>">
                <div class="form-group">
                    <label>Plaka:</label>
                    <input type="text" class="form-control" value="<?php echo $otobusler["Plaka"] ?>" required name="Plaka" >
                </div>
                <div class="form-group">
                    <label>Güzergah:</label>
                    <input type="text" class="form-control" value="<?php echo $otobusler["Guzergah"] ?>" required name="Guzergah" >
                </div>
                <div class="form-group">
                    <label>Koltuk Tipi:</label>
                    <input type="text" class="form-control" value="<?php echo $otobusler["KoltukTipi"] ?>" required name="KoltukTipi">
                </div>
                <div class="form-group">
                    <label>Koltuk Sayısı:</label>
                    <input type="text" class="form-control" value="<?php echo $otobusler["KoltukSayisi"] ?>" required name="KoltukSayisi">
                </div>
                <div class="form-group">
                    
                 <button class="btn btn-info" >GÜNCELLE</button>
                </div>
            </form>
        </div>
    </div>
</div>
