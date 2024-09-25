<?php include("./header.php"); ?> <?php include("./sidebar.php"); ?> <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Contact</li>
        <li class="breadcrumb-item active">Contact Form</li>
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
      <div class="row justify-content-center gutters">
        <div class="col-xl-7 col-lg-7 col-md-8 col-sm-10">
          <form>
            <div class="card m-0">
              <div class="card-header">
                <div class="card-title">Contact Us</div>
                <div class="card-sub-title">How can we help you? A placeholder for small description.</div>
              </div>
              <div class="card-body">
                <div class="row gutters">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                    </div>
                  </div>
                </div>
                <div class="row gutters">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required="">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="form-group">
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="">
                    </div>
                  </div>
                </div>
                <div class="row gutters">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="form-group">
                      <textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="3"></textarea>
                      <div class="form-text text-muted">
                        <p id="characterLeft" class="help-block ">140 characters left</p>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit Form</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>