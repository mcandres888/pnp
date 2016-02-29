<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Dashboard</a></li>
			<li><a href="#">Create Message</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Create Message form</span>
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
				<form class="form-horizontal" role="form" method="POST" action="<?=site_url()?>/main/submit_message">
					<div class="form-group">
						<label class="col-sm-2 control-label">Contact Number</label>
						<div class="col-sm-4">
							<input name="contact_number" type="text" class="form-control" placeholder="Contact Number" data-toggle="tooltip" data-placement="bottom" title="Add contact number or search contacts">
						</div>
						</div>
				<div class="form-group">
						<label class="col-sm-2 control-label"></label>
						<div class="col-sm-4">
						<label class="col-sm-4 control-label"> --- OR --- </label>
								
						</div>
						</div>
		
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Search Contact</label>
						<div class="col-sm-4">
							<select id="s2_with_tag" name="contact" class="populate placeholder">
								<option> None,0,0 </option>

							<?php
								foreach ($contacts as $contact) {

									echo "<option>" .$contact->contact_name .", " .$contact->contact_number . ", ". $contact->id. "</option>";
								}

							?>
							</select>
						</div>
						</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Message</label>
						<div class="col-sm-10">
								<textarea class="form-control" rows="5" name="message" ></textarea>
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
