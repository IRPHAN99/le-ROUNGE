<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Table Bordered</li>
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
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Country</th>
                      <th>Languages</th>
                      <th>Population</th>
                      <th>Median Age</th>
                      <th>Area (Km²)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="flags/1x1/hk.svg" class="flag-img" alt="Hong Kong">Hong Kong
                      </td>
                      <td>Chinese (official), English</td>
                      <td>7,39,000</td>
                      <td>31.3</td>
                      <td>1106</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="flags/1x1/au.svg" class="flag-img" alt="Australia">Australia
                      </td>
                      <td>English 79%, native and other languages</td>
                      <td>23,630,169</td>
                      <td>37.3</td>
                      <td>7,739,983</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="flags/1x1/tz.svg" class="flag-img" alt="Tanzania">Tanzania
                      </td>
                      <td>Swahili (national), English, Arabic, Chaga, Makonde</td>
                      <td>57,353,670</td>
                      <td>39.1</td>
                      <td>945,086</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="flags/1x1/ru.svg" class="flag-img" alt="Russia">Russia
                      </td>
                      <td>Russian, others</td>
                      <td>142,467,651</td>
                      <td>38.4</td>
                      <td>17,076,310</td>
                    </tr>
                    <tr>
                      <td>
                        <img src="flags/1x1/de.svg" class="flag-img" alt="Germany">Germany
                      </td>
                      <td>German, Danish, Low Rhenish, Romani</td>
                      <td>82,081,261</td>
                      <td>41.1</td>
                      <td>357,386</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="5" class="text-center">Data retrieved from <a href="#" class="link">Le Rouge</a> and <a href="#" class="link">Unify</a>. </td>
                    </tr>
                  </tfoot>
                </table>
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