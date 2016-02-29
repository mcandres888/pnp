<?php
    date_default_timezone_set('Asia/Manila');
    $today = date("m/d/Y");
    $time = date("H:i");
    function createFormList ( $temp_arr) {
						$html_data = "";
			foreach ($temp_arr as $t) {
						$html_data .= "<div class='form-group'>";
						$html_data .= "<label class='col-sm-4 control-label' for='form-styles'>" . $t[0] . "</label>";
						$html_data .= "<div class='col-sm-3'>";
						$html_data .="<input type='text' class='form-control' id='" . $t[1] ."' name='" . $t[1] . "' ></input>";
						$html_data .="</div></div>";

			}

			return $html_data;


		}

    $PRO_arr = array("NCRPO", "PRO1",
                 "PRO2", "PRO3" , "PRO4A",
                 "PRO4B","PRO5",
                 "PRO6", "PRO7" , "PRO8",
                 "PRO9", "PRO10" , "PRO11",
                 "PRO12", "PRO13" , "COR",
                 "ARMM", "PRO18"
              );


?>

<style>
#floatMenu {
    position:absolute;
    top:290px;
    left:50%;
    margin-left:205px;
    width:280px;
    z-index: 1000;
}

</style>



<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.html">Dashboard</a></li>
			<li><a href="#">Create Incident</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Create Incident form</span>
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
				<h4 class="page-header">Create Incident form</h4>
				<form class="form-horizontal" role="form" method="POST" id="incident_form" action="<?=site_url()?>/main/submit_incident">
	
<div id="floatMenu" >
								<textarea class="form-control" rows="15" name="sms_data" > <?=$sms_data?></textarea>
</div>

	
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Search Group</label>
						<div class="col-sm-6">
							<select id="s2_with_tag" name="group" class="populate placeholder">

							<?php
								foreach ($groups as $group) {

									echo "<option>" .$group->group_name .", " .$group->id . "</option>";
								}

							?>
							</select>
						</div>
						</div>




					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Reference Number</label>
						<div class="col-sm-4">
								<input type="text" class="form-control" id="reference" value="<?=$reference?>" name="reference_number" readonly></input>
						</div>
					</div>

	
					<div class="form-group has-feedback">
						<label class="col-sm-2 control-label">PRO</label>
						<div class="col-sm-6">
							<select id="pro" name="pro" class="populate placeholder">

							<?php
								foreach ($PRO_arr as $pro) {

									echo "<option>" .$pro . "</option>";
								}

							?>
							</select>
						</div>
						</div>







					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Prov</label>
						<div class="col-sm-6">
								<input type="text" class="form-control" id="prov" name="prov" ></input>
						</div>
					</div>





					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Search Location </label>
						<div class="col-sm-6">
							<select id="s2_with_tag3" name="location" class="populate placeholder">
								<option> None,0 </option>

							<?php
								foreach ($cities as $city) {

									echo "<option>" .$city->name. ", " .$city->id . "</option>";
								}

							?>
							</select>
						</div>
						</div>




					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Incident/Activity Type</label>
						<div class="col-sm-6">
							<select id="s2_with_tag2" name="incident_type" class="form-control">
								<option> None,0 </option>

							</select>
						</div>
						</div>

<input type="hidden" name="incident_sub_type" value="NA">
<!--
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Sub Type</label>
						<div class="col-sm-6">
							<select id="incident_sub" name="incident_sub_type" class="form-control">
							</select>
						</div>
						</div>

