<div class="content-wrapper">
    <div class="card mt-4">
        <div class="card-header">
            <h2>Otobüs Listesi ve Düzenleme<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm float-right"> Add New</a></h2>
        </div>
        <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Plaka</th>
                
                <th>Koltuk Tipi</th>
                <th>Koltuk Sayısı</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($otobusler as $key => $otobus) {  ?>
             
          
            <tr>
                <td><?= $key+1 ?></td>
                <td><?= $otobus["Plaka"] ?></td>
                
                <td><?= $otobus["KoltukTipi"] ?></td>
                <td><?= $otobus["KoltukSayisi"] ?></td>
                <td><a href="<?php echo base_url("admin/delete_otobus/" . $otobus["OtobusID"]) ?>" class="btn btn-danger btn-sm">Delete</a> &nbsp; 
                <a href="<?php echo base_url("admin/update_otobus/" . $otobus["OtobusID"]) ?>" class="btn btn-info btn-sm">Update</a> </td>
                
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
              
              <h4 class="modal-title">Yeni Otobüs Ekle</h4>
              <button type="button" class="close" data-dismiss="modal">
                &times;
              </button>
            </div>
            <div class="modal-body">
              <form class="database_operation_form" data-url="<?= base_url("admin/otobus/insert") ?>">
                <div class="form-group">
                    <label>Plaka: </label>
                    <input type="text" class="form-control" required name="Plaka" placeholder="Plaka Giriniz">
                </div>
                
                <div class="form-group">
                    <label>Koltuk Tipi : </label>
                    <select class="form-control" required name="KoltukTipi" id="KoltukTipi">
                      <option value="2+1">2+1</option>
                      <option value="2+2">2+2</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    <label>Koltuk Sayısı : </label>
                    <select class="form-control" required name="KoltukSayisi" id="KoltukSayisi">
                      <option value="40">40</option>
                      <option value="50">50</option>
                      
                    </select>
                </div>
                <div class="form-group">
                    
                 <button class="btn btn-info">EKLE</button>
                </div>
                
              </form>
            </div>
          </div>
        </div>
      </div>