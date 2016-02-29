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
					<span>Database Settings</span>
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
				<h4 class="page-header">Database Settings</h4>
				<form class="form-horizontal" role="form" method="POST" 
					action="<?=site_url()?>/main/submit_group">
					<div class="form-group">
						<div class="col-sm-4">
							<a href="<?=site_url()?>/main/message_filtered/inbox"
							<button type="button" class="btn btn-default btn-lg btn-block">
								Download All Inbox Messages
							</button>
							</a>
						</div>
						<div class="col-sm-4">
							<a href="<?=site_url()?>/main/message_filtered/sent"
							<button type="button" class="btn btn-primary btn-lg btn-block">
								Download All Sent Messages
							</button>
							</a>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-4">
							<a href="<?=site_url()?>/main/contact_filtered"
							<button type="button" class="btn btn-success btn-lg btn-block">
								Download All Contacts
							</button>
							</a>
						</div>

						<div class="col-sm-4">
							<a href="<?=site_url()?>/main/user_filtered"
							<button type="button" class="btn btn-info btn-lg btn-block">
								Download All Users
							</button>
							</a>
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-8">
							<button type="button" class="btn btn-danger btn-lg btn-block">
								Delete all messages on database
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
