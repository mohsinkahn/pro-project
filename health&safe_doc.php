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
                                <h4 class="card-title mb-0">Health & Safety Documents</h4>
                            </div>
                            <div class="col-md-4 col-6">
                                <a href="#" class="btn btn-primary float-end" style="margin-left:5px">Add Document</a>
                                <a href="#" class="btn btn-primary float-end">Create Document</a>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Added Date</th>
                                        <th>Added By</th>
                                        <th>Size</th>
                                        <th style="width:50px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Abc doc</td>
                                        <td>12/02/2022</td>
                                        <td>jhon doe</td>
                                        <td>30kb </td>
                                        <td>
                                            <div class="dropdown chat-noti-dropdown">
                                                <button class="btn dropdown-toggle p-0" type="button"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Download</a>
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

<?php require_once('footer.php') ?>