-->


					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Tag</label>
						<div class="col-sm-6">
								<input type="text" class="form-control" id="tag" name="tag" ></input>
						</div>
					</div>




	
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Operation Type</label>
						<div class="col-sm-6">
							<select id="operation_type" name="operation_type" class="form-control">

							<?php
								foreach ($operations as $op) {

									echo "<option value='" . $op->id. "'>" .$op->operation  . "</option>";
								}

							?>
							</select>
						</div>
						</div>


					<div class="form-group has-feedback">
						<label class="col-sm-2 control-label" for="form-styles">Date Incident</label>
						<div class="col-sm-2">
              <input type="text" name="date" id="input_date" class="form-control" placeholder="Date">
              <span class="fa fa-calendar txt-danger form-control-feedback"></span>
            </div>
            <div class="col-sm-2">
              <input type="text" name="time" id="input_time" class="form-control" placeholder="Time">
              <span class="fa fa-clock-o txt-danger form-control-feedback"></span>
            </div>
					</div>

					<div class="form-group has-feedback">
						<label class="col-sm-2 control-label" for="form-styles">Date Reported</label>
						<div class="col-sm-2">
              <input type="text" name="date_reported" id="input_date_reported" class="form-control" value="<?=$today?>">
              <span class="fa fa-calendar txt-danger form-control-feedback"></span>
            </div>
            <div class="col-sm-2">
              <input type="text" name="time_reported"  id="input_time_reported" class="form-control" value="<?=$time?>">
              <span class="fa fa-clock-o txt-danger form-control-feedback"></span>
            </div>
					</div>

	

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Report From</label>
						<div class="col-sm-6">
								<input type="text" class="form-control" id="report_from" name="report_from" value="<?=$report_from?>"></input>
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-offset-2  col-sm-2">
							<button type="button" class="btn btn-primary btn-label-left" onclick="createMessage()">
								Prefill SMS Message
							</button>
            </div>
					</div>
	



					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Details</label>
						<div class="col-sm-10">
								<textarea class="form-control" rows="5" name="details" id="details"></textarea>
						</div>
					</div>

					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Specific Details</label>
  <div class="box-content col-sm-6" id="accordion">

        <h3>Category of Arrested Person (Part1) (Count)</h3>
        <div>



					<div class="form-group">
						<label class="col-sm-4 control-label" for="form-styles">Arresting Unit</label>
						<div class="col-sm-6">
								<input type="text" class="form-control" id="arresting_unit" name="arresting_unit" ></input>
						</div>
					</div>



					<div class="form-group">
						<label class="col-sm-4 control-label" for="form-styles">Arrested Person</label>
						<div class="col-sm-6">
								<input type="text" class="form-control" id="arrested_person" name="arrested_person" ></input>
						</div>
					</div>



<?php
    $temp = [
             ["Civilian", "civilian"],
             ["PNP", "pnp"],
             ["AFP", "afp"],
             ["Govt/Elected Off", "govt_official"], 
             ["OtherLEA", "otherlea"],
             ["BJMP", "bjmp"],
             ["BFP", "bfp"],
             ["Security Guard", "security_guard"],
             ["CAA (CAFGU)", "caa"],
            ];


		echo createFormList($temp) ;

?>

      </div>


        <h3>Category of Arrested Person (Part2) (Count)</h3>
        <div>

<?php
    $temp = [
             ["Foreign National", "foreign_national"],
             ["ASG", "asg"],
             ["BIFF", "biff"],
             ["NPA", "npa"],
             ["MILF", "milf"],
             ["MNLF", "mnlf"],
             ["PAGs", "pags"],
             ["Other Category", "other_category"]
            ];


		echo createFormList($temp) ;

?>

      </div>


        <h3>Suspects</h3>
        <div>

					<div class="form-group">
						<label class="col-sm-3 control-label" for="form-styles">Other Suspects</label>
						<div class="col-sm-8">
								<input type="text" class="form-control" id="suspect_name" name="suspect_name" ></input>
						</div>
					</div>



					<div class="form-group">
						<label class="col-sm-3 control-label" for="form-styles">Category Other Suspects</label>
						<div class="col-sm-8">
								<input type="text" class="form-control" id="cat_of_other_suspects" name="cat_of_other_suspects" ></input>
						</div>
					</div>







