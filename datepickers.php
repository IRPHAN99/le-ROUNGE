<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?> 
<div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Datepickers</li>
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
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Default</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker" placeholder="Try me…">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Custom Day Labels</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-custom-labels" placeholder="Try me…">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Custom Buttons</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-custom-buttons" placeholder="Try me…">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Custom Buttons</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-date-format" placeholder="You selected: dddd, dd mmm, yyyy">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Custom Buttons</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-date-format2" placeholder="dddd, dd mmm, yyyy">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Date Limits</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-date-limit" placeholder="Date Limit">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Date Limits</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-min-max" placeholder="Date Limit">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Disable Weeks</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-disable-weeks" placeholder="Disable Weeks">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Datepicker Container</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-container" placeholder="Datepicker Container">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Datepicker Dropdowns</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-dropdowns" placeholder="Datepicker Dropdowns">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label class="label">Datepicker Set Years</label>
                <div class="custom-date-input">
                  <input type="text" name="" class="form-control datepicker-set-years" placeholder="Datepicker Set Years">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>
<!-- Datepickers -->
<script src="vendor/datepicker/js/picker.js"></script>
<script src="vendor/datepicker/js/picker.date.js"></script>
<script src="vendor/datepicker/js/custom-picker.js"></script>