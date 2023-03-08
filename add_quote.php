<?php require_once('header.php') ?>

<link rel="stylesheet" href="assets/css/jquery.steps.css" type="text/css">
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>





<script src="assets/js/jquery-steps/jquery.steps.js"></script>
<script>
$(document).ready(function() {
    $("#wizard").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical",
        onStepChanging:function (event, currentIndex, newIndex) {
            console.log(currentIndex);
            console.log(newIndex);
            if(currentIndex == 2 || newIndex == 2){
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: false,
                    theme: "light2", //"light1", "dark1", "dark2"
                    title: {
                        text: "Profit"
                    },
                    data: [{
                        type: "funnel",
                        indexLabelPlacement: "inside",
                        indexLabelFontColor: "white",
                        toolTipContent: "<b>{label}</b>: {y} <b>({percentage}%)</b>",
                        indexLabel: "{label} ({percentage}%)",
                        dataPoints: [
                            {
                                y: 237160,
                                label: "Jan - June"
                            },
                            {
                                y: 207200,
                                label: "July - Dec"
                            }
                            
                        ]
                    }]
                });
                calculatePercentage();
                chart.render();

                function calculatePercentage() {
                    var dataPoint = chart.options.data[0].dataPoints;
                    var total = dataPoint[0].y;
                    for (var i = 0; i < dataPoint.length; i++) {
                        if (i == 0) {
                            chart.options.data[0].dataPoints[i].percentage = 100;
                        } else {
                            chart.options.data[0].dataPoints[i].percentage = ((dataPoint[i].y / total) * 100).toFixed(2);
                        }
                    }
                }
            }
            return true;
        }

    });
});
</script>


<style>
.canvasjs-chart-container {
    /* position: relative !important;  */
    /* width : 100% !important; */

}

.canvasjs-chart-credit {
    display: none
}

.wizard>.actions a {
    background: #575656 !important;

}

.wizard>.steps .current a {
    background: #575656 !important;
}

.wizard>.steps .done a {
    background: #999aa2 !important;
}

.wizard>.content {

    min-height: 50rem;
    overflow-x: scroll;
    overflow-y: scroll;
    background: white;
}

.wizard>.content>.body {
    padding: 0px 21px !important;
    margin: 0% !important
}

.wizard.vertical>.content {
    display: inline;
    float: left;
    margin: 0px 1.5% 0.5em 0.5%;
    width: 83%;
}

.wizard.vertical>.steps {
    display: inline;
    float: left;
    width: 15%;
}

.wizard>.content>.body {
    width: 100%;
}

.final-sum {
    background-color: #eeeeee;
}

.bx-dots-vertical-rounded {
    color: #eeeeee;
}

.right {
    text-align: right;
}

#spline_area {
    /* background-color:red; */
}

.nav-tabs-custom .nav-item .nav-link.active {
    color: #5156be;
    background: transparent;
}

.card-body {
    padding: 15px !important;
}

.card-title {
    margin-bottom: 0;
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

.clickable-row:hover {
    background-color: #EFF0F1;
    cursor: pointer;
}

#billable {
    display: none
}

#sub_build {
    display: none;
}

.dropdown-menu>a {
    cursor: pointer;
}

.mr-2 {
    margin-right: 10px;
}

#sub_take,
#sub_take2,
#sub_cat {
    display: none
}

.nav-tabs-custom .nav-item .nav-link.active {
    background-color: #575656 !important;
    color: #fbfaff !important;
    padding-bottom: 5px !important;
    padding-top: 5px !important;
    border-top-left-radius: 0.3rem;
    border-top-right-radius: 0.3rem;


}

.nav-tabs-custom .nav-item {
    padding-top: 5px;
    padding-bottom: 1px;
}

.nav-tabs-custom.card-header-tabs .nav-link {
    padding: 0.25rem 1rem;
}

.first-nav:hover {
    color: black;
    font-weight: bold
}

ul>li {
    list-style-type: none
}

#wizard {
    padding-bottom: 80px !important;
    margin-top: 100px
}
</style>





