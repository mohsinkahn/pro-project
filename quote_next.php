<?php require_once('header.php') ?>


<style>



.final-sum {
    background-color: #eeeeee;
}

.right {
    text-align: right;
}

.card-body {
    padding: 5px !important;
}

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

                                <div>
                                    <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs"
                                        role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#details" role="tab"
                                                id="sms">
                                                <span class=" d-sm-block">Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#parts" role="tab" id="sms">
                                                <span class=" d-sm-block">Parts & Labour</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#schedule" role="tab"
                                                id="sms">
                                                <span class=" d-sm-block">Schedule </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#assets" role="tab" id="sms">
                                                <span class=" d-sm-block">Client Assets </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- </div> -->
                            </div>
                        </div>
                    </div>



                    <div class="card-body border-none">
                        <div class="tab-content  campaign">
                            <div class="tab-pane active" id="details" role="tabpanel">


                                <div class="card-body">
                                    <div class="card border-none">
                                        <div class="card-header mt-2 align-items-center d-flex">

                                            <div>
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

                                                                    <h4 class="card-title mb-0 flex-grow-1">Estimate
                                                                        Breakdown</h4>

                                                                </div>
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mt-4 px-2">
                                                                                <div id="pie_chart"
                                                                                    data-colors='["#5156be", "#fd625e", "#4ba6ef", "#ffbf53"]'
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
                                                                    <h4 class="card-title mb-0 flex-grow-1">Parts &
                                                                        Labour</h4>
                                                                    <small style="margin-right: 10px;"> <a href="#"><i
                                                                                class="mdi mdi-lock"></i>Lock
                                                                            Estimate & Price</a></small>
                                                                    <small><a href="#"><i class="mdi mdi-lock"></i>Lock
                                                                            Items &
                                                                            Price</a></small>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="col-lg-12">
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table  dt-responsive nowrap w-100">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Description</th>
                                                                                        <th>Quantity</th>
                                                                                        <th>Item Sell</th>
                                                                                        <th>Total</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td colspan="4">No items have
                                                                                            been added to the cost
                                                                                            centre</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="table-responsive">
                                                                            <table
                                                                                class="table  dt-responsive nowrap w-100">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>Item</th>
                                                                                        <th class="right">Estimate</th>

                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Material Cost</td>
                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Material Markup</td>
                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Resources Cost</td>
                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Resources Markup</td>
                                                                                        <td class="right">€0.00</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>VAT</td>
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

                                                <div class="tab-pane" id="settings" role="tabpanel">
                                                    <div class="row mt-4">
                                                        <div class="col-lg-3">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Cost Centre</label>
                                                                    <select class="form-select">
                                                                        <option>Fire Alarm Install</option>
                                                                        <option>CCTV Install</option>
                                                                        <option>Network Install</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Cost Centre Name</label>
                                                                    <input class="form-control" type="text"
                                                                        id="example-text-input">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Site</label>
                                                                    <input class="form-control" type="text"
                                                                        id="example-text-input">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Order No</label>
                                                                    <input class="form-control" type="text"
                                                                        id="example-text-input">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Start Date</label>
                                                                    <input class="form-control" type="date"
                                                                        id="example-text-input">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div>
                                                                <div class="mb-3">
                                                                    <label for="example-text-input"
                                                                        class="form-label">End Date</label>
                                                                    <input class="form-control" type="date"
                                                                        id="example-text-input">
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3" style="padding-top:45px">
                                                            <div>
                                                                <div>

                                                                    <input type="checkbox">
                                                                    <label for="example-text-input"
                                                                        class="form-label">Auto adjust based on
                                                                        tasks</label>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div>
                                                                <div>

                                                                    <label for="example-text-input"
                                                                        class="form-label">Default Cost Centre
                                                                        Account</label>

                                                                    <p class="text-dark mt-2">Sales</p>




                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <div>
                                                                <div>

                                                                    <label for="example-text-input" class="form-label">
                                                                        Cost Centre Type
                                                                    </label>
                                                                    <br />


                                                                    <p class="text-dark mt-2" id="charge"><input
                                                                            type="radio" name="charge"
                                                                            for="charge">Chargeable</p>
                                                                    <p class="text-dark mt-2" id="option"><input
                                                                            type="radio" name="charge"
                                                                            for="option">Optional <input
                                                                            type="checkbox"> Itemise parts regardless of
                                                                        print type (pdf & doc only)</p>





                                                                </div>

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


                            <div class="tab-pane" id="parts" role="tabpanel">

                                <div class="card-body">
                                    <div class="card border-none">
                                        <div class="card-header mt-2 align-items-center d-flex">

                                            <div>
                                                <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs"
                                                    role="tablist">

                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#bill"
                                                            role="tab" id="sms">
                                                            <span class=" d-sm-block">Billable</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#takeoff"
                                                            role="tab" id="sms">
                                                            <span class=" d-sm-block">Take Off</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#build"
                                                            role="tab" id="sms">
                                                            <span class=" d-sm-block">Pre-Builds </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#cat" role="tab"
                                                            id="sms">
                                                            <span class=" d-sm-block">Catalogue </span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#items"
                                                            role="tab" id="sms">
                                                            <span class=" d-sm-block">One Off Items </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="card-body border-none">
                                            <div class="tab-content campaign">
                                                <!-- Tab panes  |  All Section Pane -->
                                                <div class="tab-pane active" id="bill" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive">
                                                                <table id="datatable-buttons"
                                                                    class="table table-bordered dt-responsive nowrap w-100">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Description</th>
                                                                            <th>Time <small> (mins)</small></th>
                                                                            <th>Price <small> (ex VAT)</small></th>
                                                                            <th>Markup</th>
                                                                            <th>Sell Price <small> (ex VAT)</small></th>
                                                                            <th>Qty</th>
                                                                            <th>Total <small> (ex VAT)</small></th>


                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td> <input type="checkbox"> 112 CCTV
                                                                                Installation -
                                                                                Labour Only </td>
                                                                            <td> 96
                                                                                <select
                                                                                    class="form-select form-select-sm">
                                                                                    <option>Fit Time</option>
                                                                                </select>
                                                                            </td>
                                                                            <td>€ 50 <input type="checkbox"> </td>
                                                                            <td> 60 % </td>
                                                                            <td>€ 80.00 <input type="checkbox"> </td>
                                                                            <td>
                                                                                <input type="text" value="1" />
                                                                            </td>
                                                                            <td>
                                                                                € 80.00 <select
                                                                                    class="form-select form-select-sm">
                                                                                    <option>Options</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <input type="checkbox"> 112 CCTV
                                                                                Installation -
                                                                                Labour & Materials </td>
                                                                            <td> 96
                                                                                <select
                                                                                    class="form-select form-select-sm">
                                                                                    <option>Fit Time</option>
                                                                                </select>
                                                                            </td>
                                                                            <td>€ 65 <input type="checkbox"> </td>
                                                                            <td> 60 % </td>
                                                                            <td>€ 40.00 <input type="checkbox"> </td>
                                                                            <td>
                                                                                <input type="text" value="1" />
                                                                            </td>
                                                                            <td>
                                                                                € 40.00 <select
                                                                                    class="form-select form-select-sm">
                                                                                    <option>Options</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <input type="checkbox"> 112 CCTV
                                                                                Installation -
                                                                                Switch </td>
                                                                            <td> 48
                                                                                <select
                                                                                    class="form-select form-select-sm">
                                                                                    <option>Fit Time</option>
                                                                                </select>
                                                                            </td>
                                                                            <td>€ 45 <input type="checkbox"> </td>
                                                                            <td> 60 % </td>
                                                                            <td>€ 72.00 <input type="checkbox"> </td>
                                                                            <td>
                                                                                <input type="text" value="1" />
                                                                            </td>
                                                                            <td>
                                                                                € 72.00 <select
                                                                                    class="form-select form-select-sm">
                                                                                    <option>Options</option>
                                                                                </select>
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td> <input type="checkbox"> 112 CCTV
                                                                                Installation -
                                                                                Network </td>
                                                                            <td> 57 <select
                                                                                    class="form-select form-select-sm">
                                                                                    <option>Fit Time</option>
                                                                                </select>
                                                                            </td>
                                                                            <td>€ 30 <input type="checkbox"> </td>
                                                                            <td> 66.5 % </td>
                                                                            <td>€ 78.00 <input type="checkbox"> </td>
                                                                            <td>
                                                                                <input type="text" value="1" />
                                                                            </td>
                                                                            <td>
                                                                                € 78.00 <select
                                                                                    class="form-select form-select-sm">
                                                                                    <option>Options</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row mt-2">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-lg-10 col-12">
                                                                    <div class="mb-3">
                                                                   
                                                                       <b> <label for="choices-single-default" class="form-label ">Call Out / Service Fee</label></b>
                                                        <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default">
                                                            <option value="">Not Selected</option>
                                                            <option value="Choice 1">Choice 1</option>
                                                            <option value="Choice 2">Choice 2</option>
                                                            <option value="Choice 3">Choice 3</option>
                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-12">
                                                                    <div>
                                                                    <label for="example-text-input" style="visibility:hidden"
                                                                            class="form-label">Supplier
                                                                            Quote
                                                                        </label>
                                                                        <button type="submit"
                                                                            class="btn btn-primary w-100">ADD</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5 col-6">
                                                                    <div class="mt-2 mb-3">
                                                                        <label for="example-text-input"
                                                                            class="form-label">Supplier
                                                                        </label>
                                                                        <input class="form-control" type="text"
                                                                            id="example-text-input"
                                                                            placeholder="Supplier">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-5 col-6">
                                                                    <div class="mt-2">
                                                                    <label for="example-text-input"
                                                                            class="form-label">Supplier
                                                                            Quote
                                                                        </label>
                                                                            

                                                                            <select class="form-select  w-100">
                                                                                <option selected disabled>0 Selected
                                                                                </option>
                                                                                <option>ABC Option</option>
                                                                                <option>ABC Option</option>
                                                                                <option>ABC Option</option>

                                                                            </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-12">
                                                                    <div class="mt-2">
                                                                    <label for="example-text-input" style="visibility:hidden"
                                                                            class="form-label">Supplier
                                                                            Quote
                                                                        </label>
                                                                        <button type="submit"
                                                                            class="btn btn-primary w-100">APPLY</button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-10 col-12">
                                                                    <div class="mb-3 mt-2">
                                                                        <b><label for="choices-single-default" class="form-label " > Labour</label></b>
                                                        <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default">
                                                            <option value="">Not Selected</option>
                                                            <option value="Choice 1">Choice 1</option>
                                                            <option value="Choice 2">Choice 2</option>
                                                            <option value="Choice 3">Choice 3</option>
                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-2 col-12">
                                                                    <div class="mt-2">
                                                                    <label for="example-text-input" style="visibility:hidden"
                                                                            class="form-label">Supplier
                                                                            Quote
                                                                        </label>
                                                                        <button type="submit"
                                                                            class="btn btn-primary w-100">ADD</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <div class="row mt-2">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive">
                                                                <table id="datatable-buttons"
                                                                    class="table table-bordered dt-responsive nowrap w-100">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Labour Type</th>
                                                                            <th>Cost Rate <small>(ex VAT)</small></th>
                                                                            <th>Markup</th>
                                                                            <th>Sell Price <small>(ex VAT)</small></th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="4">No labour types have been
                                                                                added
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>


                                                    </div>


                                                    <div class="row mt-2  justify-content-between">
                                                        <div class="col-lg-12 col-md-12">
                                                            <div>
                                                                <h4>Billable Summary</h4>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 mt-4">
                                                            <span class="w-md d-flex justify-content-between mt-2">
                                                                <p>Material Cost</p>
                                                                <p><b>€35.00</b></p>
                                                            </span>
                                                            <span class="w-md d-flex justify-content-between mt-2">
                                                                <p>Labour Cost</p>
                                                                <p><b>€495.00</b></p>
                                                            </span>
                                                            <span class="w-md d-flex justify-content-between">
                                                                <p>Plan & Equipment Cost</p>
                                                                <p><b>€0.00</b></p>
                                                            </span>

                                                        </div>
                                                        <div class="col-lg-1"></div>
                                                        <div class="col-lg-3 mt-4">
                                                            <span class="w-md d-flex justify-content-between mt-2">
                                                                <p>Material Markup</p>
                                                                <p><b>€21.00</b></p>
                                                            </span>
                                                            <span class="w-md d-flex justify-content-between mt-2">
                                                                <p>Labour Markup</p>
                                                                <p><b>€317.00</b></p>
                                                            </span>
                                                            <span class="w-md d-flex justify-content-between">
                                                                <p>Plan & Equipment Markup</p>
                                                                <p><b>€0.00</b></p>
                                                            </span>

                                                        </div>
                                                        <div class="col-lg-2"></div>
                                                        <div class="col-lg-3 mt-4 final-sum">
                                                            <span class="w-md d-flex justify-content-between mt-2">
                                                                <p>Sub-Total</p>
                                                                <p><b>€868.00</b></p>
                                                            </span>
                                                            <span class="w-md d-flex justify-content-between mt-2 ">
                                                                <p>VAT</p>
                                                                <p><b>€173.60</b></p>
                                                            </span>
                                                            <span class="w-md d-flex justify-content-between ">
                                                                <p>Total</p>
                                                                <p><b>€1041.60</b></p>
                                                            </span>

                                                        </div>
                                                    </div>

                                                </div>



                                                <div class="tab-pane" id="takeoff" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card-header">
                                                            
                                                                        <form class="app-search d-lg-block">
                                                                            <div class="position-relative">
                                                                                <input type="text"
                                                                                    class="form-control w-100"
                                                                                    placeholder="Search...">
                                                                                <button class="btn" type="button"><i
                                                                                        class="bx bx-search-alt align-middle"></i></button>
                                                                            </div>
                                                                        </form>
                                                                   
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive mt-4">
                                                                <table id="datatable-buttons"
                                                                    class="table table-bordered dt-responsive nowrap w-100">
                                                                    <thead>
                                                                        <tr>
                                                                            <th colspan="2">Groups</th>
                                                                            <!-- <th></th> -->
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>


                                                                        <tr >
                                                                            <td> Fire Alarms </td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>

                                                                        <tr>
                                                                            <td>Disabled Systems</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Access Control</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>CCTV</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Intruder Alarms</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Install</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Data</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Monitoring</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kudos - Access Control Prelim</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kudos - CCTV Prelim</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kudos - CCTV Update</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kudos - Intruder Alarm Prelim</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>



                                                <div class="tab-pane" id="build" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card-header">
                                                                <div class="row">
                                                                    <div class="col-md-10 col-12">
                                                                        <form class="app-search d-lg-block">
                                                                            <div class="position-relative">
                                                                                <input type="text"
                                                                                    class="form-control w-100"
                                                                                    placeholder="Search...">
                                                                                <button class="btn" type="button"><i
                                                                                        class="bx bx-search-alt align-middle"></i></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-md-2 col-12">
                                                                        <a href="#" data-bs-toggle="modal" style="margin-top:15px"
                                                                            data-bs-target=".create-group"
                                                                            class="btn btn-primary w-100">Create
                                                                            Group </a>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive mt-4">
                                                                <table id="datatable-buttons"
                                                                    class="table table-bordered dt-responsive nowrap w-100">
                                                                    <thead>
                                                                        <tr>
                                                                            <th colspan="2">Group Name</th>
                                                                            <!-- <th></th> -->
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Fire & Refuge Installtion</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>WC Alarm Installtion</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Access Installtion</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>CCTV Installation</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Intruder Alarms Installation</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Entrotec</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Door Holders</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Monitoring</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="tab-pane" id="cat" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card-header">
                                                                <div class="row">
                                                                    <div class="col-md-8 col-lg-6">
                                                                        <form class="app-search d-lg-block">
                                                                            <div class="position-relative">
                                                                                <input type="text"
                                                                                    class="form-control w-100"
                                                                                    placeholder="Search...">
                                                                                <button class="btn" type="button"><i
                                                                                        class="bx bx-search-alt align-middle"></i></button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                    <div class="col-md-4 col-lg-6">
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target=".create-group"
                                                                            class="btn btn-primary float-end">Create
                                                                            Group </a>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive mt-4">
                                                                <table id="datatable-buttons"
                                                                    class="table table-bordered dt-responsive nowrap w-100">
                                                                    <thead>
                                                                        <tr>
                                                                            <th colspan="2">Group Name</th>
                                                                            <!-- <th></th> -->
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>ADI - February 2023</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Baldwin Boxall - February 2023</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Gent - January 2023</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Mayflex - February 2023</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Kentec - February 2023</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Orisec - January 2023</td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Cameo - Radial Wired - February 2023
                                                                            </td>
                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Cameo - Loop Wired - February 2023</td>

                                                                            <td class="right">

                                                                                <select
                                                                                    class="form-select form-select-sm w-25 float-end">
                                                                                    <option>Options</option>
                                                                                    <option>View Group</option>

                                                                                </select>
                                                                            </td>
                                                                        </tr>


                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="tab-pane" id="items" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card-header">
                                                                <div class="row">
                                                                    <div class="col-md-8 col-lg-6">
                                                                    </div>
                                                                    <div class="col-md-4 col-lg-6">
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target=".create-one-off"
                                                                            class="btn btn-primary float-end">One Off
                                                                            Item
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive mt-4">
                                                                <table id="datatable-buttons"
                                                                    class="table dt-responsive nowrap w-100">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Group Name</th>
                                                                            <th>Estimated Time <small>(mins)</small>
                                                                            </th>
                                                                            <th>Estimated Cost</th>
                                                                            <th>Actual Cost</th>
                                                                            <th>Sell Price</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="5">No one off items have been
                                                                                added</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!--Parts & Labour Tab Pane Ended-->


                            <div class="tab-pane" id="schedule" role="tabpanel">
                                <div class="card border-none">
                                    <div class="card-body border-none">
                                        <div class="tab-content  campaign">


                                            <div class="row mt-4">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="d-flex justify-content-around px-2x">
                                                        <h5> Available Resources</h5>
                                                        <button class="btn btn-primary">HELP ME DECIDE </button>

                                                    </div>
                                                    <div class="col-lg-12 col-md-12 ">
                                                        <div class="table-responsive">
                                                            <table id="datatable-buttons"
                                                                class="table  dt-responsive nowrap w-100">
                                                                <thead>
                                                                    <tr>
                                                                        <th> Emloyees</th>
                                                                        <th class="right"> Hrs</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Alex Fay </td>
                                                                        <td class="right"> 0.00 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Cahit Tastan </td>
                                                                        <td class="right"> 0.00 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Darryl Bean </td>
                                                                        <td class="right"> 0.00 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>David Boon </td>
                                                                        <td class="right"> 0.00 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>John Doe </td>
                                                                        <td class="right"> 0.00 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Albert Methews </td>
                                                                        <td class="right"> 0.00 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Hasan Khalid </td>
                                                                        <td class="right"> 0.00 </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gary Pamphlet </td>
                                                                        <td class="right"> 0.00 </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-6">
                                                            <div class="d-flex justify-content-between px-2">
                                                                <h5> Scheduled Resources</h5>
                                                                <p> <b>Act Time: </b>0.00<b> Est Time: </b>0.00 </p>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-6 mt=2">

                                                            <div class="table-responsive">
                                                                <table id="datatable-buttons"
                                                                    class="table  dt-responsive nowrap w-100">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Employees Date </th>
                                                                            <th>No Hours </th>
                                                                            <th>Start Time </th>
                                                                            <th>Finish Time </th>
                                                                            <th>Cost </th>
                                                                            <th>Action </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr>
                                                                            <td colspan="6">
                                                                                No resources have been scheduled to this
                                                                                cost centre
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-6 mt-2">
                                                            <div>
                                                                <div class="mapouter">
                                                                    <div class="gmap_canvas"><iframe width="100%"
                                                                            height="500" id="gmap_canvas"
                                                                            src="https://maps.google.com/maps?q=england&t=&z=10&ie=UTF8&iwloc=&output=embed"
                                                                            frameborder="0" scrolling="no"
                                                                            marginheight="0"
                                                                            marginwidth="0"></iframe><br>
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

                                </div>
                            </div>
                            <!--Schedule Tab Pane Ended-->


                            <div class="tab-pane" id="assets" role="tabpanel">
                                <div class="card-body">
                                    <div class="card border-none">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-5">
                                                <div>
                                                    <div class="mt-4">
                                                        <label for="example-text-input" class="form-label">Add
                                                            Assets</label> <br>
                                                        <!-- <textarea name="" id="" cols="140" rows="2"></textarea> -->
                                                        <input class="form-control" type="text" id="example-text-input">

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-5">
                                                <div>
                                                    <div class="mt-4">
                                                        <label for="example-text-input" class="form-label">Add Entire
                                                            Client Asset Type</label> <br>
                                                        <select class="form-select">
                                                            <option selected disabled>Select</option>
                                                            <option>Option 1</option>
                                                            <option>Option 2</option>
                                                            <option>Option 3</option>

                                                        </select>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mt-4">

                                                <div class="mt-4">
                                                    <button class="btn btn-primary">Add Assets </button>
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


        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div>
</div>
<!-- container-fluid -->
</div>
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


var pieColors = getChartColorsArray("#pie_chart"),
    options = {
        chart: {
            height: 320,
            type: "pie"
        },
        series: [100],
        labels: ["No of Data"],
        colors: pieColors,
        legend: {
            show: !0,
            position: "bottom",
            horizontalAlign: "center",
            verticalAlign: "middle",
            floating: !1,
            fontSize: "14px",
            offsetX: 0,
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                    height: 240
                },
                legend: {
                    show: !1
                }
            },
        }, ],
    };
(chart = new ApexCharts(
    document.querySelector("#pie_chart"),
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
    window.location.href  = "index.php";
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