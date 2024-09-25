<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?>
  <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Input Groups</li>
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
                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                      </div>
                      <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">@bs.com</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">http://bs.com</span>
                      </div>
                      <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                    </div>
                  </div>
                </div>
                <div class="col-xl-8 col-lglg-8 col-md-8 col-sm-8 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">With textarea</span>
                      </div>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                      <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                  <div class="form-group">
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lglg-4 col-md-4 col-sm-4 col-12">
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Multiple inputs</div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-12 col-lglg-12 col-md-12 col-sm-12 col-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">First and Last Name</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control">
                    <input type="text" aria-label="Last name" class="form-control">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Multiple addons</div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                      </div>
                      <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
                      <div class="input-group-append">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Button addons</div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-primary" type="button" id="button-addon1">Button</button>
                      </div>
                      <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend" id="button-addon3">
                        <button class="btn btn-primary" type="button">Button</button>
                        <button class="btn btn-dark" type="button">Button</button>
                      </div>
                      <input type="text" class="form-control" placeholder="" aria-label="Example text with two button addons" aria-describedby="button-addon3">
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
                      <div class="input-group-append" id="button-addon4">
                        <button class="btn btn-primary" type="button">Button</button>
                        <button class="btn btn-dark" type="button">Button</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Buttons with dropdowns</div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with dropdown button">
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Text input with dropdown button">
                      <div class="input-group-append">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Segmented Buttons</div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <button type="button" class="btn btn-dark">Action</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                      <div class="input-group-append">
                        <button type="button" class="btn btn-dark">Action</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                          <div role="separator" class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Checkboxes and radios</div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="checkbox" aria-label="Checkbox for following text input">
                        </div>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with checkbox">
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input">
                        </div>
                      </div>
                      <input type="text" class="form-control" aria-label="Text input with radio button">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Custom select</div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                      </div>
                      <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <select class="custom-select" id="inputGroupSelect02">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-primary" type="button">Button</button>
                      </div>
                      <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Button</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Custom select</div>
            </div>
            <div class="card-body">
              <div class="row gutters">
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-primary" type="button">Button</button>
                      </div>
                      <select class="custom-select" id="inputGroupSelect07" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lglg-6 col-md-6 col-sm-12 col-12">
                  <div class="form-group">
                    <div class="input-group">
                      <select class="custom-select" id="inputGroupSelect06" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Button</button>
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
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>