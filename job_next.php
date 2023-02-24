<?php require_once('header.php') ?>


<style>
.dt-buttons {
    display: block !important;
}

.btn-group {
    display: none;
}

.border-none {
    border: none !important;
}


.w-md {
    /* width:270px !important; */
}

.final-sum {
    background-color: #eeeeee;
}

.right {
    text-align: right;
}

/* .card-body {
    padding: 5px !important;
} */

.modal-header {
    padding: 10px 10px !important;
}

.mdi-alert {
    color: red;
    font-size: medium
}

.mdi-progress-star {
    color: blue;
    /* font-size: medium; */
}

.goto-link:hover {
    background-color: #D3D3D3;
    cursor: pointer;
}

.modal-content {
    margin-top: 50px
}

#billable {
    display: none
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
                                <!-- <div class="card-header mt-2 align-items-center d-flex"> -->

                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs"
                                        role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#details" role="tab"
                                                id="sms">
                                                <span class=" d-sm-block">Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#cost" role="tab" id="sms">
                                                <span class=" d-sm-block">Cost Centre List</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>

                                <!-- </div> -->
                            </div>
                        </div>
                    </div>



                    <div class="card-body border-none" style="padding:5px;">
                        <div class="tab-content  campaign">
                            <div class="tab-pane active" id="details" role="tabpanel">

                                <div>
                                    <div class="card">
                                        <div class="card-header mt-2 align-items-center d-flex">
                                            <div class="flex-shrink-0">
                                                <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs"
                                                    role="tablist">

                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#summary"
                                                            role="tab" id="sms">
                                                            <span class=" d-sm-block">Summary</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#info" role="tab"
                                                            id="sms">
                                                            <span class=" d-sm-block">Info</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#settings"
                                                            role="tab" id="sms">
                                                            <span class=" d-sm-block">Settings </span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                        </div>
                                        <div class="card-body border-none">
                                            <div class="tab-content  campaign">
                                                <!-- Tab pane  |  Summary | Detail Pane -->
                                                <div class="tab-pane active" id="summary" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-6">
                                                        <div class="mt-4 d-flex flex-wrap px-1  mb-3 gap-3">
                                                                 <label><b class="text-dark">Client:</b> Jetha Liz</label>
                                                                 <label><b class="text-dark">Site:</b> Hariington Mews</label>
                                                                 <label><b class="text-dark">Quote:</b> € 0.00</label>
                                                         
                                                            </div>
                                                           
                                                        </div>
                                                        <hr />
                                                        <div class="col-lg-4">
                                                            <div class="card">
                                                                <div class="card-header align-items-center d-flex">

                                                                    <h4 class="card-title mb-0 flex-grow-1">Actual Cost
                                                                        vs Invoiced Value to Date
                                                                    </h4>

                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mt-4">
                                                                                <div id="column_chart"
                                                                                    data-colors='["#2ab57d", "#5156be", "#fd625e"]'
                                                                                    class="apex-charts" dir="ltr"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="mt-4">
                                                                                <div id="column_chart2"
                                                                                    data-colors='["#2ab57d", "#5156be", "#fd625e"]'
                                                                                    class="apex-charts" dir="ltr"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-5">
                                                            <div class="card">
                                                                <div class="card-header d-flex">
                                                                    <h4 class="card-title mb-0 flex-grow-1">
                                                                        Breakdown</h4>

                                                                </div>

                                                                <div class="card-body">


                                                                    <div class="col-lg-12">
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table  dt-responsive nowrap w-100">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Item</th>
                                                                                        <th>Actual</th>
                                                                                        <th class="right">Estimate</th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Material Cost</td>
                                                                                        <td class="text-success">€0.00
                                                                                        </td>
                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Material Markup</td>
                                                                                        <td class="text-success">€0.00
                                                                                        </td>

                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Resources Cost</td>
                                                                                        <td class="text-success">€0.00
                                                                                        </td>

                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Resources Markup</td>
                                                                                        <td class="text-success">€0.00
                                                                                        </td>

                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>VAT</td>
                                                                                        <td class="text-success">€0.00
                                                                                        </td>

                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Invoiced Value</td>
                                                                                        <td class="text-success">€0.00
                                                                                        </td>

                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Gross Margin</td>
                                                                                        <td class="text-success">€0.00
                                                                                        </td>

                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Total</td>
                                                                                        <td class="text-success">€0.00
                                                                                        </td>

                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div class="card">
                                                                <div class="card-header align-items-center d-flex">

                                                                    <h4 class="card-title mb-0 flex-grow-1">Activity
                                                                    </h4>

                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mt-4 px-2">
                                                                                <h4 class="text-dark card-title">
                                                                                    Schedule</h4>
                                                                                <i class="mdi mdi-alert"></i> <span
                                                                                    class="text-dark">No one is
                                                                                    scheduled or assigned to this
                                                                                    quote</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="mt-4">
                                                                                <div class="card-header d-flex">
                                                                                    <h4 class="card-title  flex-grow-1">

                                                                                        Timeline</h4>
                                                                                    <a href="#">All </a>



                                                                                </div>

                                                                                <div class="d-flex" style="gap:10px">
                                                                                    <i
                                                                                        class="mdi mdi-progress-star"></i>
                                                                                    <span>
                                                                                        <a href="#">Hasan Khalid
                                                                                            (21/02/2023) - System</a>
                                                                                        <p><small>Quote Created</small>
                                                                                        </p>
                                                                                    </span>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div id="info" class="tab-pane" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-6">

                                                        <div class="mt-4 d-flex flex-wrap px-1  mb-3 gap-3">
                                                                 <label><b class="text-dark">Client:</b> Jetha Liz</label>
                                                                 <label><b class="text-dark">Site:</b> Hariington Mews</label>
                                                                 <label><b class="text-dark">Quote:</b> € 0.00</label>
                                                         
                                                            </div>
                                                        </div>
                                                        <hr />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12">
                                                            <h4>Description and Notes</h4>
                                                        </div>
                                                        <!-- <div class="col-lg-6 col-md-6" style="text-align:right">
                                                            <div class="dropdown mt-4">
                                                                <button class="btn btn-primary dropdown-toggle"
                                                                    type="button" id="dropdownMenuButton"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Save As
                                                                </button>
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuButton">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-lg-12 col-md-12">
                                                            <div>
                                                                <div id="ckeditor-classic"></div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 float-end mt-4">
                                                        <div class="row mt-4">
                            <div class="col-lg-12 " style="text-align:left">
                                <div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary w-md">Save</button>
                                        <button type="submit" class="btn btn-light w-md">Cancel</button>

                                    </div>
                                </div>
                               
                            </div>

                        </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="settings" role="tabpanel">
                                                    <div class="row mt-4">
                                                        <div class="col-lg-12 col-md-6">
                                                            <h4 class="card-title">Options</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Job Name</label>
                                                                    <input class="form-control" type="text"
                                                                        id="example-text-input">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Order No</label>
                                                                    <input class="form-control" type="number"
                                                                        id="example-text-input">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Created Date</label>
                                                                    <input class="form-control" type="date"
                                                                        id="example-text-input">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Due Date</label>
                                                                    <input class="form-control" type="date"
                                                                        id="example-text-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">


                                                                    <label for="example-time-input"
                                                                        class="form-label">Due Time</label>
                                                                    <input class="form-control" type="time"
                                                                        value="13:45:00" id="example-time-input">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Completed Date</label>
                                                                    <input class="form-control" type="date"
                                                                        id="example-text-input">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input" class="form-label">
                                                                        Salesperson</label>
                                                                    <select class="form-select ">
                                                                        <option selected disabled>Not Selected</option>
                                                                        <option>John Doe</option>
                                                                        <option>Albert Methews</option>
                                                                        <option>Henry Clark</option>

                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input" class="form-label">
                                                                        Manager</label>
                                                                    <select class="form-select ">
                                                                        <option selected disabled>Not Selected</option>
                                                                        <option>John Doe</option>
                                                                        <option>Albert Methews</option>
                                                                        <option>Henry Clark</option>

                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input" class="form-label">
                                                                        Stage</label>
                                                                    <select class="form-select ">

                                                                        <option>Pending</option>
                                                                        <option>Progress</option>
                                                                        <option>Completed</option>

                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input" class="form-label">
                                                                        Status</label>
                                                                    <select class="form-select ">

                                                                        <option>Job : Pending</option>
                                                                        <option>Job : Progress</option>
                                                                        <option>Job : Completed</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div>
                                                                <div class="mb-3" style="padding-top:45px">
                                                                    <input type="checkbox">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Auto adjust
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input" class="form-label">
                                                                        Technicians</label>
                                                                    <select class="form-select ">
                                                                        <option selected disabled>Not Selected</option>
                                                                        <option>John Doe</option>
                                                                        <option>Albert Methews</option>
                                                                        <option>Henry Clark</option>

                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input" class="form-label">
                                                                        Tags</label>

                                                                    <input class="form-control" type="text"
                                                                        id="example-text-input">
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-lg-12 col-md-6">
                                                            <h4 class="card-title">Retention</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-lg-3 col-md-4">
                                                            <div>
                                                                <label for="example-text-input"
                                                                    class="form-label">Period <small>(months)</small>
                                                                </label>
                                                                <input class="form-control" type="number"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4">
                                                            <div>
                                                                <label for="example-text-input"
                                                                    class="form-label">Retention Amount
                                                                    <small>(%)</small>
                                                                </label>
                                                                <input class="form-control" type="number"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4">
                                                            <div>
                                                                <label for="example-text-input"
                                                                    class="form-label">Amount Per Claim
                                                                    <small>(%)</small>
                                                                </label>
                                                                <input class="form-control" type="number"
                                                                    id="example-text-input" placeholder="Optional">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-4">
                                                            <div>
                                                                <label for="example-text-input" class="form-label">Final
                                                                    Claim Rebate <small>(%)</small>
                                                                </label>
                                                                <input class="form-control" type="number"
                                                                    id="example-text-input">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-4">
                            <div class="col-lg-12 " style="text-align:left">
                                <div>
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary w-md">Save</button>
                                        <button type="submit" class="btn btn-light w-md">Cancel</button>

                                    </div>
                                </div>
                               
                            </div>

                        </div>
                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Detail Tab Pane Ended-->


                            <div class="tab-pane" id="cost" role="tabpanel" style="padding:1.25rem">
                                <div class="row mt-4">

                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">
                                                Filter By Stage</label>
                                            <select class="form-select ">
                                                <option selected disabled>All </option>
                                                <option>Pending</option>
                                                <option>Progress</option>
                                                <option>Completed</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">
                                                Filter By Stage</label>
                                            <select class="form-select ">
                                                <option selected disabled>All </option>
                                                <option>Pending</option>
                                                <option>Progress</option>
                                                <option>Completed</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Filter by Name / ID
                                            </label>
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-lg-3 col-md-4">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Name
                                            </label>
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Description
                                                <small>(optional)</small>
                                            </label>
                                            <input class="form-control" type="text" id="example-text-input"
                                                placeholder="Enter a description">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="mb-3" style="padding-top:45px">
                                            <input type="checkbox">
                                            <label for="example-text-input" class="form-label">Include Cost Centre
                                                values in retention totals
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100">ADD</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12 " style="text-align:left">
                                        <div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary w-md">Save</button>
                                                <button type="submit" class="btn btn-light w-md">Cancel</button>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>




                    </div>
                </div>

            </div>
        </div>


    </div>
    <!-- end card -->
