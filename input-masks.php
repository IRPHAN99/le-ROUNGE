<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Input Masks</li>
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
          <div class="card">
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="form-group">
                    <label>Credit Card Format</label>
                    <input type="text" class="form-control" placeholder="Enter credit card number" id="input-credit-card" />
                    <div id="creditCardType">
                      <div class="visa credit-card">
                        <img src="img/cards/mastercard.png" />
                      </div>
                      <div class="mastercard credit-card">
                        <img src="img/cards/visa.png" />
                      </div>
                      <div class="amex credit-card">
                        <img src="img/cards/american-express.png" />
                      </div>
                      <div class="jcb credit-card">
                        <img src="img/cards/jcb.png" />
                      </div>
                      <div class="diners credit-card">
                        <img src="img/cards/diners.png" />
                      </div>
                      <div class="discover credit-card">
                        <img src="img/cards/discover.png" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">US (+1)</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter phone number" id="phone-format-us" />
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">IND (+91)</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter phone number" id="phone-format-in" />
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <span class="input-group-text">BRZ (+55)</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter phone number" id="phone-format-br" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Date Format</label>
                    <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="date-formatting" />
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Date Format 2</label>
                    <input type="text" class="form-control" placeholder="MM-YY" id="date-formatting2" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Time Format</label>
                    <input type="text" class="form-control" placeholder="HH-MM-SS" id="time-formatting" />
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Time Format 2</label>
                    <input type="text" class="form-control" placeholder="HH-MM" id="time-formatting2" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Input Numeral Thousand Format</label>
                    <input type="text" class="form-control" placeholder="Enter Number" id="input-numeral-thousand" />
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Input Numeral Lakh Format</label>
                    <input type="text" class="form-control" placeholder="Enter Number" id="input-numeral-lakh" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Blocks</label>
                    <input type="text" class="form-control" placeholder="Delimiters: [4444.333.333.4444]" id="input-blocks" />
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Delimiter</label>
                    <input type="text" class="form-control" placeholder="Delimiters: [333.333.333]" id="input-delimiter" />
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Delimiter</label>
                    <input type="text" class="form-control" placeholder="Delimiters: [333.333.333.22]" id="input-delimiter2" />
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <label>Prefix</label>
                    <input type="text" class="form-control" placeholder="Delimiters: [4444.4444.4444]" id="input-prefix" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>