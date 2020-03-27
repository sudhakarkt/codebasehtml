<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">Event Position Template</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%">#</th>
                                        <th style="width:45%">Event Position</th>
                                        <th style="width:40%">Call Sign</th>
                                        <th style="width:10%" class="text-right"><a href="javascript:void(0);" data-toggle="modal" data-target="#AddEventPositionModal" title="Add"><img src="../images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Event Position Template Modal -->
    <div class="modal fade" id="AddEventPositionModal" tabindex="-1" role="dialog" aria-labelledby="AddEventPositionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddEventPositionModalLabel">Add Event Position Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row add-template">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-3 pr-5">
                                    <div class="form-group pr-3">
                                        <label>Section <span class="mandatory">*</span></label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3 pr-5">
                                    <div class="form-group pr-3">
                                        <label>Floor <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3 pr-5">
                                    <div class="form-group pr-3">
                                        <label>Zone <span class="mandatory">*</span></label>
                                        <select class="form-control">
                                            <option>Select</option>
                                            <option>Northern Eastern</option>
                                            <option>Middle East</option>
                                            <option>South East</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col add-template-section">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Position <span class="mandatory">*</span></label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Northern Eastern</option>
                                                    <option>Middle East</option>
                                                    <option>South East</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Certifications</label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Northern Eastern</option>
                                                    <option>Middle East</option>
                                                    <option>South East</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Comments</label>
                                                <div class="d-flex align-items-center">
                                                    <textarea class="form-control" rows="1"></textarea>
                                                    <a href="javascript:void(0);" class="pl-3" title="Add"><img src="../images/add-item.svg" width="25"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="table-resposive mt-4 mb-4">
                                    <table class="table table-striped table-bordered dt-responsive nowrap table-fullwidth table-bg dataTable no-footer">
                                        <thead>
                                            <tr>
                                                <th style="width:5%" class="text-center">#</th>
                                                <th style="width:20%">Zone</th>
                                                <th style="width:20%">Position</th>
                                                <th style="width:5%">Min-Max</th>
                                                <th style="width:20%">Certifications</th>
                                                <th style="width:20%">Comments</th>
                                                <th style="width:10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Zone 1</td>
                                                <td>Position1</td>
                                                <td>4 - 6</td>
                                                <td>Cert 1, Cert 2, Cert 3, Cert 4 ...</td>
                                                <td>Socioiasdwe Djekrwe sdadj ...</td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" class="action-icon button btndelete" title="Delete"><img src="../images/delete.svg" width="30"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Zone 1</td>
                                                <td>Position1</td>
                                                <td>4 - 6</td>
                                                <td>Cert 1, Cert 2, Cert 3, Cert 4 ...</td>
                                                <td>Socioiasdwe Djekrwe sdadj ...</td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" class="action-icon button btndelete" title="Delete"><img src="../images/delete.svg" width="30"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Zone 1</td>
                                                <td>Position1</td>
                                                <td>4 - 6</td>
                                                <td>Cert 1, Cert 2, Cert 3, Cert 4 ...</td>
                                                <td>Socioiasdwe Djekrwe sdadj ...</td>
                                                <td class="text-center">
                                                    <a href="javascript:void(0)" class="action-icon button btndelete" title="Delete"><img src="../images/delete.svg" width="30"></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col align-self-center">
                                    <div class="form-group m-0 text-right">
                                        <div class="btn-group">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</button>
                                        </div>
                                        <div class="btn-group ml-3">
                                            <button type="button" data-dismiss="modal" class="btn btn-primary save-btn">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include '../delete-popup.php';?>
    
    <?php include 'master-scripts.php';?>

</body>
</html>