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
                                <h4 class="card-title mb-0">Quotes</h4>
                            </div>
                            <div class="col-md-4 col-6">
                                <a href="add_quote.php" class="btn btn-primary float-end">Add Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card border-none">
                            <div class="card-header mt-2 align-items-center d-flex">

                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#all" role="tab" id="sms">

                                                <span class=" d-sm-block">All</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#timesheet" role="tab" id="sms">

                                                <span class=" d-sm-block">Open</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#overtime" role="tab" id="sms">

                                                <span class=" d-sm-block">Progress</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#complete" role="tab" id="sms">

                                                <span class=" d-sm-block">Complete</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#approve" role="tab" id="sms">

                                                <span class=" d-sm-block">Approved</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#closed" role="tab" id="sms">

                                                <span class=" d-sm-block">Closed/Archived</span>
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
                                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Quote</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Project Manager</th>
                                                        <th>Sell Price</th>
                                                        <th>Created Date</th>
                                                        <th>Approved Date</th>
                                                        <th>Expiry Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-info px-2" style="color:white">Open</span>
                                                        </td>
                                                        <td>Albert Henry</td>
                                                        <td>Abc Site</td>
                                                        <td>John Doe</td>
                                                        <td>€2.00</td>
                                                        <td>01/01/2023</td>
                                                        <td>05/01/2023</td>
                                                        <td>15/01/2023</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-warning px-2" style="color:white">Progress</span></td>
                                                        <td>Henry Albert</td>
                                                        <td>Abc Site</td>
                                                        <td>Harles Alvin</td>
                                                        <td>€18.00</td>
                                                        <td>06/06/2022</td>
                                                        <td>12/06/2022</td>
                                                        <td>20/06/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-success px-2" style="color:white">Complete</span>
                                                        </td>
                                                        <td>Albert Methews</td>
                                                        <td>Abc Site</td>
                                                        <td>Henry Clark</td>
                                                        <td>€17.00</td>
                                                        <td>02/08/2022</td>
                                                        <td>15/08/2022</td>
                                                        <td>30/08/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-dark px-2" style="color:white">Approved</span>
                                                        </td>
                                                        <td>Hudon Sandy</td>
                                                        <td>Abc Site</td>
                                                        <td>Albert Methews</td>
                                                        <td>€87.00</td>
                                                        <td>06/02/2022</td>
                                                        <td>15/02/2022</td>
                                                        <td>22/02/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-danger px-2" style="color:white">Close</span>
                                                        </td>
                                                        <td>John Doe</td>
                                                        <td>Abc Site</td>
                                                        <td>Alvin Clark</td>
                                                        <td>€65.00</td>
                                                        <td>03/04/2022</td>
                                                        <td>15/04/2022</td>
                                                        <td>25/04/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="timesheet" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons2" class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Quote</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Project Manager</th>
                                                        <th>Sell Price</th>
                                                        <th>Created Date</th>
                                                        <th>Approved Date</th>
                                                        <th>Expiry Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-info px-2" style="color:white">Open</span>
                                                        </td>
                                                        <td>Albert Henry</td>
                                                        <td>Abc Site</td>
                                                        <td>John Doe</td>
                                                        <td>€2.00</td>
                                                        <td>01/01/2023</td>
                                                        <td>05/01/2023</td>
                                                        <td>15/01/2023</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-info px-2" style="color:white">Open</span>
                                                        <td>Henry Albert</td>
                                                        <td>Abc Site</td>
                                                        <td>Harles Alvin</td>
                                                        <td>€18.00</td>
                                                        <td>06/06/2022</td>
                                                        <td>12/06/2022</td>
                                                        <td>20/06/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-info px-2" style="color:white">Open</span>
                                                        <td>Albert Methews</td>
                                                        <td>Abc Site</td>
                                                        <td>Henry Clark</td>
                                                        <td>€17.00</td>
                                                        <td>02/08/2022</td>
                                                        <td>15/08/2022</td>
                                                        <td>30/08/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-info px-2" style="color:white">Open</span>
                                                        <td>Hudon Sandy</td>
                                                        <td>Abc Site</td>
                                                        <td>Albert Methews</td>
                                                        <td>€87.00</td>
                                                        <td>06/02/2022</td>
                                                        <td>15/02/2022</td>
                                                        <td>22/02/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-info px-2" style="color:white">Open</span>
                                                        <td>John Doe</td>
                                                        <td>Abc Site</td>
                                                        <td>Alvin Clark</td>
                                                        <td>€65.00</td>
                                                        <td>03/04/2022</td>
                                                        <td>15/04/2022</td>
                                                        <td>25/04/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>



                                            </table>
                                        </div>
                                    </div>
                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="overtime" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons3" class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Quote</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Project Manager</th>
                                                        <th>Sell Price</th>
                                                        <th>Created Date</th>
                                                        <th>Approved Date</th>
                                                        <th>Expiry Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-warning px-2" style="color:white">Progress</span></td>
                                                        <td>Albert Henry</td>
                                                        <td>Abc Site</td>
                                                        <td>John Doe</td>
                                                        <td>€2.00</td>
                                                        <td>01/01/2023</td>
                                                        <td>05/01/2023</td>
                                                        <td>15/01/2023</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-warning px-2" style="color:white">Progress</span>
                                                        <td>Henry Albert</td>
                                                        <td>Abc Site</td>
                                                        <td>Harles Alvin</td>
                                                        <td>€18.00</td>
                                                        <td>06/06/2022</td>
                                                        <td>12/06/2022</td>
                                                        <td>20/06/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-warning px-2" style="color:white">Progress</span>
                                                        <td>Albert Methews</td>
                                                        <td>Abc Site</td>
                                                        <td>Henry Clark</td>
                                                        <td>€17.00</td>
                                                        <td>02/08/2022</td>
                                                        <td>15/08/2022</td>
                                                        <td>30/08/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-warning px-2" style="color:white">Progress</span>
                                                        <td>Hudon Sandy</td>
                                                        <td>Abc Site</td>
                                                        <td>Albert Methews</td>
                                                        <td>€87.00</td>
                                                        <td>06/02/2022</td>
                                                        <td>15/02/2022</td>
                                                        <td>22/02/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-warning px-2" style="color:white">Progress</span>
                                                        <td>John Doe</td>
                                                        <td>Abc Site</td>
                                                        <td>Alvin Clark</td>
                                                        <td>€65.00</td>
                                                        <td>03/04/2022</td>
                                                        <td>15/04/2022</td>
                                                        <td>25/04/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
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
                                            <table id="datatable-buttons4" class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Quote</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Project Manager</th>
                                                        <th>Sell Price</th>
                                                        <th>Created Date</th>
                                                        <th>Approved Date</th>
                                                        <th>Expiry Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-success px-2" style="color:white">Complete</span></td>
                                                        <td>Albert Henry</td>
                                                        <td>Abc Site</td>
                                                        <td>John Doe</td>
                                                        <td>€2.00</td>
                                                        <td>01/01/2023</td>
                                                        <td>05/01/2023</td>
                                                        <td>15/01/2023</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-success px-2" style="color:white">Complete</span>
                                                        <td>Henry Albert</td>
                                                        <td>Abc Site</td>
                                                        <td>Harles Alvin</td>
                                                        <td>€18.00</td>
                                                        <td>06/06/2022</td>
                                                        <td>12/06/2022</td>
                                                        <td>20/06/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-success px-2" style="color:white">Complete</span>
                                                        <td>Albert Methews</td>
                                                        <td>Abc Site</td>
                                                        <td>Henry Clark</td>
                                                        <td>€17.00</td>
                                                        <td>02/08/2022</td>
                                                        <td>15/08/2022</td>
                                                        <td>30/08/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-success px-2" style="color:white">Complete</span>
                                                        <td>Hudon Sandy</td>
                                                        <td>Abc Site</td>
                                                        <td>Albert Methews</td>
                                                        <td>€87.00</td>
                                                        <td>06/02/2022</td>
                                                        <td>15/02/2022</td>
                                                        <td>22/02/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-success px-2" style="color:white">Complete</span>
                                                        <td>John Doe</td>
                                                        <td>Abc Site</td>
                                                        <td>Alvin Clark</td>
                                                        <td>€65.00</td>
                                                        <td>03/04/2022</td>
                                                        <td>15/04/2022</td>
                                                        <td>25/04/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>



                                            </table>
                                        </div>
                                    </div>
                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="approve" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons5" class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Quote</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Project Manager</th>
                                                        <th>Sell Price</th>
                                                        <th>Created Date</th>
                                                        <th>Approved Date</th>
                                                        <th>Expiry Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-dark px-2" style="color:white">Approved</span></td>
                                                        <td>Albert Henry</td>
                                                        <td>Abc Site</td>
                                                        <td>John Doe</td>
                                                        <td>€2.00</td>
                                                        <td>01/01/2023</td>
                                                        <td>05/01/2023</td>
                                                        <td>15/01/2023</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-dark px-2" style="color:white">Approved</span>
                                                        <td>Henry Albert</td>
                                                        <td>Abc Site</td>
                                                        <td>Harles Alvin</td>
                                                        <td>€18.00</td>
                                                        <td>06/06/2022</td>
                                                        <td>12/06/2022</td>
                                                        <td>20/06/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-dark px-2" style="color:white">Approved</span>
                                                        <td>Albert Methews</td>
                                                        <td>Abc Site</td>
                                                        <td>Henry Clark</td>
                                                        <td>€17.00</td>
                                                        <td>02/08/2022</td>
                                                        <td>15/08/2022</td>
                                                        <td>30/08/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-dark px-2" style="color:white">Approved</span>
                                                        <td>Hudon Sandy</td>
                                                        <td>Abc Site</td>
                                                        <td>Albert Methews</td>
                                                        <td>€87.00</td>
                                                        <td>06/02/2022</td>
                                                        <td>15/02/2022</td>
                                                        <td>22/02/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-dark px-2" style="color:white">Approved</span>
                                                        <td>John Doe</td>
                                                        <td>Abc Site</td>
                                                        <td>Alvin Clark</td>
                                                        <td>€65.00</td>
                                                        <td>03/04/2022</td>
                                                        <td>15/04/2022</td>
                                                        <td>25/04/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>



                                            </table>
                                        </div>
                                    </div>
                                    <!-- Tab panes  |  All Section Pane -->
                                    <div class="tab-pane" id="closed" role="tabpanel">

                                        <div class="table-responsive">
                                            <table id="datatable-buttons6" class="table table-bordered dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th> <input type="checkbox"></th>
                                                        <th>Quote</th>
                                                        <th>Status</th>
                                                        <th>Client</th>
                                                        <th>Site</th>
                                                        <th>Project Manager</th>
                                                        <th>Sell Price</th>
                                                        <th>Created Date</th>
                                                        <th>Approved Date</th>
                                                        <th>Expiry Date</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-danger px-2" style="color:white">Close</span>
                                                        </td>
                                                        <td>Albert Henry</td>
                                                        <td>Abc Site</td>
                                                        <td>John Doe</td>
                                                        <td>€2.00</td>
                                                        <td>01/01/2023</td>
                                                        <td>05/01/2023</td>
                                                        <td>15/01/2023</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target=".map" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-danger px-2" style="color:white">Close</span>
                                                        <td>Henry Albert</td>
                                                        <td>Abc Site</td>
                                                        <td>Harles Alvin</td>
                                                        <td>€18.00</td>
                                                        <td>06/06/2022</td>
                                                        <td>12/06/2022</td>
                                                        <td>20/06/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-danger px-2" style="color:white">Close</span>
                                                        <td>Albert Methews</td>
                                                        <td>Abc Site</td>
                                                        <td>Henry Clark</td>
                                                        <td>€17.00</td>
                                                        <td>02/08/2022</td>
                                                        <td>15/08/2022</td>
                                                        <td>30/08/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-danger px-2" style="color:white">Close</span>
                                                        <td>Hudon Sandy</td>
                                                        <td>Abc Site</td>
                                                        <td>Albert Methews</td>
                                                        <td>€87.00</td>
                                                        <td>06/02/2022</td>
                                                        <td>15/02/2022</td>
                                                        <td>22/02/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> <input type="checkbox"> </td>
                                                        <td>ABC Quote</td>
                                                        <td><span class="bg-danger px-2" style="color:white">Close</span>
                                                        <td>John Doe</td>
                                                        <td>Abc Site</td>
                                                        <td>Alvin Clark</td>
                                                        <td>€65.00</td>
                                                        <td>03/04/2022</td>
                                                        <td>15/04/2022</td>
                                                        <td>25/04/2022</td>
                                                        <td>
                                                            <div class="dropdown chat-noti-dropdown">
                                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Edit quote</a>
                                                                    <a class="dropdown-item" href="#">Schedule quote</a>
                                                                    <a class="dropdown-item" href="#">Map quote</a>
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

<!-- map quote modal -->
<div class="modal fade map" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <span>
                                    <h4 style="color:white;padding:6px;border-radius:.3rem;" class="card-title bg-main-theme">Assign an
                                        Employee</h4>
                                </span>
                                <div class="card emp-card">


                                    <ul class="mt-2">
                                        <li>Alex Fay</li>
                                        <li>Cahit Tastan</li>
                                        <li>Damian Chandler</li>
                                        <li>Darryl Bean</li>
                                        <li>Dave Holdway</li>
                                        <li>John Doe</li>
                                        <li>Andrew Methews</li>
                                        <li>Henry Clark</li>
                                    </ul>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <span>
                                    <h4 style="color:white;padding:6px;border-radius:.3rem;" class="card-title bg-main-theme">Quote
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
                                        <h4 style="color:white;padding:6px;border-radius:.3rem;" class="card-title bg-main-theme">
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
                                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=england&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
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