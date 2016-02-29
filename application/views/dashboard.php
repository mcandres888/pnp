<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Home</a></li>
			<li><a href="#">Dashboard</a></li>
		</ol>
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">
	<div class="col-xs-12 col-sm-4 col-md-5">
		<h3>Hello, <?=$username?>!</h3>
	</div>
	<div class="clearfix visible-xs"></div>
	<div class="col-xs-12 col-sm-8 col-md-7 pull-right">
		<div class="row">
			<div class="col-xs-4">
				<div class="sparkline-dashboard" id="sparkline-1"></div>
				<div class="sparkline-dashboard-info">
				</div>
			</div>
			<div class="col-xs-4">
				<div class="sparkline-dashboard" id="sparkline-2"></div>
				<div class="sparkline-dashboard-info">
				</div>
			</div>
			<div class="col-xs-4">
				<div class="sparkline-dashboard" id="sparkline-3"></div>
				<div class="sparkline-dashboard-info">
				</div>
			</div>
		</div>
	</div>
</div>
<!--End Dashboard 1-->
<!--Start Dashboard 2-->
<div class="row-fluid">
	<div id="dashboard_links" class="col-xs-12 col-sm-2 pull-right">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#" class="tab-link" id="servers">Overview</a></li>
			<li><a href="#" class="tab-link" id="overview">Operation</a></li>
			<li><a href="#" class="tab-link" id="incident">Incidents</a></li>
		</ul>
	</div>
	<div id="dashboard_tabs" class="col-xs-12 col-sm-10">

		<!--Start Dashboard Tab 4-->
		<div id="dashboard-servers" class="row" style="visibility: visible; position: absolute;">
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa  fa-envelope-o"></i>Messages Recieved</h4>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-1" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><h2><?=$message_recieved?> </h2><h4><i>messages</i></h4></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-location-arrow"></i>Messages Sent</h4>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-2" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">
						</div>
					</div>
					<div class="col-sm-8">

						<div class="row"><h2><?=$message_sent?> </h2><h4><i>messages</i></h4></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-phone-square"></i>Modem</h4>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-3" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><h2>2 </h2><h4><i>modems</i></h4></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-road"></i>Total Incidents</h4>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-4" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><h2><?=$incidents?> </h2><h4><i>Incidents</i></h4></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-user"></i>Contacts</h4>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-5" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><h2><?=$contacts?> </h2><h4><i>Contacts</i></h4></div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ow-server">
				<h4 class="page-header text-right"><i class="fa fa-users"></i>Groups</h4>
				<div class="ow-settings">
					<a href="#"><i class="fa fa-gears"></i></a>
				</div>
				<div class="row ow-server-bottom">
					<div class="col-sm-4">
						<div class="knob-slider">
							<input id="knob-srv-6" class="knob" data-width="60"  data-height="60" data-angleOffset="180" data-fgColor="#6AA6D6" data-skin="tron" data-thickness=".2" value="">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row"><h2><?=$groups?> </h2><h4><i>Groups</i></h4></div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>


			<div id="ow-server-footer">
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-user"></i> <b><?=$users?> </b> <span>Users</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa  fa-tasks"></i> <b><?=$incident_types?></b> <span>Incident Types</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-laptop"></i> <b><?=$operation_types?></b> <span>Operation Types</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-info-circle"></i> <b><?=$reference?></b> <span>Current Reference</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-mail-forward"></i> <b><?=$globe?></b> <span>Globe Sent</span></a>
				<a href="#" class="col-xs-4 col-sm-2 btn-default text-center"><i class="fa fa-mail-forward"></i> <b><?=$smart?></b> <span>Smart Sent</span></a>
			</div>
		</div>
		<!--End Dashboard Tab 4-->
	

		<!--Start Dashboard Tab 1-->
		<div id="dashboard-overview" class="row" style="visibility: hidden; position: relative;">
			<div id="ow-marketplace" class="col-sm-12 col-md-9">
				<div id="ow-setting">
					<a href="#"><i class="fa fa-folder-open"></i></a>
					<a href="#"><i class="fa fa-credit-card"></i></a>
					<a href="#"><i class="fa fa-ticket"></i></a>
					<a href="#"><i class="fa fa-bookmark-o"></i></a>
					<a href="#"><i class="fa fa-globe"></i></a>
				</div>
				<h4 class="page-header">Operation Count</h4>
				<table id="ticker-table" class="table m-table table-bordered table-hover table-heading">
					<thead>
						<tr>
							<th>Type</th>
							<th>Count</th>
						</tr>
					</thead>
					<tbody>
           <?php
						foreach ($operations as $op ) {
							echo "<tr>";
							echo "<td class='m-ticker'>". $op['name'] ."</span></td>";
							echo "<td class='m-price'>". $op['count'] ."</span></td>";
							echo "</tr>";
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
		<!--End Dashboard Tab 1-->

		<!--Start Dashboard Tab 1-->
		<div id="dashboard-incident" class="row" style="visibility: hidden; position: relative;">
			<div id="ow-marketplace" class="col-sm-12 col-md-9">
				<div id="ow-setting">
					<a href="#"><i class="fa fa-folder-open"></i></a>
					<a href="#"><i class="fa fa-credit-card"></i></a>
					<a href="#"><i class="fa fa-ticket"></i></a>
					<a href="#"><i class="fa fa-bookmark-o"></i></a>
					<a href="#"><i class="fa fa-globe"></i></a>
				</div>
				<h4 class="page-header">Incident Types Count</h4>
				<table id="ticker-table" class="table m-table table-bordered table-hover table-heading">
					<thead>
						<tr>
							<th>Type</th>
							<th>Count</th>
						</tr>
					</thead>
					<tbody>
           <?php
						foreach ($incident_types_arr as $ic ) {
							echo "<tr>";
							echo "<td class='m-ticker'>". $ic['name'] ."</span></td>";
							echo "<td class='m-price'>". $ic['count'] ."</span></td>";
							echo "</tr>";
						}
					?>
					</tbody>
				</table>
			</div>
		</div>
		<!--End Dashboard Tab 1-->



		<!--Start Dashboard Tab 2-->
		<div id="dashboard-clients" class="row" style="visibility: hidden; position: absolute;">
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-users"></i></div>
				<div class="col-xs-2"><b>Country</b></div>
				<div class="col-xs-2">Visitors</div>
				<div class="col-xs-2">Page hits</div>
				<div class="col-xs-2">Revenue</div>
				<div class="col-xs-1">Activity</div>
				<div class="col-xs-2">Date</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>USA</b></div>
				<div class="col-xs-2">109455</div>
				<div class="col-xs-2">54322344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 354563</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/31/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>U.K.</b></div>
				<div class="col-xs-2">86549</div>
				<div class="col-xs-2">43242344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 265563</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/25/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>FRANCE</b></div>
				<div class="col-xs-2">79399</div>
				<div class="col-xs-2">45376844</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 309456</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/30/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>GERMANY</b></div>
				<div class="col-xs-2">94567</div>
				<div class="col-xs-2">35322344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 301040</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/26/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>CANADA</b></div>
				<div class="col-xs-2">89525</div>
				<div class="col-xs-2">1342344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 298764</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/30/13</div>
			</div>
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-user"></i></div>
				<div class="col-xs-2"><b>CHINA</b></div>
				<div class="col-xs-2">120865</div>
				<div class="col-xs-2">43522344</div>
				<div class="col-xs-2"><i class="fa fa-usd"></i> 776563</div>
				<div class="col-xs-1"><span class="bar"></span></div>
				<div class="col-xs-2 message-date">12/29/13</div>
			</div>
		</div>
		<!--End Dashboard Tab 2-->
		<!--Start Dashboard Tab 3-->
		<div id="dashboard-graph" class="row" style="width:100%; visibility: hidden; position: absolute;" >
			<div class="col-xs-12">
				<h4 class="page-header">OS Platform Statistics</h4>
				<div id="stat-graph" style="height: 300px;"></div>
			</div>
		</div>
		<!--End Dashboard Tab 3-->
	<!--Start Dashboard Tab 5-->
		<div id="dashboard-planning" class="row" style="visibility: hidden; position: absolute;">
				<div class="col-xs-12 col-sm-6">
					<h4 class="page-header">Planned projects</h4>
					<a href="#">Expense items</a><a href="#" class="pull-right">Project members</a>
					<table class="table m-table table-bordered table-hover table-heading">
						<thead>
							<tr>
								<th>Projects</th>
								<th>Ending date</th>
								<th>Cost</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="m-ticker"><b>Network upgrade</b><span>Change Dlink devices to Cisco</span></td>
								<td class="m-price">Aug</td>
								<td class="m-change">179459</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>Improved power equipment</b><span>Nevada datacenter</span></td>
								<td class="m-price">Nov</td>
								<td class="m-change">59411</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>New ticket system</b><span>developed from scratch</span></td>
								<td class="m-price">Jul</td>
								<td class="m-change">14906</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>Storage Area Network</b><span>project</span></td>
								<td class="m-price">Nov</td>
								<td class="m-change">250000</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>New optical channels</b><span>6 links</span></td>
								<td class="m-price">Nov</td>
								<td class="m-change">22359</td>
							</tr>
							<tr>
								<td class="m-ticker"><b>Load-balance system</b><span>based on Linux</span></td>
								<td class="m-price">Dec</td>
								<td class="m-change">33950</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-12 col-sm-6" id="planning-chart-1" style="height:250px;"><a href="#">Reports</a></div>
				<div class="col-xs-12 col-sm-8" id="planning-chart-2" style="height: 250px;"></div>
				<div class="col-xs-12 col-sm-4" id="planning-chart-3" style="height: 250px;"></div>
				<div class="col-xs-8">
					<h4 class="page-header">Quarterly forecast</h4>
					<div class="row">
						<div class="col-xs-3"><span>Q1</span>123,34234</div>
						<div class="col-xs-3"><span>Q2</span>123,34234</div>
						<div class="col-xs-3"><span>Q3</span>123,34234</div>
						<div class="col-xs-3"><span>Q4</span>123,34234</div>
					</div>
				</div>
				<div class="col-xs-4">
					<h4 class="page-header">Total forecast</h4>
					<div class="row">
						<div class="col-xs-12"><span>QE</span>732423234.34</div>
					</div>
				</div>
		</div>
		<!--End Dashboard Tab 5-->
		<!--Start Dashboard Tab 6-->
		<div id="dashboard-netmap" class="row" style="visibility: hidden; position: absolute;">
			<div class="col-xs-12">
				<h4 class="page-header">Network map(mesh topology)</h4>
				<canvas id="springy-demo" width="900" height="480" />
			</div>
		</div>
		<!--End Dashboard Tab 6-->
		<!--Start Dashboard Tab 7-->
		<div id="dashboard-stock" class="row" style="visibility: hidden; position: absolute;">
			<div class="col-xs-12">
				<h4 class="page-header">Stocks from Yahoo Finance</h4>
				<div id="inputSymbol">
					<p>Enter Stock</p>
					<input id="txtSymbol" class="required" Placeholder="Symbol" />
					<input id="startDate" class="datePick required" type="text"  Placeholder="From" />
					<input id="endDate" class="datePick" type="text" Placeholder="To"  />
					<button id="submit">Submit</button>
				</div>
				<div class="realtime" style="margin-top:40px;">
					<div class="col-xs-6"><p>Name</p><span id="symbol"></span></div>
					<div class="col-xs-6"><p>RealtimeBid</p><span id="bidRealtime"></span></div>
				</div>
				<div class="historical">
					<div class="col-xs-6"><p>Date</p><div id="date"></div></div>
					<div class="col-xs-6"><p>Price</p><div id="closeValue"></div></div>
				</div>
			</div>
		</div>
		<!--End Dashboard Tab 7-->
	</div>
	<div class="clearfix"></div>
</div>
<!--End Dashboard 2 -->
<div style="height: 40px;"></div>
<script type="text/javascript">
// Array for random data for Sparkline
var sparkline_arr_1 = SparklineTestData();
var sparkline_arr_2 = SparklineTestData();
var sparkline_arr_3 = SparklineTestData();
$(document).ready(function() {
	// Make all JS-activity for dashboard
	DashboardTabChecker();
	// Load Knob plugin and run callback for draw Knob charts for dashboard(tab-servers)
	LoadKnobScripts(DrawKnobDashboard);
	// Load Sparkline plugin and run callback for draw Sparkline charts for dashboard(top of dashboard + plot in tables)
	LoadSparkLineScript(DrawSparklineDashboard);
	// Load Morris plugin and run callback for draw Morris charts for dashboard
	LoadMorrisScripts(MorrisDashboard);
	// Load Springy plugin and run callback for draw network map for dashboard
	LoadSpringyScripts(SpringyNetmap);
	// Make beauty hover in table
	$("#ticker-table").beautyHover();
	// Run script for stock block
	CreateStockPage();
});
</script>
