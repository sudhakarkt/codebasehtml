<!doctype html>
<html lang="en">

<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">Stewards Approvals</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group mb-4"> 
                            <label>User Access</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Northern Eastern</option>
                                <option>Middle East</option>
                                <option>South East</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group mb-4"> 
                            <label>Vendor</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Northern Eastern</option>
                                <option>Middle East</option>
                                <option>South East</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-primary searchbtn">Search</button>
                            <h6 class="event-name-date">Indian Premiere League 02/02/2019</h6>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class=" table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap table-fullwidth plain-chkbox">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Steward Name</th>
                                        <th>Assigned Before</th>
                                        <th>Vendor</th>
                                        <th>DOB</th>
                                        <th>Position</th>
                                        <th>Certification Rqr</th>
                                        <th>Certification Available</th>
                                        <th>Qualified</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a class="link" href="javascript:void(0);">Steward</a></td>
                                        <td>5</td>
                                        <td>Vendor 1</td>
                                        <td>15/05/2019</td>
                                        <td>Position</td>
                                        <td>Yes</td>
                                        <td>Cert1, Cert2</td>
                                        <td><span class="qualified-yes">YES</span></td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-primary border-radius">Pending</button>
                                                <button type="button" class="btn btn-primary border-radius ml-3 status-disabled" disabled>Approved</button>
                                                <button type="button" class="btn btn-primary border-radius ml-3 status-disabled" disabled>Rejected</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a class="link" href="javascript:void(0);">Steward</a></td>
                                        <td>5</td>
                                        <td>Vendor 1</td>
                                        <td>15/05/2019</td>
                                        <td>Position</td>
                                        <td>Yes</td>
                                        <td>Cert1, Cert2</td>
                                        <td><span class="qualified-yes">YES</span></td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" class="btn btn-primary border-radius">Pending</button>
                                                <button type="button" class="btn btn-primary border-radius ml-3 status-disabled" disabled>Approved</button>
                                                <button type="button" class="btn btn-primary border-radius ml-3 status-disabled" disabled>Rejected</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'master-scripts.php';?>

</body>
</html>