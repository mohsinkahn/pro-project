<?php require_once('header.php') ?>


<style>
.border-none {
    border: none !important;
}

.modal-content {
    margin-top: 60px
}

.dz-message {
    /* border : 2px solid red; */
    width: max-content;
    text-align: center;
    margin-top: 50px
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
                                <h4 class="card-title mb-0">Projects</h4>
                            </div>
                            <div class="col-md-4 col-6">
                                <a href="add_job.php" class="btn btn-primary float-end">Add Project</a>
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
                                            <a class="nav-link" data-bs-toggle="tab" href="#pending" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Pending</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#progress" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Progress</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#complete" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Complete</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#invoice" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Invoiced</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#archived" role="tab"
                                                id="sms">

                                                <span class=" d-sm-block">Archived</span>
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
                                                        <th> <input type="checkbox"></th>
                                                        <th>Job</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Site Postcode</th>
                                                        <th>Sell Price</th>
                                                        <th>Scheduled</th>
                                                        <th>Order No</th>
                                                        <th>Due Date</th>
                                                        <th>Created Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-info px-2" style="color:white">Pending</span>
                                                        <td>Kudos Services Ltd</td>
                                                        <td>Parkview Centre for Health</td>
                                                        <td>W127FG</td>
                                                        <td>£0.00</td>
                                                        <td>21/02/2023</td>
                                                        <td>14544</td>
                                                        <td>21/02/2023</td>
                                                        <td>16/02/2023</td>
                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-warning px-2"
                                                                style="color:white">Progress</span>
                                                        <td>Xianse Services Ltd</td>
                                                        <td>Lake Street Centre for Health</td>
                                                        <td>W827HF</td>
                                                        <td>£0.00</td>
                                                        <td>08/05/2022</td>
                                                        <td>87274</td>
                                                        <td>15/05/2022</td>
                                                        <td>15/05/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-success px-2"
                                                                style="color:white">Complete</span>
                                                        <td>Evergrow Co Ltd</td>
                                                        <td>North town site</td>
                                                        <td>W924KJ</td>
                                                        <td>£0.00</td>
                                                        <td>29/06/2022</td>
                                                        <td>98463</td>
                                                        <td>05/07/2022</td>
                                                        <td>05/07/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-dark px-2"
                                                                style="color:white">Invoiced</span>
                                                        <td>Brunchies Pvt Services Ltd</td>
                                                        <td>North Carolina </td>
                                                        <td>N29KDJ</td>
                                                        <td>£0.00</td>
                                                        <td>03/02/2022</td>
                                                        <td>87274</td>
                                                        <td>10/02/2022</td>
                                                        <td>10/02/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-danger px-2"
                                                                style="color:white">Archived</span>
                                                        <td>Shady Bootz Pvt Ltd</td>
                                                        <td> Texas Oakland </td>
                                                        <td>J78KLS</td>
                                                        <td>£0.00</td>
                                                        <td>10/08/2022</td>
                                                        <td>37976</td>
                                                        <td>20/08/2022</td>
                                                        <td>20/08/2022</td>



                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>



                                            </table>
                                        </div>
                                    </div>




                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="progress" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons2"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Job</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Site Postcode</th>
                                                        <th>Sell Price</th>
                                                        <th>Scheduled</th>
                                                        <th>Order No</th>
                                                        <th>Created Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-warning px-2"
                                                                style="color:white">Progress</span>
                                                        <td>Kudos Services Ltd</td>
                                                        <td>Parkview Centre for Health</td>
                                                        <td>W127FG</td>
                                                        <td>£0.00</td>
                                                        <td>21/02/2023</td>
                                                        <td>14544</td>

                                                        <td>16/02/2023</td>
                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-warning px-2"
                                                                style="color:white">Progress</span>
                                                        <td>Xianse Services Ltd</td>
                                                        <td>Lake Street Centre for Health</td>
                                                        <td>W827HF</td>
                                                        <td>£0.00</td>
                                                        <td>08/05/2022</td>
                                                        <td>87274</td>

                                                        <td>15/05/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-warning px-2"
                                                                style="color:white">Progress</span>
                                                        <td>Evergrow Co Ltd</td>
                                                        <td>North town site</td>
                                                        <td>W924KJ</td>
                                                        <td>£0.00</td>
                                                        <td>29/06/2022</td>
                                                        <td>98463</td>

                                                        <td>05/07/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-warning px-2"
                                                                style="color:white">Progress</span>
                                                        <td>Brunchies Pvt Services Ltd</td>
                                                        <td>North Carolina </td>
                                                        <td>N29KDJ</td>
                                                        <td>£0.00</td>
                                                        <td>03/02/2022</td>
                                                        <td>87274</td>

                                                        <td>10/02/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-warning px-2"
                                                                style="color:white">Progress</span>
                                                        <td>Shady Bootz Pvt Ltd</td>
                                                        <td> Texas Oakland </td>
                                                        <td>J78KLS</td>
                                                        <td>£0.00</td>
                                                        <td>10/08/2022</td>
                                                        <td>37976</td>

                                                        <td>20/08/2022</td>



                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>



                                            </table>
                                        </div>
                                    </div>

                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="pending" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons3"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Job</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Site Postcode</th>
                                                        <th>Sell Price</th>
                                                        <th>Scheduled</th>
                                                        <th>Order No</th>
                                                        <th>Created Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-info px-2" style="color:white">Pending</span>
                                                        </td>
                                                        <td>Kudos Services Ltd</td>
                                                        <td>Parkview Centre for Health</td>
                                                        <td>W127FG</td>
                                                        <td>£0.00</td>
                                                        <td>21/02/2023</td>
                                                        <td>14544</td>

                                                        <td>16/02/2023</td>
                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-info px-2" style="color:white">Pending</span>
                                                        </td>
                                                        <td>Xianse Services Ltd</td>
                                                        <td>Lake Street Centre for Health</td>
                                                        <td>W827HF</td>
                                                        <td>£0.00</td>
                                                        <td>08/05/2022</td>
                                                        <td>87274</td>

                                                        <td>15/05/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-info px-2" style="color:white">Pending</span>
                                                        </td>
                                                        <td>Evergrow Co Ltd</td>
                                                        <td>North town site</td>
                                                        <td>W924KJ</td>
                                                        <td>£0.00</td>
                                                        <td>29/06/2022</td>
                                                        <td>98463</td>

                                                        <td>05/07/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-info px-2" style="color:white">Pending</span>
                                                        </td>
                                                        <td>Brunchies Pvt Services Ltd</td>
                                                        <td>North Carolina </td>
                                                        <td>N29KDJ</td>
                                                        <td>£0.00</td>
                                                        <td>03/02/2022</td>
                                                        <td>87274</td>

                                                        <td>10/02/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-info px-2" style="color:white">Pending</span>
                                                        </td>
                                                        <td>Shady Bootz Pvt Ltd</td>
                                                        <td> Texas Oakland </td>
                                                        <td>J78KLS</td>
                                                        <td>£0.00</td>
                                                        <td>10/08/2022</td>
                                                        <td>37976</td>

                                                        <td>20/08/2022</td>



                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>



                                            </table>
                                        </div>
                                    </div>
                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="complete" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons4"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Job</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Site Postcode</th>
                                                        <th>Sell Price</th>
                                                        <th>Scheduled</th>
                                                        <th>Order No</th>
                                                        <th>Created Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-success px-2"
                                                                style="color:white">Complete</span>
                                                        <td>Kudos Services Ltd</td>
                                                        <td>Parkview Centre for Health</td>
                                                        <td>W127FG</td>
                                                        <td>£0.00</td>
                                                        <td>21/02/2023</td>
                                                        <td>14544</td>

                                                        <td>16/02/2023</td>
                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-success px-2"
                                                                style="color:white">Complete</span>
                                                        <td>Xianse Services Ltd</td>
                                                        <td>Lake Street Centre for Health</td>
                                                        <td>W827HF</td>
                                                        <td>£0.00</td>
                                                        <td>08/05/2022</td>
                                                        <td>87274</td>

                                                        <td>15/05/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-success px-2"
                                                                style="color:white">Complete</span>
                                                        <td>Evergrow Co Ltd</td>
                                                        <td>North town site</td>
                                                        <td>W924KJ</td>
                                                        <td>£0.00</td>
                                                        <td>29/06/2022</td>
                                                        <td>98463</td>

                                                        <td>05/07/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-success px-2"
                                                                style="color:white">Complete</span>
                                                        <td>Brunchies Pvt Services Ltd</td>
                                                        <td>North Carolina </td>
                                                        <td>N29KDJ</td>
                                                        <td>£0.00</td>
                                                        <td>03/02/2022</td>
                                                        <td>87274</td>

                                                        <td>10/02/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-success px-2"
                                                                style="color:white">Complete</span>
                                                        <td>Shady Bootz Pvt Ltd</td>
                                                        <td> Texas Oakland </td>
                                                        <td>J78KLS</td>
                                                        <td>£0.00</td>
                                                        <td>10/08/2022</td>
                                                        <td>37976</td>

                                                        <td>20/08/2022</td>



                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>



                                            </table>
                                        </div>
                                    </div>
                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="invoice" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons5"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Job</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Site Postcode</th>
                                                        <th>Sell Price</th>
                                                        <th>Scheduled</th>
                                                        <th>Order No</th>
                                                        <th>Created Date</th>
                                                        <th>Completed Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-dark px-2"
                                                                style="color:white">Invoiced</span>
                                                        <td>Kudos Services Ltd</td>
                                                        <td>Parkview Centre for Health</td>
                                                        <td>W127FG</td>
                                                        <td>£0.00</td>
                                                        <td>21/02/2023</td>
                                                        <td>14544</td>

                                                        <td>16/02/2023</td>
                                                        <td>16/02/2023</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-dark px-2"
                                                                style="color:white">Invoiced</span>
                                                        <td>Xianse Services Ltd</td>
                                                        <td>Lake Street Centre for Health</td>
                                                        <td>W827HF</td>
                                                        <td>£0.00</td>
                                                        <td>08/05/2022</td>
                                                        <td>87274</td>

                                                        <td>15/05/2022</td>
                                                        <td>15/05/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-dark px-2"
                                                                style="color:white">Invoiced</span>
                                                        <td>Evergrow Co Ltd</td>
                                                        <td>North town site</td>
                                                        <td>W924KJ</td>
                                                        <td>£0.00</td>
                                                        <td>29/06/2022</td>
                                                        <td>98463</td>

                                                        <td>05/07/2022</td>
                                                        <td>05/07/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-dark px-2"
                                                                style="color:white">Invoiced</span>
                                                        <td>Brunchies Pvt Services Ltd</td>
                                                        <td>North Carolina </td>
                                                        <td>N29KDJ</td>
                                                        <td>£0.00</td>
                                                        <td>03/02/2022</td>
                                                        <td>87274</td>

                                                        <td>10/02/2022</td>
                                                        <td>10/02/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-dark px-2"
                                                                style="color:white">Invoiced</span>
                                                        <td>Shady Bootz Pvt Ltd</td>
                                                        <td> Texas Oakland </td>
                                                        <td>J78KLS</td>
                                                        <td>£0.00</td>
                                                        <td>10/08/2022</td>
                                                        <td>37976</td>

                                                        <td>20/08/2022</td>
                                                        <td>20/08/2022</td>



                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>



                                            </table>
                                        </div>
                                    </div>

                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="archived" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons6"
                                                class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Job</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Site Postcode</th>
                                                        <th>Sell Price</th>
                                                        <th>Scheduled</th>
                                                        <th>Order No</th>
                                                        <th>Created Date</th>
                                                        <th>Completed Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-danger px-2"
                                                                style="color:white">Archived</span>
                                                        <td>Kudos Services Ltd</td>
                                                        <td>Parkview Centre for Health</td>
                                                        <td>W127FG</td>
                                                        <td>£0.00</td>
                                                        <td>21/02/2023</td>
                                                        <td>14544</td>

                                                        <td>16/02/2023</td>
                                                        <td>16/02/2023</td>

                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-danger px-2"
                                                                style="color:white">Archived</span>
                                                        <td>Xianse Services Ltd</td>
                                                        <td>Lake Street Centre for Health</td>
                                                        <td>W827HF</td>
                                                        <td>£0.00</td>
                                                        <td>08/05/2022</td>
                                                        <td>87274</td>

                                                        <td>15/05/2022</td>
                                                        <td>15/05/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-danger px-2"
                                                                style="color:white">Archived</span>
                                                        <td>Evergrow Co Ltd</td>
                                                        <td>North town site</td>
                                                        <td>W924KJ</td>
                                                        <td>£0.00</td>
                                                        <td>29/06/2022</td>
                                                        <td>98463</td>

                                                        <td>05/07/2022</td>
                                                        <td>05/07/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-danger px-2"
                                                                style="color:white">Archived</span>
                                                        <td>Brunchies Pvt Services Ltd</td>
                                                        <td>North Carolina </td>
                                                        <td>N29KDJ</td>
                                                        <td>£0.00</td>
                                                        <td>03/02/2022</td>
                                                        <td>87274</td>

                                                        <td>10/02/2022</td>
                                                        <td>10/02/2022</td>

                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" />
                                                        </td>
                                                        <td>ABC Job</td>
                                                        <td><span class="bg-danger px-2"
                                                                style="color:white">Archived</span>
                                                        <td>Shady Bootz Pvt Ltd</td>
                                                        <td> Texas Oakland </td>
                                                        <td>J78KLS</td>
                                                        <td>£0.00</td>
                                                        <td>10/08/2022</td>
                                                        <td>37976</td>

                                                        <td>20/08/2022</td>
                                                        <td>20/08/2022</td>



                                                        <td>
                                                        <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Options</a>
                                                                    <a class="dropdown-item" href="#">Edit Job</a>
                                                                    <a class="dropdown-item" href="#">Schedule Job</a>
                                                                    <a data-bs-toggle="modal" data-bs-target=".map"
                                                                        class="dropdown-item" href="#">Map Job</a>
                                                                    <a class="dropdown-item" href="#">Create Invoice</a>

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
</div>
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





<! <?php require_once('footer.php') ?>