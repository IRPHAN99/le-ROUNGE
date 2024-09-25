<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?> <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Wizards</li>
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
      <div class="row gutters">
        <div class="col-12">
          <!-- Row start -->
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div id="example-basic">
                    <h3>First step</h3>
                    <section>
                      <p>Try the keyboard navigation by clicking arrow left or right!</p>
                    </section>
                    <h3>Second step</h3>
                    <section>
                      <p>Wonderful transition effects.</p>
                    </section>
                    <h3>Third step</h3>
                    <section>
                      <p>The next and previous buttons help you to navigate through your content.</p>
                    </section>
                  </div>
                </div>
              </div>
              <!-- Row end -->
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div id="example-form">
                    <h3>Personal Information</h3>
                    <section>
                      <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                          <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter full name">
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                          <div class="form-group">
                            <label for="eMail">Email</label>
                            <input type="email" class="form-control" id="eMail" placeholder="Enter email ID">
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                          <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                          </div>
                        </div>
                      </div>
                    </section>
                    <h3>Billing Information</h3>
                    <section>
                      <div class="row gutters">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                          <div class="form-group">
                            <label for="addrEss">Address</label>
                            <input type="text" class="form-control" id="addrEss" placeholder="Flat No">
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                          <div class="form-group">
                            <label for="ciTy">City</label>
                            <input type="text" class="form-control" id="ciTy" placeholder="City">
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                          <div class="form-group">
                            <label for="sTate">State</label>
                            <input type="text" class="form-control" id="sTate" placeholder="State">
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                          <div class="form-group">
                            <label for="counTry">Country</label>
                            <input type="text" class="form-control" id="counTry" placeholder="Country">
                          </div>
                        </div>
                      </div>
                    </section>
                    <h3>Payment Details</h3>
                    <section>
                      <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                          <div class="form-group">
                            <label for="cardNum">Card Number</label>
                            <input type="text" class="form-control" id="cardNum" placeholder="Enter Card Number">
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                          <div class="form-group">
                            <label for="nameOnCard">Name On Card</label>
                            <input type="text" class="form-control" id="nameOnCard" placeholder="Name On Card">
                          </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                          <div class="form-group">
                            <label for="expDate">Expiry Date</label>
                            <input type="text" class="form-control" id="expDate" placeholder="Card Expiry Date">
                          </div>
                        </div>
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-12">
                          <div class="form-group">
                            <label for="cvv">CVV</label>
                            <input type="number" class="form-control" id="cvv" placeholder="CVV">
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <!-- Row end -->
        </div>
      </div>
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>
<!-- Steps wizard JS -->
<script src="vendor/wizard/jquery.steps.min.js"></script>
<script src="vendor/wizard/jquery.steps.custom.js"></script>