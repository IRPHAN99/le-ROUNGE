<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?> 
<div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Maps</li>
        <li class="breadcrumb-item active">Vector Maps</li>
      </ol>
      <ul class="app-actions">
        <li>
          <a href="#" id="reportrange">
            <span class="range-text"></span>
            <i class="icon-chevron-down"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="icon-export"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- Page header end -->
    <!-- Main container start -->
    <div class="main-container">
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Markers on World Map</div>
            </div>
            <div class="card-body">
              <div id="world-map-markers" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">World Map</div>
            </div>
            <div class="card-body">
              <div id="world-map-gdp" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Africa</div>
            </div>
            <div class="card-body">
              <div id="mapAfrica" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Europe</div>
            </div>
            <div class="card-body">
              <div id="mapEurope" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Denmark</div>
            </div>
            <div class="card-body">
              <div id="mapDenmark" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Region Selection</div>
            </div>
            <div class="card-body">
              <div id="regionSelection" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">USA</div>
            </div>
            <div class="card-body">
              <div id="resionsWithLabels" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">USA</div>
            </div>
            <div class="card-body">
              <div id="us-map2" class="chart-height"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>
<!-- jVector Maps -->
<script src="vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="vendor/jvectormap/usa.js"></script>
<script src="vendor/jvectormap/africa-mill.js"></script>
<script src="vendor/jvectormap/world-mill-en.js"></script>
<script src="vendor/jvectormap/gdp-data.js"></script>
<script src="vendor/jvectormap/dk-mill.js"></script>
<script src="vendor/jvectormap/europe-mill.js"></script>
<script src="vendor/jvectormap/de-merc.js"></script>
<script src="vendor/jvectormap/us_aea.js"></script>
<!-- Custom JVector Maps -->
<script src="vendor/jvectormap/custom/world-map-markers.js"></script>
<script src="vendor/jvectormap/custom/resions-with-labels.js"></script>
<script src="vendor/jvectormap/custom/regions-selection.js"></script>
<script src="vendor/jvectormap/custom/custom-denmark.js"></script>
<script src="vendor/jvectormap/custom/map-usa.js"></script>
<script src="vendor/jvectormap/custom/map-europe.js"></script>
<script src="vendor/jvectormap/custom/map-africa.js"></script>
<script src="vendor/jvectormap/custom/world-map-gdp.js"></script>