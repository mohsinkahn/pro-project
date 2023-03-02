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
                                <h4 class="card-title mb-0">Add Quote</h4>
                            </div>
                            <div class="col-md-4 col-6" style="text-align:right">
                                <!-- <a href="cost_center.php" class="btn btn-primary float-end" >Next</a> -->
                                <a href="cost_center.php"> <button class="btn btn-primary w-md"> Next</button></a>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="choices-single-default"
                                                class="form-label ">Client</label>
                                            <a class="create-new" style="float:right" href="addclient.php">Create
                                                New</a>
                                            <select class="form-select" data-trigger="" name="choices-single-default"
                                                id="choices-single-default" placeholder="Add Name">
                                                <option selected disabled >Add Customer</option>
                                                <option value="Choice 1">Albert</option>
                                                <option value="Choice 2">Henry</option>
                                                <option value="Choice 3">Alex</option>
                                            </select>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                            <label for="choices-single-default"
                                                class="form-label ">Site</label>
                                                <a class="create-new" style="float:right"
                                                    href="addsite.php">Create New</a>
                                                    <select class="form-select" data-trigger="" name="choices-single-default"
                                                id="choices-single-default" placeholder="Add Site">
                                                <option selected disabled >Add Site</option>
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
                                                <label for="example-text-input" class="form-label">Quote Name</label>
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
                                                <label for="example-text-input" class="form-label">Site Contact</label>
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
    function checkData(event) {
        console.log(event.target.value)
        if (event.target.value === 'John Doe') {
            $("#site").attr("disabled", false)
            $("#site").val('Pakistan')
        }
    }
    </script>