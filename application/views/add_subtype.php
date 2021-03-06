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
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Create Sub Incident Type for <?=$incident_name?></span>
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
				<h4 class="page-header">Create Sub Incident Type form <?=$incident_name?></h4>
				<form class="form-horizontal" role="form" method="POST" 
					action="<?=site_url()?>/main/submit_incident_sub_type/<?=$incident_id?>">

				<input type="hidden" name="incident_type" value="<?=$incident_id?>">
					<div class="form-group">
						<label class="col-sm-2 control-label">Sub Incident Type </label>
						<div class="col-sm-4">
							<input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" name="subtype" title="add Sub Incident">
						</div>
						</div>

					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-4">
							<button type="submit" class="btn btn-success btn-label-left">
								Submit
							</button>
						</div>

				</form>
					</div>

     <table class="table">
          <thead>
            <tr>
              <th>Subtype</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
				$delete = site_url() . "/main/delete_incident_sub_type/" . $incident_id . "/";

              foreach ($subtypes as $sub) {
                echo "<tr>";
                echo "<td>" . $sub->subtype . "</td>";
                echo "<td><a href='" . $delete . $sub->id ."'> Delete</a></td>";
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
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select Contact"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>
