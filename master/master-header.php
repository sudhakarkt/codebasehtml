<header class="master-header">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-md-2 col-6">
                <div class="logo">
                    <a href="../index.php"><img src="../images/logo.svg" class="img-fluid" alt="Codebase" /></a>
                </div>
            </div>
            <div class="col-md-10 col-6 right-top-bar-cont">
                <div class="right-top-bar">

                <?php include 'settings-header.php';?>

                <div class="dropdown login-section">
                    <span class="user-icon"><img src="../images/user.svg" width="25" /></span>
                    <span class="username">Administrator</span>
                    <span class="drop-menu-arrow" id="login-section" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons">keyboard_arrow_down</i></span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="login-section">
                        <a class="dropdown-item" href="change-password.php"><i class="material-icons">lock_open</i>Change Password</a>
                        <a class="dropdown-item" href="login.php"><i class="material-icons">power_settings_new</i>Logout</a>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <div class="menu">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Select Event</a></li>
                        <li class="nav-item"><a class="nav-link menu-dashboard active" href="javascript:void(0);">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link menu-events" href="javascript:void(0);">Events</a></li>
                        <li class="nav-item"><a class="nav-link menu-settings dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);">Settings</a>
                            <div class="dropdown-menu master-menu container">    
                            <div class="row m-0">
                                <div class="col">
                                    <a class="menu-title" href="javascript:void(0);">Internal</a>
                                    <a class="" href="employees.php">Departments</a>
                                    <a class="" href="employees.php">Employee Category</a>
                                    <a class="" href="employees.php">Employees</a>
                                    <a class="" href="event-position.php">Event Positions</a>
                                </div>
                                <div class="col">
                                    <a class="menu-title" href="javascript:void(0);">Venue</a>
                                    <a class="" href="peaps-template.php">Sections</a>
                                    <a class="" href="peaps-template.php">Floors</a>
                                    <a class="" href="peaps-template.php">Zones</a>
                                </div>
                                <div class="col">
                                    <a class="menu-title" href="javascript:void(0);">Event</a>
                                    <a class="" href="checklist.php">Event Categories</a>
                                    <a class="" href="checklist.php">Event Template</a>
                                    <a class="" href="checklist.php">Itinerary Templates</a>
                                    <a class="" href="checklist.php">Itinerary Items</a>
                                    <a class="" href="event-position.php">PEAP'a Templates</a>
                                </div>
                                <div class="col">
                                    <a class="menu-title" href="javascript:void(0);">Stocks</a>
                                    <a class="" href="event-position.php">Units</a>
                                    <a class="" href="event-position.php">Stock Castegory</a>
                                    <a class="" href="event-position.php">Stock Sub Castegory</a>
                                    <a class="" href="event-position.php">Stock</a>
                                </div>
                                <div class="col">
                                    <a class="menu-title" href="javascript:void(0);">External</a>
                                    <a class="" href="event-position.php">Vendors</a>
                                    <a class="" href="event-position.php">Stewards</a>
                                    <a class="" href="event-position.php">Stewards Positions</a>
                                    <a class="" href="event-position.php">Position Templates</a>
                                </div>
                            </div>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link menu-reports" href="javascript:void(0);">Reports</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>