</div> <!-- end col -->

<!-- End Page-content -->


<!-- Create Group Event MODAL -->
<div class="modal fade create-group" id="group" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header   border-bottom-0">
                <h5 class="modal-title" id="modal-title">Create Group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <label class="form-label">Group Name</label>
                            <input class="form-control" placeholder="Insert Group Name" type="text" name="title"
                                id="event-title" required="" value="">

                        </div>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-6">

                    </div>
                    <div class="col-6 text-end">
                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn-save-event">Save</button>
                    </div>
                </div>

            </div>
        </div> <!-- end modal-content-->
    </div> <!-- end modal dialog-->
</div>
<!-- end modal-->

<!-- Create One Off MODAL -->
<div class="modal fade create-one-off" id="group" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header  border-bottom-0">
                <h4 class="modal-title" id="modal-title">Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>


            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <b>
                            <p class="text-dark"> Type</p>
                        </b>
                        <span> <input onclick="showInvent()" type="radio" name="opt" id="material" /> Material &nbsp;
                        </span>
                        <span> <input onclick="hideInvent()" type="radio" name="opt" id="labour" /> Labour </span>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <b>
                            <p class="text-dark"> Options</p>
                        </b>
                        <span> <input onclick="toggleDiv()" type="checkbox" name="opt" id="billable_check" /> Billiable
                            &nbsp; </span>
                        <span id="inventory"> <input type="checkbox" name="opt" /> Inventory </span>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class=" mt-4">
                            <b>
                                <p class="text-dark"> Description</p>
                            </b>
                            <textarea class="form-control" rows="4" cols="100"> </textarea>

                        </div>
                    </div>
                </div>

                <div id="invent">

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Estimated Time <small>
                                                (mins)</small></label>
                                        <input class="form-control" type="number" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Quantity</label>
                                        <input class="form-control" type="number" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Sales Tax Code</label>

                                        <select class="form-select">
                                            <option>VAT (20%)</option>
                                            <option>FRE Tax Free (0%)</option>

                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Actual Cost £ <small> (ex
                                                VAT)</small></label>
                                        <input class="form-control" type="number" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Actual Cost Date</label>
                                        <input class="form-control" type="date" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="billable">
                    <div class="row mt-4">
                        <div class="col-lg-4 col-md-4">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Estimated Cost £ <small>
                                            (ex VAT)</small></label>
                                    <input class="form-control" type="number" id="example-text-input">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Markup %</label>
                                    <input class="form-control" type="number" id="example-text-input">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Sell Price £

                                        <small> (ex VAT)</small>
                                    </label>
                                    <input class="form-control" type="number" id="example-text-input">


                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Estimated Time <small>
                                            (mins)</small></label>
                                    <input class="form-control" type="number" id="example-text-input">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Quantity </label>
                                    <input class="form-control" type="number" id="example-text-input">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Sales Tax Code</label>

                                    <select class="form-select">
                                        <option>VAT (20%)</option>
                                        <option>FRE Tax Free (0%)</option>

                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Actual Cost £

                                        <small> (ex VAT)</small>
                                    </label>
                                    <input class="form-control" type="number" id="example-text-input">


                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div>
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Actual Cost Date</label>
                                    <input class="form-control" type="date" id="example-text-input">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">

                    <div class="col-lg-12 col-md-12 text-end">
                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn-save-event">Save</button>
                    </div>
                </div>

            </div>
        </div>

    </div> <!-- end modal-content-->
