<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?>
  <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Morris Graphs</li>
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
              <div class="card-title">Area Chart</div>
            </div>
            <div class="card-body">
              <div id="areaChart" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">X Labels Diagonally</div>
            </div>
            <div class="card-body">
              <div id="xLabelsDiagonally" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Day Data</div>
            </div>
            <div class="card-body">
              <div id="dayData" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Bar Chart</div>
            </div>
            <div class="card-body">
              <div id="barColors" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Bar no Axis</div>
            </div>
            <div class="card-body">
              <div id="barNoAxis" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Donut Chart</div>
            </div>
            <div class="card-body">
              <div id="donutColors" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Donut Formatter</div>
            </div>
            <div class="card-body">
              <div id="donutFormatter" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Negative Values</div>
            </div>
            <div class="card-body">
              <div id="negativeValues" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Bar Chart</div>
            </div>
            <div class="card-body">
              <div id="morrisBarChart" class="chart-height"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Stacked Bar Chart</div>
            </div>
            <div class="card-body">
              <div id="stackedBarChart" class="chart-height"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>
<!-- Morris Graphs -->
<script src="vendor/morris/raphael-min.js"></script>
<script src="vendor/morris/morris.min.js"></script>
<script src="vendor/morris/custom/areaChart.js"></script>
<script src="vendor/morris/custom/xLabelsDiagonally.js"></script>
<script src="vendor/morris/custom/barColors.js"></script>
<script src="vendor/morris/custom/barNoAxis.js"></script>
<script src="vendor/morris/custom/dayData.js"></script>
<script src="vendor/morris/custom/donutColors.js"></script>
<script src="vendor/morris/custom/donutFormatter.js"></script>
<script src="vendor/morris/custom/morrisBarChart.js"></script>
<script src="vendor/morris/custom/negativeValues.js"></script>
<script src="vendor/morris/custom/stackedBarChart.js"></script>