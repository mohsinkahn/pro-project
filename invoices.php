<?php require_once('header.php') ?>


<style>
.border-none {
    border: none !important;
}

.modal-content {
    margin-top: 60px
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
                            <div class="col-md-8 col-6">
                                <h4 class="card-title mb-0">Invoices</h4>
                            </div>
                            <div class="col-md-4 col-6">
                                <a href="add_invoice.php" class="btn btn-primary float-end">Add Invoice</a>
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
                                            <a class="nav-link" data-bs-toggle="tab" href="#unpaid" role="tab" id="sms">

                                                <span class=" d-sm-block">Unpaid</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#paid" role="tab" id="sms">

                                                <span class=" d-sm-block">Paid</span>
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

                                                        <th><input type="checkbox" /></th>
                                                        <th>Invoice No</th>
                                                        <th>Status</th>
                                                        <th>Job Name</th>
                                                        <th>Job No</th>
                                                        <th>Date Issued</th>
                                                        <th>Due Date</th>
                                                        <th>Days Overdue</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Price</th>
                                                        <th>Paid</th>
                                                        <th>Order No</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>3879</td>
                                                        <td><span class="bg-danger px-2"
                                                                style="color:white">Unpaid</span>
                                                        <td>Tianse Control PPM</td>
                                                        <td>8294</td>
                                                        <td>10/03/2023</td>
                                                        <td>20/03/2023</td>
                                                        <td>5</td>
                                                        <td>Dell Pvt Ltd</td>
                                                        <td>Sunshine House Children</td>
                                                        <td>£195.00</td>
                                                        <td>£0.00</td>
                                                        <td>2894</td>
                                                        <td>

                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">View Invoice</a>
                                                                   

                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>3879</td>
                                                        <td><span class="bg-success px-2" style="color:white">Paid</span>
                                                        <td>Access Control PPM</td>
                                                        <td>5736</td>
                                                        <td>21/02/2023</td>
                                                        <td>28/02/2023</td>
                                                        <td>2</td>
                                                        <td>Kudos Services Ltd</td>
                                                        <td>Sunshine House Children</td>
                                                        <td>£171.00</td>
                                                        <td>£0.00</td>
                                                        <td>7508</td>
                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">View Invoice</a>
                                                                   

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>



                                            </table>
                                        </div>
                                    </div>
                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="unpaid" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>

                                                        <th><input type="checkbox" /></th>
                                                        <th>Invoice No</th>
                                                        <th>Status</th>
                                                        <th>Job Name</th>
                                                        <th>Job No</th>
                                                        <th>Date Issued</th>
                                                        <th>Due Date</th>
                                                        <th>Days Overdue</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Price</th>
                                                        <th>Paid</th>
                                                        <th>Order No</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>3879</td>
                                                        <td><span class="bg-danger px-2"
                                                                style="color:white">Unpaid</span>
                                                        <td>Tianse Control PPM</td>
                                                        <td>8294</td>
                                                        <td>10/03/2023</td>
                                                        <td>20/03/2023</td>
                                                        <td>5</td>
                                                        <td>Dell Pvt Ltd</td>
                                                        <td>Sunshine House Children</td>
                                                        <td>£195.00</td>
                                                        <td>£0.00</td>
                                                        <td>2894</td>
                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">View Invoice</a>
                                                                   

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>3879</td>
                                                        <td><span class="bg-danger px-2"
                                                                style="color:white">Unpaid</span>
                                                        <td>Access Control PPM</td>
                                                        <td>5736</td>
                                                        <td>21/02/2023</td>
                                                        <td>28/02/2023</td>
                                                        <td>2</td>
                                                        <td>Kudos Services Ltd</td>
                                                        <td>Sunshine House Children</td>
                                                        <td>£171.00</td>
                                                        <td>£0.00</td>
                                                        <td>7508</td>
                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="view_invoice.php">View Invoice</a>
                                                                   

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>



                                            </table>
                                        </div>
                                    </div>

                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="paid" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>

                                                        <th><input type="checkbox" /></th>
                                                        <th>Invoice No</th>
                                                        <th>Status</th>
                                                        <th>Job Name</th>
                                                        <th>Job No</th>
                                                        <th>Date Issued</th>
                                                        <th>Due Date</th>
                                                        <th>Days Overdue</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Price</th>
                                                        <th>Paid</th>
                                                        <th>Order No</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>3879</td>
                                                        <td><span class="bg-success px-2" style="color:white">Paid</span>
                                                        <td>Tianse Control PPM</td>
                                                        <td>8294</td>
                                                        <td>10/03/2023</td>
                                                        <td>20/03/2023</td>
                                                        <td>5</td>
                                                        <td>Dell Pvt Ltd</td>
                                                        <td>Sunshine House Children</td>
                                                        <td>£195.00</td>
                                                        <td>£0.00</td>
                                                        <td>2894</td>
                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="view_invoice.php">View Invoice</a>
                                                                   

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>3879</td>
                                                        <td><span class="bg-success px-2" style="color:white">Paid</span>
                                                        <td>Access Control PPM</td>
                                                        <td>5736</td>
                                                        <td>21/02/2023</td>
                                                        <td>28/02/2023</td>
                                                        <td>2</td>
                                                        <td>Kudos Services Ltd</td>
                                                        <td>Sunshine House Children</td>
                                                        <td>£171.00</td>
                                                        <td>£0.00</td>
                                                        <td>7508</td>
                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="view_invoice.php">View Invoice</a>
                                                                   

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

                    </div>


                </div><!-- end card-body -->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
<!-- container-fluid -->

<!-- End Page-content -->



<!-- Add Document Modal -->

<div class="modal fade map" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <span>
                                    <h4 style="color:white;padding:3px;" class="card-title bg-info">Assign an
                                        Employee</h4>
                                </span>
                                <div class="card emp-card">

                                    <select class="form-control" data-trigger="" name="choices-single-default"
                                        id="choices-single-default">
                                        <option>Alex Fay</option>
                                        <option>Cahit Tastan</option>
                                        <option>Damian Chandler</option>
                                        <option>Darryl Bean</option>
                                        <option>Dave Holdway</option>
                                        <option>John Doe</option>
                                        <option>Andrew Methews</option>
                                        <option>Henry Clark</option>
                                    </select>



                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <span>
                                    <h4 style="color:white;padding:3px;" class="card-title bg-info">Quote
                                        Assigned</h4>
                                </span>
                                <div class="card emp-card">

                                    <ul class="mt-2">
                                        <li>Alex Fay</li>
                                        <li>Cahit Tastan</li>
                                        <li>Damian Chandler</li>

                                    </ul>

                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <span>
                                        <h4 style="color:white;padding:3px;" class="card-title bg-info">
                                            Export</h4>
                                    </span>
                                    <div>
                                        <label class="form-label">Due Date</label>
                                        <input type="date" class="form-control" id="datepicker-datetime">

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-8">
                        <div>
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=england&t=&z=10&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                                    <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 500px;
                                        width: 100%;
                                    }
                                    </style>
                                    <style>
                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 500px;
                                        width: 100%;
                                    }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>





<?php require_once('footer.php') ?>