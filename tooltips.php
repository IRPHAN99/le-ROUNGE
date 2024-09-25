<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Tooltips</li>
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
        <div class="col-xl-12">
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="text-center mb-3">
                    <h5>------ Tooltips ------</h5>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top"> Top </button>
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Tooltip on right"> Right </button>
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom"> Bottom </button>
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="left" title="Tooltip on left"> Left </button>
                  </div>
                  <div class="mt-5"></div>
                  <div class="text-center">
                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-html="true" title="
											<em>Tooltip</em>
											<u>with</u>
											<b>HTML</b>"> Tooltip with HTML </button>
                  </div>
                  <div class="mt-5 mb-3 text-center">
                    <h5>------ Popovers ------</h5>
                  </div>
                  <div class="text-center">
                    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> Top </button>
                    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> Right </button>
                    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
												sagittis lacus vel augue laoreet rutrum faucibus."> Bottom </button>
                    <button type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."> Left </button>
                  </div>
                  <div class="mt-5"></div>
                  <div class="text-center">
                    <a tabindex="0" class="btn btn-info" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>