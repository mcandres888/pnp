<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-linux"></i>
					<span>Users</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
<form method="POST" action="<?=site_url()?>/main/user_filtered">
			<div class="box-content no-padding table-responsive">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-2">
					<thead>
						<tr>
							<th><label><input type="text" name="search_username" value="Search username" class="search_init" /></label></th>
							<th><label><input type="text" name="search_firstname" value="Search firstname" class="search_init" /></label></th>
							<th><label><input type="text" name="search_lastname" value="Search lastname" class="search_init" /></label></th>
							<th><label><input type="text" name="search_type" value="Search type" class="search_init" /></label></th>
						</tr>
					</thead>
					<tbody>


<?php

	foreach ($users as $user) {
		echo "<tr>";
		echo "<td>" . $user->username . "</td>";
		echo "<td>" . $user->firstname . "</td>";
		echo "<td>" . $user->lastname . "</td>";
		echo "<td>" . $user->type . "</td>";

		echo "</tr>";

	}


?>
					</tbody>
					<tfoot>
						<tr>
							<th>Username</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Type</th>
						</tr>
					</tfoot>
				</table>
			</div>
<div class="row">
<div class="col-md-3 col-md-offset-9">
<button type="submit" class="btn btn-primary">Export Filtered Data</button>
</form>
</div>
	</div>
		</div>
	</div>
</div>


<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
