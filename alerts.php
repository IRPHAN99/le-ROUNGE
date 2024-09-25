<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?> 
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Notifications</li>
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
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Display fixed top</div>
              <div class="card-sub-title">Notify.js is a jQuery plugin to provide simple yet fully customisable notifications.</div>
            </div>
            <div class="card-body">
              <div class="notify-notifications clearfix">
                <div id="messages"></div>
                <button type="button" class="btn btn-primary add-message">Default</button>
                <button type="button" class="btn btn-secondary add-sticky-message">Sticky</button>
                <button type="button" class="btn btn-info add-info-message">Info</button>
                <button type="button" class="btn btn-danger add-danger-message">Danger</button>
                <button type="button" class="btn btn-warning add-warning-message">Warning</button>
                <button type="button" class="btn btn-success add-success-message">Success</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Display top right</div>
              <div class="card-sub-title">Notify.js is a jQuery plugin to provide simple yet fully customisable notifications.</div>
            </div>
            <div class="card-body">
              <div class="notify-notifications clearfix">
                <div id="notes"></div>
                <button type="button" class="btn btn-primary add-noti">Default</button>
                <button type="button" class="btn btn-secondary add-sticky-noti">Sticky</button>
                <button type="button" class="btn btn-info add-info-noti">Info</button>
                <button type="button" class="btn btn-danger add-danger-noti">Danger</button>
                <button type="button" class="btn btn-warning add-warning-noti">Warning</button>
                <button type="button" class="btn btn-success add-success-noti">Success</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Default Alerts</div>
            </div>
            <div class="card-body">
              <div class="alert alert-primary alert-dismissible fade show" role="alert"> A primary alert with Dismissing <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="alert alert-secondary alert-dismissible fade show" role="alert"> A secondary alert with Dismissing <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="alert alert-info alert-dismissible fade show" role="alert"> A info alert with Dismissing <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="alert alert-danger alert-dismissible fade show" role="alert"> A danger alert with Dismissing <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="alert alert-warning alert-dismissible fade show" role="alert"> A warning alert with Dismissing <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="alert alert-success alert-dismissible fade show" role="alert"> A success alert with Dismissing <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Alerts with Icon</div>
            </div>
            <div class="card-body">
              <div class="alert alert-primary" role="alert">
                <i class="icon-help"></i>A simple primary alert with <a href="#" class="alert-link">Link</a>.
              </div>
              <div class="alert alert-secondary" role="alert">
                <i class="icon-help"></i>A simple secondary alert with <a href="#" class="alert-link">Link</a>.
              </div>
              <div class="alert alert-info" role="alert">
                <i class="icon-info1"></i>A simple info alert with <a href="#" class="alert-link">Link</a>.
              </div>
              <div class="alert alert-danger" role="alert">
                <i class="icon-new_releases"></i>A simple danger alert with <a href="#" class="alert-link">Link</a>.
              </div>
              <div class="alert alert-warning" role="alert">
                <i class="icon-warning"></i>A simple warning alert with <a href="#" class="alert-link">Link</a>.
              </div>
              <div class="alert alert-success" role="alert">
                <i class="icon-check_circle"></i>A simple success alert with <a href="#" class="alert-link">Link</a>.
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"></div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
          <div class="alert-notify info">
            <div class="alert-notify-body">
              <span class="type">Info</span>
              <div class="alert-notify-title">Give your valuable feedback. <img src="img/notification-info.svg" alt="">
              </div>
              <div class="alert-notify-text">How likely are you to recommend Le Rouge Dashboard to your friends?</div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
          <div class="alert-notify danger">
            <div class="alert-notify-body">
              <span class="type">Danger</span>
              <div class="alert-notify-title">Give your valuable feedback. <img src="img/notification-danger.svg" alt="">
              </div>
              <div class="alert-notify-text">How likely are you to recommend Le Rouge Dashboard to your friends?</div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
          <div class="alert-notify success">
            <div class="alert-notify-body">
              <span class="type">Success</span>
              <div class="alert-notify-title">Give your valuable feedback. <img src="img/notification-success.svg" alt="">
              </div>
              <div class="alert-notify-text">How likely are you to recommend Le Rouge Dashboard to your friends?</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>