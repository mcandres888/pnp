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
					<span>Incident Types</span>
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
							<th><label><input type="text" name="search_name" value="Search Incident" class="search_init" /></label></th>
							<th><label>Action</label></th>
						</tr>
					</thead>
					<tbody>


<?php

	$delete = site_url() . "/main/delete_incident_types/";
	$edit = site_url() . "/main/red_edit_incident_type/";

	foreach ($incident_types as $incident_type) {
		echo "<tr>";
		echo "<td>" . $incident_type->name . "</td>";
		echo "<td>";
		echo "<a href='". $edit . $incident_type->id . "'> <button type='button' class='btn btn-success'>Edit</button></a>";
		echo "<a href='". $delete . $incident_type->id . "'> <button type='button' class='btn btn-danger'>Delete</button></a>";

		echo "</td>";
		echo "</tr>";

	}


?>
					</tbody>
					<tfoot>
						<tr>
							<th>Section</th>
							<th>Name</th>
						</tr>
					</tfoot>
				</table>
			</div>
<div class="row">
<div class="col-md-3 col-md-offset-9">
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
