<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php
include "./core/head.php";
?>
<style>
    #loading {
        display: none;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    #calendar {
        max-width: 1000px;
        margin: 0 auto;
    }

</style>

<body>

<?php
include "./core/nav.php";
?>

<div class="container-fluid">
    <div class="row">
        <?php
        include "./core/sidebar.php";
        ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <div id='loading'>loading...</div>

            <div id='calendar'></div>
            <script src='./assets/lib/fullcalendar-3.8.0/lib/jquery.min.js'></script>
            <script>

                $(document).ready(function() {

                    $('#calendar').fullCalendar({

                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,listYear'
                        },

                        displayEventTime: false, // don't show the time column in list view

                        // THIS KEY WON'T WORK IN PRODUCTION!!!
                        // To make your own Google API key, follow the directions here:
                        // http://fullcalendar.io/docs/google_calendar/
                        googleCalendarApiKey: 'AIzaSyDcnW6WejpTOCffshGDDb4neIrXVUA1EAE',

                        // US Holidays
                        events: 'kr.south_korea#holiday@group.v.calendar.google.com',

                        eventClick: function(event) {
                            // opens events in a popup window
                            window.open(event.url, 'gcalevent', 'width=700,height=600');
                            return false;
                        },

                        loading: function(bool) {
                            $('#loading').toggle(bool);
                        }

                    });

                });

            </script>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="./assets/lib/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>

<link href='./assets/lib/fullcalendar-3.8.0/fullcalendar.min.css' rel='stylesheet' />
<link href='./assets/lib/fullcalendar-3.8.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='./assets/lib/fullcalendar-3.8.0/lib/moment.min.js'></script>

<script src='./assets/lib/fullcalendar-3.8.0/fullcalendar.min.js'></script>
<script src='./assets/lib/fullcalendar-3.8.0/gcal.min.js'></script>
<script src='./assets/lib/fullcalendar-3.8.0/gcal.min.js'></script>
</body>
</html>
