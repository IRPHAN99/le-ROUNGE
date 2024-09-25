<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Graphs</li>
        <li class="breadcrumb-item active">Area Graphs</li>
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Basic Area Graph</div>
            </div>
            <div class="card-body">
              <div id="basic-area-graph"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Spline Area Graph</div>
            </div>
            <div class="card-body">
              <div id="basic-area-spline-graph"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Stacked Area Graph</div>
            </div>
            <div class="card-body">
              <div id="basic-area-stack-graph"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>
<!-- Apex Charts -->
<script src="vendor/apex/apexcharts.min.js"></script>
<script src="vendor/apex/examples/area/basic-area-graph.js"></script>
<script src="vendor/apex/examples/area/basic-area-graph-spline.js"></script>
<script src="vendor/apex/examples/area/basic-area-graph-stacked.js"></script>