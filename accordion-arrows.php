<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?>
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Accordions</li>
        <li class="breadcrumb-item active">Accordion Arrows</li>
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
          <div class="accordion toggle-icons" id="toggleIcons">
            <div class="accordion-container">
              <div class="accordion-header" id="toggleIconsOne">
                <a href="#" class="" data-toggle="collapse" data-target="#toggleIconsCollapseOne" aria-expanded="true" aria-controls="toggleIconsCollapseOne"> Collapsible Group Item #1 </a>
              </div>
              <div id="toggleIconsCollapseOne" class="collapse show" aria-labelledby="toggleIconsOne" data-parent="#toggleIcons">
                <div class="accordion-body">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                </div>
              </div>
            </div>
            <div class="accordion-container">
              <div class="accordion-header" id="toggleIconsTwo">
                <a href="#" class="collapsed" data-toggle="collapse" data-target="#toggleIconsCollapseTwo" aria-expanded="false" aria-controls="toggleIconsCollapseTwo"> Collapsible Group Item #2 </a>
              </div>
              <div id="toggleIconsCollapseTwo" class="collapse" aria-labelledby="toggleIconsTwo" data-parent="#toggleIcons">
                <div class="accordion-body">
                  <P>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</P>
                </div>
              </div>
            </div>
            <div class="accordion-container">
              <div class="accordion-header" id="toggleIconsThree">
                <a href="#" class="collapsed" data-toggle="collapse" data-target="#toggleIconsCollapseThree" aria-expanded="false" aria-controls="toggleIconsCollapseThree"> Collapsible Group Item #3 </a>
              </div>
              <div id="toggleIconsCollapseThree" class="collapse" aria-labelledby="toggleIconsThree" data-parent="#toggleIcons">
                <div class="accordion-body">
                  <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
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