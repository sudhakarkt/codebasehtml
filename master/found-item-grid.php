<!doctype html>
<html lang="en">
<!-- jQuery v3.3.1 -->
<script src="../js/jquery-3.3.1.min.js"></script>
<?php include 'master-head-files.php';?>
<style>
    .item-detail-grid-wrapper .col {
        width: 20%;
    }

    .item-detail-grid {
        box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
    }

    .found-item-img {
        width: 100%;
        height: 200px;
        position: relative;
    }

    .found-item-img img {
        display: block;
        opacity: 1;
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%,-50%);
        transform: translate(-50%,-50%);
    }

    .grid-details {
        margin: 0px;
        padding: 10px 0px;
    }

    .item-detail-grid p {
        margin: 0px;
    }

    .item-detail-grid .btn {
        min-width: 75px;
        border-radius: 4px;
    }
</style>
<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <!-- Main Container -->
        <div class="container-fluid pr-5">
            <?php include 'toaster.php';?>
            <h2 class="title">Found Item</h2>
            <div class="main-container">
                <div class="row item-detail-grid-wrapper">
                    <div class="col">
                        <div class="item-detail-grid">
                            <div class="found-item-img">
                                <img src="https://www.filmibeat.com/ph-big/2019/11/darbar_157482921710.jpg" />
                            </div>
                            <div class="row grid-details">
                                <div class="col-md-7">
                                    <p>Location: Chennai</p>
                                    <p>Time: 12: 05 PM</p>
                                </div>
                                <div class="col-md-5 text-right align-items-center">
                                    <button class="btn btn-primary">Return</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-detail-grid">
                            <div class="found-item-img">
                                <img src="https://www.filmibeat.com/ph-big/2019/11/darbar_157482921710.jpg" />
                            </div>
                            <div class="row grid-details">
                                <div class="col-md-7">
                                    <p>Location: Chennai</p>
                                    <p>Time: 12: 05 PM</p>
                                </div>
                                <div class="col-md-5 text-right align-items-center">
                                    <button class="btn btn-primary">Return</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-detail-grid">
                            <div class="found-item-img">
                                <img src="https://cdn4.iconfinder.com/data/icons/contact-us-19/48/35-512.png" />
                            </div>
                            <div class="row grid-details">
                                <div class="col-md-7">
                                    <p>Location: Chennai</p>
                                    <p>Time: 12: 05 PM</p>
                                </div>
                                <div class="col-md-5 text-right align-items-center">
                                    <button class="btn btn-primary">Return</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-detail-grid">
                            <div class="found-item-img">
                                <img src="https://www.filmibeat.com/ph-big/2019/11/darbar_157482921710.jpg" />
                            </div>
                            <div class="row grid-details">
                                <div class="col-md-7">
                                    <p>Location: Chennai</p>
                                    <p>Time: 12: 05 PM</p>
                                </div>
                                <div class="col-md-5 text-right align-items-center">
                                    <button class="btn btn-primary">Return</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item-detail-grid">
                            <div class="found-item-img">
                                <img src="https://www.filmibeat.com/ph-big/2019/11/darbar_157482921710.jpg" />
                            </div>
                            <div class="row grid-details">
                                <div class="col-md-7">
                                    <p>Location: Chennai</p>
                                    <p>Time: 12: 05 PM</p>
                                </div>
                                <div class="col-md-5 text-right align-items-center">
                                    <button class="btn btn-primary">Return</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <?php include 'scripts.php';?>

<script>
    
</script>

</body>
</html>