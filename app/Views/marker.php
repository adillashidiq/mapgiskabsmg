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
            <h1 class="m-0">Marker Map</h1>
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

        var marker2 = L.marker([-7.272468, 110.453809]).bindPopup('<b>Hello!</b><br />Saya Lokasi 2.').addTo(map).openPopup();
        var marker1 = L.marker([-7.229172, 110.438042]).bindPopup('<b>Hello!</b><br />Saya Lokasi 1.').addTo(map).openPopup();
        var marker3 = L.marker([-7.257802, 110.361841]).bindPopup('<b>Hello!</b><br />Saya Lokasi 3.').addTo(map).openPopup();
        var marker4 = L.marker([-7.193088, 110.389307]).bindPopup('<b>Hello!</b><br />Saya Lokasi 4.').addTo(map).openPopup();
      </script>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </section>
    </div><!-- /.container-fluid -->
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