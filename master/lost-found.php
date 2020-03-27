<!doctype html>
<html lang="en">
<!-- jQuery v3.3.1 -->
<script src="../js/jquery-3.3.1.min.js"></script>
<?php include 'master-head-files.php';?>
<style>
    .tab-title span {
        background-color: #4993a0;
        display: inline-block;
        padding: 5px;
        border-radius: 4px;
        cursor: pointer;
        color: #FFF;
        font-size: 17px;
        min-width: 100px;
        text-align: center;
        transition: all ease 0.5s;
    }

    .tab-title span:hover {
        background-color: #76aeb8;
    }

    .tab-title span.active {
        background-color: #1a6a78;
    }

    .found-item-container, .lost-item-container {
        display: none;
    }

    .show-lost-found-item {
        display: block;
    }

    .height-in-kg {
        max-width: 35px;
        padding: 0px;
    }

    .height-in-pounds {
        max-width: 65px;
        padding-left: 0px;
    }

    .weight-in-feet {
        max-width: 30px;
        padding: 0px;
    }

    .weight-in-inch {
        max-width: 80px;
        padding: 0px;
    }

    .weight-in-cm {
        max-width: 40px;
        padding: 0px;
    }
    
</style>
<body>

    <?php include 'master-header.php';?>

    <!-- Wrapper -->
    <section>
        <!-- Main Container -->
        <div class="container-fluid pr-5">
            <?php include 'toaster.php';?>
            <h2 class="title tab-title"><span class="found-item active">Found Item</span> <span  class="lost-item">Lost Item</span></h2>
            <div class="main-container found-item-container show-lost-found-item">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-check-inline">
                                <label class="radio-container checked">Object
                                    <input type="radio" name="radio" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="radio-container">Vehicle
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="radio-container">Person
                                    <input type="radio" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="sub-title">Object</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Item Category</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Northern Eastern</option>
                                <option>Middle East</option>
                                <option>South East</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sub Category</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Northern Eastern</option>
                                <option>Middle East</option>
                                <option>South East</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Where was it found</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Whene was it found</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Where was it found</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <h4 class="sub-title">Found Person Details</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Proof Id<span class="mandatory">*</span></label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Height</label>
                            <div class="row align-items-center">
                                <div class="col"><input type="number" class="form-control" /></div>
                                <div class="col height-in-kg"><span>Kg</span></div>
                                <div class="col"><input type="number" class="form-control" /></div>
                                <div class="col height-in-pounds"><span>Pounds</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Weight</label>
                            <div class="row align-items-center">
                                <div class="col"><input type="number" class="form-control" /></div>
                                <div class="col weight-in-feet">ft</div>
                                <div class="col pl-0"><input type="number" class="form-control" /></div>
                                <div class="col weight-in-inch">inches (or)</div>
                                <div class="col pl-0"><input type="number" class="form-control" /></div>
                                <div class="col weight-in-cm">cm</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Upload Proof</label>
                            <input type="file" class="form-control fileupload" id="customFile">
                            <label class="custom-file-label" for="customFile"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-container lost-item-container">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-check-inline">
                                <label class="radio-container checked">Object
                                    <input type="radio" name="radio1" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="radio-container">Vehicle
                                    <input type="radio" name="radio1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="radio-container">Person
                                    <input type="radio" name="radio1">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="sub-title">Object</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Item Category</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Northern Eastern</option>
                                <option>Middle East</option>
                                <option>South East</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sub Category</label>
                            <select class="form-control">
                                <option>Select</option>
                                <option>Northern Eastern</option>
                                <option>Middle East</option>
                                <option>South East</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Where was it found</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Whene was it found</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Where was it found</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <h4 class="sub-title">Lost Person Details</h4>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Proof Id<span class="mandatory">*</span></label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Upload Proof</label>
                            <input type="file" class="form-control fileupload" id="customFile">
                            <label class="custom-file-label" for="customFile"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <?php include 'scripts.php';?>

<script>

    $('.tab-title span').click(function() {
        $('.tab-title span').removeClass('active');
        $(this).toggleClass('active');
    });

    $('.tab-title span').click(function() {
        $('.found-item-container').toggleClass('show-lost-found-item');
        $('.lost-item-container').toggleClass('show-lost-found-item');
    });

    $('.radio-container input').click(function(){
        $('.radio-container input').parent().removeClass('checked');
        $(this).parent().addClass('checked');
    });
    
</script>

</body>
</html>