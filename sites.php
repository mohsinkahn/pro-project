<?php require_once('header.php') ?>


<style>
    .modal-content {
        margin-top: 60px
    }

    .dz-message {
        /* border : 2px solid red; */
        width: max-content;
        text-align: center;
        margin-top: 50px
    }

    .emp-card {
        height: 150px;
        overflow-y: scroll;
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
                                <h4 class="card-title">Sites</h4>
                            </div>
                            <div class="col-md-4 col-6">
                                <a href="addsite.php" class="btn btn-primary float-end">Add Site</a>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Site</th>
                                        <th>Site Address</th>
                                        <th>Site Town</th>
                                        <th>Site Country</th>
                                        <th>Site Postcode</th>
                                        <th>Associated Customers</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <td>Victoria Salford </td>
                                        <td>Victoria Street</td>
                                        <td>Otario</td>
                                        <td>Canada</td>
                                        <td>M50 3SP</td>
                                        <td>Equans FM.Ltd</td>
                                        <td>
                                            <div class="dropdown chat-noti-dropdown">
                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a data-bs-toggle="modal" data-bs-target=".map" class="dropdown-item" href="#">Map Site</a>




                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Business Avenue </td>
                                        <td>Street 4 , Block 2 - Gakesvell</td>
                                        <td>Otawa</td>
                                        <td>North America</td>
                                        <td>A40 2NA</td>
                                        <td>Seatrade CO.Ltd</td>
                                        <td>
                                            <div class="dropdown chat-noti-dropdown">
                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a data-bs-toggle="modal" data-bs-target=".map" class="dropdown-item" href="#">Map Site</a>





                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Trade Center </td>
                                        <td>Block 10 - ST 4 </td>
                                        <td>North</td>
                                        <td>UAE</td>
                                        <td>M60 H25</td>
                                        <td>Suparco St.Ltd</td>
                                        <td>
                                            <div class="dropdown chat-noti-dropdown">
                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a data-bs-toggle="modal" data-bs-target=".map" class="dropdown-item" href="#">Map Site</a>





                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Husky and Co </td>
                                        <td>Block 29 - ST 2 </td>
                                        <td>Itaria</td>
                                        <td>Qatar</td>
                                        <td>H20 K28</td>
                                        <td>Tianse.Ltd</td>
                                        <td>
                                            <div class="dropdown chat-noti-dropdown">
                                                <button class="btn dropdown-toggle p-0" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                    <a data-bs-toggle="modal" data-bs-target=".map" class="dropdown-item" href="#">Map Site</a>





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



<!-- Add Document Modal -->

<div class="modal fade map" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <span>
                                    <h4 style="color:white;padding:6px;border-radius:.3rem;" class="card-title bg-main-theme">Location</h4>
                                </span>
                                <div class="card emp-card">

                                    <ul class="mt-2">
                                        <li>Alex Fay</li>
                                        <li>Cahit Tastan</li>
                                        <li>Damian Chandler</li>

                                    </ul>

                                </div>
                            </div>

                        </div>

                        
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=england&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                                    <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 500px;
                                            width: 100%;
                                        }
                                    </style>
                                    <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 500px;
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
    </div>
</div>


<?php require_once('footer.php') ?>