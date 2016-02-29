<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="ajax/page_messages.html" class="ajax-link">Modems</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-linux"></i>
					<span>Modems</span>
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
        <p>Current modems status and its network state.</p>
        <table class="table">
          <thead>
            <tr>
              <th>IMEI</th>
              <th>Signal</th>
              <th>Sent</th>
              <th>Received</th>
              <th>Last Update</th>
            </tr>
          </thead>
          <tbody>
					<?php 
              
							foreach ($modems as $modem) {
								echo "<tr>";
								echo "<td>" . $modem->IMEI . "</td>";
								echo "<td>" . $modem->Signal . "</td>";
								echo "<td>" . $modem->Sent . "</td>";
								echo "<td>" . $modem->Received . "</td>";
								echo "<td>" . $modem->TimeOut . "</td>";
								echo "</tr>";
							}
					?>
          </tbody>
        </table>
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
