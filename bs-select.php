<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Bootstrap Select</li>
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
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <p>
                    <code>Default select box</code>
                  </p>
                  <select class="form-control selectpicker">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Select box with optgroups</code>
                    </p>
                    <select class="form-control selectpicker">
                      <optgroup label="United States">
                        <option>California</option>
                        <option>Florida</option>
                      </optgroup>
                      <optgroup label="Asia">
                        <option>Brazil</option>
                        <option>India</option>
                      </optgroup>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Multiple select options</code>
                    </p>
                    <select class="form-control selectpicker" multiple>
                      <option>United States</option>
                      <option>Brazil</option>
                      <option>Turkey</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <p>
                    <code>Live search</code>
                  </p>
                  <select class="form-control selectpicker" data-live-search="true">
                    <optgroup label="Picnic">
                      <option>United States</option>
                      <option>Brazil</option>
                      <option>Turkey</option>
                    </optgroup>
                    <optgroup label="Camping">
                      <option>Japan</option>
                      <option>India</option>
                      <option>Canada</option>
                    </optgroup>
                  </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Key words</code>
                    </p>
                    <select class="form-control selectpicker" data-live-search="true">
                      <option data-tokens="Brazil United States">Hot Dog, Fries and a Soda</option>
                      <option data-tokens="United States">Burger, Shake and a Smile</option>
                      <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Limit the number of selections</code>
                    </p>
                    <select class="form-control selectpicker" multiple data-max-options="2">
                      <option>United States</option>
                      <option>Brazil</option>
                      <option>Turkey</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <p>
                    <code>Limit the number of selections</code>
                  </p>
                  <select class="form-control selectpicker" multiple>
                    <optgroup label="Condiments" data-max-options="2">
                      <option>United States</option>
                      <option>Brazil</option>
                      <option>Turkey</option>
                    </optgroup>
                    <optgroup label="Breads" data-max-options="2">
                      <option>France</option>
                      <option>India</option>
                      <option>Canada</option>
                    </optgroup>
                  </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Placeholder</code>
                    </p>
                    <select class="form-control selectpicker" multiple title="Choose one of the following...">
                      <option>United States</option>
                      <option>Brazil</option>
                      <option>Turkey</option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Selected text</code>
                    </p>
                    <select class="form-control selectpicker">
                      <option title="Combo 1">Hot Dog, Fries and a Soda</option>
                      <option title="Combo 2">Burger, Shake and a Smile</option>
                      <option title="Combo 3">Sugar, Spice and all things nice</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <p>
                    <code>Selected text format</code>
                  </p>
                  <select class="form-control selectpicker" multiple data-selected-text-format="count">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Selected text format</code>
                    </p>
                    <select class="form-control selectpicker" multiple data-selected-text-format="count > 3">
                      <option>United States</option>
                      <option>Brazil</option>
                      <option>Turkey</option>
                      <option>France</option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group"></div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                  <select class="form-control selectpicker" data-style="btn-danger">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                  <select class="form-control selectpicker" data-style="btn-warning">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                  <select class="form-control selectpicker" data-style="btn-success">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                  <select class="form-control selectpicker" data-style="btn-info">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                  <p>
                    <code>Checkmark on selected option</code>
                  </p>
                  <select class="form-control selectpicker show-tick">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                  <p>
                    <code>Style individual options</code>
                  </p>
                  <select class="form-control selectpicker show-tick">
                    <option>United States</option>
                    <option class="bg-success">Brazil</option>
                    <option class="bg-warning">France</option>
                  </select>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                  <p>
                    <code>Width auto</code>
                  </p>
                  <select class="form-control selectpicker" data-width="auto">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                  <p>
                    <code>Width Fit</code>
                  </p>
                  <select class="form-control selectpicker" data-width="fit">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                  <p>
                    <code>Width in pixels</code>
                  </p>
                  <select class="form-control selectpicker" data-width="120px">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                  <p>
                    <code>Width %</code>
                  </p>
                  <select class="form-control selectpicker" data-width="70%">
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <p>
                    <code>With Icons</code>
                  </p>
                  <select class="form-control selectpicker show-tick">
                    <option data-icon="icon-border_all">Brazil</option>
                    <option data-icon="icon-layers">India</option>
                    <option data-icon="icon-public">Japan</option>
                  </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>With Subtext</code>
                    </p>
                    <select class="form-control selectpicker" data-size="3">
                      <option>Brazil</option>
                      <option data-subtext="Mexico">Mexico</option>
                      <option data-subtext="France">France</option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>With Show Subtext</code>
                    </p>
                    <select class="form-control selectpicker" data-size="4" data-show-subtext="true">
                      <option data-subtext="Brazil">Brazil</option>
                      <option data-subtext="Turkey">Turkey</option>
                      <option data-subtext="United Kingdom">United Kingdom</option>
                      <option data-subtext="Mexico">Mexico</option>
                      <option data-subtext="Germany">Germany</option>
                      <option data-subtext="France">France</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <p>
                    <code>Menu Size</code>
                  </p>
                  <select class="form-control selectpicker" data-size="3">
                    <option>United States</option>
                    <option data-subtext="India">India</option>
                    <option data-subtext="Brazil">Brazil</option>
                    <option data-subtext="Turkey">Turkey</option>
                    <option data-subtext="United Kingdom">United Kingdom</option>
                    <option data-subtext="Mexico">Mexico</option>
                    <option data-subtext="Germany">Germany</option>
                    <option data-subtext="France">France</option>
                    <option data-subtext="Thailand">Thailand</option>
                  </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Select/deselect all options</code>
                    </p>
                    <select class="form-control selectpicker" multiple data-actions-box="true">
                      <option>United States</option>
                      <option data-subtext="India">India</option>
                      <option data-subtext="Brazil">Brazil</option>
                      <option data-subtext="Turkey">Turkey</option>
                      <option data-subtext="United Kingdom">United Kingdom</option>
                      <option data-subtext="Mexico">Mexico</option>
                      <option data-subtext="Germany">Germany</option>
                      <option data-subtext="France">France</option>
                      <option data-subtext="Thailand">Thailand</option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Menu header</code>
                    </p>
                    <select class="form-control selectpicker" data-header="Select a condiment">
                      <option>United States</option>
                      <option data-subtext="India">India</option>
                      <option data-subtext="Brazil">Brazil</option>
                      <option data-subtext="Turkey">Turkey</option>
                      <option data-subtext="United Kingdom">United Kingdom</option>
                      <option data-subtext="Mexico">Mexico</option>
                      <option data-subtext="Germany">Germany</option>
                      <option data-subtext="France">France</option>
                      <option data-subtext="Thailand">Thailand</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <!-- Row start -->
              <div class="row gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <p>
                    <code>Disabled select box</code>
                  </p>
                  <select class="form-control selectpicker" disabled>
                    <option>United States</option>
                    <option>Brazil</option>
                    <option>Turkey</option>
                  </select>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Disabled options</code>
                    </p>
                    <select class="form-control selectpicker">
                      <option>United States</option>
                      <option disabled>Brazil</option>
                      <option>Turkey</option>
                    </select>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                  <div class="form-group">
                    <p>
                      <code>Disabled option groups</code>
                    </p>
                    <select class="form-control selectpicker">
                      <optgroup label="Picnic" disabled>
                        <option>United States</option>
                        <option>Brazil</option>
                        <option>Turkey</option>
                      </optgroup>
                      <optgroup label="Camping">
                        <option>France</option>
                        <option>Mexico</option>
                        <option>Germany</option>
                      </optgroup>
                    </select>
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
<!-- Bootstrap Select JS -->
<script src="vendor/bs-select/bs-select.min.js"></script>