<?php include("./header.php"); ?>
 <?php include("./sidebar.php"); ?> 
 <div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Documents</li>
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
          <div class="documents-section">
            <!-- Row start -->
            <div class="row no-gutters">
              <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-4">
                <div class="docs-type-container">
                  <div class="mt-5"></div>
                  <div class="docTypeContainerScroll">
                    <div class="docs-block">
                      <h5>Favourites</h5>
                      <div class="doc-labels">
                        <a href="#" class="active">
                          <i class="icon-receipt"></i> My Files </a>
                        <a href="#">
                          <i class="icon-package"></i> Design </a>
                        <a href="#">
                          <i class="icon-pie-chart1"></i> Daily Reports </a>
                        <a href="#">
                          <i class="icon-layers2"></i> Projects </a>
                        <a href="#">
                          <i class="icon-slack"></i> Business </a>
                        <a href="#">
                          <i class="icon-headphones"></i> Personal </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-8">
                <div class="documents-container">
                  <div class="modal fade" id="addNewDocument" tabindex="-1" role="dialog" aria-labelledby="addNewDocumentLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addNewDocumentLabel">Add Document</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form class="row gutters">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                <label for="docTitle">Document Title</label>
                                <input type="text" class="form-control" id="docTitle" placeholder="Task Title">
                              </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                <label for="dovType">Document Type</label>
                                <input type="text" class="form-control" id="dovType" placeholder="Task Title">
                              </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                              <div class="form-group">
                                <label for="addedDate">Created On</label>
                                <div class="custom-date-input">
                                  <input type="text" name="" class="form-control datepicker" id="addedDate" placeholder="10/10/2019">
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <div class="form-group mb-0">
                                <label for="docDetails">Document Details</label>
                                <textarea class="form-control" id="docDetails"></textarea>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer custom">
                          <div class="left-side">
                            <button type="button" class="btn btn-link danger btn-block" data-dismiss="modal">Cancel</button>
                          </div>
                          <div class="divider"></div>
                          <div class="right-side">
                            <button type="button" class="btn btn-link success btn-block">Add</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="documents-header">
                    <h3>Today <span class="date" id="todays-date"></span>
                    </h3>
                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addNewDocument">Add Document</button>
                  </div>
                  <div class="documentsContainerScroll">
                    <div class="documents-body">
                      <!-- Row start -->
                      <div class="row gutters">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="doc-block">
                            <div class="doc-icon">
                              <img src="img/docs/zip.svg" alt="Doc Icon" />
                            </div>
                            <div class="doc-title">App Workflow</div>
                            <button class="btn btn-white btn-lg">Download</button>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="doc-block">
                            <div class="doc-icon">
                              <img src="img/docs/pdf.svg" alt="Doc Icon" />
                            </div>
                            <div class="doc-title">Design Document</div>
                            <button class="btn btn-white btn-lg">Download</button>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="doc-block">
                            <div class="doc-icon">
                              <img src="img/docs/doc.svg" alt="Doc Icon" />
                            </div>
                            <div class="doc-title">Monthly Income</div>
                            <button class="btn btn-white btn-lg">Download</button>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="doc-block">
                            <div class="doc-icon">
                              <img src="img/docs/xls.svg" alt="Doc Icon" />
                            </div>
                            <div class="doc-title">Project Budget</div>
                            <button class="btn btn-white btn-lg">Download</button>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="doc-block">
                            <div class="doc-icon">
                              <img src="img/docs/ppt.svg" alt="Doc Icon" />
                            </div>
                            <div class="doc-title">Presentation</div>
                            <button class="btn btn-white btn-lg">Download</button>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="doc-block">
                            <div class="doc-icon">
                              <img src="img/docs/zip.svg" alt="Doc Icon" />
                            </div>
                            <div class="doc-title">Application</div>
                            <button class="btn btn-white btn-lg">Download</button>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="doc-block">
                            <div class="doc-icon">
                              <img src="img/docs/pdf.svg" alt="Doc Icon" />
                            </div>
                            <div class="doc-title">Wireframes</div>
                            <button class="btn btn-white btn-lg">Download</button>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="doc-block">
                            <div class="doc-icon">
                              <img src="img/docs/doc.svg" alt="Doc Icon" />
                            </div>
                            <div class="doc-title">Policies</div>
                            <button class="btn btn-white btn-lg">Download</button>
                          </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                          <div class="doc-block">
                            <div class="doc-icon">
                              <img src="img/docs/xls.svg" alt="Doc Icon" />
                            </div>
                            <div class="doc-title">Payments</div>
                            <button class="btn btn-white btn-lg">Download</button>
                          </div>
                        </div>
                      </div>
                      <!-- Row end -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Row end -->
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>