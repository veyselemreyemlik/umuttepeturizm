<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Sefer Listesi ve Düzenleme<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm float-right"> Add New</a></h2>
        </div>
        <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Kalkis Yeri</th>
                <th>Varıs Yeri</th>
                <th>Otobus Plaka</th>
                <th>Kalkış Saati</th>
                <th>Varış Saati</th>
                <th>Tarih</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($seferler as $key => $sefer) {  ?>
             
          
            <tr>
                <td><?= $key+1 ?></td>
                <td><?= $sefer["KalkisYeri"] ?></td>
                <td><?= $sefer["VarisYeri"] ?></td>
                <td><?php 
                foreach ($otobus as $key => $otobuss) { 
                  if ($otobuss["OtobusID"]==$sefer["OtobusID"]) {
                    echo $otobuss["Plaka"];
                  }
                }
              ?></td>
              <td><?= $sefer["KalkisSaati"] . ".00"?></td>
              <td><?= $sefer["VarisSaati"] . ".00" ?></td>
              <td><?= $sefer["Tarih"]?></td>
                
                
                
                <td><a href="<?php echo base_url("admin/delete_sefer/" . $sefer["SeferID"]) ?>" class="btn btn-danger btn-sm">Sil</a> &nbsp; 
                
            </tr>
            <?php  } ?>
            
        </tbody>
    </table>
    </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              
              <h4 class="modal-title">Yeni Sefer Ekle</h4>
              <button type="button" class="close" data-dismiss="modal">
                &times;
              </button>
            </div>
            <div class="modal-body">
              <form class="database_operation_form" data-url="<?= base_url("admin/sefer/insert") ?>">
                <div class="form-group">
                <label for="KalkisYeri">Kalkış Yeri:</label>
                <select class="form-control" required name="KalkisYeri" id="KalkisYeri">
                    
                    <option value="istanbul">İstanbul</option>
                    <option value="bursa">Bursa</option>
                    <option value="kocaeli">Kocaeli</option>
                    <option value="sakarya">Sakarya</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Varıs Yeri : </label>
                    <select class="form-control" required name="VarisYeri" id="VarisYeri">
                    <option value="istanbul">İstanbul</option>
                    <option value="bursa">Bursa</option>
                    <option value="kocaeli">Kocaeli</option>
                    <option value="sakarya">Sakarya</option>
                </select>
                </div>
                <div class="form-group">
                    <label>Plaka : </label>
                    <select class="form-control" required name="OtobusID" id="OtobusID">
                   <?php foreach ($otobus as $key => $otobuss) 
                   { 
                     ?>
                    <option value="<?php echo $otobuss["OtobusID"] ?>"><?php echo $otobuss["Plaka"] ?></option>
                    <?php } ?>
                    
                </select>
                </div>
                <div class="form-group">
                    <label>Kalkış Saati : </label>
                    <select class="form-control" required name="KalkisSaati" id="KalkisSaati">
                      <option value="12">12.00</option>
                      <option value="20">20.00</option>
                      <option value="4">4.00</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Varış Saati : </label>
                    <select class="form-control" required name="VarisSaati" id="VarisSaati">
                      <option value="15">15.00</option>
                      <option value="23">23.00</option>
                      <option value="7">7.00</option>
                    </select>
                </div>  
                <div class="form-group">
                    <label>Tarih : </label>
                    <input type="date" class="form-control" required name="Tarih" min="<?= date("Y-m-d") ?>">
                </div>
                <div class="form-group">
                    
                 <button class="btn btn-info">EKLE</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>