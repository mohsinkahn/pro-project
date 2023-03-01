<?php require_once("header.php") ?>


<style>
.total {
    padding: 10px;
    border-radius: 20px;
    background-color: #1976d2;
}.final-sum {
    background-color: #eeeeee;
}
.right{
    text-align:right;
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
                                <h2 class="card-title mb-0">New Invoice</h2>
                            </div>
                            <div class="col-md-4 col-6">
                                <span class="text-light float-end total"> Total: £0.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div>
                                    <h5 class="head-back">Company: Kudos Services Ltd</h5>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-4">
                                <div class="mt-4 mb-3">
                                <label for="example-text-input" class="form-label">
                                        Company</label>
                                    
                                    <select class="form-select ">
                                        <option selected="">Select</option>
                                        <option>Kudos Services Ltd</option>
                                        <option>etc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mt-4 mb-3">
                                <label for="example-text-input" class="form-label">
                                        Phone</label>
                                  <input type="text" class="form-control"> 
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="mt-4 mb-3">
                                <label for="example-text-input" class="form-label">
                                        Address</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-2 col-md-4">
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Invoice #
                                    </label>
                                    <input class="form-control" type="text" id="example-text-input"
                                        placeholder="Auto #">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Date Issued
                                    </label>
                                    <input type="text" class="form-control" id="datepicker-basic">

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Period
                                    </label>
                                    <input type="text" class="form-control" id="datepicker-basic">

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">
                                        Payment Due</label>
                                    <select class="form-select ">
                                        <option selected>30 Days</option>
                                        <option>45 Days</option>
                                        <option>60 Days</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="mb-3" style="margin-top:40px">
                                    <p><input type="radio" name="inv" id="inv1" /> <label for="inv1"> Days from invoice
                                            date</label></p>
                                  

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="mb-3" style="margin-top:40px">
                                  
                                    <span><input type="radio" name="inv" id="inv2" /> <label for="inv2"> Days after
                                            EOM</label></span>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">
                                        Invoice Per Item</label>
                                    <select class="form-select ">
                                        <option>No</option>
                                        <option>ABC</option>
                                        <option>ABC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Order No
                                    </label>
                                    <input type="text" class="form-control" value="FOC">

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">
                                        Status</label>
                                    <select class="form-select ">
                                        <option>Invoice : Created</option>
                                        <option>Invoice : Pending</option>
                                        <option>Invoice : Clear</option>


                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <div class="mb-3" style="padding-top:40px">
                                    <p><input type="checkbox" id="adjust" /> <label for="adjust">Auto Adjust</label></p>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 col-md-12">
                                <div class="mb-3">
                                    <label for="example-text-input" class="form-label">Invoice Comment
                                    </label>
                                    <div id="ckeditor-classic"></div>

                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 col-md-12">
                                <div>
                                    <h5 class="head-back">Site: The St Chands Centre (Kirkby)</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-2">
                                <div class="mt-4">
                                    <h6>Job No</h6>
                                    <p class="text-success">6003</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mt-4">
                                    <h6>Salesperson</h6>
                                    <p>-</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mt-4">
                                    <h6>Quote No</h6>
                                    <p>Not applicable </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 col-md-12">
                                <div>
                                    <h5 class="head-back">Fire Alarm Service & Maintenance</h5>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="table-responsive">
                                    <table class="table  dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Part No</th>
                                                <th >Item</th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                                <th></th>
                                                <th class="right">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td><b><p>Sub-Total</p></b></td>
                                                <td class="right">£0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2" >
                            <div class="col-lg-8"></div>
                            <div style="text-align:right;" class="col-lg-4 col-md-12 final-sum">
                            <span class="w-md d-flex justify-content-between mt-2">
                                                                <p>Sub-Total</p>
                                                                <p><b>£0.00</b></p>
                                                            </span>
                                                            <span class="w-md d-flex justify-content-between mt-2 ">
                                                                <p>VAT</p>
                                                                <p><b>£0.00</b></p>
                                                            </span>
                                                            <span class="w-md d-flex justify-content-between ">
                                                                <p>Total</p>
                                                                <p><b>£0.00</b></p>
                                                            </span>

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


                </div><!-- end card-body -->
            </div>
            <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
<!-- container-fluid -->









<?php require_once("footer.php") ?>


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