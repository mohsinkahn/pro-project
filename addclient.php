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
                                <h4 class="card-title mb-0">Add Client</h4>
                            </div>
                            <!-- <div class="col-md-4 col-6">
                                <a href="#" class="btn btn-primary float-end">Add Client</a>
                            </div> -->
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Company Name</label>
                                                <input class="form-control" type="text" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Company
                                                    Number</label>
                                                <input class="form-control" type="number" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Vat Number</label>
                                                <input class="form-control" type="number" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Credit Limit</label>
                                                <input class="form-control" type="text" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Address</label> <br>
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

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <h4 class="mb-sm-0 font-size-18 head-back">Contact Details</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Name</label>
                                                <input class="form-control" type="text" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Contact
                                                    Number</label>
                                                <input class="form-control" type="number" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Email Address</label>
                                                <input class="form-control" type="email" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Role</label>
                                                <select class="form-select">
                                                    <option>Estimator</option>
                                                    <option>Project Manager</option>
                                                    <option>Director</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                        
                                            <div class="mb-3">
                                            <label for="example-text-input" class="form-label">Document Storage</label>
                                                <form action="#" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple="multiple">
                                                    </div>
                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                                        </div>

                                                        <h5>Upload Documents</h5>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <h4 class="mb-sm-0 font-size-18 head-back">Account Contacts for Billing</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Name</label>
                                                <input class="form-control" type="text" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Contact
                                                    Number</label>
                                                <input class="form-control" type="number" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Email Address</label>
                                                <input class="form-control" type="email" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
                                                <select class="form-select">
                                                    <option>Live</option>
                                                    <option>Archived</option>
                                                    <option>On Stop</option>
                                                </select>
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