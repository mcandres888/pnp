<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="ajax/page_messages.html" class="ajax-link">Incidents</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-linux"></i>
					<span>Incidents</span>
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

      <div class="box-content">
     <form method="POST" action="<?=site_url()?>/main/export_incident">
        <div class="form-group">
             <div class="col-sm-2">
              <select id="incident_type" name="incident_type" class="form-control">
                <option value="0">All</option>
                <?php
                  foreach ($incident_types as $inc) {
                     echo "<option value='" . $inc->id . "'>" . $inc->name . "</option>";
                  }
                ?>
              </select>
            </div>
             <div class="col-sm-2">
                 <input type="text" name="from_date" id="input_date" class="form-control" placeholder="From Date">
            </div>

             <div class="col-sm-2">
                 <input type="text" name="to_date" id="input_date2" class="form-control" placeholder="To Date">
            </div>

            <div class=" col-sm-2">
              <button type="submit" class="btn btn-danger btn-label-left">
                Filtered Export
              </button>

            </div>
       </div>


     </form>
      </div>
<div>
        <a href="<?=site_url()?>/main/exportTable/incident"> Export All Incidents as CSV </a>
</div>



<div class="box-content no-padding table-responsive">

 <table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-2">
<!--
          <thead>
            <tr>
<th><label><input type="text" name="search_reference" value="Search Reference" class="search_init" /></label></th>
<th><label><input type="text" name="search_details" value="Search Details" class="search_init" /></label></th>
<th><label><input type="text" name="search_action" value="Search Action" class="search_init" /></label></th>
            </tr>
          </thead>
-->
          <tbody>
					<?php 

             $edit = site_url() . "/main/red_edit_incident/";
              
							foreach ($incidents as $incident) {
								echo "<tr>";
								echo "<td>" . $incident->reference_number . "</td>";
								echo "<td>" . $incident->details . "</td>";
                echo "<td>";
								echo "<a href='". $edit . $incident->id . "'> <button type='button' class='btn btn-success'>Edit</button></a>";

                echo "</td>";
								echo "</tr>";
							}
					?>
          </tbody>
 <tfoot>
            <tr>
              <th>Reference number</th>
              <th>Details</th>
              <th>Action</th>
            </tr>
          </tfoot>

        </table>
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
  $('#input_date').datepicker({setDate: new Date()});
  $('#input_date2').datepicker({setDate: new Date()});
	WinMove();


});
</script>
