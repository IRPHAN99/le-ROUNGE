<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item">Calendars</li>
        <li class="breadcrumb-item active">Google</li>
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
      <!-- row -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card m-0">
            <div class="card-body">
              <div id="calendarGoogle"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>
<!-- Fullcalendar -->
<script src="vendor/calendar/js/core/main.min.js"></script>
<script src="vendor/calendar/js/daygrid/main.min.js"></script>
<script src="vendor/calendar/js/interaction/main.min.js"></script>
<script src="vendor/calendar/js/list/main.min.js"></script>
<script src="vendor/calendar/js/google-calendar/main.min.js"></script>
<script src="vendor/calendar/js/custom-google-calendar.js"></script>