<?php
    $temp = [
             ["Other Suspects Killed", "other_suspects_killed"],
             ["Other Suspects At Large", "other_suspects_large"],
            ];


		echo createFormList($temp) ;

?>

      </div>







        <h3>Victims</h3>
        <div>


					<div class="form-group">
						<label class="col-sm-3 control-label" for="form-styles">Victim Names</label>
						<div class="col-sm-8">
								<textarea class="form-control" rows="5" name="victim_name" id="victim_name"></textarea>
						</div>
					</div>


<?php
    $temp = [
             ["Total Victims Elected Official", "total_victims_of_elected_official"],
             ["Total Victims Civilian", "total_victims_civilian"],
             ["Total Victims PNP", "total_victims_pnp"],
             ["Total Victims AFP", "total_victims_afp"],
             ["Total Victims SG", "total_victims_sg"],
             ["Total Victims CAA", "total_victims_caa"],
             ["Total Victims Foreign", "total_victims_foreign"],
             ["Total Victims Others", "total_victims_others"],
            ];


		echo createFormList($temp) ;

?>

      </div>







        <h3>HP FAs</h3>
        <div>

<?php

    $temp = [["Machine Gun", "hpfa_machine_gun"], 
             ["Machine Pistol/SMG", "hpfa_machine_pistol"],
             ["Grenade Launcher", "hpfa_grenade_launcher"],
             ["Rifle", "hpfa_rifle"],
             ["Pistol", "hpfa_pistol"],
             ["Revolver", "hpfa_revolver"]
            ];

		echo createFormList($temp) ;

?>
 </div>
        <h3>LF FAs</h3>
        <div>


<?php

    $temp = [["Shotgun", "lffa_shotgun"], 
             ["Rifle", "lffa_rifle"],
             ["Pistol", "lffa_pistol"],
             ["Revolver", "lffa_revolver"],
             ["Sumpak / Improvised", "lffa_sumpak"]
            ];

		echo createFormList($temp) ;

?>
        </div>
        <h3>Other Items</h3>
        <div>

<?php

    $temp = [["FA Replica", "oi_fareplica"], 
             ["Bladed / Pointed Weapons", "oi_bladed"],
             ["Grenade", "oi_grenade"],
             ["Explosives", "oi_explosives"],
             ["Ammunitions", "oi_ammo"]
            ];

		echo createFormList($temp) ;

?>
        </div>

        <h3>Drug: Shabu</h3>
        <div>
<?php

    $temp = [["Sachets", "shabu_sachets"], 
             ["Kilograms", "shabu_kgs"],
             ["Grams", "shabu_grams"],
             ["Packs", "shabu_packs"]
            ];

		echo createFormList($temp) ;

?>
        </div>


        <h3>Drug: Marijuana</h3>
        <div>
<?php

    $temp = [["Sachets", "mj_sachets"], 
             ["Bricks", "mj_bricks"],
             ["Leaves", "mj_leaves"],
             ["Rolls", "mj_rolls"],
             ["Plants", "mj_plants"],
             ["Seeds", "mj_seeds"],
             ["Kilograms", "mj_kgs"]
            ];

		echo createFormList($temp) ;

?>
        </div>


        <h3>Drug: Cocaine</h3>
        <div>
<?php

    $temp = [["Packs", "coke_sachets"], 
             ["Blocks", "coke_grams"],
             ["Kilograms", "coke_kgs"]
            ];

		echo createFormList($temp) ;

?>
        </div>


        <h3>Other Illegal Drugs</h3>
        <div>
<?php

    $temp = [["Kilograms", "oid_kgs"]
            ];

		echo createFormList($temp) ;

