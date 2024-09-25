<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Buttons</li>
        <li class="breadcrumb-item active">Button Groups</li>
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
            <div class="card-header">
              <div class="card-title"> Basic Example </div>
            </div>
            <div class="card-body">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title"> Button Toolbar </div>
            </div>
            <div class="card-body">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button type="button" class="btn btn-primary">1</button>
                  <button type="button" class="btn btn-primary">2</button>
                  <button type="button" class="btn btn-primary">3</button>
                  <button type="button" class="btn btn-primary">4</button>
                  <button type="button" class="btn btn-primary">5</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                  <button type="button" class="btn btn-secondary">6</button>
                  <button type="button" class="btn btn-secondary">7</button>
                  <button type="button" class="btn btn-secondary">8</button>
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
            <div class="card-header">
              <div class="card-title"> Button Group Sizing </div>
            </div>
            <div class="card-body">
              <div class="btn-group btn-group-lg" role="group" aria-label="First group">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
              </div>
              <div class="btn-group" role="group" aria-label="Second group">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>
              <div class="btn-group btn-group-sm" role="group" aria-label="Third group">
                <button type="button" class="btn btn-info">Left</button>
                <button type="button" class="btn btn-info">Middle</button>
                <button type="button" class="btn btn-info">Right</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Nesting</div>
            </div>
            <div class="card-body">
              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-primary">1</button>
                <button type="button" class="btn btn-primary">2</button>
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title"> Toggle Radio Buttons </div>
            </div>
            <div class="card-body">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                  <input type="radio" name="options" id="option1" checked> Active </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="option2"> Radio </label>
                <label class="btn btn-secondary">
                  <input type="radio" name="options" id="option3"> Radio </label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title"> Toggle Checkbox </div>
            </div>
            <div class="card-body">
              <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-info active">
                  <input type="checkbox" checked> Checked </label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title"> Vertical Variation </div>
            </div>
            <div class="card-body">
              <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                <button type="button" class="btn btn-info btn-sm">Button</button>
                <button type="button" class="btn btn-success btn-sm">Button</button>
                <button type="button" class="btn btn-warning btn-sm">Button</button>
                <button type="button" class="btn btn-danger btn-sm">Button</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title"> Vertical Variation </div>
            </div>
            <div class="card-body">
              <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                <button type="button" class="btn btn-info">Button</button>
                <button type="button" class="btn btn-success">Button</button>
                <button type="button" class="btn btn-warning">Button</button>
                <button type="button" class="btn btn-danger">Button</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title"> Vertical Variation </div>
            </div>
            <div class="card-body">
              <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                <button type="button" class="btn btn-info btn-lg">Button</button>
                <button type="button" class="btn btn-success btn-lg">Button</button>
                <button type="button" class="btn btn-warning btn-lg">Button</button>
                <button type="button" class="btn btn-danger btn-lg">Button</button>
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