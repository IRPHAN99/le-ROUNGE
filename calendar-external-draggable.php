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
        <li class="breadcrumb-item active">Draggable Events</li>
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
              <div class="row gutters">
                <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-12">
                  <div class="draggable-events">
                    <h6>Draggable Events</h6>
                    <div id="externalDraggableEvents">
                      <div class='fc-event'>My Event 1</div>
                      <div class='fc-event'>My Event 2</div>
                      <div class='fc-event'>My Event 3</div>
                      <div class='fc-event'>My Event 4</div>
                      <div class='fc-event'>My Event 5</div>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="drop-remove" />
                      <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                    </div>
                  </div>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-9 col-sm-8 col-12">
                  <div id="externalDraggableEventsCalendar"></div>
                </div>
              </div>
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
<script src="vendor/calendar/js/interaction/main.min.js"></script>
<script src="vendor/calendar/js/daygrid/main.min.js"></script>
<script src="vendor/calendar/js/timegrid/main.min.js"></script>
<script src="vendor/calendar/js/list/main.min.js"></script>
<script src="vendor/calendar/js/custom-external-draggable-calendar.js"></script>