?>
        </div>






 </div>

        </div>


					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">DDB Value</label>
						<div class="col-sm-6">
								<input type="text" class="form-control" id="ddb_value" name="ddb_value" ></input>
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
						<div class=" col-sm-2">
							<button type="button" class="btn btn-danger btn-label-left" onclick="checkForDuplicates()">
								Check for Duplicates
							</button>
	
						</div>


						<div class="col-sm-2">
							<button type="button"  class="btn btn-primary btn-label-left" onclick="submitForm();">
							<span><i class="fa fa-clock-o"></i></span>
								Save and Send Message
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
function createMessage() {

  var sms_data = "NPDTOC SMS ";
  sms_data += document.getElementById('reference').value;
  loc = document.getElementById('s2_with_tag3').value;
  prov = document.getElementById('prov').value;
  loc = loc.split(",");
  incident = document.getElementById('s2_with_tag2').value;
  incident = incident.split(",");
  sms_data += " " + incident[0];
  sms_data += " in " + prov;
  sms_data += " (SMS RECV FM " + document.getElementById('report_from').value + " on " + document.getElementById('input_time_reported').value + "," + document.getElementById('input_date_reported').value +")";

  document.getElementById('details').value= sms_data;
}

function submitForm() {

   var error_flag = 0;
   var error_string = "";
   if (document.getElementById('input_date').value == "") {
      error_string += "Date Incident cannot be null.\n";
   }

   if (document.getElementById('input_time').value == "") {
      error_string += "Time Incident cannot be null.\n";
   }

   if (document.getElementById('input_date_reported').value == "") {
      error_string += "Date Reported cannot be null.\n";
   }

   if (document.getElementById('input_time_reported').value == "") {
      error_string += "Time Reported cannot be null.\n";
   }

  incident = document.getElementById('s2_with_tag2').value;
  incident = incident.split(",");

   if (incident[0] == "None") {
      error_string += "Incident type cannot be null.\n";
   }

  location_ = document.getElementById('s2_with_tag3').value;
  location_ = location_.split(",");

   if (location_[0] == "None") {
      error_string += "Location  cannot be null.\n";
   }

   if ( error_string == "") {
     document.forms["incident_form"].submit();
   } else {
     alert(error_string);
   }

}

function checkForDuplicates() {

  date = document.getElementById('input_date').value;
  time = document.getElementById('input_time').value;
  pro = document.getElementById('pro').value;
  incident = document.getElementById('s2_with_tag2').value;
  incident = incident.split(",");


  $.post("<?=site_url()?>/main/checkDuplicates",
    {
        date: date,
        time: time,
        incident_type: incident[0],
        pro: pro
    },
    function(data, status){
        alert(data);
    });

}


// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select Contact"});
	$('#pro').select2({placeholder: "Select PRO"});
	//$('#s2_with_tag2').select2({placeholder: "Select Contact"});
	$('#s2_with_tag3').select2({placeholder: "Select Contact"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
	$('#input_time_reported').timepicker({setDate: new Date()});
}


var name = "#floatMenu";
var menuYloc = null;

$(document).ready(function() {
/*
   menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
    $(window).scroll(function () {
        var offset = menuYloc+$(document).scrollTop()+"px";
        $(name).animate({top:offset},{duration:500,queue:false});
    });
*/

	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	$('#input_date_reported').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();

  var icons = {
    header: "ui-icon-circle-arrow-e",
    activeHeader: "ui-icon-circle-arrow-s"
  };
  // Make accordion feature of jQuery-UI
  $("#accordion").accordion({icons: icons });

   var selectData, $states;

    function updateSelects() {
        var cities = $.map(selectData[this.value].data, function (city) {
            return $("<option value='" + city.id + "' />").text(city.name);
        });
        $("#incident_sub").empty().append(cities);
    }

    $.getJSON("<?=site_url()?>/main/getIncidentJSON", function (data) {
        var state;
        selectData = data;
        $states = $("#s2_with_tag2").on("change", updateSelects);
        for (state in selectData) {
            $("<option value='" + state +  "'/>").text(state).appendTo($states);
        }
        $states.change();
    });


});
</script>
