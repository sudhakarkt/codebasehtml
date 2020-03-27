<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid' ],
        defaultDate: new Date(),
        contentHeight: 520,
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        events: [
            {
            title: 'All Day Event',
            start: '2019-07-01'
            },
            {
            title: 'Long Event',
            title1: 'Long Event1',
            start: '2019-07-07',
            end: '2019-07-10'
            },
            {
            groupId: 999,
            title: 'Repeating Event',
            start: '2019-07-09T16:00:00'
            },
            {
            groupId: 999,
            title: 'Repeating Event',
            start: '2019-07-16T16:00:00'
            },
            {
            title: 'Conference',
            start: '2019-07-11',
            end: '2019-07-11'
            },
            {
            title: 'Meeting',
            start: '2019-07-12T10:30:00',
            end: '2019-07-12T12:30:00'
            },
            {
            title: 'Meeting',
            start: '2019-07-12T10:30:00',
            end: '2019-07-12T12:30:00'
            },
            {
            title: 'Birthday Party',
            start: '2019-07-13T07:00:00'
            },
            {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2019-07-28',
            end: '2019-07-29'
            }
        ]
        });
    
        calendar.render();
    });
</script>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">Event Position</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Event Position Modal -->
    <div class="modal fade" id="AddEventPositionModal" tabindex="-1" role="dialog" aria-labelledby="AddEventPositionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="AddEventPositionModalLabel">Add Event Position</h5>
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
                                        <label>Event Position <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Call Sign <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
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