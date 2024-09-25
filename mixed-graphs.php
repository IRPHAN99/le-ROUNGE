<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?>
  <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Graphs</li>
        <li class="breadcrumb-item active">Mixed Graphs</li>
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
              <div class="card-title">Line &amp; Column Graph</div>
            </div>
            <div class="card-body">
              <div id="line-column-graph"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Multiple Y Axis Graph</div>
            </div>
            <div class="card-body">
              <div id="multiple-yaxis"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Line &amp; Area Graph</div>
            </div>
            <div class="card-body">
              <div id="line-area-graph"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Line &amp; Scatter Graph</div>
            </div>
            <div class="card-body">
              <div id="line-scatter-graph"></div>
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
<script src="vendor/apex/examples/mixed/line-column-graph.js"></script>
<script src="vendor/apex/examples/mixed/line-area-graph.js"></script>
<script src="vendor/apex/examples/mixed/line-scatter-graph.js"></script>
<script src="vendor/apex/examples/mixed/multiple-yaxis.js"></script>