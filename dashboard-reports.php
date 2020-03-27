<!doctype html>
<html lang="en">

<?php include 'head-files.php';?>

<style>
    .chart-report-block {
        box-shadow: -8px 12px 18px 0 rgba(25, 42, 70, .13);
        -webkit-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }

    .card-body-inner {
        background-color: #FFF;
    }
</style>


<style>
    .btns {
  background-color: #ff9035;
  background-image: -webkit-linear-gradient(-370deg, #ff5a64 0%, #faa04b 30%, #d2dc69 70%, #0ef49b 100%);
  background-image: -webkit-linear-gradient(350deg, #ff5a64 0%, #faa04b 30%, #d2dc69 70%, #0ef49b 100%);
  background-image: linear-gradient(100deg, #ff5a64 0%, #faa04b 30%, #d2dc69 70%, #0ef49b 100%);
  z-index: 0;
  height: 40px;
  float: none;
  margin: 0 auto;
  width: 900px;
  max-width: 100%;
  border-radius: 40px;
  display: block;
  box-shadow: 0 2px 4px -1px rgba(25, 25, 25, 0.2);
}
.btns input {
  display: none;
}
.btns label {
  display: table;
  float: left;
  padding: 0;
  width: 20%;
  height: 100%;
  margin: 0;
  text-align: center;
  border-left: 1px solid rgba(0, 0, 0, 0.05);
}
.btns label:first-child {
  border-left: none;
  border-radius: 40px 0 0 40px;
}
.btns label:last-child {
  border-radius: 0 40px 40px 0;
}
.btns .btn {
  font-size: 19px;
  cursor: pointer;
  width: 100%;
  display: table-cell;
  vertical-align: middle;
  font-weight: 300;
  color: #FFF;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
  box-shadow: inset 0 30px 20px -20px rgba(255, 255, 255, 0.15);
  -webkit-transition: color 250ms cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
  transition: color 250ms cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
}
.btns .btn:hover {
  box-shadow: inset 0 30px 30px -20px rgba(50, 50, 50, 0.02);
  -webkit-transition: all 250ms cubic-bezier(0.165, 0.84, 0.44, 1);
  transition: all 250ms cubic-bezier(0.165, 0.84, 0.44, 1);
}
.btns .btn:after {
  content: '\2714';
  margin-left: -10px;
  display: inline-block;
  -webkit-transform: scale(0);
  transform: scale(0);
  -webkit-transition: margin 250ms cubic-bezier(0.6, -0.28, 0.735, 0.045) 100ms, -webkit-transform 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
  transition: margin 250ms cubic-bezier(0.6, -0.28, 0.735, 0.045) 100ms, -webkit-transform 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
  transition: margin 250ms cubic-bezier(0.6, -0.28, 0.735, 0.045) 100ms, transform 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
  transition: margin 250ms cubic-bezier(0.6, -0.28, 0.735, 0.045) 100ms, transform 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22), -webkit-transform 250ms cubic-bezier(0.895, 0.03, 0.685, 0.22);
}
.btns .first {
  border-radius: 40px 0 0 40px;
}
.btns .last {
  border-radius: 0 40px 40px 0;
}
.btns input:checked + .btn {
  color: #FFFFFF;
  text-shadow: none;
  background-image: -webkit-linear-gradient( bottom , rgba(25, 25, 25, 0) 65%, rgba(25, 25, 25, 0.08));
  background-image: -webkit-linear-gradient(bottom, rgba(25, 25, 25, 0) 65%, rgba(25, 25, 25, 0.08));
  background-image: linear-gradient(to top, rgba(25, 25, 25, 0) 65%, rgba(25, 25, 25, 0.08));
  box-shadow: inset 0 10px 50px rgba(25, 25, 25, 0.08);
  -webkit-transition: color 500ms cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 150ms;
  transition: color 500ms cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 150ms;
}
.btns input:checked + .btn:after {
  margin-left: 12px;
  -webkit-transform: scale(1.25);
  transform: scale(1.25);
  -webkit-transition: -webkit-transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms, margin 500ms;
  -webkit-transition: margin 500ms, -webkit-transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms;
  transition: margin 500ms, -webkit-transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms;
  transition: transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms, margin 500ms;
  transition: transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms, margin 500ms, -webkit-transform 500ms cubic-bezier(0.175, 0.885, 0.32, 1.275) 250ms;
}
</style>

<body>

    <?php include 'dashboard-header.php' ?>

    <!-- Wrapper -->
    <section>
        <div class="container-fluid">
            <!-- Body Content -->
            <h2 class="title">DASHBOARD</h2>
            <div class="main-container">

                <div class="row">
                    <div class="col">
                        <div class='btns'>
                            <label>
                                <input checked='' name='button-group' type='checkbox' value='1'>
                                    <span class='btn first'>Never</span>
                                </input>
                            </label>
                            <label>
                                <input name='button-group' type='checkbox' value='2'>
                                    <span class='btn'>Sometimes</span>
                                </input>
                            </label>
                            <label>
                                <input name='button-group' type='checkbox' value='3'>
                                    <span class='btn'>Often</span>
                                </input>
                            </label>
                            <label>
                                <input name='button-group' type='checkbox' value='4'>
                                    <span class='btn'>Usually</span>
                                </input>
                            </label>
                            <label>
                                <input name='button-group' type='checkbox' value='5'>
                                    <span class='btn last'>Always</span>
                                </input>
                            </label>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="card chart-report-block">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-body-inner" id="chart1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card chart-report-block">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="card-body-inner" id="chart2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card chart-report-block">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="card-body-inner" id="chart3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-6">
                                <div class="card chart-report-block">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="card-body-inner" id="chart4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
								<div class="card chart-report-block">
									<div class="card-content">
										<div class="card-body">
											<div class="card-body-inner" id="chart5"></div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
					<div class="col-md-6">
						<div class="card chart-report-block">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="card-body-inner" id="chart7"></div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="card chart-report-block">
									<div class="card-content">
										<div class="card-body">
											<div class="card-body-inner" id="chart8"></div>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-md-6">
								<div class="card chart-report-block">
									<div class="card-content">
										<div class="card-body">
											<div class="card-body-inner" id="chart9"></div>
										</div>
									</div>
								</div>
							</div>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'scripts.php';?>
   
    <script src="js/apexcharts.js"></script>
	<script src="js/apex-chart.js"></script>

</body>

</html>