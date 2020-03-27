<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>
<style>

</style>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">Employees</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col">
                        <p><span class="toggle-filter">Filter</span></p>
                        <div class="filter-panel-overlay"></div>
                        <div class="filter-panel col">
                            <h3>Filter</h3>
                            <div class="form-group">
                                <label>Events</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Vendors</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Source</label>
                                <div class="btn-inline-container row mb-4">
                                    <button type="button" class="col btn btn-primary selected">Internal</button>
                                    <button type="button" class="col btn btn-primary ml-1">External</button>
                                </div>

                                <div class="btn-inline-container row mb-4">
                                    <button type="button" class="col btn btn-primary selected">Allocate</button>
                                    <button type="button" class="col btn btn-primary ml-1">Unallocate</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Acknowledge Status</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Admin Status</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:5%">#</th>
                                        <th style="width:10%">Employee Category</th>
                                        <th style="width:10%">First Name</th>
                                        <th style="width:10%">Last name</th>
                                        <th style="width:7%">Email ID</th>
                                        <th style="width:7%">Age</th>
                                        <th style="width:5%">Gender</th>
                                        <th style="width:7%" class="text-right"><a href="javascript:void(0);" data-toggle="modal" data-target="#AddEmployeeModal" title="Add"><img src="../images/add-item.svg" width="25" /></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Category 1</td>
                                        <td>First Name 1</td>
                                        <td>Last Name 1</td>
                                        <td>sudhakar@tillidsoft.com</td>
                                        <td>265985665</td>
                                        <td>Male</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="../images/edit.svg" width="25"></a>
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DeleteModal" class="action-icon" title="Delete"><img src="../images/delete.svg" width="25"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Category 2</td>
                                        <td>First Name 2</td>
                                        <td>Last Name 2</td>
                                        <td>mahesh@tillidsoft.com</td>
                                        <td>569878898</td>
                                        <td>FeMale</td>
                                        <td class="text-right">
                                            <a href="javascript:void(0);" class="action-icon" title="Save"><img src="../images/save.svg" width="25"></a>
                                            <a href="javascript:void(0);" class="action-icon" title="Cancel"><img src="../images/cancel.svg" width="25"></a>
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

    <!-- Add Vendors Modal -->
    <div class="modal fade" id="AddEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="AddEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddEmployeeModalLabel">Add Employees</h5>
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
                                        <label>Employee Category <span class="mandatory">*</span></label>
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
                                        <label>First Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="mandatory">*</span></label>
                                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><img src="../images/calendar.svg" width="15" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gender <span class="mandatory">*</span></label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Male</button>
                                            <button type="button" class="col btn btn-primary ml-1">Female</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile</label>
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
    
    <?php include '../delete-popup.php';?>

    <?php include 'master-scripts.php';?>
    <script>
    $(document).ready(function(){
        $('.toggle-filter').click(function() {
            $('.filter-panel').toggleClass('filter-slidein');
            $('.filter-panel-overlay').toggleClass('show-overlay');
        });
        $('.filter-panel-overlay').click(function(){
            $('.filter-panel').toggleClass('filter-slidein');
            $('.filter-panel-overlay').toggleClass('show-overlay');
        });
    });
</script>
</body>
</html>