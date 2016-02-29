<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="#">Dashboard</a></li>
			<li><a href="#">Create Contact</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Create Contact form</span>
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
				<h4 class="page-header">Create Message form</h4>
				<form class="form-horizontal" role="form" method="POST" 
					action="<?=site_url()?>/main/submit_contact">
					<div class="form-group">
						<label class="col-sm-2 control-label">Contact Name</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Contact Name" data-toggle="tooltip" data-placement="bottom" name="contact_name" title="Add contact name">
						</div>
						</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Contact Number</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" placeholder="Contact Number" data-toggle="tooltip" data-placement="bottom" name="contact_number" title="Add contact number">
						</div>
						</div>



					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Add to Group</label>
						<div class="col-sm-4">
							<select name="group_contact" id="s2_with_tag" class="populate placeholder">
								<?php
									foreach ($groups as $group) {
										echo "<option id='". $group->id  . "'>" . $group->group_name . " ," .$group->id  . "</option>";
									}
								?>
							</select>
						</div>
						</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Notes</label>
						<div class="col-sm-10">
								<textarea class="form-control" rows="5" name="notes" ></textarea>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
							<button type="cancel" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancel
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Submit
							</button>
						</div>
					</div>
				</form>
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
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>
