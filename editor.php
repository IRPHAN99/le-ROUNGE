<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?> 
<div class="page-wrapper">
  <div class="page-content">
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">WYSIWYG Editor</li>
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
          <div class="card m-0">
            <div class="card-header">
              <div class="card-title">WYSIWYG Editor</div>
              <div class="card-sub-title">Beautiful Javascript web editor that's easy to integrate for developers and your users will simply fall in love with its clean design.</div>
            </div>
            <div class="card-body">
              <div class="summernote"></div>
              <button class="btn btn-dark" type="button">Cancel</button>
              <button class="btn btn-primary" type="button">Save Changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>
<!-- Summernote JS -->
<script src="vendor/summernote/summernote-bs4.js"></script>
<script>
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 170,
      tabsize: 2
    });
  });
</script>