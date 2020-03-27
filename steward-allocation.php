<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>
<style>
.switchh {
    width: 24px;
    height: 24px;
    background-color: #fcfcfc;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    color: #185f63;
    font-size: 13px;
    box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.48);
    border: 3px solid #398e92;
    font-weight: 600;
    cursor: pointer;
}

.Onn {
    border-color: red;
}
.disabledtr {
    opacity: 0.35;
}

.duty-start-click {
    background-color: #FFF;
    border: 1px solid #D5D5D5;
    display: block;
    width: 100%;
    padding: 5px 8px;
    cursor: text;
}

.open-time-container {
    display: flex;
    border: 1px solid transparent;
}

.open-time {
    border: 1px solid #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    position: relative;
}

.open-time .increase-decrease-container {
    display: flex !important;
    position: absolute;
    right: 0px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.25);
    padding: 5px;
    top: calc(100% + 4px);
    z-index: 9999;
}

.increase-decrease-container .increase-decrease {
    height: 30px;
    width: 50px;
}

.increase-decrease-container .form-control, .increase-decrease-container .btn {
    height: 30px;
    min-width: auto;
    line-height: 14px;
}

.inc-dec-value {
    width: 30px;
    display: inline-flex;
    align-items: center;
    background-color: #38787b;
    justify-content: center;
    color: white;
    font-size: 20px;
    font-weight: 600;
}

.minmax-value-header {
    padding: 0 5px;
    align-self: stretch;
    display: flex;
    align-items: center;
    font-weight: 600;
    color: #000;
    justify-content: center;
    max-width: 100px;
}

.minmax-value {
    padding: 0 5px;
    align-self: stretch;
    background-color: #FFF;
    border: 1px solid #d5d5d5;
    display: flex;
    align-items: center;
    font-weight: 600;
    color: #000;
    height: 35px;
    margin-bottom: 3px;
    justify-content: center;
    max-width: 100px;
}

.minmax-value-min {
    color: red;
}

.minmax-value-max {
    color: green;
}

