<?php
    session_start();
    $imageUser = '';
    if(isset($_SESSION['user_image'])){
        $imageUser = $_SESSION['user_image'];
    }
?>
<nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Hotel Giant Administration</a>
</div>
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img id="userImage" src="users-images/<?php echo $imageUser; ?>"></a>
        <ul class="dropdown-menu">
            <li class="dropdown-menu-header text-center">
                <strong>Account</strong>
            </li>
            <li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
            <li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
            <li class="dropdown-menu-header text-center">
                <strong>Settings</strong>
            </li>
            <li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
            <li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
            <li class="divider"></li>
            <li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
            <li class="m_2"><a href="includes/logout.php"><i class="fa fa-lock"></i> Logout</a></li>
        </ul>
    </li>
</ul>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-laptop nav_icon"></i>Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="user.php?source=view_all_users">View All Users</a>
                    </li>
                    <li>
                        <a href="user.php?source=add_user">Add a User</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bed nav_icon"></i>Rooms<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="room.php?source=view_all_rooms">View All Rooms</a>
                    </li>
                    <li>
                        <a href="room.php?source=add_room">Add a Room</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-building nav_icon"></i>Hotel Enquiries<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="inbox.php">View All Enquiries</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-glass nav_icon"></i>Restaurants<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="restaurant.php?source=add_restaurant">Add a Restaurant</a>
                        <a href="restaurant.php?source=view_all_restaurants">View All Restaurants</a>
                        <a href="restaurant.php?source=view_all_enquiries">View All Enquiries</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-music nav_icon"></i>Events<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="event.php?source=add_event">Add Events</a>
                        <a href="event.php?source=view_all_events">View All Events</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav>