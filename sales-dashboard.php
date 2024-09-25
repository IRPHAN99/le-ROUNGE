<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Sales Dashboard</li>
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
    <!-- Main container start -->
    <div class="main-container">
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="info-tiles">
            <div class="info-icon">
              <i class="icon-visibility"></i>
            </div>
            <div class="stats-detail">
              <h2>6500</h2>
              <p>Visitors</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="info-tiles">
            <div class="info-icon">
              <i class="icon-shopping_basket"></i>
            </div>
            <div class="stats-detail">
              <h2>4500</h2>
              <p>Sales</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="info-tiles">
            <div class="info-icon">
              <i class="icon-check_circle"></i>
            </div>
            <div class="stats-detail">
              <h2>75</h2>
              <p>Signups</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="info-tiles">
            <div class="info-icon secondary">
              <i class="icon-archive"></i>
            </div>
            <div class="stats-detail">
              <h2>3500</h2>
              <p>Orders</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Row ends -->
      <!-- Row starts -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Sales &amp; Income</div>
            </div>
            <div class="card-body pt-0 pb-0">
              <div id="mixed-line-column"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row ends -->
      <!-- Row starts -->
      <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card h-340">
            <div class="card-header">
              <div class="card-title">Messages</div>
            </div>
            <div class="card-body">
              <div class="customScroll5">
                <ul class="user-messages">
                  <li class="clearfix">
                    <div class="customer">AM</div>
                    <div class="delivery-details">
                      <span class="badge badge-primary">Ordered</span>
                      <h5>Aaleyah Malik</h5>
                      <p>We are pleased to inform that the following ticket no. <b>Le Rouge510</b> have been booked. </p>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="customer">AS</div>
                    <div class="delivery-details">
                      <span class="badge badge-primary">Delivered</span>
                      <h5>Ali Sayed</h5>
                      <p>The carrier successfully delivered the message to the end user.</p>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="customer">ZR</div>
                    <div class="delivery-details">
                      <span class="badge badge-primary">Cancelled</span>
                      <h5>Zaira Raheem</h5>
                      <p>The following describe the status codes and messages states for delivery receipts.</p>
                    </div>
                  </li>
                  <li class="clearfix">
                    <div class="customer">LJ</div>
                    <div class="delivery-details">
                      <span class="badge badge-primary">Returned</span>
                      <h5>Lily Jordan</h5>
                      <p>Status codes and descriptions are returned in the following OpenMarket-specific TLVs When a delivery receipt is received.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card h-310">
            <div class="card-header">
              <div class="card-title">Recent Orders</div>
            </div>
            <div class="card-body">
              <div class="customScroll5">
                <ul class="recent-orders">
                  <li>
                    <div class="order-img">
                      <img src="img/orders/order5.png" alt="Food">
                      <span class="badge badge-success">Delivered</span>
                    </div>
                    <div class="order-details">
                      <h5 class="order-title">The Original Cake</h5>
                      <p class="order-desc">Wedding cake with macarons.</p>
                      <span class="order-date">21 mins ago</span>
                    </div>
                  </li>
                  <li>
                    <div class="order-img">
                      <img src="img/orders/order6.png" alt="Food">
                      <span class="badge badge-danger">On Hold</span>
                    </div>
                    <div class="order-details">
                      <h5 class="order-title">Classic Sandwich</h5>
                      <p class="order-desc">Creamy Sandwich with pie.</p>
                      <span class="order-date">32 mins ago</span>
                    </div>
                  </li>
                  <li>
                    <div class="order-img">
                      <img src="img/orders/order3.png" alt="Food">
                      <span class="badge badge-danger">On Hold</span>
                    </div>
                    <div class="order-details">
                      <h5 class="order-title">Strawberry Pecan</h5>
                      <p class="order-desc">Homemade cheese Pecan with berries.</p>
                      <span class="order-date">15 mins ago</span>
                    </div>
                  </li>
                  <li>
                    <div class="order-img">
                      <img src="img/orders/order1.png" alt="Food">
                      <span class="badge badge-info">Processing</span>
                    </div>
                    <div class="order-details">
                      <h5 class="order-title">Double Stacker</h5>
                      <p class="order-desc">Homemade cheese cake with berries.</p>
                      <span class="order-date">10 mins ago</span>
                    </div>
                  </li>
                  <li>
                    <div class="order-img">
                      <img src="img/orders/order4.png" alt="Food">
                      <span class="badge badge-success">Delivered</span>
                    </div>
                    <div class="order-details">
                      <h5 class="order-title">Veggie Burger</h5>
                      <p class="order-desc">Homemade cheese cake with berries.</p>
                      <span class="order-date">17 mins ago</span>
                    </div>
                  </li>
                  <li>
                    <div class="order-img">
                      <img src="img/orders/order2.png" alt="Food">
                      <span class="badge badge-danger">On Hold</span>
                    </div>
                    <div class="order-details">
                      <h5 class="order-title">Teriyaki Cheese Balls</h5>
                      <p class="order-desc">Chocolate cake with mascarpone.</p>
                      <span class="order-date">12 mins ago</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
          <div class="card h-310 agenda-bg">
            <div class="card-body">
              <div class="agenda">
                <div class="todays-date">
                  <h5>Agenda - <span class="date" id="todays-date"></span>
                  </h5>
                </div>
                <ul class="agenda-list">
                  <li>
                    <span class="bullet">&nbsp;</span>
                    <div class="details">
                      <p>Call with Willams</p>
                      <small>09:00</small>
                    </div>
                  </li>
                  <li>
                    <span class="bullet">&nbsp;</span>
                    <div class="details">
                      <p>Book a Hotel for James</p>
                      <small>09:30</small>
                    </div>
                  </li>
                  <li>
                    <span class="bullet">&nbsp;</span>
                    <div class="details">
                      <p>Book a Flight to California</p>
                      <small>10:00</small>
                    </div>
                  </li>
                  <li>
                    <span class="bullet secondary">&nbsp;</span>
                    <div class="details">
                      <p>Call with Willams</p>
                      <small>09:00</small>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
          <div class="card h-310">
            <div class="card-header">
              <div class="card-title">Visitors</div>
            </div>
            <div class="card-body pt-0">
              <div id="column-visitors"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
          <div class="card h-340">
            <div class="card-header">
              <div class="card-title">Top Users</div>
            </div>
            <div class="card-body">
              <div class="customScroll5">
                <div class="top-agents-container">
                  <div class="top-agent">
                    <img src="img/user.png" class="avatar" alt="Agent" />
                    <div class="agent-details">
                      <h6>Zuairia Zaman</h6>
                      <div class="agent-score">
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="points">
                          <div class="left">Rank #1</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="top-agent">
                    <img src="img/user22.png" class="avatar" alt="Agent" />
                    <div class="agent-details">
                      <h6>Lily Jordan</h6>
                      <div class="agent-score">
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="points">
                          <div class="left">Rank #2</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="top-agent">
                    <img src="img/user6.png" class="avatar" alt="Agent" />
                    <div class="agent-details">
                      <h6>Ali Sayed</h6>
                      <div class="agent-score">
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="points">
                          <div class="left">Rank #3</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="top-agent">
                    <img src="img/user20.png" class="avatar" alt="Agent" />
                    <div class="agent-details">
                      <h6>Aaleyah Malik</h6>
                      <div class="agent-score">
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="points">
                          <div class="left">Rank #4</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="top-agent">
                    <img src="img/user13.png" class="avatar" alt="Agent" />
                    <div class="agent-details">
                      <h6>Aabid Raheem</h6>
                      <div class="agent-score">
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="points">
                          <div class="left">Rank #5</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
          <div class="card h-340">
            <div class="card-header">
              <div class="card-title">Activity</div>
            </div>
            <div class="card-body">
              <div class="customScroll5">
                <div class="timeline-activity">
                  <div class="activity-log">
                    <p class="log-name">Corey Haggard <small class="log-time">- 9 mins ago</small>
                    </p>
                    <div class="log-details">University dashboard has been created <span class="text-success ml-1">#New</span>
                    </div>
                  </div>
                  <div class="activity-log">
                    <p class="log-name">Gleb Kuznetsov <small class="log-time">- 4 hrs ago</small>
                    </p>
                    <div class="log-details"> Farewell day photos uploaded. <div class="stacked-images mt-1">
                        <img class="sm" src="img/user.png" alt="Profile Image">
                        <img class="sm" src="img/user2.png" alt="Profile Image">
                        <img class="sm" src="img/user3.png" alt="Profile Image">
                        <img class="sm" src="img/user4.png" alt="Profile Image">
                        <span class="plus sm">+5</span>
                      </div>
                    </div>
                  </div>
                  <div class="activity-log">
                    <p class="log-name">Emily Russell <small class="log-time">- 7 hrs ago</small>
                    </p>
                    <div class="log-details">Developed 30 multipurpose Bootstrap 4 Admin Templates</div>
                  </div>
                  <div class="activity-log">
                    <p class="log-name">Nathan James <small class="log-time">- 9 hrs ago</small>
                    </p>
                    <div class="log-details">Best Design Award</div>
                  </div>
                  <div class="activity-log">
                    <p class="log-name">Gleb Kuznetsov <small class="log-time">- 4 hrs ago</small>
                    </p>
                    <div class="log-details"> Farewell day photos uploaded. <div class="stacked-images mt-1">
                        <img class="sm" src="img/user5.png" alt="Profile Image">
                        <img class="sm" src="img/user22.png" alt="Profile Image">
                        <span class="plus sm">+7</span>
                      </div>
                    </div>
                  </div>
                  <div class="activity-log">
                    <p class="log-name">Emily Russell <small class="log-time">- 3 hrs ago</small>
                    </p>
                    <div class="log-details">Developed 30 multipurpose Bootstrap 4 Admin Templates</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row ends -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>
<!-- Apex Charts -->
<script src="vendor/apex/apexcharts.min.js"></script>
<script src="vendor/apex/sales/mixed-line-column.js"></script>
<script src="vendor/apex/sales/column-visitors.js"></script>