<div class="content">


    <div id="wizard">
        <h2>Add Quote</h2>
        <section>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8 col-6">
                                    <h4 class="card-title mb-0">Add Quote</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="choices-single-default" class="form-label ">Client</label>
                                                <a class="create-new" style="float:right" href="addclient.php">Create
                                                    New</a>
                                                <select class="form-select" data-trigger=""
                                                    name="choices-single-default" id="choices-single-default"
                                                    placeholder="Add Name">
                                                    <option selected disabled>Add Customer</option>
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
                                                    <a class="create-new" style="float:right" href="addsite.php">Create
                                                        New</a>
                                                    <select class="form-select" data-trigger=""
                                                        name="choices-single-default" id="choices-single-default"
                                                        placeholder="Add Site">
                                                        <option selected disabled>Add Site</option>
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
                                                    <label for="example-text-input" class="form-label">Quote
                                                        Name</label>
                                                    <input class="form-control" type="text" id="example-text-input">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Primary Customer
                                                        Contact</label>
                                                    <input class="form-control" type="text" id="example-text-input">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Site
                                                        Contact</label>
                                                    <br>
                                                    <!-- <textarea name="" id="" cols="140" rows="2"></textarea> -->
                                                    <input class="form-control" type="text" id="example-text-input">

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div>
                                                <div class="mapouter">
                                                    <div class="gmap_canvas"><iframe width="100%" height="250"
                                                            id="gmap_canvas"
                                                            src="https://maps.google.com/maps?q=england&t=&z=10&ie=UTF8&iwloc=&output=embed"
                                                            frameborder="0" scrolling="no" marginheight="0"
                                                            marginwidth="0"></iframe><br>
                                                        <style>
                                                        .mapouter {
                                                            position: relative;
                                                            text-align: right;
                                                            height: 250px;
                                                            width: 100%;
                                                        }
                                                        </style>
                                                        <style>
                                                        .gmap_canvas {
                                                            overflow: hidden;
                                                            background: none !important;
                                                            height: 250px;
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

                            <div class="row mt-4">
                                <div class="col-lg-4">
                                    <div>
                                        <div class="mb-3">
                                            <label class="form-label">Sales Person</label>
                                            <select class="form-select">
                                                <option selected disabled>Not Selected</option>

                                                <option>Henry</option>
                                                <option>Albert</option>
                                                <option>John</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="mb-3">
                                            <label class="form-label">Project Manager</label>
                                            <select class="form-select">
                                                <option selected disabled>Not Selected</option>
                                                <option>Henry</option>
                                                <option>Albert</option>
                                                <option>John</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="mb-3">
                                            <label class="form-label">Technicians</label>
                                            <input class="form-control" type="text" id="technician">

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
            </div>
        </section>
        <h2>Primary Discipline</h2>
        <section>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col-md-8 col-6">
                                    <h4 class="card-title">Primary Discipline</h4>
                                </div>
                                <!-- <div class="col-md-4 col-6">
                                <a href="#" class="btn btn-primary float-end" >Next</a>
                            </div> -->
                            </div>


                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-5">
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Name</label>
                                            <input class="form-control" type="text" id="name">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Description <small> <em>
                                                        (
                                                        Optional )</em></small></label>
                                            <input class="form-control" type="text" id="desc">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div>
                                        <div class=" text-align-right" style="margin-top:28px">

                                            <button onClick="addData()" class="btn btn-primary w-100">Add</button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card mt-4">
                                <div class="card-body head-back">
                                    <div id="space">
                                        <div class="row align-items-center">
                                            <div class="col-lg-8 col-6">
                                                <span>
                                                    <h4 class="mb-0">John Doe</h4>
                                                </span>
                                            </div>
                                            <div class="col-lg-4 col-6">

                                                <div style="text-align:right">

                                                    <select class="form-select  w-100">
                                                        <option>Options</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="invoice-data" class="row mt-4 align-items-center">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Discipline</label>
                                        <select class="form-select">
                                            <option selected disabled>0 Selected</option>
                                            <option>ABC Center</option>
                                            <option>ABC Center</option>
                                            <option>ABC Center</option>
                                        </select>
                                    </div>


                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Discipline Name
                                            <small><em>Optional</em></small></label>
                                        <input class="form-control" type="text" id="cost">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div>
                                        <div class=" text-align-right" style="margin-top:13px">
                                            <button class="btn btn-primary w-100">Add</button>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div style="text-align:right;margin-top:13px;">
                                        <select class="form-select  w-100 float-end">
                                            <option>Options</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-4 mt-3 mb-3">
                                    <span style="margin-left:4px">
                                        <input type="checkbox">
                                        <a href="#"> <span class="prim-cost-det" id="prim-cost-det"></span>John Doe</a>
                                    </span>
                                </div>
                                <div class="col-lg-2 col-4 mt-3 mb-3">
                                    <span>
                                        Total :£0.00
                                    </span>
                                </div>
                                <div class="col-lg-2  col-4 mt-3 mb-3">

                                    <div style="text-align:right">
                                        <select class="form-select  w-100">
                                            <option>Options</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-2">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered dt-responsive nowrap w-100">
                                                <tbody>
                                                    <th> <input type="checkbox" name="" id=""> Select All</th>
                                                    <th>Sub Total:</th>
                                                    <td>£0.00</td>
                                                    <th>VAT:</th>
                                                    <td>£0.00</td>
                                                    <th>Total:</th>
                                                    <td>£0.00</td>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
        </section>
        <h2> Details</h2>
        <section>

            <div class="card border-none">
                <div class="card-header mt-2 align-items-center pb-0">
                    <div>
                        <ul class="nav justify-content-center nav-tabs-custom rounded card-header-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#summary" role="tab" id="sms">
                                    <span class=" d-sm-block">Summary</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#info" role="tab" id="sms">
                                    <span class=" d-sm-block">Info</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab" id="sms">
                                    <span class=" d-sm-block">Settings </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="card-body border-none">
                    <div class="tab-content  campaign">
                        <div class="tab-pane active" id="summary" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">

                                    <div class="mt-2 d-flex flex-wrap px-1  mb-3 gap-3">
                                        <label><b class="text-dark">Client:</b> Jetha
                                            Liz</label>
                                        <label><b class="text-dark">Site:</b> Hariington
                                            Mews</label>
                                        <label><b class="text-dark">Quote:</b> £ 0.00</label>

                                    </div>
                                </div>
                                <hr />

                                <div class="col-lg-5 col-md-5">
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
                                                    <table class="table  dt-responsive nowrap w-100">
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
                                                    <table class="table parts-table dt-responsive nowrap w-100">
                                                        <thead>
                                                            <tr>
                                                                <th>Item</th>
                                                                <th class="right">Estimate</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Material Cost</td>
                                                                <td class="right">£ 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Material Markup</td>
                                                                <td class="right">£ 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Resources Cost</td>
                                                                <td class="right">£ 0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Resources Markup</td>
                                                                <td class="right">£ 0.00</td>
                                                            </tr>

                                                            <tr>
                                                                <td>VAT</td>
                                                                <td class="right">£ 0.00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-lg-7 col-md-7">
                                    <div class="card">
                                        <div class="card-header align-items-center d-flex">

                                            <h4 class="card-title mb-0 flex-grow-1">Estimate
                                                Breakdown</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mt-4 px-2">
                                                        <div id="chartContainer"
                                                            style="height: 300px; width: 100% !important">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
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
                                                        <i class="mdi mdi-alert"></i> <span class="text-dark">No one is
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
                                                            <i class="mdi mdi-progress-star"></i>
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
                                            <label class="form-label">Discipline</label>
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
                                            <label for="example-text-input" class="form-label">Discipline Name</label>
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Site</label>
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Order No</label>
                                            <input class="form-control" type="text" id="example-text-input">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Start Date</label>
                                            <input class="form-control" type="date" id="example-text-input">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">End Date</label>
                                            <input class="form-control" type="date" id="example-text-input">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-3" style="padding-top:45px">
                                    <div>
                                        <div>

                                            <input type="checkbox">
                                            <label for="example-text-input" class="form-label">Auto adjust based on
                                                tasks</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div>
                                        <div>

                                            <label for="example-text-input" class="form-label">Default Discipline
                                                Account</label>

                                            <p class="text-dark mt-2">Sales</p>




                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>
                                        <div>

                                            <label for="example-text-input" class="form-label">
                                                Discipline Type
                                            </label>
                                            <br />


                                            <p class="text-dark mt-2" id="charge"><input type="radio" name="charge"
                                                    for="charge" style="margin-right:3px;display:inline">Chargeable</p>
                                            <p class="text-dark mt-2" id="option"><input type="radio" name="charge"
                                                    for="option" style="margin-right:6px;display:inline">Optional <input
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
                                            <button type="submit" class="btn btn-primary w-md">Cancel</button>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane" id="info" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">

                                    <div class="mt-2 d-flex flex-wrap px-1  mb-3 gap-3">
                                        <label><b class="text-dark">Client:</b> Jetha
                                            Liz</label>
                                        <label><b class="text-dark">Site:</b> Hariington
                                            Mews</label>
                                        <label><b class="text-dark">Quote:</b> £ 0.00</label>

                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <h4>Description </h4>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div>
                                                <div id="ckeditor-classic"></div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <h4 class="mt-2"> Notes</h4>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div>
                                            <div id="ckeditor-classic2"></div>

                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>
            </div>


        </section>

        <h2>Parts & Labour</h2>
        <section>
            <div class="tab-pane" id="parts" role="tabpanel">

                <div>
                    <div class="card border-none">
                        <div class="card-header mt-2 align-items-center pb-0">

                            <div>
                                <ul class="nav justify-content-center nav-tabs-custom rounded card-header-tabs"
                                    role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#bill" role="tab"
                                            id="sms">
                                            <span class=" d-sm-block">Billable</span>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#build" role="tab" id="sms">
                                            <span class=" d-sm-block">Templates </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#cat" role="tab" id="sms">
                                            <span class=" d-sm-block">Catalogue </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#items" role="tab" id="sms">
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
                                            <div class="table-responsive" style="overflow:auto!important">
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
                                                                <select class="form-select form-select-sm">
                                                                    <option>Fit Time</option>
                                                                </select>
                                                            </td>
                                                            <td>£ 50 <input type="checkbox"> </td>
                                                            <td> 60 % </td>
                                                            <td>£ 80.00 <input type="checkbox"> </td>
                                                            <td>
                                                                <input type="text" value="1" class="form-control" />
                                                            </td>
                                                            <td>
                                                                £ 80.00

                                                                <div class="btn-group me-1 mt-2 float-end">
                                                                    <button
                                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>

                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item">Options</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input type="checkbox"> 112 CCTV
                                                                Installation -
                                                                Labour & Materials </td>
                                                            <td> 96
                                                                <select class="form-select form-select-sm">
                                                                    <option>Fit Time</option>
                                                                </select>
                                                            </td>
                                                            <td>£ 65 <input type="checkbox"> </td>
                                                            <td> 60 % </td>
                                                            <td>£ 40.00 <input type="checkbox"> </td>
                                                            <td>
                                                                <input type="text" value="1" class="form-control" />
                                                            </td>
                                                            <td>
                                                                £ 40.00
                                                                <div class="btn-group me-1 mt-2 float-end">
                                                                    <button
                                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>

                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item">Options</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input type="checkbox"> 112 CCTV
                                                                Installation -
                                                                Switch </td>
                                                            <td> 48
                                                                <select class="form-select form-select-sm">
                                                                    <option>Fit Time</option>
                                                                </select>
                                                            </td>
                                                            <td>£ 45 <input type="checkbox"> </td>
                                                            <td> 60 % </td>
                                                            <td>£ 72.00 <input type="checkbox"> </td>
                                                            <td>
                                                                <input type="text" value="1" class="form-control" />
                                                            </td>
                                                            <td>
                                                                £ 72.00

                                                                <div class="btn-group me-1 mt-2 float-end">
                                                                    <button
                                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>

                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item">Options</a>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td> <input type="checkbox"> 112 CCTV
                                                                Installation -
                                                                Network </td>
                                                            <td> 57 <select class="form-select form-select-sm">
                                                                    <option>Fit Time</option>
                                                                </select>
                                                            </td>
                                                            <td>£ 30 <input type="checkbox"> </td>
                                                            <td> 66.5 % </td>
                                                            <td>£ 78.00 <input type="checkbox"> </td>
                                                            <td>
                                                                <input type="text" value="1"
                                                                    class="form-control w-md" />
                                                            </td>
                                                            <td>
                                                                £ 78.00
                                                                <div class="btn-group me-1 mt-2 float-end">
                                                                    <button
                                                                        class="btn btn-primary btn-sm dropdown-toggle"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        aria-expanded="false">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>

                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item">Options</a>
                                                                    </div>
                                                                </div>
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

                                                        <b> <label for="choices-single-default" class="form-label ">Call
                                                                Out / Service
                                                                Fee</label></b>
                                                        <select class="form-control" data-trigger=""
                                                            name="choices-single-default" id="choices-single-default">
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
                                                        <button type="submit" class="btn btn-primary w-100">ADD</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-6">
                                                    <div class="mt-2 mb-3">
                                                        <label for="example-text-input" class="form-label">Supplier
                                                        </label>
                                                        <input class="form-control" type="text" id="example-text-input"
                                                            placeholder="Supplier">
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-6">
                                                    <div class="mt-2">
                                                        <label for="example-text-input" class="form-label">Supplier
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
                                                        <b><label for="choices-single-default" class="form-label ">
                                                                Labour</label></b>
                                                        <select class="form-control" data-trigger=""
                                                            name="choices-single-default" id="choices-single-default">
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
                                                        <button type="submit" class="btn btn-primary w-100">ADD</button>
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
                                                <h4 class="head-back">Billable Summary</h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 mt-4" style="padding-left:10px">
                                            <span class="w-md d-flex justify-content-between mt-2">
                                                <p>Material Cost</p>
                                                <p><b>£ 35.00</b></p>
                                            </span>
                                            <span class="w-md d-flex justify-content-between mt-2">
                                                <p>Labour Cost</p>
                                                <p><b>£ 495.00</b></p>
                                            </span>
                                            <span class="w-md d-flex justify-content-between">
                                                <p>Plan & Equipment Cost</p>
                                                <p><b>£ 0.00</b></p>
                                            </span>

                                        </div>
                                        <!-- <div class="col-lg-1"></div> -->
                                        <div class="col-lg-3 mt-4">
                                            <span class="w-md d-flex justify-content-between mt-2">
                                                <p>Material Markup</p>
                                                <p><b>£ 21.00</b></p>
                                            </span>
                                            <span class="w-md d-flex justify-content-between mt-2">
                                                <p>Labour Markup</p>
                                                <p><b>£ 317.00</b></p>
                                            </span>
                                            <span class="w-md d-flex justify-content-between">
                                                <p>Plan & Equipment Markup</p>
                                                <p><b>£ 0.00</b></p>
                                            </span>

                                        </div>
                                        <!-- <div class="col-lg-2"></div> -->
                                        <div class="col-lg-3 mt-4 ">
                                            <div class="final-sum p-2">
                                                <span class="w-md d-flex justify-content-between mt-2">
                                                    <p>Sub-Total</p>
                                                    <p><b>£ 868.00</b></p>
                                                </span>
                                                <span class="w-md d-flex justify-content-between mt-2 ">
                                                    <p>VAT</p>
                                                    <p><b>£ 173.60</b></p>
                                                </span>
                                                <span class="w-md d-flex justify-content-between ">
                                                    <p>Total</p>
                                                    <p><b>£ 1041.60</b></p>
                                                </span>
                                            </div>


                                        </div>
                                    </div>

                                </div>






                                <div class="tab-pane" id="build" role="tabpanel">
                                    <div id="build_par1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
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

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubBuild()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>WC Alarm Installtion</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubBuild()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Access Installtion</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubBuild()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>CCTV Installation</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubBuild()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Intruder Alarms Installation</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubBuild()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Entrotec</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubBuild()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Door Holders</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubBuild()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Monitoring</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubBuild()>View
                                                                                Group</a>
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
                                    <div id="sub_build">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 mt-2">
                                                <div class="page-title-right">
                                                    <ol class="breadcrumb ">

                                                        <li class="breadcrumb-item"><a
                                                                href="javascript: void(0);">Templates
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item active">Fire & Refuge
                                                            Installation</li>
                                                        <li class="breadcrumb-item active">Subgroup</li>

                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="right">
                                                    <button onclick=hideSubBuild() class="btn btn-primary  mr-2"><i
                                                            class="mdi mdi-arrow-left"></i> Go
                                                        Back</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 px-0">
                                                <div style="padding:12px">
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
                                                                data-bs-target=".create-subgroup"
                                                                class="btn btn-primary w-100">Create
                                                                Subgroup
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
                                                        class="table table-bordered dt-responsive nowrap w-100">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Subgroup Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>No subgroups have been created</td>
                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 mt-2">
                                                <div class="page-title-right">
                                                    <ol class="breadcrumb ">
                                                        <li class="breadcrumb-item"><a
                                                                href="javascript: void(0);">Templates
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item active">Fire & Refuge
                                                            Installation</li>
                                                        <li class="breadcrumb-item active">Parts</li>

                                                    </ol>
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
                                                                <th>Part No</th>
                                                                <th>Group Name</th>
                                                                <th>Material Cost</th>
                                                                <th>Sell Price</th>
                                                                <th>Favourite</th>
                                                                <th>Add Quantity</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="clickable-row" data-bs-toggle="modal"
                                                                data-bs-target=".create-sub-build">
                                                                <td>102</td>
                                                                <td>Fire & Refuge Installtion - Labour
                                                                    Only
                                                                </td>
                                                                <td>£0.00</td>
                                                                <td>£72.00</td>
                                                                <td></td>
                                                                <td> <span class="d-flex justify-content-between">
                                                                        <input type="number"
                                                                            class="form-control w-75" />
                                                                        <button
                                                                            class="btn p-2 btn-primary font-size-12">Add
                                                                            Item</button> </span></td>
                                                            </tr>
                                                            <tr class="clickable-row" data-bs-toggle="modal"
                                                                data-bs-target=".create-sub-build">
                                                                <td>101</td>
                                                                <td>Fire & Refuge Installtion - Network
                                                                </td>
                                                                <td>£0.00</td>
                                                                <td>£72.00</td>
                                                                <td></td>
                                                                <td> <span class="d-flex justify-content-between">
                                                                        <input type="number"
                                                                            class="form-control w-75" />
                                                                        <button
                                                                            class="btn p-2 btn-primary font-size-12">Add
                                                                            Item</button> </span></td>



                                                            </tr>
                                                            <tr class="clickable-row" data-bs-toggle="modal"
                                                                data-bs-target=".create-sub-build">
                                                                <td>101</td>
                                                                <td>Fire & Refuge Installtion - Panel
                                                                </td>
                                                                <td>£0.00</td>
                                                                <td>£72.00</td>
                                                                <td></td>
                                                                <td> <span class="d-flex justify-content-between">
                                                                        <input type="number"
                                                                            class="form-control w-75" />
                                                                        <button
                                                                            class="btn p-2 btn-primary font-size-12">Add
                                                                            Item</button> </span></td>


                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="tab-pane" id="cat" role="tabpanel">
                                    <div id="cat_par1">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
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

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubCat()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Baldwin Boxall - February 2023</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubCat()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gent - January 2023</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubCat()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Kentec - February 2023</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubCat()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Orisec - January 2023</td>
                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubCat()>View
                                                                                Group</a>
                                                                        </div>
                                                                    </div>

                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Cameo - Loop Wired - February 2023
                                                                </td>

                                                                <td class="right">

                                                                    <div class="btn-group me-1 mt-2">
                                                                        <button
                                                                            class="btn btn-primary btn-sm dropdown-toggle"
                                                                            type="button" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            <i class="bx bx-dots-vertical-rounded"></i>

                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                onclick=viewSubCat()>View
                                                                                Group</a>
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
                                    <div id="sub_cat">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8 mt-2">
                                                <div class="page-title-right">
                                                    <ol class="breadcrumb ">

                                                        <li class="breadcrumb-item"><a href="javascript: void(0);">
                                                                Catalogue</a>
                                                        </li>
                                                        <li class="breadcrumb-item active">ADI-February
                                                            2023
                                                        </li>
                                                        <li class="breadcrumb-item active">Subgroups
                                                        </li>

                                                    </ol>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="right">
                                                    <button onclick=hideSubCat() class="btn btn-primary  mr-2"><i
                                                            class="mdi mdi-arrow-left"></i> Go
                                                        Back</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 px-0">
                                                <div style="padding:12px">
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
                                                                data-bs-target=".create-subgroup"
                                                                class="btn btn-primary w-100">Create
                                                                Subgroup
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
                                                        class="table table-bordered dt-responsive nowrap w-100">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="2">Subgroup Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>No subgroups have been created</td>
                                                            </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 mt-2">
                                                <div class="page-title-right">
                                                    <ol class="breadcrumb ">
                                                        <li class="breadcrumb-item"><a
                                                                href="javascript: void(0);">Catalogue</a>
                                                        </li>
                                                        <li class="breadcrumb-item active">ADI -
                                                            February
                                                            2023</li>
                                                        <li class="breadcrumb-item active">Parts</li>

                                                    </ol>
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
                                                                <th>Part No</th>
                                                                <th>Group Name</th>
                                                                <th>Stock</th>
                                                                <th>Sell Price</th>
                                                                <th>Favourite</th>
                                                                <th>Add Quantity</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Acess Com D/Rate</td>
                                                                <td>Commissioning ADI Access Day Rate
                                                                </td>
                                                                <td class="text-danger">0(0)</td>
                                                                <td>£560.53</td>
                                                                <td></td>
                                                                <td> <span class="d-flex justify-content-between">
                                                                        <input type="number"
                                                                            class="form-control w-75" />
                                                                        <button
                                                                            class="btn p-2 btn-primary font-size-12">Add
                                                                            Item</button> </span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Acess Com H/Rate</td>
                                                                <td>Commissioning ADI Access Hourly Rate
                                                                </td>
                                                                <td class="text-danger">0(0)</td>
                                                                <td>£72.53</td>
                                                                <td></td>
                                                                <td> <span class="d-flex justify-content-between">
                                                                        <input type="number"
                                                                            class="form-control w-75" />
                                                                        <button
                                                                            class="btn p-2 btn-primary font-size-12">Add
                                                                            Item</button> </span></td>
                                                            </tr>


                                                        </tbody>
                                                    </table>
                                                </div>
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
                                                <table id="datatable-buttons" class="table dt-responsive nowrap w-100">
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

        </section>


    </div>
</div>

<!-- Create Group Event MODAL -->
<div class="modal fade create-group" id="group" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
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

                <div class="modal-footer text-end">
                    <button type="submit" class="btn btn-primary w-md" id="btn-save-event">Save</button>
                    <button type="button" class="btn btn-dark me-1 w-md" data-bs-dismiss="modal">Close</button>

                </div>


            </div>
        </div> <!-- end modal-content-->
    </div> <!-- end modal dialog-->
</div>
<!-- end modal-->

<!-- Create Sub Group Event MODAL -->
<div class="modal fade create-subgroup" id="group" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Create Subgroup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <label class="form-label">Subgroup Name</label>
                            <input class="form-control" placeholder="Insert Subgroup Name" type="text" name="title"
                                id="event-title" required="" value="">

                        </div>
                    </div>

                </div>


                <div class="modal-footer text-end">
                    <button type="submit" class="btn btn-primary w-md" id="btn-save-event">Save</button>
                    <button type="button" class="btn btn-dark me-1 w-md" data-bs-dismiss="modal">Close</button>

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
            <div class="modal-header">
                <h4 class="modal-title" id="modal-title">Details</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>


            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-3">
                        <b>
                            <p class="text-dark"> Type</p>
                        </b>
                        <span> <input onclick="showInvent()" type="radio" name="opt" id="material" /> Material
                            &nbsp;
                        </span>
                        <span> <input onclick="hideInvent()" type="radio" name="opt" id="labour" /> Labour </span>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-3">
                        <b>
                            <p class="text-dark"> Options</p>
                        </b>
                        <span> <input onclick="toggleDiv()" type="checkbox" name="opt" id="billable_check" />
                            Billiable
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

                <div class="modal-footer text-end">
                    <button type="submit" class="btn btn-primary w-md" id="btn-save-event">Save</button>
                    <button type="button" class="btn btn-dark me-1 w-md" data-bs-dismiss="modal">Close</button>

                </div>

            </div>
        </div>

    </div> <!-- end modal-content-->
</div> <!-- end modal dialog-->
<!-- end modal-->
<!-- Create Sub Build MODAL -->
<div class="modal fade create-sub-build" id="group" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pre Builds</a></li>
                        <li class="breadcrumb-item active">Fire & Refuge Installation</li>
                        <li class="breadcrumb-item active">Fire & Refuge Installation - 2 core inc materials</li>

                    </ol>
                </div>
                <!-- <h4 class="modal-title" id="modal-title">Details</h4> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>


            <div class="modal-body">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md-12 col-12">

                            <div>
                                <ul class="nav justify-content-start nav-tabs-custom rounded card-header-tabs mt-1"
                                    role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#modal-details" role="tab"
                                            id="sms">
                                            <span class=" d-sm-block">Details</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#modal-build" role="tab"
                                            id="sms">
                                            <span class=" d-sm-block">Build</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#modal-attach" role="tab"
                                            id="sms">
                                            <span class=" d-sm-block">Attachments </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="tab-content campaign">
                        <!-- Tab panes  |  All Section Pane -->
                        <div class="tab-pane active" id="modal-details" role="tabpanel">
                            <div class="row">
                                <!-- <div class="modal-header">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mt-4 mb-3">
                                            <h4 class="head-back">Details</h4>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-12 col-md-12">
                                    <div class="mb-3">
                                        <div class="mt-4 d-flex flex-wrap px-1  mb-3 gap-5">
                                            <label><b class="text-dark">Name:</b> Fire & Refuge Installation - 2
                                                core
                                                inc materials</label>
                                            <label><b class="text-dark">Part No:</b> 100 </label>
                                            <label><b class="text-dark">Attribute:</b> <input type="checkbox" />
                                                Favourite</label>
                                        </div>
                                        <div class="mt-4 d-flex flex-wrap px-1  mb-3 gap-5">
                                            <label><b class="text-dark">Description:</b> No description
                                                added</label>
                                            <label><b class="text-dark">Notes:</b> No notes added </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="mt-4 mb-3">
                                        <h4 class="head-back">Pricing</h4>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <label><b class="text-dark">Type : </b> Standard Price </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><b class="text-dark">Material </b> </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <label>Cost</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <small> <label><input type="checkbox" /> Based on
                                                            Build</label></small>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-group">
                                                        <div class="input-group-text">£</div>
                                                        <input type="number" value="15" disabled class="form-control"
                                                            id="specificSizeInputGroupUsername" placeholder="Username">
                                                        <div class="input-group-text">Cost</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><b class="text-dark"> </b> </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 align-item-center">
                                                    <label>Sell</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <small> <label><input type="checkbox" /> Based on
                                                            Build</label></small>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-group">

                                                        <input type="number" value="48" disabled class="form-control"
                                                            id="specificSizeInputGroupUsername" placeholder="Username">
                                                        <div class="input-group-text">%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><b class="text-dark"> </b> </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2 align-item-center">
                                                    <label></label>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <small> <label><input type="checkbox" /> Based on
                                                            Build</label></small>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-group">

                                                        <div class="input-group-text">£</div>
                                                        <input type="number" value="22.20" disabled class="form-control"
                                                            id="specificSizeInputGroupUsername" placeholder="Username">
                                                        <div class="input-group-text">Sell</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><b class="text-dark">Labour </b> </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <label>Time</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <small> <label><input type="checkbox" /> Based on
                                                            Build</label></small>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-group">

                                                        <input type="number" value="85" disabled class="form-control"
                                                            id="specificSizeInputGroupUsername" placeholder="Username">
                                                        <div class="input-group-text">Mins</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><b class="text-dark"> </b> </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <label>Rates</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <small> <label><input type="checkbox" /> Based on
                                                            Build</label></small>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-group">

                                                        <div class="input-group-text">£</div>
                                                        <input type="number" value="50.25" disabled class="form-control"
                                                            id="specificSizeInputGroupUsername" placeholder="Username">
                                                        <div class="input-group-text">Cost</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><b class="text-dark"> </b> </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <label></label>
                                                </div>
                                                <div class="col-lg-4 col-md-4">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-group">

                                                        <div class="input-group-text">£</div>
                                                        <input type="number" value="35.48" disabled class="form-control"
                                                            id="specificSizeInputGroupUsername" placeholder="Username">
                                                        <div class="input-group-text">/hr</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><b class="text-dark"> </b> </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <label></label>
                                                </div>
                                                <div class="col-lg-4 col-md-4">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-group">


                                                        <input type="number" value="48" disabled class="form-control"
                                                            id="specificSizeInputGroupUsername" placeholder="Username">
                                                        <div class="input-group-text">%</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <label><b class="text-dark"> </b> </label>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <label></label>
                                                </div>
                                                <div class="col-lg-4 col-md-4">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="input-group">

                                                        <div class="input-group-text">£</div>
                                                        <input type="number" value="74.29" disabled class="form-control"
                                                            id="specificSizeInputGroupUsername" placeholder="Username">
                                                        <div class="input-group-text">Sell</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="col-lg-6 col-md-6">

                                      
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6 col-md-6">
                                                            <label><b class="text-dark">Sales Tax Code </b> </label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <label>Use default part tax code </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-12 col-md-12">
                                                            <label><b class="text-dark">Breakdown </b> </label>
                                                        </div>

                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6 col-md-6">
                                                            <label><b class="text-dark">Sales Tax Code </b> </label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6" style="text-align:right !important" >
                                                            <label class="text-danger">£ 15.00 </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6 col-md-6" >
                                                            <label><b class="text-dark">Labour </b> </label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6" style="text-align:right !important">
                                                            <label class="text-danger">£ 50.25 </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6 col-md-6" >
                                                            <label><b class="text-dark">Material Markup </b>
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6" style="text-align:right !important">
                                                            <label class="text-success">£ 7.20 </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6 col-md-6">
                                                            <label><b class="text-dark">Labour Markup </b> </label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6" style="text-align:right !important">
                                                            <label class="text-success">£ 24.21 </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6 col-md-6">
                                                            <label><b class="text-dark">Profit </b> </label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6" style="text-align:right !important">
                                                            <label class="text-success"> 31.00 </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6 col-md-6">
                                                            <label><b class="text-dark">Margin </b> </label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6" style="text-align:right !important">
                                                            <label class="text-success">£ 32.43% </label>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6 col-md-6">
                                                            <label><b class="text-dark">Total Ex VAT </b> </label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="input-group">
                                                                <div class="input-group-text">£</div>
                                                                <input  type="number" value="96.57" disabled
                                                                    class="form-control"
                                                                    id="specificSizeInputGroupUsername"
                                                                    placeholder="Username"
                                                                    >

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-lg-6 col-md-6">
                                                            <label><b class="text-dark">Total Inc VAT </b> </label>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="input-group">
                                                                <div class="input-group-text">£</div>
                                                                <input type="number" value="115.88" disabled
                                                                    class="form-control"
                                                                    id="specificSizeInputGroupUsername"
                                                                    placeholder="Username">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- <div class="col-lg-6 col-md-6"></div> -->
                                             
                                                <!-- <div class="col-lg-6 col-md-6">
                                                    <div id="SecondChartContainer"
                                                        style="height: 300px; width: 30%!important"></div>
                                                </div> -->
                                            

                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 col-md-12 ">
                                            <div style="width:50%!important;margin:0 auto!important" >
                                            <div id="SecondChartContainer" style="height: 400px; width: 100%!important">
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="modal-build" role="tabpanel">
                            <div class="row">
                                <div class="modal-header">

                                    <!-- <div class="col-lg-12 col-md-12">
                                        <div class="mt-4 mb-3">
                                            <h4 class="head-back">Build</h4>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table  dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Qty</th>
                                                    <th>Part No</th>
                                                    <th>Name</th>
                                                    <th>Cost Time <small>(Hours)</small></th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="5">Pre-Build has no build items</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="modal-attach" role="tabpanel">
                            <!-- <div class="row">
                                <div class="modal-header">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mt-4 mb-3">
                                            <h4 class="head-back">Attachment</h4>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table  dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Added By</th>
                                                    <th>Date</th>
                                                    <th>Size</th>
                                                    <th>Default Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="5">No attachment to view</td>
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

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary w-md" id="btn-save-event">Save</button>
                <button type="button" class="btn btn-dark me-1 w-md" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>




</div>
<script src="assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>







<script>
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


const viewSubBuild = () => {
    $('#build_par1').hide()
    $('#sub_build').show()
}


const hideSubBuild = () => {
    $('#build_par1').show()
    $('#sub_build').hide()
}

const viewSubCat = () => {
    $('#cat_par1').hide()
    $('#sub_cat').show()
}

const hideSubCat = () => {
    $('#cat_par1').show()
    $('#sub_cat').hide()
}

const viewSubTake = () => {
    $('#take_par1').hide()
    $('#sub_take').show()
}

const hideSubTake = () => {
    $('#take_par1').show()
    $('#sub_take').hide()
}



const viewSubTake2 = () => {
    $('#sub_take').hide()
    $('#sub_take2').show()
}

const hideSubTake2 = () => {
    $('#sub_take').show()
    $('#sub_take2').hide()
}


window.onload = function() {


    var totalVisitors = 883000;
    var visitorsData = {
        "New vs July - December": [{
            click: visitorsChartDrilldownHandler,
            cursor: "pointer",
            explodeOnClick: false,
            innerRadius: "75%",
            legendMarkerType: "square",
            name: "New vs July - December",
            radius: "100%",
            showInLegend: true,
            startAngle: 90,
            type: "doughnut",
            dataPoints: [{
                    y: 237160,
                    name: "January - June",
                    color: "#E7823A"
                },
                {
                    y: 207200,
                    name: "July - December",
                    color: "#546BC1"
                }
            ]
        }],
        "January - June": [{
            color: "#E7823A",
            name: "January - June",
            type: "column",
            dataPoints: [{
                    x: new Date("1 Jan 2015"),
                    y: 33000
                },
                {
                    x: new Date("1 Feb 2015"),
                    y: 35960
                },
                {
                    x: new Date("1 Mar 2015"),
                    y: 42160
                },
                {
                    x: new Date("1 Apr 2015"),
                    y: 42240
                },
                {
                    x: new Date("1 May 2015"),
                    y: 43200
                },
                {
                    x: new Date("1 Jun 2015"),
                    y: 40600
                }
               
            ]
        }],
        "July - December": [{
            color: "#546BC1",
            name: "July - December",
            type: "column",
            dataPoints: [
               
                {
                    x: new Date("1 Jul 2015"),
                    y: 33440
                },
                {
                    x: new Date("1 Aug 2015"),
                    y: 37720
                },
                {
                    x: new Date("1 Sep 2015"),
                    y: 35200
                },
                {
                    x: new Date("1 Oct 2015"),
                    y: 35280
                },
                {
                    x: new Date("1 Nov 2015"),
                    y: 31160
                },
                {
                    x: new Date("1 Dec 2015"),
                    y: 34400
                }
            ]
        }]
    };

    var newVSReturningVisitorsOptions = {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "Profit"
        },

        legend: {
            fontFamily: "calibri",
            fontSize: 14,
            itemTextFormatter: function(e) {
                return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalVisitors * 100) + "%";
            }
        },
        data: []
    };

    var visitorsDrilldownedChartOptions = {
        animationEnabled: true,
        theme: "light2",
        axisX: {
            labelFontColor: "#717171",
            lineColor: "#a2a2a2",
            tickColor: "#a2a2a2"
        },
        axisY: {
            gridThickness: 0,
            includeZero: false,
            labelFontColor: "#717171",
            lineColor: "#a2a2a2",
            tickColor: "#a2a2a2",
            lineThickness: 1
        },
        data: []
    };

    var chart = new CanvasJS.Chart("SecondChartContainer", newVSReturningVisitorsOptions);
    chart.options.data = visitorsData["New vs July - December"];
    chart.render();

    function visitorsChartDrilldownHandler(e) {
        chart = new CanvasJS.Chart("SecondChartContainer", visitorsDrilldownedChartOptions);
        chart.options.data = visitorsData[e.dataPoint.name];
        chart.options.title = {
            text: e.dataPoint.name
        }
        chart.render();
        $("#backButton").toggleClass("invisible");
    }

    $("#backButton").click(function() {
        $(this).toggleClass("invisible");
        chart = new CanvasJS.Chart("SecondChartContainer", newVSReturningVisitorsOptions);
        chart.options.data = visitorsData["New vs July - December"];
        chart.render();
    });



}
</script>
<?php require_once('footer.php') ?>
