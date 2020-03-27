<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid pr-5">
            <h2 class="title">Event Check List</h2>
            <div class="main-container">
                <div class="minheight">
                    <div class="middle-text">Please <a href="javascript:void(0);" class="link-underline" data-toggle="modal" data-target="#EventChecklistModal">Select Template </a>to view checklist</div>
                </div>
            </div>
        </div>

        <?php include 'events-menu.php';?>
        
    </section>
    
    <!-- Event Checklist Modal -->
    <div class="modal fade" id="EventChecklistModal" tabindex="-1" role="dialog" aria-labelledby="EventChecklistModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EventChecklistModalLabel">Template</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-3">
                            <div class="form-group m-0">
                                <label>Select Template</label>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-end">
                            <button type="button" class="btn btn-primary border-radius">Choose</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse-group">
                                <div class="controls text-right mb-3">
                                    <button class="btn btn-primary open-button" type="button">Open all</button>
                                    <button class="btn btn-primary close-button" type="button">Close all</button>
                                </div>
                                <div id="accordion">
                                    <div class="card">
                                    <div class="card-header active">
                                        <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">Stock<i class="material-icons">arrow_drop_down</i></a>
                                    </div>

                                    <div id="collapseOne" class="collapse show">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" style="width:5%;">#</th>
                                                            <th style="width:30%;">Requirement</th>
                                                            <th style="width:20%;">Mandatory</th>
                                                            <th style="width:20%;">Priority</th>
                                                            <th class="text-center" style="width:25%;">Expected</th>
                                                            <th class="text-center" style="width:5%;"><a href="javascript:void(0);" class="action" title="Action"><img src="images/add-item.svg" width="25"></a></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>PDAs</td>
                                                            <td><span class="danger-alert">Mandatory</span></td>
                                                            <td><span class="danger-alert">High Priority</span></td>
                                                            <td class="text-center">10</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>Team 1</td>
                                                            <td><span class="warning-alert">Optional</span></td>
                                                            <td><span class="success-alert">Low Priority</span></td>
                                                            <td class="text-center">10</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>PDAs</td>
                                                            <td><span class="danger-alert">Mandatory</span></td>
                                                            <td><span class="success-alert">Low Priority</span></td>
                                                            <td class="text-center">10</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>Team 1</td>
                                                            <td><span class="warning-alert">Optional</span></td>
                                                            <td><span class="danger-alert">High Priority</span></td>
                                                            <td class="text-center">1200</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true">Equipments<i class="material-icons">arrow_drop_down</i></a>
                                    </div>
                                    <div id="collapseTwo" class="collapse">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" style="width:5%;">#</th>
                                                            <th style="width:30%;">Requirement</th>
                                                            <th style="width:20%;">Mandatory</th>
                                                            <th style="width:20%;">Priority</th>
                                                            <th class="text-center" style="width:25%;">Expected</th>
                                                            <th class="text-center" style="width:5%;"><a href="javascript:void(0);" class="action" title="Action"><img src="images/add-item.svg" width="25"></a></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>PDAs</td>
                                                            <td><span class="danger-alert">Mandatory</span></td>
                                                            <td><span class="danger-alert">High Priority</span></td>
                                                            <td class="text-center">10</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>Team 1</td>
                                                            <td><span class="warning-alert">Optional</span></td>
                                                            <td><span class="success-alert">Low Priority</span></td>
                                                            <td class="text-center">10</td>
                                                            <td></td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>PDAs</td>
                                                            <td><span class="danger-alert">Mandatory</span></td>
                                                            <td><span class="success-alert">Low Priority</span></td>
                                                            <td class="text-center">10</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>Team 1</td>
                                                            <td><span class="warning-alert">Optional</span></td>
                                                            <td><span class="danger-alert">High Priority</span></td>
                                                            <td class="text-center">1200</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true">Medical <i class="material-icons">arrow_drop_down</i></a>
                                    </div>
                                    <div id="collapseThree" class="collapse">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center" style="width:5%;">#</th>
                                                            <th style="width:30%;">Requirement</th>
                                                            <th style="width:20%;">Mandatory</th>
                                                            <th style="width:20%;">Priority</th>
                                                            <th class="text-center" style="width:25%;">Expected</th>
                                                            <th class="text-center" style="width:5%;"><a href="javascript:void(0);" class="action" title="Action"><img src="images/add-item.svg" width="25"></a></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>PDAs</td>
                                                            <td><span class="danger-alert">Mandatory</span></td>
                                                            <td><span class="danger-alert">High Priority</span></td>
                                                            <td class="text-center">10</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>Team 1</td>
                                                            <td><span class="warning-alert">Optional</span></td>
                                                            <td><span class="success-alert">Low Priority</span></td>
                                                            <td class="text-center">10</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>PDAs</td>
                                                            <td><span class="danger-alert">Mandatory</span></td>
                                                            <td><span class="success-alert">Low Priority</span></td>
                                                            <td class="text-center">10</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>Team 1</td>
                                                            <td><span class="warning-alert">Optional</span></td>
                                                            <td><span class="danger-alert">High Priority</span></td>
                                                            <td class="text-center">1200</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
        </div>
    </div>
    
    <?php include 'scripts.php';?>

</body>
</html>