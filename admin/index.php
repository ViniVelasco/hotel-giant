<?php require_once("includes/header_admin.php"); ?>
<?php require_once("includes/db.php"); ?>

    <!-- Navigation -->
<?php require_once("includes/navigation.php"); ?>

<!-- Couting registers in database -->
<?php
$query = "SELECT * FROM rooms";
$rooms = mysqli_query($connection, $query);
$rooms_count = mysqli_num_rows($rooms);

$query = "SELECT * FROM restaurants";
$restaurants = mysqli_query($connection, $query);
$restaurants_count = mysqli_num_rows($restaurants);

$query = "SELECT * FROM events";
$events = mysqli_query($connection, $query);
$events_count = mysqli_num_rows($events);

$query = "SELECT * FROM users";
$users = mysqli_query($connection, $query);
$users_count = mysqli_num_rows($events);

?>

    <div id="page-wrapper">
        <div class="graphs">
            <div class="col_3">
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <a href="room.php">
                            <i class="pull-left fa fa-bed icon-rounded"></i>
                        </a>
                        <div class="stats">
                            <h5><strong><?php echo $rooms_count; ?></strong></h5>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <a href="user.php">
                            <i class="pull-left fa fa-users user1 icon-rounded"></i>
                        </a>
                        <div class="stats">
                            <h5><strong><?php echo $users_count; ?></strong></h5>
                            <span>Users</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 widget widget1">
                    <div class="r3_counter_box">
                        <a href="restaurant.php">
                            <i class="pull-left fa fa-bed user2 icon-rounded"></i>
                        </a>
                        <div class="stats">
                            <h5><strong><?php echo $restaurants_count; ?></strong></h5>
                            <span>Restaurants</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 widget">
                    <div class="r3_counter_box">
                        <a href="event.php">
                        <i class="pull-left fa fa-music dollar1 icon-rounded"></i>
                        </a>
                        <div class="stats">
                            <h5><strong><?php echo $events_count; ?></strong></h5>
                            <span>Events</span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-md-12 col_4">
                <div class="map_container">
                    <div id="vmap">
                        <script type="text/javascript" src="js/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load('current', {'packages': ['bar']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {
                                var data = google.visualization.arrayToDataTable([
                                    ['Data', 'Count'],
                                    <?php
                                    $element_text = ['Rooms', 'Restaurants', 'Events', 'Users'];
                                    $element_count = [$rooms_count, $restaurants_count, $events_count, $users_count];
                                    for($i = 0; $i < 4; $i++){

                                        echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";

                                    }
                                    ?>
                                ]);

                                var options = {
                                    chart: {
                                        title: '',
                                        subtitle: '',
                                    }
                                };

                                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                                chart.draw(data, google.charts.Bar.convertOptions(options));
                            }
                        </script>
                        <div id="columnchart_material" style="width: auto; height: 500px;"></div>
                    </div>
                </div>
            </div>



            <div class="clearfix"></div>
            <div class="col_1">
                <div class="col-md-4 span_7">
                    <div class="cal1 cal_2">
                        <div class="clndr">
                            <div class="clndr-controls">
                                <div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div>
                                <div class="month">July 2015</div>
                                <div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div>
                            </div>
                            <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                <tr class="header-days">
                                    <td class="header-day">S</td>
                                    <td class="header-day">M</td>
                                    <td class="header-day">T</td>
                                    <td class="header-day">W</td>
                                    <td class="header-day">T</td>
                                    <td class="header-day">F</td>
                                    <td class="header-day">S</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="day adjacent-month last-month calendar-day-2015-06-28">
                                        <div class="day-contents">28</div>
                                    </td>
                                    <td class="day adjacent-month last-month calendar-day-2015-06-29">
                                        <div class="day-contents">29</div>
                                    </td>
                                    <td class="day adjacent-month last-month calendar-day-2015-06-30">
                                        <div class="day-contents">30</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-01">
                                        <div class="day-contents">1</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-02">
                                        <div class="day-contents">2</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-03">
                                        <div class="day-contents">3</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-04">
                                        <div class="day-contents">4</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day calendar-day-2015-07-05">
                                        <div class="day-contents">5</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-06">
                                        <div class="day-contents">6</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-07">
                                        <div class="day-contents">7</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-08">
                                        <div class="day-contents">8</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-09">
                                        <div class="day-contents">9</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-10">
                                        <div class="day-contents">10</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-11">
                                        <div class="day-contents">11</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day calendar-day-2015-07-12">
                                        <div class="day-contents">12</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-13">
                                        <div class="day-contents">13</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-14">
                                        <div class="day-contents">14</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-15">
                                        <div class="day-contents">15</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-16">
                                        <div class="day-contents">16</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-17">
                                        <div class="day-contents">17</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-18">
                                        <div class="day-contents">18</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day calendar-day-2015-07-19">
                                        <div class="day-contents">19</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-20">
                                        <div class="day-contents">20</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-21">
                                        <div class="day-contents">21</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-22">
                                        <div class="day-contents">22</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-23">
                                        <div class="day-contents">23</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-24">
                                        <div class="day-contents">24</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-25">
                                        <div class="day-contents">25</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="day calendar-day-2015-07-26">
                                        <div class="day-contents">26</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-27">
                                        <div class="day-contents">27</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-28">
                                        <div class="day-contents">28</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-29">
                                        <div class="day-contents">29</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-30">
                                        <div class="day-contents">30</div>
                                    </td>
                                    <td class="day calendar-day-2015-07-31">
                                        <div class="day-contents">31</div>
                                    </td>
                                    <td class="day adjacent-month next-month calendar-day-2015-08-01">
                                        <div class="day-contents">1</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stats-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">Browser Stats</h4>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <li>Google Chrome
                                <div class="text-success pull-right">12%<i class="fa fa-level-up"></i></div>
                            </li>
                            <li>Firefox
                                <div class="text-success pull-right">15%<i class="fa fa-level-up"></i></div>
                            </li>
                            <li>Internet Explorer
                                <div class="text-success pull-right">18%<i class="fa fa-level-up"></i></div>
                            </li>
                            <li>Safari
                                <div class="text-danger pull-right">17%<i class="fa fa-level-down"></i></div>
                            </li>
                            <li>Opera
                                <div class="text-danger pull-right">10%<i class="fa fa-level-down"></i></div>
                            </li>
                            <li>Mobile &amp; tablet
                                <div class="text-success pull-right">14%<i class="fa fa-level-up"></i></div>
                            </li>
                            <li class="last">Others
                                <div class="text-success pull-right">5%<i class="fa fa-level-up"></i></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="span_11">
                <div class="col-md-6 col_4">
                    <!----Calender -------->
                    <link rel="stylesheet" href="css/clndr.css" type="text/css"/>
                    <script src="js/underscore-min.js" type="text/javascript"></script>
                    <script src="js/moment-2.2.1.js" type="text/javascript"></script>
                    <script src="js/clndr.js" type="text/javascript"></script>
                    <script src="js/site.js" type="text/javascript"></script>
                    <!----End Calender -------->
                </div>
                <div class="clearfix"></div>
            </div>
                <div class="clearfix"></div>
            </div>
        </div>


<?php require_once("includes/footer_admin.php"); ?>

