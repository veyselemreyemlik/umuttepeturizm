<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>PNR Listesi</h2>
        </div>
        <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>PNR Kodu</th>
                <th>Kalkış İl Plakası</th>
                <th>Saat Dilimi</th>
                <th>Zaman Dilimi</th>
                <th>Tarih Dilimi</th>
                <th>Peron</th>
                <th>Plaka</th>
                <th>Koltuk Numarası</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locations as $key => $location) {  ?>
             
          
            <tr>
                <td><?= $key+1 ?></td>
                <td><?php echo str_replace(".","",($location["KalkisPlaka"] . $location["SaatDilimi"] . $location["ZamanDilimi"] . $location["TarihDilimi"] . $location["PeronNo"] . $location["Plaka"])) ?></td>
                <td><?= $location["KalkisPlaka"] ?></td>
                <td><?= $location["SaatDilimi"] ?></td>
                <td><?= $location["ZamanDilimi"] ?></td>
                <td><?= $location["TarihDilimi"] ?></td>
                <td><?= $location["PeronNo"] ?></td>
                <td><?= $location["Plaka"] ?></td>
                <td><?= $location["KoltukID"] ?></td>
                <td><a href="<?php echo base_url("admin/delete_location/" . $location["PNRID"]) ?>" class="btn btn-danger btn-sm">Delete</a></td>  
            </tr>
            <?php  } ?>
            
        </tbody>
    </table>
    </div>
    </div>
</div>
