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
                                <h4 class="card-title mb-0">Add Task</h4>
                            </div>
                            <!-- <div class="col-md-4 col-6">
                                <a href="#" class="btn btn-primary float-end">Add Client</a>
                            </div> -->
                        </div>


                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Subject Name</label>
                                        <input class="form-control" type="text" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div>
                                    <label for="example-text-input" class="form-label">Estimated Time</label>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col-lg-6"><input class="form-control" type="time"
                                                    value="13:45:00" id="example-time-input">
                                            </div>
                                            <div class="col-lg-6"><input class="form-control" type="time"
                                                    value="17:45:00" id="example-time-input">
                                            </div>
                                        </div>
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

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 mt-2">
                                    <h4 class="mb-sm-0 font-size-18 head-back">Associate with a Client</h4>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Client</label>
                                        <input class="form-control" type="text" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Contact </label>
                                        <input class="form-control" type="text" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Site</label>
                                        <input class="form-control" type="text" id="example-text-input">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Jobs</label>

                                        <select class="form-select">
                                            <option>ABC Job</option>
                                            <option>ABC Job</option>
                                            <option>ABC Job</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3 mt-2">
                                    <h4 class="mb-sm-0 font-size-18 head-back">Internal</h4>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Assigned to</label>

                                        <select class="form-select">
                                            <option>John Doe</option>
                                            <option>Henry Clark</option>
                                            <option>Albert Methew</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Priority</label>

                                        <select class="form-select">
                                            <option>Very Low</option>
                                            <option>Low</option>
                                            <option>Medium Low</option>
                                            <option>Medium</option>
                                            <option>High</option>
                                            <option>Very High</option>
                                            <option>Urgent</option>

                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Status</label>

                                        <select class="form-select">
                                            <option>Active</option>
                                            <option>Close</option>
                                            <option>Pending</option>


                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Start Date</label>
                                        <input type="date" class="form-control" id="datepicker-datetime">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Due Date</label>
                                        <input type="date" class="form-control" id="datepicker-datetime">
                                    </div>
                                </div>
                            </div>
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