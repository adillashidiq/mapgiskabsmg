<?php
echo $this->extend('layout/template');

echo $this->section('content');
echo $this->include('layout/navbar');
echo $this->include('layout/sidenav');
?>

<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Polyline</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div id="map" style="height: 500px;"></div>

      <script>
        var map = L.map('map').setView([-7.258366, 110.463861, -0.09], 12);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
		  	'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        }).addTo(map);
        
        var latlngs = [
            [[-7.265412, 110.423265],
             [-7.260458, 110.425717],
             [-7.256691, 110.426196],
            [-7.256465, 110.422580]],
            [[-7.260542, 110.402751],
            [-7.265224, 110.405034],
            [-7.267640, 110.408726]]
        ];
        var polyline = L.polyline(latlngs, {color: 'red'}).bindPopup('<b>Saya Jalur 1.</b><br />').addTo(map);
        
        var latlngs2 = [
            [[-7.249719, 110.416931],
            [-7.249472, 110.411454],
            [-7.246761, 110.407664]]
        ];
        var polyline2 = L.polyline(latlngs2, {color: 'blue'}).bindPopup('<b>Saya Jalur 2.</b><br />').addTo(map);
      </script>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?= $this->endSection(); ?>