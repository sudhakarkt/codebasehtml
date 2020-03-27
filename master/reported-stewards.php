<!doctype html>
<html lang="en">

<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">Reported Stewards</h2>
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
                    <div class="col-md-3 align-self-center">
                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-primary searchbtn">Search</button>
                            <h6 class="event-name-date">Indian Premiere League 02/02/2019</h6>
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="btn-inline-filter col-md-6">
                            <button type="button" class="col btn btn-primary">Reported</button>
                            <button type="button" class="col btn btn-primary ml-3 active">Assembly</button>
                            <button type="button" class="col btn btn-primary ml-3">Checkout</button>
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
                                        <th>Section</th>
                                        <th>Floor</th>
                                        <th>Zone</th>
                                        <th>Position</th>
                                        <th>Steward</th>
                                        <th>Vendor</th>
                                        <th class="text-center">Reported</th>
                                        <th class="text-center">Assembly</th>
                                        <th class="text-center">Checkout</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Section</td>
                                        <td>Floor 5</td>
                                        <td>Steward 1</td>
                                        <td>Position 1</td>
                                        <td>Steward 1</td>
                                        <td>Vendor 1</td>
                                        <td class="text-center">--:--</td>
                                        <td class="text-center">--:--</td>
                                        <td class="text-center">--:--</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary border-radius" data-toggle="modal" data-target="#ReAllocate">Re-Allocate</button>
                                                <button type="button" class="btn btn-primary border-radius ml-3" data-toggle="modal" data-target="#CreateRequest">Create Request</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Section</td>
                                        <td>Floor 5</td>
                                        <td>Steward 1</td>
                                        <td>Position 1</td>
                                        <td>Steward 1</td>
                                        <td>Vendor 1</td>
                                        <td class="text-center">12:00</td>
                                        <td class="text-center">05:00</td>
                                        <td class="text-center">09:56</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-primary border-radius" data-toggle="modal" data-target="#ReAllocate">Re-Allocate</button>
                                                <button type="button" class="btn btn-primary border-radius ml-3" data-toggle="modal" data-target="#CreateRequest">Create Request</button>
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

     <!-- Create Request Modal -->
     <div class="modal fade" id="CreateRequest" tabindex="-1" role="dialog" aria-labelledby="CreateRequestTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="CreateRequestTitle">Create Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 align-self-end">
                            <div class="d-flex mb-4">
                                <span class="font-weight-600">Section:</span><span>Section 1</span>
                                <span class="font-weight-600 ml-5">Floor:</span><span>Floor 1</span>
                                <span class="font-weight-600 ml-5">Zone:</span><span>Zone 1</span>
                                <span class="font-weight-600 ml-5">Position:</span><span>Position 1</span>
                                <span class="font-weight-600 ml-5">Certification Reqd:</span><span>Yes</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 align-self-end">
                            <div class="form-group m-0">
                                <label>Vendor <span class="mandatory">*</span></label>
                                <input type="text" id="datepicker5" class="form-control" />
                            </div>
                        </div>
                        <div class="col-md-4 align-self-end reported-steward pb-2">
                            <label class="checkcontainer">
                                <input type="radio" name="radio2"> Position Empty
                                <span class="radiobtn"></span>
                            </label>
                            <label class="checkcontainer ml-3">
                                <input type="radio" name="radio2"> Steward(Name) didn't Report
                                <span class="radiobtn"></span>
                            </label>
                        </div>
                        <div class="col-md-4 align-self-end">
                            <div class="form-group m-0">
                                <label>Notes</label>
                                <textarea class="form-control" rows="1"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="form-group m-0 text-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary btnAddCancel cancel-btn">Cancel</button>
                                </div>
                                <div class="btn-group ml-3">
                                    <button type="button" class="btn btn-primary btnBrfDocumentSave save-btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Re Allocate Modal -->
    <div class="modal fade" id="ReAllocate" tabindex="-1" role="dialog" aria-labelledby="ReAllocateTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="ReAllocateTitle">Re Allocate</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 align-self-end">
                            <div class="d-flex mb-4">
                                <span class="font-weight-600">Vendor:</span><span>Vendor 1</span>
                                <span class="font-weight-600 ml-5">Steward:</span><span>Steward 1</span>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-end">
                            <div class="d-flex mb-4">
                                <span class="font-weight-600">Section:</span><span>Section 1</span>
                                <span class="font-weight-600 ml-5">Floor:</span><span>Floor 1</span>
                                <span class="font-weight-600 ml-5">Zone:</span><span>Zone 1</span>
                                <span class="font-weight-600 ml-5">Position:</span><span>Position 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 align-self-end">
                            <div class="form-group m-0">
                                <label>Section <span class="mandatory">*</span></label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-end">
                            <div class="form-group m-0">
                                <label>Floor <span class="mandatory">*</span></label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-end">
                            <div class="form-group m-0">
                                <label>Zone <span class="mandatory">*</span></label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-end">
                            <div class="form-group m-0">
                                <label>Position <span class="mandatory">*</span></label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col align-self-center">
                            <div class="form-group m-0 text-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary btnAddCancel cancel-btn">Cancel</button>
                                </div>
                                <div class="btn-group ml-3">
                                    <button type="button" class="btn btn-primary btnBrfDocumentSave save-btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'master-scripts.php';?>
    
</body>
</html>