</style>
<body>

    <?php include 'header.php';?>

    <!-- Wrapper -->
    <section class="slide-out">
        <!-- Body Content -->
        <div class="container-fluid pr-5">
            <?php include 'toaster.php';?>
            <h2 class="title">Steward Allocation</h2>
            <div class="main-container">
            <div class="row">
                <div class="col">
                    <div id="divChangeTemplateLink">
                        <div class="align-self-center text-right">
                            <p><span>Celebration Template</span>
                                <a href="javascript:void(0);" id="lnkSelectTemplate" data-toggle="modal" data-target="#exampleModal" class="link-underline">Change</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Events</label>
                            <input class="p-0 selectized" id="ddleventList" name="ddleventList" placeholder="select" type="text" value="176" tabindex="-1" style="display: none;"><div class="selectize-control p-0 single"><div class="selectize-input items full has-options has-items"><div class="item" data-value="176">Independence Day Celebration (15-08-19 to 15-08-19)</div><input type="text" autocomplete="off" tabindex="" id="ddleventList-selectized" style="width: 4px;"></div><div class="selectize-dropdown single p-0" style="display: none; width: 434px; top: 36px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                        </div>
                        <div class="invalid-feedback" id="EventNameMsg"></div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Vendors</label>
                            <input class="p-0 selectized" id="ddlVendorFilter" name="ddlVendorFilter" placeholder="select" type="text" value="" tabindex="-1" style="display: none;"><div class="selectize-control p-0 single"><div class="selectize-input items not-full has-options"><input type="text" autocomplete="off" tabindex="" id="ddlVendorFilter-selectized" placeholder="select" style="width: 35.8594px;"></div><div class="selectize-dropdown single p-0" style="display: none; width: 434px; top: 36px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Duty Start (T+/-)</label>
                                    <div class="d-flex">
                                        <div class="increase-decrease one" id="dutyStartAction">
                                            <span class="active">+</span>
                                            <span>-</span>
                                        </div>
                                        <input type="number" placeholder="hours" id="dutyStartHours" class="form-control col ml-3" max="9999" min="0" maxlength="4">
                                        <select class="form-control col ml-3" id="dutyStartMin">
                                                <option value="0">00</option>
                                                <option value="5">05</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                                <option value="30">30</option>
                                                <option value="35">35</option>
                                                <option value="40">40</option>
                                                <option value="45">45</option>
                                                <option value="50">50</option>
                                                <option value="55">55</option>
                                        </select>
                                        <button class="btn btn-primary mw-a ml-3" onclick="stPosition.UpdateDutyStart()">Apply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Duty End (T+/-)</label>
                                    <div class="d-flex">
                                        <div class="increase-decrease two" id="dutyEndAction">
                                            <span class="active">+</span>
                                            <span>-</span>
                                        </div>
                                        <input type="number" placeholder="hours" id="dutyEndHours" class="form-control col ml-3" max="9999" min="0" maxlength="4">
                                        <select class="form-control col ml-3" id="dutyEndMin">
                                                <option value="0">00</option>
                                                <option value="5">05</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                                <option value="30">30</option>
                                                <option value="35">35</option>
                                                <option value="40">40</option>
                                                <option value="45">45</option>
                                                <option value="50">50</option>
                                                <option value="55">55</option>
                                        </select>
                                        <button class="btn btn-primary mw-a ml-3" onclick="stPosition.UpdateDutyEnd()">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 hidecolumn mb-5">
                        <div class="stewards-menu mb-5">
                                <ul>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="58"> 1</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="71 ">1</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="146">1</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="85 ">11</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="77 ">test</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="59"> 2</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="72 ">1</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="12"> A</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="15 ">A</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="43 ">Floor A</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="123">a</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="44 ">Floor B</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="124">a</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="28 ">Test</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="45"> ASPTC</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="51 ">FASPTC</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="134">ZONE A</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="4">Yellow</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="135">ZONE B</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="1"> Club Wembley</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="79 ">2333</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="13 ">Floor 1</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="117">szone</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="2">Blue</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="113">test</a></li>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="136">a</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="4">Yellow</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="105">1</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="3 ">Level3</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="114">test</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="2">Blue</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="118">szone</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="20"> East Section 1</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="82 ">963</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="84 ">966333333</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="23 ">East Floor 1</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="2">Blue</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="112">Test zone 123</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="47"> Manchester</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="53 ">Manchester floor</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="138">Manchester Zone</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="75 ">rt</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="48"> Namea</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="78 ">234</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="54 ">floora</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="139">Zonea</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="55 ">floorb</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="140">zoneb</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown nodropdown txtSection" value="70"> sec</a>
                                            <ul>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="17"> Section 1</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="81 ">78</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="20 ">Level 1</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="2">Blue</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="111">test zone4</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="37"> Section 111</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="41 ">Floor 111</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="119">Zone 111</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="2">Blue</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="120">Zone 112</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="8"> Section a</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="83 ">96</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="10 ">floor a</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="18"> Section AAAA</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="21 ">Floor AAAA</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="38"> Section Aks</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="42 ">Floor Aks</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="122">Zone B</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="2">Blue</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="121">Zone A</a></li>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="129">Zone ff</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="3">Green</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="127">Zone cc</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="36"> Section Area</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="40 ">Floor Area</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="116">Zone Area</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="9"> Section B</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="11 ">Floor B</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="10"> Section C</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="12 ">Floor C</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown nodropdown txtSection" value="27"> Section Demo</a>
                                            <ul>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="24"> Section Llc</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="26 ">Floor Llc</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown nodropdown txtSection" value="23"> Section Ltd</a>
                                            <ul>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="34"> Section One</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="38 ">Floor One</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="32"> section Q</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="36 ">Floor Q</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="43"> Section SPT1</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="49 ">Floor SPT1</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="3">Green</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="131">Zone SPT1</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="4">Yellow</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="132">Zone SPT2</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="67"> Section TDC</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown   txtFloor active" value="87 ">Floor TDC</a>
                                                        <ul>
                                                                <li>
                                                                    <a href="javascript:void(0);" class="has-dropdown  txtQuadrant active" value="1">Red</a>
                                                                    <ul>
                                                                            <li><a href="javascript:void(0);" class="txtZone" value="154">Zone TDC 1</a></li>
                                                                    </ul>
                                                                </li>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="33"> Section W</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="37 ">Floor W</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown nodropdown txtSection" value="62"> t1</a>
                                            <ul>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown nodropdown txtSection" value="63"> t2</a>
                                            <ul>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="13"> Test Section</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="16 ">Level 1</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="2"> Wembley Arena</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="32 ">Floor</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="29 ">Floor Demo</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="4 ">level 4</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="5 ">level 5</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="2 ">Level2</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="30 ">Test</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown nodropdown txtSection" value="25"> Wembley Section</a>
                                            <ul>
                                            </ul>
                                        </li>
                                        <li class="secttxt">
                                            <a href="javascript:void(0);" class="has-dropdown  txtSection" value="21"> West Section 1</a>
                                            <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" class="has-dropdown  nodropdown txtFloor active" value="24 ">East Floor 1</a>
                                                        <ul>
                                                        </ul>
                                                    </li>
                                            </ul>
                                        </li>
                                </ul>
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <select class="FilterPositionDD formcontrol selectized" id="FilterPositionDD" name="FilterPositionDD" tabindex="-1" style="display: none;"><option value="" selected="selected"></option></select><div class="selectize-control FilterPositionDD formcontrol single"><div class="selectize-input items not-full has-options"><input type="select-one" autocomplete="off" tabindex="" id="FilterPositionDD-selectized" placeholder="Select" style="width: 37.3594px;"></div><div class="selectize-dropdown single FilterPositionDD formcontrol" style="display: none; width: 287.156px; top: 36px; left: 0px;"><div class="selectize-dropdown-content"></div></div></div>
                        </div>
                        <div class="form-group mb-5">
                            <button class="btn btn-primary col-md-12" onclick="stPosition.ClearFilter()">Clear Filter</button>
                        </div>

                    </div>
                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap table-fullwidth dataTable no-footer dtr-inline">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Section - Floor - Quadrant - Zone</th>
                                        <th>Position</th>
                                        <th>Event Role</th>
                                        <th>Certification</th>
                                        <th>Vendor/Employee</th>
                                        <th>Requested Qty.
                                            <span class="minmax-value-header">
                                                <span class="minmax-value-min">Min</span>
                                                /
                                                <span class="minmax-value-max"> Max</span>
                                            </span>
                                        </th>
                                        <th>Duty Start (T+/-)</th>
                                        <th>Duty End (T+/-)</th>
                                        <th>Duty Hours</th>
                                        <!-- <th>Applicable?</th> -->
                                        <th class="text-center"><a href="javascript:void(0);" class="action add-new-steward-management" title="Add"><img src="/images/add-item.svg" width="30"></a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><span class="switchh">1</span></td>
                                        <td>
                                            <p class="m-0">Section Name - Floor Name</P>
                                            <p class="pt-2 m-0">Quadrant Name - Zone Name</P>
                                        </td>
                                        <td>Position One</td>
                                        <td>Lead Safety Incharge</td>
                                        <td>Public safety c ...</td>
                                        <td>
                                            <select class="preferred-vendor form-control mb-2 selectized" id="preferred-vendor" name="[0].VendorId" tabindex="-1"><option value="16" selected="selected">A2121</option></select>
                                            <select class="preferred-vendor form-control selectized" id="preferred-vendor" name="[0].VendorId" tabindex="-1"><option value="16" selected="selected">A2121</option></select>
                                        </td>
                                        <td>
                                        <span class="minmax-value">
                                            <span class="minmax-value-min">1000</span>
                                            /
                                            <span class="minmax-value-max"> 9000</span>
                                        </span>
                                        <input type="text" style="max-width:100px;" value="2" class=" form-control" data-minreq="1" data-maxreq="1">
                                        </td>
                                        <td>
                                            <div class="open-time-container">
                                                <div class="increase-decrease-container d-none">
                                                    <div class="increase-decrease one" id="dutyStartAction">
                                                        <span class="active">+</span>
                                                        <span>-</span>
                                                    </div>
                                                    <input type="number" placeholder="hours" id="dutyStartHours" class="form-control col ml-3" style="width: 75px; height: 30px; padding: 4px 5px; padding-right: 10px;" max="9999" min="0" maxlength="4">
                                                    <select class="form-control col ml-3" style="width: 65px; height: 30px; padding: 4px 5px;" id="dutyStartMin">
                                                            <option value="0">00</option>
                                                            <option value="5">05</option>
                                                            <option value="10">10</option>
                                                            <option value="15">15</option>
                                                            <option value="20">20</option>
                                                            <option value="25">25</option>
                                                            <option value="30">30</option>
                                                            <option value="35">35</option>
                                                            <option value="40">40</option>
                                                            <option value="45">45</option>
                                                            <option value="50">50</option>
                                                            <option value="55">55</option>
                                                    </select>
                                                    <button class="btn btn-primary mw-a ml-3" onclick="stPosition.UpdateDutyStart()">Apply</button>
                                                </div>
                                                <span class="inc-dec-value">+</span>
                                                <span class="duty-start-click">48:15</span>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="open-time-container">
                                                <div class="increase-decrease-container d-none">
                                                    <div class="increase-decrease one" id="dutyStartAction">
                                                        <span class="active">+</span>
                                                        <span>-</span>
                                                    </div>
                                                    <input type="number" placeholder="hours" id="dutyStartHours" class="form-control col ml-3" style="width: 75px; height: 30px; padding: 4px 5px; padding-right: 10px;" max="9999" min="0" maxlength="4">
                                                    <select class="form-control col ml-3" style="width: 65px; height: 30px; padding: 4px 5px;" id="dutyStartMin">
                                                            <option value="0">00</option>
                                                            <option value="5">05</option>
                                                            <option value="10">10</option>
                                                            <option value="15">15</option>
                                                            <option value="20">20</option>
                                                            <option value="25">25</option>
                                                            <option value="30">30</option>
                                                            <option value="35">35</option>
                                                            <option value="40">40</option>
                                                            <option value="45">45</option>
                                                            <option value="50">50</option>
                                                            <option value="55">55</option>
                                                    </select>
                                                    <button class="btn btn-primary mw-a ml-3" onclick="stPosition.UpdateDutyStart()">Apply</button>
                                                </div>
                                                <span class="inc-dec-value">+</span>
                                                <span class="duty-start-click">48:15</span>
                                            </div>
                                        </td>
                                        <td>11:00</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0);" class="action clone-new-steward-management" title="Action" onclick="sm.CloneTheRecord(this)"><img src="/images/clone.svg" width="25" title="Clone the Record"></a></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><span class="switchh">1</span></td>
                                        <td>
                                            <p class="m-0">Section Name - Floor Name</P>
                                            <p class="pt-2 m-0">Quadrant Name - Zone Name</P>
                                        </td>
                                        <td>Position One</td>
                                        <td>Lead Safety Incharge</td>
                                        <td>Public safety c ...</td>
                                        <td>
                                            <select class="preferred-vendor form-control mb-2 selectized" id="preferred-vendor" name="[0].VendorId" tabindex="-1"><option value="16" selected="selected">A2121</option></select>
                                            <select class="preferred-vendor form-control selectized" id="preferred-vendor" name="[0].VendorId" tabindex="-1"><option value="16" selected="selected">A2121</option></select>
                                        </td>
                                        <td>
                                        <span class="minmax-value">
                                            <span class="minmax-value-min">1000</span>
                                            /
                                            <span class="minmax-value-max"> 9000</span>
                                        </span>
                                        <input type="text" style="max-width:100px;" value="2" class=" form-control" data-minreq="1" data-maxreq="1">
                                        </td>
                                        <td>
                                            <div class="open-time-container">
                                                <div class="increase-decrease-container d-none">
                                                    <div class="increase-decrease one" id="dutyStartAction">
                                                        <span class="active">+</span>
                                                        <span>-</span>
                                                    </div>
                                                    <input type="number" placeholder="hours" id="dutyStartHours" class="form-control col ml-3" style="width: 75px; height: 30px; padding: 4px 5px; padding-right: 10px;" max="9999" min="0" maxlength="4">
                                                    <select class="form-control col ml-3" style="width: 65px; height: 30px; padding: 4px 5px;" id="dutyStartMin">
                                                            <option value="0">00</option>
                                                            <option value="5">05</option>
                                                            <option value="10">10</option>
                                                            <option value="15">15</option>
                                                            <option value="20">20</option>
                                                            <option value="25">25</option>
                                                            <option value="30">30</option>
                                                            <option value="35">35</option>
                                                            <option value="40">40</option>
                                                            <option value="45">45</option>
                                                            <option value="50">50</option>
                                                            <option value="55">55</option>
                                                    </select>
                                                    <button class="btn btn-primary mw-a ml-3" onclick="stPosition.UpdateDutyStart()">Apply</button>
                                                </div>
                                                <span class="inc-dec-value">+</span>
                                                <span class="duty-start-click">48:15</span>
                                            </div>
                                        </td>
                                        <td>
                                        <div class="open-time-container">
                                                <div class="increase-decrease-container d-none">
                                                    <div class="increase-decrease one" id="dutyStartAction">
                                                        <span class="active">+</span>
                                                        <span>-</span>
                                                    </div>
                                                    <input type="number" placeholder="hours" id="dutyStartHours" class="form-control col ml-3" style="width: 75px; height: 30px; padding: 4px 5px; padding-right: 10px;" max="9999" min="0" maxlength="4">
                                                    <select class="form-control col ml-3" style="width: 65px; height: 30px; padding: 4px 5px;" id="dutyStartMin">
                                                            <option value="0">00</option>
                                                            <option value="5">05</option>
                                                            <option value="10">10</option>
                                                            <option value="15">15</option>
                                                            <option value="20">20</option>
                                                            <option value="25">25</option>
                                                            <option value="30">30</option>
                                                            <option value="35">35</option>
                                                            <option value="40">40</option>
                                                            <option value="45">45</option>
                                                            <option value="50">50</option>
                                                            <option value="55">55</option>
                                                    </select>
                                                    <button class="btn btn-primary mw-a ml-3" onclick="stPosition.UpdateDutyStart()">Apply</button>
                                                </div>
                                                <span class="inc-dec-value">+</span>
                                                <span class="duty-start-click">48:15</span>
                                            </div>
                                        </td>
                                        <td>11:00</td>
                                        <td class="text-center">
                                            <a href="javascript:void(0);" class="action clone-new-steward-management" title="Action" onclick="sm.CloneTheRecord(this)"><img src="/images/clone.svg" width="25" title="Clone the Record"></a></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col action-buttons">
                        <div class="form-group">
                            <div class="btn-group">
                                <a class="btn btn-secondary updatenext" href="javascript:void(0);">Cancel</a>
                            </div>
                            <div class="btn-group ml-3">
                                <a class="btn btn-primary updatenext" href="javascript:void(0);">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'events-menu.php';?>
        
    </section>
    
    <!-- Steward Allocation Modal -->
    <div class="modal fade" id="StewardAllocationModal" tabindex="-1" role="dialog" aria-labelledby="StewardAllocationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="StewardAllocationModalLabel">Allocate Steward</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ml-0 mr-0 mb-4">
                        <div class="col-md-2 steward-value">
                            <label>Vendor - </label>
                            Vendor 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Section - </label>
                            Section 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Floor - </label>
                            Floor 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Zone - </label>
                            Zone 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Position - </label>
                            Position 1
                        </div>
                        <div class="col-md-2 steward-value">
                            <label>Requested Quantity - </label>
                            10
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Employee ID</th>
                                            <th>Internal ID</th>
                                            <th>Login Name</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Mobile</th>
                                            <th>Proof Details</th>
                                            <th>Document No</th>
                                            <th>Proof Document</th>
                                            <th style="width:9%" class="text-right"><a href="javascript:void(0);" class="action additem" title=""><img src="images/add-item.svg" width="25" /></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>213</td>
                                            <td>34234</td>
                                            <td>Login Name 1</td>
                                            <td>Name 1</td>
                                            <td>Name 2</td>
                                            <td>Name 1</td>
                                            <td>Male</td>
                                            <td>26</td>
                                            <td>986 555 8665</td>
                                            <td>Driving License</td>
                                            <td>23659</td>
                                            <td>Document 1</td>
                                            <td class="text-right">
                                                <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="images/edit.svg" width="25"></a>
                                                <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#DeleteModal" title="Delete"><img src="images/delete.svg" width="25"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>213</td>
                                            <td>34234</td>
                                            <td>Login Name 1</td>
                                            <td>Name 1</td>
                                            <td>Name 2</td>
                                            <td>Name 1</td>
                                            <td>Male</td>
                                            <td>26</td>
                                            <td>986 555 8665</td>
                                            <td>Driving License</td>
                                            <td>23659</td>
                                            <td>Document 1</td>
                                            <td class="text-right">
                                                <a href="javascript:void(0);" class="action-icon" title="Edit"><img src="images/edit.svg" width="25"></a>
                                                <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#DeleteModal" title="Delete"><img src="images/delete.svg" width="25"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-0 mr-0 mb-3">
                        <div class="col-md-3 align-self-end">
                            <div class="form-group m-0">
                                <div class="form-control">Existing Stewards?
                                    <label class="switch float-right">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 align-self-center">
                            <div class="form-group mb-0">
                                <label>Select Steward </label>
                                <select disabled class="form-control">
                                    <option>Select</option>
                                    <option>Northern Eastern</option>
                                    <option>Middle East</option>
                                    <option>South East</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row add-template inner-add-template">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Employee ID <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Login Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>First Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Middle Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Last Name <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Gender </label>
                                        <div class="btn-inline-container row">
                                            <button type="button" class="col btn btn-primary selected">Male</button>
                                            <button type="button" class="col btn btn-primary ml-1">Female</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="mandatory">*</span></label>
                                        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><img src="images/calendar.svg" width="20" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 align-self-center">
                                    <label>Mobile <span class="mandatory">*</span></label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Proof of Document <span class="mandatory">*</span></label>
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
                                        <label>Document Number <span class="mandatory">*</span></label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Upload Proof <span class="mandatory">*</span></label>
                                        <input type="file" class="form-control fileupload" id="customFile">
                                        <label class="custom-file-label" for="customFile"></label>
                                    </div>
                                </div>
                                <div class="col-md-3 align-self-end">
                                    <div class="form-group text-right">
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

    <?php include 'delete-popup.php';?>

    <?php include 'scripts.php';?>
    <style>
        .datatable-bottomrow, .datatable-toprow {
            display: none;
        }
        /* .table-fullwidth tr td {
            vertical-align: top;
        } */
    </style>
    <script>
    $(document).ready(function () {
        $('.table-fullwidth').DataTable({
            language: {
                search: "",
                searchPlaceholder: "Search",
                paginate: {
                    first: "",
                    previous: "",
                    next: "",
                    last: ""
                }
            },
            columnDefs: [{
                "targets": -1,
                "className": "all"
            }],
            dom: '<"datatable-toprow"lf>rt<"datatable-bottomrow"ip>',
            pagingType: "full_numbers"
        });

        $('.switchh').click(function(){
            $(this).toggleClass('Onn');
            $(this).parents('tr').toggleClass('disabledtr');
        });

        $('.duty-start-click').click(function() {
            $('.increase-decrease-container').parent().removeClass('open-time');
            $(this).parent().toggleClass('open-time');
        });
    });


    $(document).on('mouseup', function (e) {
    if (!$(e.target).closest('.open-time-container').length) {
            $('.increase-decrease-container').each(function () {
            $(this).parent().removeClass('open-time');
            });
        };
    });


    </script>

</body>
</html>