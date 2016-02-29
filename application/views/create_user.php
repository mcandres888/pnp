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
					<span>Create User form</span>
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
				<h4 class="page-header">Create User form</h4>
				<form class="form-horizontal" role="form" method="POST" 
					action="<?=site_url()?>/main/submit_user">

					<div class="form-group">
						<label class="col-sm-2 control-label">First Name</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" name="firstname" title="Add first name">
						</div>
						</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Last Name</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" name="lastname" title="Add last name">
						</div>
						</div>


					<div class="form-group">
						<label class="col-sm-2 control-label">User Name</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" data-toggle="tooltip" data-placement="bottom" name="username" title="Add user name">
						</div>
						</div>


			 	 <div class="form-group">
              <label class="col-sm-2 control-label">Password</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" name="password" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Retype password</label>
              <div class="col-sm-4">
                <input type="password" class="form-control" name="confirmPassword" />
              </div>
            </div>


					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Type</label>
						<div class="col-sm-4">
							<select name="type" id="s2_with_tag" class="populate placeholder">
										<option>normal_user</option>
										<option>admin</option>
							</select>
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
