<!doctype html>
<html lang="en">
    
<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">Steward Requirements Position</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Vendors <span class="mandatory">*</span></label>
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
                    <div class="col">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%">#</th>
                                        <th style="width:8%">Section</th>
                                        <th style="width:8%">Floor</th>
                                        <th style="width:8%">Zone</th>
                                        <th style="width:8%">Position</th>
                                        <th style="width:7%">Min - Max</th>
                                        <th style="width:7%">Certification Rdq</th>
                                        <th style="width:10%">Certification</th>
                                        <th style="width:8%">Comments</th>
                                        <th style="width:7%">Pref Vendor</th>
                                        <th style="width:7%">Requested Qty</th>
                                        <th style="width:7%">Cost/Hr (in €)</th>
                                        <th style="width:7%">Applicable?</th>
                                        <th style="width:3%" class="text-right"><a href="javascript:void(0);" data-toggle="modal" data-target="#CreatePO" title="Add"><img src="images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Section 1</td>
                                        <td>Floor 1</td>
                                        <td>Zone 1</td>
                                        <td>Position 1</td>
                                        <td>4 - 5</td>
                                        <td>Yes</td>
                                        <td>Cert 1, Cert 2, Cert 3, Cert 4...</td>
                                        <td>Sociosqu partur</td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>In Progress</option>
                                                <option>Open</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td class="text-center">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                    <td class="text-center">2</td>
                                        <td>Section 1</td>
                                        <td>Floor 1</td>
                                        <td>Zone 1</td>
                                        <td>Position 1</td>
                                        <td>4 - 5</td>
                                        <td>Yes</td>
                                        <td>Cert 1, Cert 2, Cert 3, Cert 4...</td>
                                        <td>Sociosqu partur</td>
                                        <td>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>In Progress</option>
                                                <option>Open</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td><input type="text" class="form-control" /></td>
                                        <td class="text-center">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="slider round"></span>
                                            </label>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

        <?php include 'events-menu.php';?>

    </section>
    
    <!-- PO Creation Modal -->
    <div class="modal fade" id="CreatePO" tabindex="-1" role="dialog" aria-labelledby="CreatePOLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreatePOLabel">PO Creation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row add-template">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Section <span class="mandatory">*</span></label>
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
                                        <label>Floor <span class="mandatory">*</span></label>
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
                                        <label>Zone <span class="mandatory">*</span></label>
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
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Min </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Max </label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Comments </label>
                                        <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3 align-self-center">
                                    <div class="form-group m-0">
                                        <div class="form-control">Certificate Required?
                                            <label class="switch float-right">
                                                <input type="checkbox" checked="">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Map Certificates</label>
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
                                        <label>Preferred Vendor <span class="mandatory">*</span></label>
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
                                        <label>Requested Qty <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Est. Price(€) Per Hour * <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col align-self-end">
                                    <div class="form-group text-right">
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

    <?php  include 'scripts.php';?>

</body>
</html>