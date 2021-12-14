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
            <h1 class="m-0">Polygon</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

      <div id="map" style="height: 500px;"></div>

      <script>
        var map = L.map('map').setView([-7.222307, 110.368305, -0.09], 16);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
         attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
		  	'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        }).addTo(map);

        var polygon1 = L.polygon([
            [-7.222931, 110.368301],
            [-7.222305, 110.369959],
            [-7.221991, 110.369596],
            [-7.221607, 110.368716],
            [-7.221778, 110.368544],
            [-7.221437, 110.368094],
            [-7.222321, 110.367352]
        ],{
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 500
        }).bindPopup('<b>RT.12</b><br />').addTo(map);

                var polygon2 = L.polygon([
            [-7.222321, 110.367369],
            [-7.221414, 110.366253],
            [-7.220805, 110.365554],
            [-7.220586, 110.365830],
            [-7.220300, 110.366259],
            [-7.220580, 110.366867],
            [-7.221548, 110.368009]
        ],{
            color: 'grey',
            fillColor: '#696969',
            fillOpacity: 0.5,
            radius: 500
        }).bindPopup('<b>RT.13</b><br />').addTo(map);
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