</div> <!-- end modal dialog-->
</div>
<!-- end modal-->





<?php require_once('footer.php') ?>


<script>
function getChartColorsArray(e) {
    e = $(e).attr("data-colors");
    return (e = JSON.parse(e)).map(function(e) {
        e = e.replace(" ", "");
        if (-1 == e.indexOf("--")) return e;
        e = getComputedStyle(document.documentElement).getPropertyValue(e);
        return e || void 0;
    });
}


var columnColors = getChartColorsArray("#column_chart"),
    options = {
        chart: {
            height: 350,
            type: "bar",
            toolbar: {
                show: !1
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "45%"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 2,
            colors: ["transparent"]
        },
        series: [{
                name: "Actual Cost",
                data: [46, 57, 59, 54, 62, 58, 64, 60, 66]
            },
            {
                name: "Invoiced",
                data: [74, 83, 102, 97, 86, 106, 93, 114, 94]
            },
            {
                name: "Invoice Profit",
                data: [37, 42, 38, 26, 47, 50, 54, 55, 43]
            },
        ],
        colors: columnColors,
        xaxis: {
            categories: [
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",

            ],
        },
        yaxis: {
            title: {
                text: "$ (thousands)",
                style: {
                    fontWeight: "500"
                }
            }
        },
        grid: {
            borderColor: "#f1f1f1"
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(e) {
                    return "$ " + e + " thousands";
                },
            },
        },
    };
