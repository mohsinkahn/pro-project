<?php require_once('header.php') ?>

<style>
    

    .icon {
        /* height: 10  0%; */
        padding: 10px 10px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }
    .bg-primary{
        background-color: #575656 !important;
    }

    .mdi-account,
    .mdi-briefcase {
        font-size: xx-large;
        color: white !important;
    }

    .head-con {
        padding: 0px 10px 0px 15px;
        padding-top: 10px !important;
        /* border: 2px solid red; */
        width: 100%;
    }

    .head-con>h6 {
        width: max-content;
        /* padding: 3px 10px; */
        color: white;
        border-radius: 50px;
        color: black
    }
    .head-con>p{
        margin-bottom: 0;
    }

    .left {
        text-align: left;
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
                                <h4 class="card-title">Client Forecast</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select Date</label>
                                    <input type="text" class="form-control" id="datepicker-basic" style="height:46px;">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select Client</label>

                                    <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default">
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
                            <div class="col-lg-3 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select Job</label>

                                    <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default">
                                        <option>ABC Job</option>
                                        <option>ABC Job</option>
                                        <option>ABC Job</option>

                                    </select>

                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Select PM</label>

                                    <select class="form-control" data-trigger="" name="choices-single-default" id="choices-single-default">
                                        <option>SW</option>
                                        <option>WK</option>
                                        <option>SM</option>
                                        <option>KW</option>

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="mb-3">
                                    <div class="card icon-card">
                                        <div class="card-con d-flex align-items-center">
                                            <div class="icon bg-primary text-light">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <div class="head-con">
                                                <p>Client</p>
                                                <h6>Halsion</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="mb-3">
                                    <div class="card icon-card">
                                        <div class="card-con d-flex align-items-center">
                                            <div class="icon bg-primary text-light">
                                                <i class="mdi mdi-briefcase"></i>
                                            </div>
                                            <div class="head-con">
                                                <p>Job</p>
                                                <h6>Battersea</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="mb-3">
                                    <div class="card icon-card">
                                        <div class="card-con d-flex align-items-center">
                                            <div class="icon bg-primary text-light">
                                                <i class="mdi mdi-account"></i>
                                            </div>
                                            <div class="head-con">
                                                <p>Project Manager</p>
                                                <h6>SW</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered  dt-responsive nowrap w-100">
                                        <thead>
                                            <tr class="text-center ">
                                                <th colspan="3">Projected Expenditure</th>
                                                <th>Projected Billing</th>
                                                <th>Projected Profit</th>
                                                <th>Profit %</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Materials</th>
                                                <th>Sub Labour</th>
                                                <th>PAYE Labour</th>
                                                <th>Projected Invoice</th>
                                                <th>Profit</th>
                                                <th>%</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Actual Materials</th>
                                                <th>Actual Labours</th>
                                                <th>Actual Labours</th>
                                                <th>Actual Invoice</th>
                                                <th>Assumed Profit</th>
                                                <th>%</th>
                                            </tr>
                                            <tr>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                                <td>£ - </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-8"></div>
                            <div class="col-lg-4" style="text-align:right">
                                <table class="table table-bordered  dt-responsive nowrap w-100">
                                    <thead>
                                        <tr class="left">
                                            <th>Totals</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class="left">Materials</th>
                                            <td>£ 58,229.00</td>
                                        </tr>
                                        <tr>
                                            <th class="left">Sub Labour</th>
                                            <td>£ 58,229.00</td>
                                        </tr>
                                        <tr>
                                            <th class="left">Application</th>
                                            <td>£ 58,229.00</td>
                                        </tr>
                                        <tr>
                                            <th class="left">PAYE</th>
                                            <td>£ 58,229.00</td>
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
<?php require_once('footer.php') ?>



<script>
    flatpickr("#datepicker-basic", {
            defaultDate: new Date()
        }),
        flatpickr("#datepicker-datetime", {
            enableTime: !0,
            dateFormat: "m-d-Y H:i",
            defaultDate: new Date(),
        }),
        flatpickr("#datepicker-humanfd", {
            altInput: !0,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            defaultDate: new Date(),
        }),
        flatpickr("#datepicker-minmax", {
            minDate: "today",
            defaultDate: new Date(),
            maxDate: new Date().fp_incr(14),
        }),
        flatpickr("#datepicker-disable", {
            onReady: function() {
                this.jumpToDate("2025-01");
            },
            disable: ["2025-01-30", "2025-02-21", "2025-03-08", new Date(2025, 4, 9)],
            dateFormat: "Y-m-d",
            defaultDate: new Date(),
        }),
        flatpickr("#datepicker-multiple", {
            mode: "multiple",
            dateFormat: "Y-m-d",
            defaultDate: new Date(),
        }),
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
</script>