<?php require_once('header.php') ?>


<style>
.dt-buttons {
    display: block !important;
}

.btn-group {
    display: none;
}

.dz-message {
    /* border : 2px solid red; */
    width: max-content;
    text-align: center;
    margin-top: 50px
}

a {
    color: white
}

.w-md {
    margin-left: 5px;
}
.cal:hover{
    background-color: #D3d8d8 !important;
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
                                <h4 class="card-title mb-0">Add Project</h4>
                            </div>
                            <div class="col-md-4 col-6" style="text-align:right">
                                <!-- <a href="cost_center.php" class="btn btn-primary float-end" >Next</a> -->
                                <a href="job_next.php"> <button class="btn btn-primary w-md"> Next</button></a>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">


                                            <label for="choices-single-default" class="form-label ">Client</label>
                                            <a class="text-primary" style="float:right" href="addclient.php">Create
                                                New</a>
                                            <select class="form-control" data-trigger="" name="choices-single-default"
                                                id="choices-single-default" placeholder="Select Name">
                                                <option selected disabled>Select Client</option>
                                                <option value="Choice 1">Albert</option>
                                                <option value="Choice 2">Henry</option>
                                                <option value="Choice 3">Alex</option>
                                            </select>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label ">Site</label>
                                                <a class="text-primary" style="float:right"
                                                    href="addsite.php">Create New</a>
                                                <select class="form-control" data-trigger=""
                                                    name="choices-single-default" id="choices-single-default"
                                                    placeholder="Select Site">
                                                    <option selected disabled>Select Site</option>
                                                    <option value="Choice 1">Harrington Mews</option>
                                                    <option value="Choice 2">South Town</option>
                                                    <option value="Choice 3">Ontario</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Job Name <small>
                                                        (Optional)</small> </label>
                                                <input class="form-control" type="text" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">
                                                    Cost Centre</label>
                                                <select class="form-select ">
                                                    <option selected disabled>Not Selected</option>
                                                    <option>ABC Cost Centre</option>
                                                    <option>ABC Cost Centre</option>
                                                    <option>ABC Cost Centre</option>
                                                    <option>ABC Cost Centre</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Primary Client
                                                    Contact</label>
                                                <br>
                                                <!-- <textarea name="" id="" cols="140" rows="2"></textarea> -->
                                                <input class="form-control" type="text" id="example-text-input">

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">
                                                    Salesperson</label>
                                                <select class="form-select ">
                                                    <option selected disabled>Not Selected</option>
                                                    <option>Albert</option>
                                                    <option>John</option>
                                                    <option>Henry</option>


                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">
                                                    Sales Person</label>
                                                <select class="form-select ">
                                                    <option selected disabled>Not Selected</option>
                                                    <option>Albert</option>
                                                    <option>John</option>
                                                    <option>Henry</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">
                                                    Project Manager</label>
                                                <select class="form-select ">
                                                    <option selected disabled>Not Selected</option>
                                                    <option>Albert</option>
                                                    <option>John</option>
                                                    <option>Henry</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">
                                                    Technicians</label>
                                                <select class="form-select ">
                                                    <option selected disabled></option>
                                                    <option>Albert</option>
                                                    <option>John</option>
                                                    <option>Henry</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div>
                                            <div class="mb-3">
                                                <div id="ckeditor-classic"></div>

                                            </div>

                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">

                                    <div>
                                        <div class="card-header  align-items-center d-flex">

                                            <div class="flex-shrink-0">
                                                <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs"
                                                    role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active " data-bs-toggle="tab" href="#map" role="tab"
                                                            id="sms">

                                                            <span class=" d-sm-block">Map</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link " data-bs-toggle="tab"
                                                            href="#available" role="tab" id="sms">

                                                            <span class=" d-sm-block">Availability</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="border-none">
                                                <div class="tab-content text-muted campaign">
                                                    <div class="tab-pane active" id="map" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-12">

                                                                <div>
                                                                    <div class="mapouter">
                                                                        <div class="gmap_canvas"><iframe width="100%"
                                                                                height="700" id="gmap_canvas"
                                                                                src="https://maps.google.com/maps?q=england&t=&z=10&ie=UTF8&iwloc=&output=embed"
                                                                                frameborder="0" scrolling="no"
                                                                                marginheight="0"
                                                                                marginwidth="0"></iframe><br>
                                                                            <style>
                                                                            .mapouter {
                                                                                position: relative;
                                                                                text-align: right;
                                                                                height: 700px;
                                                                                width: 100%;
                                                                            }
                                                                            </style>
                                                                            <style>
                                                                            .gmap_canvas {
                                                                                overflow: hidden;
                                                                                background: none !important;
                                                                                height: 700px;
                                                                                width: 100%;
                                                                            }
                                                                            </style>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane " id="available" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <h4 class="card-title">Filter Options</h4>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 mt-4">
                                                                <div>
                                                                    <div class="mb-3">
                                                                        <label for="example-text-input"
                                                                            class="form-label">Job Duration
                                                                            <small>(hrs)</small> </label>
                                                                        <input class="form-control" type="text"
                                                                            id="example-text-input" value="0.5">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 mt-4">
                                                                <div>
                                                                    <div class="mb-3">
                                                                        <label for="example-text-input"
                                                                            class="form-label">Zone </label>
                                                                        <input class="form-control" type="text"
                                                                            id="example-text-input">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row mt-2">
                                                            <div class="col-lg-12">
                                                                <h4 class="card-title">Preferred Time</h4>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 mt-2">
                                                                <div>
                                                                    <div class="mb-3">

                                                                        <input type="text" class="form-control"
                                                                            id="datepicker-range">
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="table-responsive">
                                                                    <table class="table  dt-responsive nowrap w-100">
                                                                        <thead>
                                                                            <tr>
                                                                                <th></th>
                                                                                <th> <small> Wed 22nd Feb</small> </th>

                                                                                <th> <small> Thur 23rd Feb</small></th>
                                                                                <th> <small>Fri 24th Feb</small> </th>
                                                                                <th> <small> Sat 25th Feb </small></th>
                                                                                <th> <small> Sun 26th Feb</small></th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>PM</td>
                                                                                <td><span class="text-success">9
                                                                                        Staff</span><small>(From
                                                                                        9.30am)</small></td>
                                                                                <td><span class="text-success">9
                                                                                        Staff</span><small>(From
                                                                                        6.00am)</small></td>
                                                                                <td><span class="text-success">9
                                                                                        Staff</span><small>(From
                                                                                        6.00am)</small></td>
                                                                                <td><span class="text-success">1
                                                                                        Staff</span><small>(From
                                                                                        8.00am)</small></td>
                                                                                <td><span class="text-success">1
                                                                                        Staff</span><small>(From
                                                                                        8.00am)</small></td>


                                                                            </tr>
                                                                            <tr>
                                                                                <td>AM</td>
                                                                                <td><span class="text-success">9
                                                                                        Staff</span><small>(From
                                                                                        9.30am)</small></td>
                                                                                <td><span class="text-success">9
                                                                                        Staff</span><small>(From
                                                                                        6.00am)</small></td>
                                                                                <td><span class="text-success">9
                                                                                        Staff</span><small>(From
                                                                                        6.00am)</small></td>
                                                                                <td><span class="text-success">1
                                                                                        Staff</span><small>(From
                                                                                        8.00am)</small></td>
                                                                                <td><span class="text-success">1
                                                                                        Staff</span><small>(From
                                                                                        8.00am)</small></td>


                                                                            </tr>

                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="row mt-2">
                                                            <div class="col-lg-12">
                                                                <h4 class="card-title">Technicians(s) to Schedule</h4>
                                                            </div>


                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="table-responsive">
                                                                    <table class="table  dt-responsive nowrap w-100">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Technican</th>
                                                                                <th>Travel Distance <button
                                                                                        class="bg-light cal border-0 text-dark">Calculate</button>
                                                                                </th>
                                                                                <th>Start Time</th>
                                                                                <th>Finish Time</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Time Burrow</td>
                                                                                <td>
                                                                                    <b> Home</b> <br>
                                                                                    <small>Distance not calculated
                                                                                        yet</small>
                                                                                </td>
                                                                                <td>
                                                                                    <select
                                                                                        class="form-select form-select-sm">
                                                                                        <option>09:30</option>
                                                                                        <option >10:00</option>
                                                                                        <option >10:30</option>
                                                                                        <option >11:00</option>
                                                                                        <option >11:30</option>
                                                                                        <option >12:00</option>

                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <select
                                                                                        class="form-select form-select-sm">
                                                                                        <option>10:00</option>
                                                                                        <option >10:30</option>
                                                                                        <option >11:00</option>
                                                                                        <option >11:30</option>
                                                                                        <option >12:00</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <button
                                                                                        class="btn btn-primary">Select</button>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td>Simon Woodrow</td>
                                                                                <td>
                                                                                    <b> Home</b> <br>
                                                                                    <small>Distance not calculated
                                                                                        yet</small>
                                                                                </td>
                                                                                <td>
                                                                                    <select
                                                                                        class="form-select form-select-sm">
                                                                                        <option>09:30</option>
                                                                                        <option >10:00</option>
                                                                                        <option >10:30</option>
                                                                                        <option >11:00</option>
                                                                                        <option >11:30</option>
                                                                                        <option >12:00</option>

                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <select
                                                                                        class="form-select form-select-sm">
                                                                                        <option>10:00</option>
                                                                                        <option >10:30</option>
                                                                                        <option >11:00</option>
                                                                                        <option >11:30</option>
                                                                                        <option >12:00</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <button
                                                                                        class="btn btn-primary">Select</button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Gary Pamphlet</td>
                                                                                <td>
                                                                                    <b> Home</b> <br>
                                                                                    <small>Distance not calculated
                                                                                        yet</small>
                                                                                </td>
                                                                                <td>
                                                                                    <select
                                                                                        class="form-select form-select-sm">
                                                                                        <option>09:30</option>
                                                                                        <option >10:00</option>
                                                                                        <option >10:30</option>
                                                                                        <option >11:00</option>
                                                                                        <option >11:30</option>
                                                                                        <option >12:00</option>

                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <select
                                                                                        class="form-select form-select-sm">
                                                                                        <option>10:00</option>
                                                                                        <option >10:30</option>
                                                                                        <option >11:00</option>
                                                                                        <option >11:30</option>
                                                                                        <option >12:00</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <button
                                                                                        class="btn btn-primary">Select</button>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Rory Meagher</td>
                                                                                <td>
                                                                                    <b> Home</b> <br>
                                                                                    <small>Distance not calculated
                                                                                        yet</small>
                                                                                </td>
                                                                                <td>
                                                                                    <select
                                                                                        class="form-select form-select-sm">
                                                                                        <option>09:30</option>
                                                                                        <option >10:00</option>
                                                                                        <option >10:30</option>
                                                                                        <option >11:00</option>
                                                                                        <option >11:30</option>
                                                                                        <option >12:00</option>

                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <select
                                                                                        class="form-select form-select-sm">
                                                                                        <option>10:00</option>
                                                                                        <option >10:30</option>
                                                                                        <option >11:00</option>
                                                                                        <option >11:30</option>
                                                                                        <option >12:00</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td>
                                                                                    <button
                                                                                        class="btn btn-primary">Select</button>
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
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <?php require_once('footer.php') ?>



    <script>
    flatpickr("#datepicker-range", {
            mode: "range",
            defaultDate: new Date()
        }),
        flatpickr("#datepicker-timepicker", {
            enableTime: !0,
            noCalendar: !0,
            dateFormat: "H:i",
            defaultDate: new Date(),
        }),
        flatpickr("#datepicker-inline", {
            inline: !0,
            defaultDate: new Date()
        });

    function checkData(event) {
        console.log(event.target.value)
        if (event.target.value === 'John Doe') {
            $("#site").attr("disabled", false)
            $("#site").val('Pakistan')
        }
    }
    </script>