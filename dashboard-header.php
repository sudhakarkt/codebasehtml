<header class="master-header">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-md-2 col-6">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.svg" class="img-fluid" alt="Codebase" /></a>
                </div>
            </div>
            <div class="col-md-10 col-6 right-top-bar-cont">
                <div class="right-top-bar">
                    
                    <?php include 'settings-header.php';?>
                    
                    <div class="dropdown login-section">
                        <span class="user-icon"><img src="images/user.svg" width="25" /></span>
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
    </div>
</header>