<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<body>
<!-- Wrapper -->
<div class="wrapper max-height align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 login-box">
                <div class="row mb-4">
                    <div class="offset-md-2 col-md-8 text-center">
                        <img src="images/login-logo.svg" width="200" class="img-fluid m-auto">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="text" placeholder="User Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                            <a href="forget-password.php" class="forget-password">Forget Password?</a>
                        </div>
                        <div class="text-right">
                            <!-- <button type="button" class="btn">Submit</button> -->
                            <a href="index.php" class="btn d-block">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'master-scripts.php';?>

</body>
</html>