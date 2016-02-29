<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="ajax/page_messages.html" class="ajax-link">Create Messages</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-linux"></i>
					<span>Message</span>
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
<form method="POST" action="<?=site_url()?>/main/message_filtered/<?=$status?>">
			<div class="box-content no-padding table-responsive">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-2">
					<thead>
						<tr>
							<th><label><input type="text" name="search_group" value="Search group" class="search_init" /></label></th>
							<th><label><input type="text" name="search_name" value="Search name" class="search_init" /></label></th>
							<th><label><input type="text" name="search_number" value="Search number" class="search_init" /></label></th>
							<th><label><input type="text" name="search_message" value="Search message" class="search_init" /></label></th>
							<th><label><input type="text" name="search_date" value="Search date" class="search_init" /></label></th>
						</tr>
					</thead>
					<tbody>


<?php

	foreach ($messages as $message) {
		echo "<tr>";
		echo "<td>" . $message->group_name . "</td>";
		echo "<td>" . $message->contact_name . "</td>";
		echo "<td>" . $message->contact_number . "</td>";
		echo "<td>" . $message->message . "</td>";
		echo "<td>" . $message->timestamp . "</td>";

		echo "</tr>";

	}


?>
					</tbody>
					<tfoot>
						<tr>
							<th>Group</th>
							<th>Name</th>
							<th>Number</th>
							<th>Message</th>
							<th>Date</th>
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
