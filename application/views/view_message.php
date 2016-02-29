<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php/main/redirect_inbox">Back</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Message From <?=$messages[0]->contact_name?></span>
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


<div class="col-xs-12 page-feed">
		<div class="box">
			<div class="avatar">
				<img src="img/i04.png" alt="Jane">
			</div>
			<div class="page-feed-content">
				<small class="time"><?=$messages[0]->contact_name?>, <?=$messages[0]->group_name?> - group, <?=$messages[0]->ReceivingDateTime?></small>
				<p><?=$messages[0]->TextDecoded?></p>
				<div class="likebox">
					<ul class="nav navbar-nav">
<!--
						<li><i class="fa fa-thumbs-up"></i> 138</li>
						<li><i class="fa fa-thumbs-down"></i> 47</li>
-->
					</ul>
				</div>
			</div>
		</div>
	</div>


       <form class="form-horizontal" role="form" method="POST" action="<?=site_url()?>/main/reply_message">

			<input type="hidden" name="contact_number" value="<?=$messages[0]->SenderNumber?>"/>
			<input type="hidden" name="contact" value="None,0,0"/>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="form-styles">Reply</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="5" name="message" ></textarea>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-2">
			<a href="index.php/main/redirect_inbox">
              <button type="cancel" class="btn btn-default btn-label-left">
                Back
              </button>
			</a>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary btn-label-left">
                Reply
              </button>
            </div>
  				 <div class="col-sm-2">
			<a href="<?=site_url()?>/main/red_forward/<?=$message_id?>">
              <button type="button" class="btn btn-primary btn-label-left">
                Forward
              </button>
			</a>
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
