<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?> 
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Graphs</li>
        <li class="breadcrumb-item active">Bar Graphs</li>
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
              <div class="card-title">Stacked Bar Graph Negative Values</div>
            </div>
            <div class="card-body">
              <div id="basic-bar-negative-values"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Basic Bar Graph</div>
            </div>
            <div class="card-body">
              <div id="basic-bar-graph" class="primary-graph"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Basic Bar Graph Grouped</div>
            </div>
            <div class="card-body">
              <div id="basic-bar-graph-grouped"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Stacked Bar Graph</div>
            </div>
            <div class="card-body">
              <div id="basic-bar-stack-graph"></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="card-title">Stacked Bar Graph Full Width</div>
            </div>
            <div class="card-body">
              <div id="basic-bar-stack-graph-full-width"></div>
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
<script src="vendor/apex/examples/bar/basic-bar-graph.js"></script>
<script src="vendor/apex/examples/bar/basic-bar-graph-grouped.js"></script>
<script src="vendor/apex/examples/bar/basic-bar-stack-graph.js"></script>
<script src="vendor/apex/examples/bar/basic-bar-stack-graph-full-width.js"></script>
<script src="vendor/apex/examples/bar/basic-bar-negative-values.js"></script>