<?php require_once('header.php') ?>


<style>

.border-none {
    border: none !important;
}
</style>

<div class="page-content">
    <div class="container-fluid">


        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-10 col-6">
                                <h4 class="card-title mb-0">Time Sheet View</h4>
                            </div>
                            <div class="col-md-2 col-6">
                            <select class="form-select form-select-sm mb-0 my-n1">
                                <option value="" selected="">Select Month</option>
                                <option value="">January</option>
                                <option value="">February</option>
                                <option value="">March</option>
                                <option value="">April</option>
                                <option value="">May</option>
                                <option value="">June</option>
                                <option value="">July</option>
                                <option value="">August</option>
                                <option value="">September</option>
                                <option value="">October</option>
                                <option value="">November</option>
                                <option value="">December</option>

                            </select>
                            </div> 
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card border-none">
                            <div class="card-header mt-2 align-items-center d-flex">

                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs"
                                        role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#all" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Week1</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#timesheet" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Week2</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#overtime" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Week3</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#overtime2" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Week4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card-body border-none">
                                <div class="tab-content text-muted campaign">
                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane active" id="all" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Job</th>
                                                        <th>Hours</th>
                                                        <th>Cost</th>
                                                        <th>Notes</th>
                                                        <th>Day</th>
                                                        <th style="width:50px;">Actions</th>
                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td>01</td>
                                                        <td>Abc Job</td>
                                                        <td>8/hr</td>
                                                        <td>£10</td>
                                                        <td>lorem ipsum....</td>
                                                        <td>Monday</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Abc Job</td>
                                                        <td>8/hr</td>
                                                        <td>£10</td>
                                                        <td>lorem ipsum....</td>
                                                        <td>Tuesday</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Tab panes  |  Timesheet Section Pane -->
                                    <div class="tab-pane" id="timesheet" role="tabpanel">

                                    <div class="table-responsive">
                                            <table id="datatable-buttons"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Job</th>
                                                        <th>Hours</th>
                                                        <th>Cost</th>
                                                        <th>Notes</th>
                                                        <th>Day</th>
                                                        <th style="width:50px;">Actions</th>
                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td>01</td>
                                                        <td>Abc Job</td>
                                                        <td>8/hr</td>
                                                        <td>£10</td>
                                                        <td>lorem ipsum....</td>
                                                        <td>Monday</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Abc Job</td>
                                                        <td>8/hr</td>
                                                        <td>£10</td>
                                                        <td>lorem ipsum....</td>
                                                        <td>Tuesday</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Tab panes  |  Overtime Section Pane -->
                                    <div class="tab-pane" id="overtime" role="tabpanel">

                                    <div class="table-responsive">
                                            <table id="datatable-buttons"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Job</th>
                                                        <th>Hours</th>
                                                        <th>Cost</th>
                                                        <th>Notes</th>
                                                        <th>Day</th>
                                                        <th style="width:50px;">Actions</th>
                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td>01</td>
                                                        <td>Abc Job</td>
                                                        <td>8/hr</td>
                                                        <td>£10</td>
                                                        <td>lorem ipsum....</td>
                                                        <td>Monday</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Abc Job</td>
                                                        <td>8/hr</td>
                                                        <td>£10</td>
                                                        <td>lorem ipsum....</td>
                                                        <td>Tuesday</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="overtime2" role="tabpanel">

                                    <div class="table-responsive">
                                            <table id="datatable-buttons"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Job</th>
                                                        <th>Hours</th>
                                                        <th>Cost</th>
                                                        <th>Notes</th>
                                                        <th>Day</th>
                                                        <th style="width:50px;">Actions</th>
                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td>01</td>
                                                        <td>Abc Job</td>
                                                        <td>8/hr</td>
                                                        <td>£10</td>
                                                        <td>lorem ipsum....</td>
                                                        <td>Monday</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Abc Job</td>
                                                        <td>8/hr</td>
                                                        <td>£10</td>
                                                        <td>lorem ipsum....</td>
                                                        <td>Tuesday</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit</a>
                                                                    <a class="dropdown-item" href="#">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>







                        </div>


                    </div><!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php require_once('footer.php') ?>