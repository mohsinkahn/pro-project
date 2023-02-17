<?php require_once('header.php') ?>
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Overbook Value</span>
                                <h4 class="mb-3">
                                    $<span class="counter-value" data-target="865.2">0</span>k
                                </h4>
                            </div>

                            <div class="col-6">
                                <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+$20.9k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Employees</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="6258">0</span>
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-danger text-danger">-29 Trades</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col-->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Projects</span>
                                <h4 class="mb-3">
                                    $<span class="counter-value" data-target="4.32">0</span>M
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+ $2.8k</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <!-- card -->
                <div class="card card-h-100">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Ongoing Projects</span>
                                <h4 class="mb-3">
                                    <span class="counter-value" data-target="12.57">0</span>%
                                </h4>
                            </div>
                            <div class="col-6">
                                <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                            </div>
                        </div>
                        <div class="text-nowrap">
                            <span class="badge bg-soft-success text-success">+2.95%</span>
                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row-->

       
        <div class="row">
            <div class="col-xl-7">
                <!-- card -->
                <div class="card">
                    <!-- card body -->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-4">
                            <h5 class="card-title me-2">Site Revenue</h5>
                            <div class="ms-auto">
                                <div>
                                    <button type="button" class="btn btn-soft-primary btn-sm">
                                        ALL
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        6M
                                    </button>
                                    <button type="button" class="btn btn-soft-secondary btn-sm">
                                        1Y
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-xl-8">
                                <div>
                                    <div id="market-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts"></div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="p-4">
                                    <div class="mt-0">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    1
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Site A</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+2.5%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    2
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Site B</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+8.3%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    3
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Site C</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-3.6%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    4
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Site D</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-success font-size-12 fw-medium">+7.1%</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm m-auto">
                                                <span class="avatar-title rounded-circle bg-soft-light text-dark font-size-16">
                                                    5
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <span class="font-size-16">Site E</span>
                                            </div>

                                            <div class="flex-shrink-0">
                                                <span class="badge rounded-pill badge-soft-danger font-size-12 fw-medium">-0.9%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-2">
                                        <a href="" class="btn btn-primary w-100">See All Sites <i class="mdi mdi-arrow-right ms-1"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row-->

            <div class="col-xl-5">
                <!-- card -->
                <div class="card">

                    <!-- card body -->
                    <div class="card-body">
                      
                        <div class="d-flex flex-wrap align-items-center">
                            <h5 class="card-title me-2">Jobs</h5>
                        </div>
                     
                        
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="490" id="gmap_canvas" src="https://maps.google.com/maps?q=england&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:490px;width:100%;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:490px;width:100%px;}</style></div></div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row-->

        <div class="row">
            
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Jobs</h4>
                        <div class="flex-shrink-0">
                            <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                        Today
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                        This Week
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab" role="tab">
                                        This Month
                                    </a>
                                </li>
                            </ul>
                            <!-- end nav tabs -->
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body px-0">
                        <div class="tab-content">
                            <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                    <table class="table align-middle table-nowrap table-borderless">
                                        <tbody>
                                            <tr>
                                                
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">ABC Job</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                   </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">Timesheet Added</h5>
                                                        <p class="text-muted mb-0 font-size-12">Mark (Employeer) Value</p>
                                                    </div>
                                                </td>

                                              
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">ABC Job</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                   </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">Balance Due</h5>
                                                        <p class="text-muted mb-0 font-size-12">$500</p>
                                                    </div>
                                                </td>

                                              
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">ABC Job</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                   </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">Profit</h5>
                                                        <p class="text-muted mb-0 font-size-12">$400k</p>
                                                    </div>
                                                </td>

                                              
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">ABC Job</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                   </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">Job Done</h5>
                                                        <p class="text-muted mb-0 font-size-12">Next Job: Installation Process</p>
                                                    </div>
                                                </td>

                                              
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">ABC Job</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                   </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">Job Done</h5>
                                                        <p class="text-muted mb-0 font-size-12">Next Job: Installation Process</p>
                                                    </div>
                                                </td>

                                              
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">ABC Job</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                   </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">Job Done</h5>
                                                        <p class="text-muted mb-0 font-size-12">Next Job: Installation Process</p>
                                                    </div>
                                                </td>

                                              
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">ABC Job</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                   </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">Job Done</h5>
                                                        <p class="text-muted mb-0 font-size-12">Next Job: Installation Process</p>
                                                    </div>
                                                </td>

                                              
                                            </tr>
                                            <tr>
                                                
                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">ABC Job</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td>
                                                   </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">Job Done</h5>
                                                        <p class="text-muted mb-0 font-size-12">Next Job: Installation Process</p>
                                                    </div>
                                                </td>

                                              
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                    <table class="table align-middle table-nowrap table-borderless">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Buy BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end tab pane -->
                            <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                    <table class="table align-middle table-nowrap table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">18 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$145.80</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">15 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$112.34</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">16 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$94.22</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">17 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$84.32</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>



                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <h5 class="font-size-14 mb-1">Sell BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">14 Mar, 2021</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                        <p class="text-muted mb-0 font-size-12">Coin Value</p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0">$125.20</h5>
                                                        <p class="text-muted mb-0 font-size-12">Amount</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Recent Activity</h4>
                        <div class="flex-shrink-0">
                            <select class="form-select form-select-sm mb-0 my-n1">
                                <option value="Today" selected="">Today</option>
                                <option value="Yesterday">Yesterday</option>
                                <option value="Week">Last Week</option>
                                <option value="Month">Last Month</option>
                            </select>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-body px-0">
                        <div class="px-3" data-simplebar style="max-height: 352px;">
                            <ul class="list-unstyled activity-wid mb-0">

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                          
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">Payment Overdue</h5>
                                                <p class="text-truncate text-muted font-size-13">ABC Company</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">$5000</h6>
                                                <div class="font-size-13">14/02/2023</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                         
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">Application Overdue</h5>
                                                <p class="text-truncate text-muted font-size-13">ABC Company</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">$7000</h6>
                                                <div class="font-size-13">14/02/2023</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title bg-soft-warning text-warning rounded-circle">
                                        
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">Payment Overdue</h5>
                                                <p class="text-truncate text-muted font-size-13">ABC Company</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">$1000</h6>
                                                <div class="font-size-13">20/02/2023</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="activity-list activity-border">
                                    <div class="activity-icon avatar-md">
                                        <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                          
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-14 mb-1">Payment Overdue</h5>
                                                <p class="text-truncate text-muted font-size-13">ABC Company</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1">$10000</h6>
                                                <div class="font-size-13">29/28/2023</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">Separated link</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div><!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php require_once('footer.php') ?>