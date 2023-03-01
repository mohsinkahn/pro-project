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
                                <h4 class="card-title mb-0">Add Staff</h4>
                            </div>
                            <!-- <div class="col-md-4 col-6">
                                <a href="#" class="btn btn-primary float-end">Add Client</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                        <div class="mb-3">
                                                <label for="example-text-input" class="form-label"> Position</label>
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>Subcontractor </option>
                                                    <option>Company Contractor </option>
                                                    <option>Manager</option>
                                                    <option>Accounts </option>
                                                    <option>Estimator </option>
                                                    <option>Admin </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                        <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Staff Name</label>
                                                <input class="form-control" type="text" id="example-text-input">
                                            </div> 

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Address</label> <br>
                                                <!-- <textarea name="" id="" cols="80" rows="2"></textarea> -->
                                                <input class="form-control" type="text" id="example-text-input">

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Town</label>
                                                <input class="form-control" type="text" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Country</label>
                                                <input class="form-control" type="text" id="example-text-input">
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div>
                                            <div class="mb-3">

                                                <form action="#" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple="multiple">
                                                    </div>
                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                                        </div>

                                                        <h5>Upload Photo</h5>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">County</label>
                                        <input class="form-control" type="text" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Postcode</label>
                                        <input class="form-control" type="text" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Country</label>
                                        <input class="form-control" type="text" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Date of Commencement</label>
                                        <input class="form-control" type="date" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Date of Birth</label>
                                        <input class="form-control" type="date" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Ni No</label>
                                        <input class="form-control" type="number" id="example-text-input">
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