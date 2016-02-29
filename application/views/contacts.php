<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="ajax/page_messages.html" class="ajax-link">Create Contact</a></li>
			<li><a href="#">Create Group</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-linux"></i>
					<span>Contacts</span>
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
<form method="POST" action="<?=site_url()?>/main/contact_filtered">
			<div class="box-content no-padding table-responsive">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-2">
					<thead>
						<tr>
							<th><label><input type="text" name="search_group" value="Search group" class="search_init" /></label></th>
							<th><label><input type="text" name="search_name" value="Search name" class="search_init" /></label></th>
							<th><label><input type="text" name="search_number" value="Search number" class="search_init" /></label></th>
							<th><label><input type="text" name="search_notes" value="Search notes" class="search_init" /></label></th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>


<?php

  $edit_url = site_url() . "/main/red_edit_contact/";
	foreach ($contacts as $contact) {
		echo "<tr>";
		echo "<td>" . $contact->group_name . "</td>";
		echo "<td>" . $contact->contact_name . "</td>";
		echo "<td>" . $contact->contact_number . "</td>";
		echo "<td>" . $contact->notes . "</td>";
		echo "<td><a href='" . $edit_url . $contact->id . "'>Edit</a></td>";

		echo "</tr>";

	}


?>
					</tbody>
					<tfoot>
						<tr>
							<th>Group</th>
							<th>Name</th>
							<th>Number</th>
							<th>Notes</th>
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
