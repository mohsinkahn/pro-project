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
                                <h4 class="card-title mb-0">Diary</h4>
                            </div>
                            <div class="col-md-4 col-6">
                                <a href="add_task.php" class="btn btn-primary float-end">Add Task</a>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Client</th>
                                        <th>Assign to</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th>Job</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Estimated Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ABC Subject</td>
                                        <td> <a class="text-dark" href="timesheet_view.php">  John Doe</a></td>
                                        <td>Albert Methews</td>
                                        <td>High</td>
                                        <td>ABC Status</td>
                                        <td>ABC Job</td>
                                        <td>05/03/2023</td>
                                        <td>05/03/2023</td>
                                        <td>25/03/2023</td>
                                    </tr>
                                    <tr>
                                        <td>ABC Subject</td>
                                        <td> <a class="text-dark" href="timesheet_view.php">  Henry Clark</a></td>
                                        <td>Alex Fay</td>
                                        <td>Medium</td>
                                        <td>ABC Status</td>
                                        <td>ABC Job</td>
                                        <td>10/01/2022</td>
                                        <td>16/01/2022</td>
                                        <td>20/01/2022</td>
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