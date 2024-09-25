<?php include("./header.php"); ?> 
<?php include("./sidebar.php"); ?> 
<div class="page-wrapper">
  <div class="page-content">
    <!-- Page header start -->
    <div class="page-header">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Invoice</li>
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
            <div class="card-body p-0">
              <div class="invoice-container">
                <div class="invoice-header">
                  <!-- Row start -->
                  <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <div class="custom-actions-btns mb-5">
                        <a href="#" class="btn btn-primary">
                          <i class="icon-export"></i> Export </a>
                        <a href="#" class="btn btn-dark">
                          <i class="icon-printer"></i> Print </a>
                      </div>
                    </div>
                  </div>
                  <!-- Row end -->
                  <!-- Row start -->
                  <div class="row gutters">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                      <a href="index.html" class="invoice-logo">
                        <img src="img/logo-dark.png" alt="Le Rouge Admin Dashboard" />
                      </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <address class="text-right"> Le Rouge admin Inc, 1060 Central Valley. <br /> Alcatraz Island, San Francisco. <br /> 00000 00000 </address>
                    </div>
                  </div>
                  <!-- Row end -->
                  <!-- Row start -->
                  <div class="row gutters">
                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                      <div class="invoice-details">
                        <address> John Willams <br /> 300-600 Church Street, Florida, USA </address>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                      <div class="invoice-details">
                        <div class="invoice-num">
                          <div>Invoice - #069</div>
                          <div>March 20th 2020</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Row end -->
                </div>
                <div class="invoice-body">
                  <!-- Row start -->
                  <div class="row gutters">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                      <div class="table-responsive">
                        <table class="table custom-table">
                          <thead>
                            <tr>
                              <th>Items</th>
                              <th>Product ID</th>
                              <th>Quantity</th>
                              <th>Sub Total</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td> Wordpress Template <p class="m-0 text-muted"> Reference site about Lorem Ipsum, giving information on its origins. </p>
                              </td>
                              <td>#50000981</td>
                              <td>9</td>
                              <td>$5000.00</td>
                            </tr>
                            <tr>
                              <td> Le Rouge Admin Template <p class="m-0 text-muted"> As well as a random Lipsum generator. </p>
                              </td>
                              <td>#50000126</td>
                              <td>5</td>
                              <td>$100.00</td>
                            </tr>
                            <tr>
                              <td> Unify Admin Template <p class="m-0 text-muted"> Lorem ipsum has become the industry standard. </p>
                              </td>
                              <td>#50000821</td>
                              <td>6</td>
                              <td>$49.99</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td colspan="2">
                                <p> Subtotal <br> Shipping &amp; Handling <br> Tax <br>
                                </p>
                                <h5 class="text-danger">
                                  <strong>Grand Total</strong>
                                </h5>
                              </td>
                              <td>
                                <p> $5000.00 <br> $100.00 <br> $49.00 <br>
                                </p>
                                <h5 class="text-danger">
                                  <strong>$5150.99</strong>
                                </h5>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- Row end -->
                </div>
                <div class="invoice-footer"> Thank you for your Business. </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row end -->
      <!-- Row start -->
      <div class="row gutters">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
          <div class="invoice-status">
            <i class="icon-insert_invitation"></i>
            <h2 class="status">800</h2>
            <h5 class="status-title">Invoices Paid</h5>
            <p class="status-type">An invoice, bill or tab is a commercial document issued by a seller to a buyer.</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
          <div class="invoice-status">
            <i class="icon-event_available"></i>
            <h2 class="status">500</h2>
            <h5 class="status-title">Invoices Unpaid</h5>
            <p class="status-type">An invoice, bill or tab is a commercial document issued by a seller to a buyer.</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
          <div class="invoice-status">
            <i class="icon-event_note"></i>
            <h2 class="status">200</h2>
            <h5 class="status-title">Invoices Overdue</h5>
            <p class="status-type">An invoice, bill or tab is a commercial document issued by a seller to a buyer.</p>
          </div>
        </div>
      </div>
      <!-- Row end -->
    </div>
    <!-- Main container end -->
  </div>
</div> <?php include("./footer.php"); ?>