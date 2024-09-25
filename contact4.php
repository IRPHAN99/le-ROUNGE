<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?> 
 <div class="page-wrapper">
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
        <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
          <form>
            <div class="card m-0">
              <div class="card-header">
                <div class="card-title">Contact Us</div>
                <ul class="text-muted custom">
                  <li>* Custom form controls and selects are also supported.</li>
                  <li>* You can then remix that once again with size-specific column classes.</li>
                  <li>* Group checkboxes or radios on the same horizontal row by adding .form-check-inline to any .form-check.</li>
                </ul>
              </div>
              <div class="card-body">
                <!-- Row start -->
                <div class="row gutters">
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="inputName" class="col-form-label">Name</label>
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="inputEmail" class="col-form-label">Your E-mail</label>
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="inputMobNumber" class="col-form-label">Mobile</label>
                      <input type="text" class="form-control" id="inputMobNumber" placeholder="Mobile">
                    </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                      <label for="inputSubject" class="col-form-label">Subject</label>
                      <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <label for="inputMessage" class="col-form-label">Your Message</label>
                      <textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="4"></textarea>
                      <div class="form-text text-muted">
                        <p id="characterLeft" class="help-block ">140 characters left</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Row end -->
                <!-- Row start -->
                <div class="row gutters">
                  <div class="col-xl-12">
                    <button type="button" id="submit" name="submit" class="btn btn-primary float-right">Submit Form</button>
                  </div>
                </div>
                <!-- Row end -->
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