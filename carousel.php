<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?> 
<div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Carousels</li>
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
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Only Slides</div>
            </div>
            <div class="card-body">
              <div id="carouselExampleSlidesOnly" class="carousel slide m-0" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/img2.jpg" class="rounded d-block w-100" alt="Carousel">
                  </div>
                  <div class="carousel-item">
                    <img src="img/img1.jpg" class="rounded d-block w-100" alt="Carousel">
                  </div>
                  <div class="carousel-item">
                    <img src="img/img3.jpg" class="rounded d-block w-100" alt="Carousel">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">With Controls</div>
            </div>
            <div class="card-body">
              <div id="carouselExampleControls" class="carousel slide m-0" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/img5.jpg" class="rounded d-block w-100" alt="Carousel">
                  </div>
                  <div class="carousel-item">
                    <img src="img/img4.jpg" class="rounded d-block w-100" alt="Carousel">
                  </div>
                  <div class="carousel-item">
                    <img src="img/img6.jpg" class="rounded d-block w-100" alt="Carousel">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">With Indicators</div>
            </div>
            <div class="card-body">
              <div id="carouselExampleIndicators" class="carousel slide m-0" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/img6.jpg" class="rounded d-block w-100" alt="Carousel">
                  </div>
                  <div class="carousel-item">
                    <img src="img/img7.jpg" class="rounded d-block w-100" alt="Carousel">
                  </div>
                  <div class="carousel-item">
                    <img src="img/img1.jpg" class="rounded d-block w-100" alt="Carousel">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">With Captions</div>
            </div>
            <div class="card-body">
              <div id="carouselExampleCaptions" class="carousel slide m-0" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/img11.jpg" class="rounded d-block w-100" alt="Carousel">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First Slide</h5>
                      <p>Slide description</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/img10.jpg" class="rounded d-block w-100" alt="Carousel">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second Slide</h5>
                      <p>Slide description</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/img12.jpg" class="rounded d-block w-100" alt="Carousel">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third Slide</h5>
                      <p>Slide description</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">With Crossfade</div>
            </div>
            <div class="card-body">
              <div id="carouselExampleFade" class="carousel slide m-0 carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                  <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/img6.jpg" class="rounded d-block w-100" alt="Carousel">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First Slide</h5>
                      <p>Slide description</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/img2.jpg" class="rounded d-block w-100" alt="Carousel">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second Slide</h5>
                      <p>Slide description</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/img3.jpg" class="rounded d-block w-100" alt="Carousel">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third Slide</h5>
                      <p>Slide description</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
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