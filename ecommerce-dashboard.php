<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?> 
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Ecommerce Dashboard</li>
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
      <!-- Row starts -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card h-350">
            <div class="card-header">
              <div class="card-title">Orders</div>
            </div>
            <div class="card-body pt-0">
              <div id="orders-visits"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row ends -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Sales</div>
            </div>
            <div class="card-body pt-0">
              <div id="compare-sales"></div>
              <div class="info-stats3 shade-one-a">
                <i class="icon-turned_in"></i>
                <h6>Overall Sales</h6>
                <h2>75,000</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Income</div>
            </div>
            <div class="card-body pt-0">
              <div id="compare-expenses"></div>
              <div class="info-stats3 shade-one-a">
                <i class="icon-turned_in"></i>
                <h6>Overall Income</h6>
                <h2>50,000</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row starts -->
      <div class="row gutters">
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card h-310">
            <div class="card-header">
              <div class="card-title">By Channel</div>
            </div>
            <div class="card-body pb-0 pt-0">
              <div id="by-channel"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="card h-310">
            <div class="card-header">
              <div class="card-title">Sale by Counrty</div>
            </div>
            <div class="card-body">
              <div id="avg-handle-time"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="card h-310">
            <div class="card-header">
              <div class="card-title">By Device</div>
            </div>
            <div class="card-body">
              <div id="budget"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row ends -->
      <!-- Row starts -->
      <div class="row gutters">
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card h-310">
            <div class="card-header">
              <div class="card-title">Customer Reviews</div>
            </div>
            <div class="card-body">
              <div class="customScroll5">
                <ul class="customer-rating">
                  <li class="clearfix">
                    <div class="customer">
                      <img src="img/user.png" alt="Le Rouge Admin">
                    </div>
                    <div class="customer-review">
                      <div class="stars">
                        <div id="rate1"></div>
                      </div>
                      <h5>Excellent Admin Template</h5>
                      <h6 class="by">By, <a href="#">William Meleski</a>
                      </h6>
                      <p>The atmosphere is excellent along with the greenery around. Market, hospital and schools are easily accessible.</p>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="customer">
                      <img src="img/user5.png" alt="Le Rouge Admin">
                    </div>
                    <div class="customer-review">
                      <div class="stars" id="rate2"></div>
                      <h5>Best Quality Template</h5>
                      <h6 class="by">By, <a href="#">Joshua Galleher</a>
                      </h6>
                      <p>The atmosphere is excellent along with the greenery around. Market, hospital and schools are easily accessible.</p>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="customer">
                      <img src="img/user3.png" alt="Le Rouge Admin">
                    </div>
                    <div class="customer-review">
                      <div class="stars" id="rate3"></div>
                      <h5>Great Admin Template</h5>
                      <h6 class="by">By, <a href="#">Mark Lee</a>
                      </h6>
                      <p>This Location has good connectivity with nearby schools, colleges and hospitals. Public transport is available.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Quick Stats</div>
            </div>
            <div class="card-body">
              <div class="customScroll5">
                <div class="quick-analytics">
                  <a href="#">
                    <i class="icon-shopping-cart1"></i> 500,000 New Orders </a>
                  <a href="#">
                    <i class="icon-shopping-bag1"></i> 950,000 Products </a>
                  <a href="#">
                    <i class="icon-package"></i> 325,010 Retail Stores </a>
                  <a href="#">
                    <i class="icon-play-circle"></i> 780,500 Movies Downloaded </a>
                  <a href="#">
                    <i class="icon-share1"></i> 250,000 Images Uploaded </a>
                  <a href="#">
                    <i class="icon-eye1"></i> 870,000 Monthly Visits </a>
                  <a href="#">
                    <i class="icon-bell"></i> 350,500 Tickets Booked </a>
                  <a href="#">
                    <i class="icon-shopping-cart1"></i> 500,000 New Orders </a>
                  <a href="#">
                    <i class="icon-shopping-bag1"></i> 950,000 Products </a>
                  <a href="#">
                    <i class="icon-package"></i> 325,010 Retail Stores </a>
                  <a href="#">
                    <i class="icon-play-circle"></i> 780,500 Movies Downloaded </a>
                  <a href="#">
                    <i class="icon-share1"></i> 250,000 Images Uploaded </a>
                  <a href="#">
                    <i class="icon-eye1"></i> 870,000 Monthly Visits </a>
                  <a href="#">
                    <i class="icon-bell"></i> 350,500 Tickets Booked </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="card h-310">
            <div class="card-header">
              <div class="card-title">Invoices Status</div>
            </div>
            <div class="card-body">
              <div class="customScroll5">
                <div class="invoices-status">
                  <ul>
                    <li>
                      <h2>7500</h2>
                      <h6>Total Invoices Sent</h6>
                    </li>
                    <li>
                      <h2>4000</h2>
                      <h6>Invoices Paid</h6>
                    </li>
                    <li>
                      <h2>2500</h2>
                      <h6>Invoices Due</h6>
                    </li>
                    <li>
                      <h2>1500</h2>
                      <h6>Invoices Overdue</h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row ends -->
      <!-- Row starts -->
      <div class="row gutters">
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="risks-block high h-124">
            <i class="icon-shopping-bag1"></i>
            <div class="risk-details">
              <h2>700</h2>
              <h5>Orders Pending <span>(High Priority)</span>
              </h5>
            </div>
          </div>
          <div class="risks-block low h-124">
            <i class="icon-shopping-bag1"></i>
            <div class="risk-details">
              <h2>900</h2>
              <h5>Orders Delivered <span>(Success)</span>
              </h5>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="card h-265">
            <div class="card-header">
              <div class="card-title">Activity</div>
            </div>
            <div class="card-body">
              <div class="projectLog">
                <div class="logs-container">
                  <div class="logs-body">
                    <div class="log-list">
                      <i class="icon-check_circle text-danger"></i>
                      <div class="log-info">
                        <div class="log-title">Product Delivered</div>
                        <div class="log-message">Interactive dashboard design</div>
                        <div class="log-user">By: <span class="name">Zuairia</span> - On <span class="dt">10/10/2019</span>
                        </div>
                      </div>
                    </div>
                    <div class="log-list">
                      <i class="icon-warning1 text-danger"></i>
                      <div class="log-info">
                        <div class="log-title">Issues fixed</div>
                        <div class="log-message">4 high risk tasks overdue</div>
                        <div class="log-user">By: <span class="name">Zyan</span> - On <span class="dt">10/15/2019</span>
                        </div>
                      </div>
                    </div>
                    <div class="log-list">
                      <i class="icon-calendar text-danger"></i>
                      <div class="log-info">
                        <div class="log-title">Team Meeting</div>
                        <div class="log-message">Discuss on status update</div>
                        <div class="log-user">By: <span class="name">Lewis</span> - On <span class="dt">10/18/2019</span>
                        </div>
                      </div>
                    </div>
                    <div class="log-list">
                      <i class="icon-message-circle text-info"></i>
                      <div class="log-info">
                        <div class="log-title">New Comment</div>
                        <div class="log-message">Currently 7% over target budget</div>
                        <div class="log-user">By: <span class="name">Sayed</span> - On <span class="dt">10/12/2019</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card h-265">
            <div class="card-header">
              <div class="card-title">Summary</div>
            </div>
            <div class="card-body">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center"> Start Date: <span class="badge badge-primary badge-pill">09/15/2019</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"> End Date: <span class="badge badge-primary badge-pill">01/15/2020</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"> Manager: <h6>Zuairia Zaman</h6>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"> Overall Status: <span class="badge badge-secondary badge-pill">Success</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Row ends -->
    </div>
    <!-- Main container end -->
  </div>
  <!-- Page content end -->
</div> <?php include("./footer.php"); ?>
<!-- Apex Charts -->
<script src="vendor/apex/apexcharts.min.js"></script>
<script src="vendor/apex/ecommerce-dashboard/by-device.js"></script>
<script src="vendor/apex/ecommerce-dashboard/avg-handle-time.js"></script>
<script src="vendor/apex/ecommerce-dashboard/by-channel.js"></script>
<script src="vendor/apex/ecommerce-dashboard/orders-visits-bouncerate.js"></script>
<script src="vendor/apex/ecommerce-dashboard/sales.js"></script>
<script src="vendor/apex/ecommerce-dashboard/sales2.js"></script>