(chart = new ApexCharts(
    document.querySelector("#column_chart"),
    options
)).render();


var columnColors = getChartColorsArray("#column_chart2"),
    options = {
        chart: {
            height: 350,
            type: "bar",
            toolbar: {
                show: !1
            }
        },
        plotOptions: {
            bar: {
                horizontal: !1,
                columnWidth: "45%"
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            show: !0,
            width: 2,
            colors: ["transparent"]
        },
        series: [{
                name: "Actual Cost",
                data: [46, 57, 59, 54, 62, 58, 64, 60, 66]
            },
            {
                name: "Invoiced",
                data: [74, 83, 102, 97, 86, 106, 93, 114, 94]
            },
            {
                name: "Invoice Profit",
                data: [37, 42, 38, 26, 47, 50, 54, 55, 43]
            },
        ],
        colors: columnColors,
        xaxis: {
            categories: [
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",

            ],
        },
        yaxis: {
            title: {
                text: "$ (thousands)",
                style: {
                    fontWeight: "500"
                }
            }
        },
        grid: {
            borderColor: "#f1f1f1"
        },
        fill: {
            opacity: 1
        },
        tooltip: {
            y: {
                formatter: function(e) {
                    return "$ " + e + " thousands";
                },
            },
        },
    };
(chart = new ApexCharts(
    document.querySelector("#column_chart2"),
    options
)).render();



const hideInvent = () => {
    $("#inventory").hide()
}

const showInvent = () => {
    $("#inventory").show()
}

const toggleDiv = () => {
    $("#invent").toggle()
    $("#billable").toggle()

}


$(".clickable-row").click(function() {
    window.location.href = "index.php";
});
</script>



<!--



  <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                                            <li class="breadcrumb-item active">General</li>
                                        </ol>
                                    </div>
 -->