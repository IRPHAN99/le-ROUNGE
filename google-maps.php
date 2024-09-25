<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?> 
<div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Maps</li>
        <li class="breadcrumb-item active">Google Maps</li>
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
          <div id="google-map" class="map-xl"></div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEZWpVOMiyNtEGRBHN48w_fMZ5Pw2jF8U&amp;callback=initMap"></script>
<script>
  // Map #One
  function initMap() {
    var uluru = {
      lat: 31.791702,
      lng: -7.09262
    };
    var map = new google.maps.Map(document.getElementById('google-map'), {
      zoom: 3,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script> <?php include("./footer.php"); ?>