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
                                <h4 class="card-title mb-0">Health & Safety Documents</h4>
                            </div>
                            <div class="col-md-4 col-6">
                                <a href="#" data-bs-toggle="modal" data-bs-target=".add-document"
                                    class="btn btn-primary float-end" style="margin-left:5px">Add Document</a>
                                <a href="#" data-bs-toggle="modal" data-bs-target=".create-document"
                                    class="btn btn-primary float-end">Create Document</a>
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



<!-- Create Document Modal -->

<div class="modal fade create-document" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Document</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div>
                            <div class="mb-3">
                                <label for="example-text-input" class="form-label">Document Title</label>
                                <input class="form-control" type="text" id="example-text-input">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div>
                            <div class="mb-3">
                                <div id="ckeditor-classic"></div>

                            </div>

                        </div>
                    </div>
                  
                       
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary w-md">Save</button>
                                <button data-bs-dismiss="modal" aria-label="Close" type="submit"
                                    class="btn btn-light w-md">Cancel</button>

                            </div>
                       

                  

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Document Modal -->

<div class="modal fade add-document" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Document</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div>
                            <div class="mb-3">
                                <label for="example-text-input" class="form-label">Document Title</label>
                                <input class="form-control" type="text" id="example-text-input">
                            </div>

                        </div>
                    </div>
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

                                        <h5>Upload Documents</h5>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                   
                        
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary w-md">Save</button>
                                <button data-bs-dismiss="modal" aria-label="Close" type="submit"
                                    class="btn btn-light w-md">Cancel</button>

                            </div>
                       

                    

                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php') ?>