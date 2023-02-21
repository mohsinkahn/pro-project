<?php require_once('header.php') ?>



<div class="page-content">
    <div class="container-fluid">


        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-8 col-6">
                                <h4 class="card-title mb-0">Assets</h4>
                            </div>
                            <div class="col-md-4 col-6">
                                <a href="#" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target=".map">Add Asset</a>
                               
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Asset Name</th>
                                        <th>Added Date</th>
                                        <th>Assigned To</th>
                                        <th>Location</th>
                                        <th style="width:50px;">Actions</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>Abc item</td>
                                        <td>Abc date</td>
                                        <td>Dea</td>
                                        <td>Abc location</td>

                                        <td>
                                            <div class="dropdown chat-noti-dropdown">
                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">

                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
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

<!-- add asset modal -->
<div class="modal fade map" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title">Add Asset</h5>
          </div>
            <div class="modal-body">
               
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php') ?>