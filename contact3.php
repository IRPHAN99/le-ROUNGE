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
        <div class="col-xl-7 col-lg-7 col-md-9 col-sm-10">
          <form>
            <div class="card m-0">
              <div class="card-header">
                <div class="card-title">Contact Us</div>
                <div class="card-sub-title">How can we help you? A placeholder for small description.</div>
              </div>
              <div class="card-body">
                <div class="form-group row gutters">
                  <label for="inputName" class="col-sm-3 col-form-label text-right">Name</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                  </div>
                </div>
                <div class="form-group row gutters">
                  <label for="inputEmail" class="col-sm-3 col-form-label text-right">Your E-mail</label>
                  <div class="col-sm-6">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row gutters">
                  <label for="inputMobNumber" class="col-sm-3 col-form-label text-right">Mobile</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputMobNumber" placeholder="Mobile">
                  </div>
                </div>
                <div class="form-group row gutters">
                  <label for="inputSubject" class="col-sm-3 col-form-label text-right">Subject</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject">
                  </div>
                </div>
                <div class="form-group row gutters">
                  <label for="inputMessage" class="col-sm-3 col-form-label text-right">Your Message</label>
                  <div class="col-sm-9">
                    <textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="4"></textarea>
                    <div class="form-text text-muted">
                      <p id="characterLeft" class="help-block ">140 characters left</p>
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