<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Graphs</li>
        <li class="breadcrumb-item active">Donut Graphs</li>
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
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Basic Donut Graph</div>
            </div>
            <div class="card-body">
              <div id="basic-donut-graph"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Basic Donut Graph Monochrome</div>
            </div>
            <div class="card-body">
              <div id="basic-donut-graph-monochrome"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Basic Donut Graph Gradient</div>
            </div>
            <div class="card-body">
              <div id="basic-donut-graph-gradient"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Basic Donut Graph Monochrome Gradient</div>
            </div>
            <div class="card-body">
              <div id="basic-donut-graph-monochrome-gradient"></div>
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
<script src="vendor/apex/examples/pie/basic-donut-graph.js"></script>
<script src="vendor/apex/examples/pie/basic-donut-graph-gradient.js"></script>
<script src="vendor/apex/examples/pie/basic-donut-graph-monochrome-gradient.js"></script>
<script src="vendor/apex/examples/pie/basic-donut-graph-monochrome.js"></script>