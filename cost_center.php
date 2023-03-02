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

    .prim-cost-det {
        font-size: large;
        font-weight: bold;
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
                                <h4 class="card-title">Primary Discipline</h4>
                            </div>
                            <!-- <div class="col-md-4 col-6">
                                <a href="#" class="btn btn-primary float-end" >Next</a>
                            </div> -->
                        </div>


                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-5">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Name</label>
                                        <input class="form-control" type="text" id="name">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div>
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">Description <small> <em> (
                                                    Optional )</em></small></label>
                                        <input class="form-control" type="text" id="desc">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div>
                                    <div class=" text-align-right" style="margin-top:28px">

                                        <button onClick="addData()" class="btn btn-primary w-100">Add</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card mt-4">
                            <div class="card-body head-back">
                            <div id="space">
                                <div class="row align-items-center">
                                    <div class="col-lg-8 col-6">
                                        <span>
                                            <h4 class="mb-0">John Doe</h4>
                                        </span>
                                    </div>
                                    <div class="col-lg-4 col-6">

                                        <div  style="text-align:right">

                                            <select class="form-select  w-100">
                                                <option>Options</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                        </div>
                        <div id="invoice-data" class="row mt-4 align-items-center">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Discipline</label>
                                <select class="form-select">
                                    <option selected disabled>0 Selected</option>
                                    <option>ABC Center</option>
                                    <option>ABC Center</option>
                                    <option>ABC Center</option>
                                </select>
                            </div>


                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Discipline Name <small><em>Optional</em></small></label>
                                <input class="form-control" type="text" id="cost">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div>
                                <div class=" text-align-right" style="margin-top:13px">
                                    <button class="btn btn-primary w-100">Add</button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div style="text-align:right;margin-top:13px;">
                                <select class="form-select  w-100 float-end">
                                    <option>Options</option>
                                </select>
                            </div>
                        </div>

                            <div class="col-lg-8 col-4 mt-3 mb-3">
                                <span style="margin-left:4px">
                                    <input type="checkbox">
                                    <a href="quote_next.php"> <span class="prim-cost-det"  id="prim-cost-det"></span>John Doe</a>
                                </span>
                            </div>
                            <div class="col-lg-2 col-4 mt-3 mb-3">
                                <span>
                                    Total :€0.00
                                </span>
                            </div>
                            <div class="col-lg-2  col-4 mt-3 mb-3">

                                <div style="text-align:right">
                                    <select class="form-select  w-100">
                                        <option>Options</option>
                                    </select>
                                </div>
                            </div>
                        
                        <div class="mt-2">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered dt-responsive nowrap w-100">
                                        <tbody>
                                            <th> <input type="checkbox" name="" id=""> Select All</th>
                                            <th>Sub Total:</th>
                                            <td>€0.00</td>
                                            <th>VAT:</th>
                                            <td>€0.00</td>
                                            <th>Total:</th>
                                            <td>€0.00</td>
                                        </tbody>
                                    </table>
                                </div>
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
    // $("#invoice-data").hide();

    function addData() {
        let inp = document.getElementById('name').value

        if (inp.trim() === "") {
            alert('Please Add Name')
        } else {
            $("#space").append(
                `

            <div class="row ">
            <div class="col-lg-10">
            <span >
            <h4>${inp}</h4>
            </span>
            </div>
            <div class="col-lg-2">
          
                                    <div class="mt-2" style="text-align:right">
                                       
                                    <select
                                                                                    class="form-select form-select-sm w-50 float-end">
                                                                                    <option>Options</option>
                                                                                </select>
                                    </div>
                                </div>
            </div>
            </div>

`);

            $("#invoice-data").show();
            $('#prim-cost-det').append(inp)
        }
    }
</script>