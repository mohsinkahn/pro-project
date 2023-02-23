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

.card-body {
    padding: 5px !important;
}

.mdi-alert {
    color: red;
    font-size: medium
}

.mdi-check-bold {
    font-size: medium;
}

.mdi-progress-star {
    color: blue;
    /* font-size: medium; */

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
                                            <a class="nav-link active" data-bs-toggle="tab" href="#cat" role="tab"
                                                id="sms">
                                                <span class=" d-sm-block">Catalogue</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#build" role="tab" id="sms">
                                                <span class=" d-sm-block">Pre Builds</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#takeoff" role="tab"
                                                id="sms">
                                                <span class=" d-sm-block">Take Off Templates </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#stock" role="tab" id="sms">
                                                <span class=" d-sm-block">Stock </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>



                    <div class="card-body border-none">
                        <div class="tab-content text-muted campaign">
                            <div class="tab-pane active" id="cat" role="tabpanel">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-10 col-12">
                                                    <form class="app-search d-lg-block">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control w-100"
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
                                                        <td>ADI - February 2023</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Baldwin Boxall - February 2023</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gent - January 2023</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mayflex - February 2023</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kentec - February 2023</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Orisec - January 2023</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cameo - Radial Wired - February 2023
                                                        </td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cameo - Loop Wired - February 2023</td>

                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
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
                                                            <input type="text" class="form-control w-100"
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

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>WC Alarm Installtion</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Access Installtion</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CCTV Installation</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intruder Alarms Installation</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Entrotec</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Door Holders</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Monitoring</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
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



                            <div class="tab-pane" id="takeoff" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-header">

                                            <form class="app-search d-lg-block">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control w-100"
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


                                                    <tr>
                                                        <td> Fire Alarms </td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Disabled Systems</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Access Control</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CCTV</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Intruder Alarms</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Install</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Data</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Monitoring</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kudos - Access Control Prelim</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kudos - CCTV Prelim</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kudos - CCTV Update</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kudos - Intruder Alarm Prelim</td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
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

                            <div class="tab-pane" id="stock" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">


                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-md-10 col-12">
                                                    <form class="app-search d-lg-block">
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control w-100"
                                                                placeholder="Search...">
                                                            <button class="btn" type="button"><i
                                                                    class="bx bx-search-alt align-middle"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-2 col-12">
                                                    <a href="#" data-bs-toggle="modal" style="margin-top:15px"
                                                        data-bs-target=".create-storage"
                                                        class="btn btn-primary w-100">Create
                                                        Storage Device </a>

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
                                                        <th>Storage Name</th>
                                                        <th class="text-center">Default Device</th>
                                                        <th class="right">Actions </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> Blue Container</td>
                                                        <td> </td>
                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gary</td>
                                                        <td class="text-center"> <i
                                                                class="mdi mdi-check-bold text-success"></i> </td>

                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cahit Van</td>
                                                        <td> </td>

                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td> Blue Container</td>

                                                        <td class="text-center"> <i
                                                                class="mdi mdi-check-bold text-success"></i> </td>


                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gary</td>
                                                        <td> </td>

                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cahit Van</td>

                                                        <td> </td>

                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gray</td>

                                                        </td>
                                                        <td class="text-center"> <i
                                                                class="mdi mdi-check-bold text-success"></i> </td>


                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
                                                                <option>Options</option>
                                                                <option>View Group</option>

                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cahit Van</td>

                                                        <td> </td>

                                                        <td class="right">

                                                            <select class="form-select form-select-sm w-25 float-end">
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
            <div class="modal-header  border-bottom-0">
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

<!-- Create Storage MODAL -->
<div class="modal fade create-storage" id="group" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header  border-bottom-0">
                <h5 class="modal-title" id="modal-title">Create Storage Device</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>

            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <div>
                            <label class="form-label">Storage Device Name</label>
                            <input class="form-control" placeholder="Insert Storage Device Name" type="text"
                                name="title" id="event-title" required="" value="">

                        </div>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <div class=" mt-2">

                            <span> <input type="checkbox"> </input> Default Device </span>
                        </div>
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
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-3 px-4 border-bottom-0">
                <h5 class="modal-title" id="modal-title">Details</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>

            </div>

        </div> <!-- end modal-content-->
    </div> <!-- end modal dialog-->
</div>
<!-- end modal-->





<?php require_once('footer.php') ?>