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
                            <div class="col-md-12 col-12">
                                <h4 class="card-title mb-0">Time Sheet</h4>
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

                                                <span class=" d-sm-block">All</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#timesheet" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Timesheet Request</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#overtime" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Overtime Request</span>
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
                                                        <th>Staff Name</th>
                                                        <th>Request Type</th>
                                                        <th>Job Name</th>
                                                        <th>Date</th>
                                                        <th>Day</th>
                                                        <th>Hours</th>
                                                        <th>Cost</th>
                                                        <th>Notes</th>
                                                        <th style="width:50px;">Actions</th>
                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td>01</td>
                                                        
                                                        <td><a href="timesheet_view.php">John Doe</a></td>
                                                          
                                                        <td>Overtime</td>
                                                        <td>Abc job</td>
                                                        <td>02-Feb-2023</td>
                                                        <td>Thursday</td>
                                                        <td>2</td>
                                                        <td>$10.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td><a href="timesheet_view.php">John Doe</a></td>
                                                        <td>Timesheet</td>
                                                        <td>Abc job</td>
                                                        <td>05-Dec-2022</td>
                                                        <td>Saturday</td>
                                                        <td>4</td>
                                                        <td>$20.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td><a href="timesheet_view.php">John Doe</a></td>
                                                        <td>Timesheet</td>
                                                        <td>Abc job</td>
                                                        <td>24-Jan-2023</td>
                                                        <td>Monday</td>
                                                        <td>1</td>
                                                        <td>$5.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td><a href="timesheet_view.php">John Doe</a></td> 
                                                        <td>Overtime</td>
                                                        <td>Abc job</td>
                                                        <td>18-Jan-2023</td>
                                                        <td>Wednesday</td>
                                                        <td>6</td>
                                                        <td>$30.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                      <td><a href="timesheet_view.php">John Doe</a></td>   
                                                        <td>Timesheet</td>
                                                        <td>Abc job</td>
                                                        <td>18-Feb-2023</td>
                                                        <td>Saturday</td>
                                                        <td>2</td>
                                                        <td>$5.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
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
                                        <table id="datatable-buttons2"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Staff Name</th>
                                                        <th>Request Type</th>
                                                        <th>Job Name</th>
                                                        <th>Date</th>
                                                        <th>Day</th>
                                                        <th>Hours</th>
                                                        <th>Cost</th>
                                                        <th>Notes</th>
                                                        <th style="width:50px;">Actions</th>
                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td>01</td>
                                                        <td>
                                                         <a href="timesheet_view.php">John Doe</a> 
                                                          </td>
                                                        <td>Overtime</td>
                                                        <td>Abc job</td>
                                                        <td>02-Feb-2023</td>
                                                        <td>Thursday</td>
                                                        <td>2</td>
                                                        <td>$10.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Henry Albert</td>
                                                        <td>Timesheet</td>
                                                        <td>Abc job</td>
                                                        <td>05-Dec-2022</td>
                                                        <td>Saturday</td>
                                                        <td>4</td>
                                                        <td>$20.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>Harles Alvin</td>
                                                        <td>Timesheet</td>
                                                        <td>Abc job</td>
                                                        <td>24-Jan-2023</td>
                                                        <td>Monday</td>
                                                        <td>1</td>
                                                        <td>$5.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td>Albert Methews</td>
                                                        <td>Overtime</td>
                                                        <td>Abc job</td>
                                                        <td>18-Jan-2023</td>
                                                        <td>Wednesday</td>
                                                        <td>6</td>
                                                        <td>$30.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                        <td>Hudon Sandy</td>
                                                        <td>Timesheet</td>
                                                        <td>Abc job</td>
                                                        <td>18-Feb-2023</td>
                                                        <td>Saturday</td>
                                                        <td>2</td>
                                                        <td>$5.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
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
                                        <table id="datatable-buttons3"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Staff Name</th>
                                                        <th>Request Type</th>
                                                        <th>Job Name</th>
                                                        <th>Date</th>
                                                        <th>Day</th>
                                                        <th>Hours</th>
                                                        <th>Cost</th>
                                                        <th>Notes</th>
                                                        <th style="width:50px;">Actions</th>
                                                    </tr>
                                                </thead>


                                                <tbody>

                                                    <tr>
                                                        <td>01</td>
                                                        <td>
                                                         <a href="timesheet_view.php">John Doe</a> 
                                                          </td>
                                                        <td>Overtime</td>
                                                        <td>Abc job</td>
                                                        <td>02-Feb-2023</td>
                                                        <td>Thursday</td>
                                                        <td>2</td>
                                                        <td>$10.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>02</td>
                                                        <td>Henry Albert</td>
                                                        <td>Timesheet</td>
                                                        <td>Abc job</td>
                                                        <td>05-Dec-2022</td>
                                                        <td>Saturday</td>
                                                        <td>4</td>
                                                        <td>$20.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>03</td>
                                                        <td>Harles Alvin</td>
                                                        <td>Timesheet</td>
                                                        <td>Abc job</td>
                                                        <td>24-Jan-2023</td>
                                                        <td>Monday</td>
                                                        <td>1</td>
                                                        <td>$5.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>04</td>
                                                        <td>Albert Methews</td>
                                                        <td>Overtime</td>
                                                        <td>Abc job</td>
                                                        <td>18-Jan-2023</td>
                                                        <td>Wednesday</td>
                                                        <td>6</td>
                                                        <td>$30.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>05</td>
                                                        <td>Hudon Sandy</td>
                                                        <td>Timesheet</td>
                                                        <td>Abc job</td>
                                                        <td>18-Feb-2023</td>
                                                        <td>Saturday</td>
                                                        <td>2</td>
                                                        <td>$5.00</td>
                                                        <td>Note</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Accept</a>
                                                                    <a class="dropdown-item" href="#">Reject</a>
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