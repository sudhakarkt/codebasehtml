<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <div class="main-container dashboard-container-tab">
                <div class="row">
                    <div class="col">
                        <div class="timeline-container">
                            <span class="timeline-activity-bg"></span>
                            <div class="col timeline-inner-container">
                                <span class="timeline-progressbar-bg"></span>
                                <span class="timeline-progressbar-status"></span>
                                <div class="row timeline-content-row">
                                    <div class="col timeline-states">
                                        <span>Actual</span>
                                        <span>Planned</span>
                                    </div>
                                    <div class="col timeline-states">
                                        <span class="timeline-activity">Day Start</span>
                                        <span class="timeline-actual">08:30 am</span>
                                        <span class="progresshandle delayed"></span>
                                        <span class="timeline-planned">08:00 am</span>
                                    </div>
                                    <div class="col timeline-states">
                                        <span class="timeline-activity">PEAP's Report</span>
                                        <span class="timeline-actual">08:30 am</span>
                                        <span class="progresshandle partly"></span>
                                        <span class="timeline-planned">08:00 am</span>
                                    </div>
                                    <div class="col timeline-states">
                                        <span class="timeline-activity">Open Gates</span>
                                        <span class="timeline-actual">08:30 am</span>
                                        <span class="progresshandle exacttime"></span>
                                        <span class="timeline-planned">08:00 am</span>
                                    </div>
                                    <div class="col timeline-states">
                                        <span class="timeline-activity">Kick Off</span>
                                        <span class="timeline-actual">08:30 am</span>
                                        <span class="progresshandle handle"></span>
                                        <span class="timeline-planned">08:00 am</span>
                                    </div>
                                    <div class="col timeline-states">
                                        <span class="timeline-activity">Mid Break</span>
                                        <span class="timeline-actual">08:30 am</span>
                                        <span class="progresshandle handle"></span>
                                        <span class="timeline-planned">08:00 am</span>
                                    </div>
                                    <div class="col timeline-states">
                                        <span class="timeline-activity">Final Whistle</span>
                                        <span class="timeline-actual">08:30 am</span>
                                        <span class="progresshandle handle"></span>
                                        <span class="timeline-planned">08:00 am</span>
                                    </div>
                                    <div class="col timeline-states">
                                        <span class="timeline-activity">Debrief</span>
                                        <span class="timeline-actual">08:30 am</span>
                                        <span class="progresshandle handle"></span>
                                        <span class="timeline-planned">08:00 am</span>
                                    </div>
                                    <div class="col timeline-states">
                                        <span class="timeline-activity">Close Gates</span>
                                        <span class="timeline-actual">08:30 am</span>
                                        <span class="progresshandle handle"></span>
                                        <span class="timeline-planned">08:00 am</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mb-4">
                    <div class="col-md-3 pl-5 pr-5">
                        <div class="incident-container ml-3 mr-3">
                            <h3>INCIDENTS</h3>
                            <div class="incident-val-cont">
                                <div class="count-state"><span class="value color-orange">12</span><span class="value-state color-orange">Open</span></div>
                                <div class="count-bar"><span>/</span></div>
                                <div class="count-state outof"><span class="value">40</span><span class="value-state">Reported</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pl-5 pr-5">
                        <div class="incident-container ml-3 mr-3">
                            <h3>EVENT CHECKLIST</h3>
                            <div class="incident-val-cont">
                                <div class="count-state"><span class="value color-cyan">45</span><span class="value-state color-cyan">Checked</span></div>
                                <div class="count-bar"><span>/</span></div>
                                <div class="count-state outof"><span class="value">48</span><span class="value-state">Total</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pl-5 pr-5">
                        <div class="incident-container ml-3 mr-3">
                            <h3>STEWARDS</h3>
                            <div class="incident-val-cont">
                                <div class="count-state"><span class="value color-green">1200</span><span class="value-state color-green">Reported</span></div>
                                <div class="count-bar"><span>/</span></div>
                                <div class="count-state outof"><span class="value">2000</span><span class="value-state">Requirement</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 pl-5 pr-5">
                        <div class="incident-container ml-3 mr-3">
                            <h3>CROWD</h3>
                            <div class="incident-val-cont">
                                <div class="count-state"><span class="value color-purple">25000</span><span class="value-state color-purple">Ingress</span></div>
                                <div class="count-bar"><span>/</span></div>
                                <div class="count-state outof"><span class="value">50000</span><span class="value-state">Sales</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="table-title">Incident Summary</h4>
                        <div class="table-responsive incident-summary">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width:25%">Incident Category</th>
                                        <th style="width:15%">Status 1</th>
                                        <th style="width:15%">Status 2</th>
                                        <th style="width:15%">Status 3</th>
                                        <th style="width:15%">Open</th>
                                        <th style="width:15%">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Medical</td>
                                        <td>Statuts 1</td>
                                        <td>Statuts 1</td>
                                        <td>Statuts 1</td>
                                        <td>20</td>
                                        <td>45</td>
                                    </tr>
                                    <tr>
                                        <td>Safety</td>
                                        <td>Statuts 1</td>
                                        <td>Statuts 1</td>
                                        <td>Statuts 1</td>
                                        <td>20</td>
                                        <td>45</td>
                                    </tr>
                                    <tr>
                                        <td>Facilities</td>
                                        <td>Statuts 1</td>
                                        <td>Statuts 1</td>
                                        <td>Statuts 1</td>
                                        <td>20</td>
                                        <td>45</td>
                                    </tr>
                                    <tr>
                                        <td>Access &amp; Control</td>
                                        <td>Statuts 1</td>
                                        <td>Statuts 1</td>
                                        <td>Statuts 1</td>
                                        <td>20</td>
                                        <td>45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="table-title">Live Feed</h4>
                        <div class="live-feed-container">
                            <ul>
                                <li class="pinned">So Briefing</li>
                                <li>Key Text 1</li>
                                <li>Alert/Notification</li>
                                <li>Safety</li>
                                <li>Medical</li>
                                <li>Incident</li>
                                <li>Public Announcement</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="table-title">Live Feed</h4>
                        <div class="live-feed-container">
                            <ul>
                                <li>So Briefing</li>
                                <li>Key Text 1</li>
                                <li>Alert/Notification</li>
                                <li>Safety</li>
                                <li>Medical</li>
                                <li>Incident</li>
                                <li>Public Announcement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'master-scripts.php';?>

</body>
</html>