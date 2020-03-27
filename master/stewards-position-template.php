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
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Template Name <span class="mandatory">*</span></label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Northern Eastern</option>
                                <option>Middle East</option>
                                <option>South East</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Event Category <span class="mandatory">*</span></label>
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>Northern Eastern</option>
                                        <option>Middle East</option>
                                        <option>South East</option>
                                    </select>
                                </div>
                            </div>
                            <div class="offset-md-1 col-md-4">
                                <div class="form-group">
                                    <label>Duty Start (T+/-)</label>
                                    <div class="d-flex">
                                        <div class="increase-decrease">
                                            <span class="active">+</span>
                                            <span>-</span>
                                        </div>
                                        <input type="text" class="form-control col ml-3" />
                                        <select class="form-control col ml-3">
                                            <option>00</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                        <button class="btn btn-primary mw-a ml-3">Apply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Duty End (T+/-)</label>
                                    <div class="d-flex">
                                        <div class="increase-decrease">
                                            <span class="active">+</span>
                                            <span>-</span>
                                        </div>
                                        <input type="text" class="form-control col ml-3" />
                                        <select class="form-control col ml-3">
                                            <option>00</option>
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                        </select>
                                        <button class="btn btn-primary mw-a ml-3">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="stewards-menu">
                            <ul>
                                <li><a href="javascript:void:(0);" class="has-dropdown active">Section 1</a>
                                <ul>
                                    <li><a href="javascript:void:(0);" class="has-dropdown active">Floor 1</a>
                                        <ul>
                                            <li><a href="javascript:void:(0);" class="has-dropdown active">Quadrants 1</a>
                                                <ul>
                                                    <li><a href="javascript:void:(0);">Zone 1</a></li>
                                                    <li><a href="javascript:void:(0);">Zone 2</a></li>
                                                    <li><a href="javascript:void:(0);">Zone 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="javascript:void:(0);">Quadrants 2</a></li>
                                            <li><a href="javascript:void:(0);">Quadrants 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void:(0);">Floor 2</a></li>
                                    <li><a href="javascript:void:(0);">Floor 3</a></li>
                                </ul>
                                </li>
                                <li><a href="javascript:void:(0);">Section 2</a></li>
                                <li><a href="javascript:void:(0);">Section 3</a></li>
                                <li><a href="javascript:void:(0);">Section 4</a></li>
                                <li><a href="javascript:void:(0);">Section 5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class=" table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap table-fullwidth steward-approval-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Section</th>
                                        <th>Floor</th>
                                        <th>Quadrant</th>
                                        <th>Zone</th>
                                        <th>Event Position</th>
                                        <th>Call Sign</th>
                                        <th class="text-center">Even Role</th>
                                        <th class="text-center">Min Req.</th>
                                        <th class="text-center">Max Req.</th>
                                        <th>Preferred Vendor</th>
                                        <th>Duty Start (T+/-)</th>
                                        <th>Duty End (T+/-)</th>
                                        <th>Cert.Name</th>
                                        <th class="text-right">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#AddTemplate" title="Add"><img src="../images/add-item.svg" width="25"></a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Section 1</td>
                                        <td>Floor 1</td>
                                        <td>Quadrant 1</td>
                                        <td>Zone 1</td>
                                        <td>Position</td>
                                        <td>Sign 1</td>
                                        <td>Role 1</td>
                                        <td>1</td>
                                        <td>10</td>
                                        <td>Vendor 1</td>
                                        <td>05:10</td>
                                        <td>06:10</td>
                                        <td>SIA, National Steward</td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>    
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Section 2</td>
                                        <td>Floor 2</td>
                                        <td>Quadrant 2</td>
                                        <td>Zone 2</td>
                                        <td>Position</td>
                                        <td>Sign 2</td>
                                        <td>Role 2</td>
                                        <td>2</td>
                                        <td>20</td>
                                        <td>Vendor 2</td>
                                        <td>05:20</td>
                                        <td>06:20</td>
                                        <td>SIA, National Steward</td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>    
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Section 3</td>
                                        <td>Floor 3</td>
                                        <td>Quadrant 3</td>
                                        <td>Zone 3</td>
                                        <td>Position</td>
                                        <td>Sign 3</td>
                                        <td>Role 3</td>
                                        <td>3</td>
                                        <td>30</td>
                                        <td>Vendor 3</td>
                                        <td>05:30</td>
                                        <td>06:30</td>
                                        <td>SIA, National Steward</td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>    
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
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

    <div class="modal fade" id="AddTemplate" tabindex="-1" role="dialog" aria-labelledby="AddTemplateLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-minheight" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddTemplateLabel">Add Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
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
                                        <label>Quadrant <span class="mandatory">*</span></label>
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
                            </div>
                            <div class="row">
                                <div class="col add-template-section pt-3 pb-4">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Event Position <span class="mandatory">*</span></label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Northern Eastern</option>
                                                    <option>Middle East</option>
                                                    <option>South East</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Call Sign <span class="mandatory">*</span></label>
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Event Role</label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Northern Eastern</option>
                                                    <option>Middle East</option>
                                                    <option>South East</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Min</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Max</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Preferred Vendor</label>
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
                                            <div class="form-group m-0">
                                                <label>Duty Start (T+/-)</label>
                                                <div class="d-flex">
                                                    <div class="increase-decrease">
                                                        <span class="active">+</span>
                                                        <span>-</span>
                                                    </div>
                                                    <input type="text" class="form-control col ml-3" />
                                                    <select class="form-control col ml-3">
                                                        <option>00</option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                    </select>
                                                    <button class="btn btn-primary mw-a ml-3">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group m-0">
                                                <label>Duty Start (T+/-)</label>
                                                <div class="d-flex">
                                                    <div class="increase-decrease">
                                                        <span class="active">+</span>
                                                        <span>-</span>
                                                    </div>
                                                    <input type="text" class="form-control col ml-3" />
                                                    <select class="form-control col ml-3">
                                                        <option>00</option>
                                                        <option>01</option>
                                                        <option>02</option>
                                                        <option>03</option>
                                                    </select>
                                                    <button class="btn btn-primary mw-a ml-3">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-end">
                                            <div class="form-group m-0">
                                                <div class="form-control">Certification
                                                    <label class="switch float-right">
                                                        <input type="checkbox" checked="">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group m-0">
                                                <label>Event Role</label>
                                                <select class="form-control">
                                                    <option>Select</option>
                                                    <option>Northern Eastern</option>
                                                    <option>Middle East</option>
                                                    <option>South East</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col align-self-end">
                                        <button type="button" class="btn btn-primary border-radius">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class=" table-responsive">
                                        <table class="table table-striped table-bordered dt-responsive nowrap table-fullwidth steward-approval-popuptable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Section</th>
                                                    <th>Floor</th>
                                                    <th>Quadrant</th>
                                                    <th>Zone</th>
                                                    <th>Event Position</th>
                                                    <th>Call Sign</th>
                                                    <th class="text-center">Even Role</th>
                                                    <th class="text-center">Min Req.</th>
                                                    <th class="text-center">Max Req.</th>
                                                    <th>Preferred Vendor</th>
                                                    <th>Duty Start (T+/-)</th>
                                                    <th>Duty End (T+/-)</th>
                                                    <th>Cert.Name</th>
                                                    <th class="text-right">
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#AddTemplate" title="Add"><img src="../images/add-item.svg" width="25"></a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Section 1</td>
                                                    <td>Floor 1</td>
                                                    <td>Quadrant 1</td>
                                                    <td>Zone 1</td>
                                                    <td>Position</td>
                                                    <td>Sign 1</td>
                                                    <td>Role 1</td>
                                                    <td>1</td>
                                                    <td>10</td>
                                                    <td>Vendor 1</td>
                                                    <td>05:10</td>
                                                    <td>06:10</td>
                                                    <td>SIA, National Steward</td>
                                                    <td class="text-right">
                                                        <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>    
                                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group text-right">
                                        <div class="btn-group">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary cancel-btn">Cancel</button>
                                        </div>
                                        <div class="btn-group ml-3">
                                            <button type="button" data-dismiss="modal" class="btn btn-primary save-btn">Save &amp; Continue</button>
                                        </div>
                                        <div class="btn-group ml-3">
                                            <button type="button" data-dismiss="modal" class="btn btn-primary save-btn">Save &amp; Exit</button>
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

    <?php include 'master-scripts.php';?>
    <script>
    $(document).ready(function() {
        $('.steward-approval-table').DataTable({
            language: {
                paginate: {
                    first: "",
                    previous: "",
                    next: "",
                    last: ""
                }
            },
            columnDefs: [ {
                "targets": -1,
                "orderable": false,
                "className": "all"
            }],
            dom: '<"datatable-toprow"lf>rt<"datatable-bottomrow"ip>',
            pagingType: "full_numbers",
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
        });

        $('.steward-approval-popuptable').DataTable({
            "bFilter" : false,               
            "bLengthChange": false,
            "paging": false,
            "info": false,
            "ordering": false,
            columnDefs: [ {
                "targets": -1,
                "className": "all"
            }],
            dom: '<"datatable-toprow"lf>rt<"datatable-bottomrow"ip>',
            pagingType: "full_numbers",
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
        });
    });
    </script>
</body>
</html>