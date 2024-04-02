<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url("admin") ?>">Anasayfa</a></li>

          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->

  <section class="container-fluid">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <?php
              echo date("Y-m-d");
              ?>
              <br><br>
              <p>Sefer Takvimi</p>
            </div>
            <div class="icon">
              <i class="far fa-calendar-alt"></i>
            </div>
            <a href="<?php echo base_url("admin/sefer") ?>" class="small-box-footer">Sefer Takvimini Kontrol Et
              <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>
                <?php
                echo count($kullanici) + 1;
                ?>
              </h3>

              <p>Müşteri Sayısı</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add "></i>
            </div>
            <a href="<?php echo base_url("admin/kullanici") ?>" class="small-box-footer">Kullanıcı Listesine Göz At <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->

      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">

        <div class="col-lg-3 col-7">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>
                <?php
                echo count($otobusler) + 1;
                ?>
              </h3>

              <p>Otobüs Sayısı</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?php echo base_url("admin/otobus") ?>" class="small-box-footer">Otobüslere Göz At <i
                class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>
                <?php
                echo count($locations) + 1;
                ?>
              </h3>

              <p>Satılan Bilet</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo base_url("admin/locations") ?>" class="small-box-footer">Satılan Bilet
              Listesine Göz At <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>

  <!-- /.content -->
</div>