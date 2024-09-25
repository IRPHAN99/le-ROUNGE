<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?> 
<div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Components</li>
        <li class="breadcrumb-item active">List Items</li>
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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <ul class="list-group">
                    <li class="list-group-item">Simple list item</li>
                    <li class="list-group-item active">Simple list item active</li>
                    <li class="list-group-item disabled">List group item disabled</li>
                  </ul>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"> Simple list item link </a>
                    <a href="#" class="list-group-item list-group-item-action active"> Simple list item link active </a>
                    <a href="#" class="list-group-item list-group-item-action disabled"> Simple list item link disabled </a>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action">List group item button</button>
                    <button type="button" class="list-group-item list-group-item-action active">List group item button active </button>
                    <button type="button" class="list-group-item list-group-item-action disabled">List group item button disabled </button>
                  </div>
                </div>
              </div>
              <!-- Row end -->
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <ul class="list-group">
                    <li class="list-group-item list-group-item-primary">A simple list group item</li>
                    <li class="list-group-item list-group-item-secondary">A simple list group item</li>
                    <li class="list-group-item list-group-item-info">A simple list group item</li>
                    <li class="list-group-item list-group-item-success">A simple list group item</li>
                    <li class="list-group-item list-group-item-warning">A simple list group item</li>
                    <li class="list-group-item list-group-item-danger">A simple list group item</li>
                  </ul>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-primary">A simple list group item link</a>
                    <a href="#" class="list-group-item list-group-item-secondary">A simple list group item link</a>
                    <a href="#" class="list-group-item list-group-item-info">A simple list group item link</a>
                    <a href="#" class="list-group-item list-group-item-success">A simple list group item link</a>
                    <a href="#" class="list-group-item list-group-item-warning">A simple list group item link</a>
                    <a href="#" class="list-group-item list-group-item-danger">A simple list group item link</a>
                  </div>
                </div>
              </div>
              <!-- Row end -->
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center"> List item with badge <span class="badge badge-secondary badge-pill">10</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"> List item with badge <span class="badge badge-info badge-pill">21</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center"> List item with badge <span class="badge badge-primary badge-pill">35</span>
                    </li>
                  </ul>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"> List item link with badge <span class="badge badge-secondary badge-pill">10</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"> List item link with badge <span class="badge badge-info badge-pill">21</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center"> List item link with badge <span class="badge badge-primary badge-pill">35</span>
                    </a>
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