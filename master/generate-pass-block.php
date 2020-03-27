<!doctype html>
<html lang="en">
    
<?php include 'master-head-files.php';?>

<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <!-- Main Container -->
        <div class="container-fluid">
            <h2 class="title">Generate Pases</h2>
            <div class="main-container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-md-12">Event Name <span class="mandatory">*</span></label>
                            <div class="col-md-12">
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <label class="col-md-12">Zone <span class="mandatory">*</span></label>
                            <div class="col-md-12">
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="pass-container ml-0">
                            <div class="pass-upload-image">Upload Image</div>
                            <div class="pass-profile-details">
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>First Name Last Name</p>
                                        <p>Zone Name</p>
                                        <p>Agency</p>
                                        <p>Employee Code</p>
                                        <p>Name</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pass-profile-image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pass-image-block">
                                <div class="row">
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                </div>
                                <div class="row">
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                    <div class="col"><div class="pass-image-inner-block"></div></div>
                                </div>
                            </div>
                            <div class="pass-code-block">
                            <div class="row">
                                    <div class="col">upload image</div>
                                    <div class="col">QR Code</div>
                                    <div class="col">TRMARK</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-right mt-4">
                                <button type="button" class="btn btn-secondary">Cancel</button>
                                <button type="button" class="btn btn-primary ml-5">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'master-scripts.php';?>

</body>
</html>