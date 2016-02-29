<?php
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
    function createFormListEdit ( $temp_arr) {
						$html_data = "";
			foreach ($temp_arr as $t) {
						$html_data .= "<div class='form-group'>";
						$html_data .= "<label class='col-sm-4 control-label' for='form-styles'>" . $t[0] . "</label>";
						$html_data .= "<div class='col-sm-3'>";
						$html_data .="<input type='text' class='form-control' id='" . $t[1] ."' name='" . $t[1] . "'   value='". $t[2]."'></input>";
						$html_data .="</div></div>";

			}

			return $html_data;


		}


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
			<li><a href="#">Edit Incident</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-search"></i>
					<span>Edit Incident form</span>
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
				<h4 class="page-header">Edit Incident form</h4>
				<form class="form-horizontal" role="form" method="POST" action="<?=site_url()?>/main/submit_incident_update">
	
<div id="floatMenu" >
								<textarea class="form-control" rows="15" name="sms_data" > <?=$inc->sms_data?></textarea>
</div>
<input type="hidden" name="incident_id" value="<?=$inc->id?>">

	
					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Search Group</label>
						<div class="col-sm-6">
							<select id="s2_with_tag" name="group" class="populate placeholder">

							<?php
								foreach ($groups as $group) {
									if ( $inc->group_id == $group->id) {
										echo "<option selected>" .$group->group_name .", " .$group->id . "</option>";
									} else {
										echo "<option>" .$group->group_name .", " .$group->id . "</option>";

									}
								}

							?>
							</select>
						</div>
						</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Reference Number</label>
						<div class="col-sm-4">
								<input type="text" class="form-control" id="reference" value="<?=$inc->reference_number?>" name="reference_number" readonly></input>
						</div>
					</div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-styles">PRO</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="pro" name="pro" value="<?=$inc->pro?>" ></input>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-styles">Prov</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="prov" name="prov" value="<?=$inc->prov?>"></input>
            </div>
          </div>





					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Search Location </label>
						<div class="col-sm-6">
							<select id="s2_with_tag3" name="location" class="populate placeholder">
								<option> None,0 </option>

							<?php
								foreach ($cities as $city) {

                  if ( $city->id == $inc->location_id) {
										echo "<option selected>" .$city->name. ", " .$city->id . "</option>";
									} else {
										echo "<option>" .$city->name. ", " .$city->id . "</option>";

									}
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
                <input type="text" class="form-control" id="tag" name="tag" value="<?=$inc->tag?>" ></input>
            </div>
          </div>



					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Operation Type</label>
						<div class="col-sm-6">
							<select id="operation_type" name="operation_type" class="form-control">

							<?php
								foreach ($operations as $op) {

  								if ($op->id == $inc->operation_type) {
										echo "<option selected value='" . $op->id. "'>" .$op->operation  . "</option>";
									} else {
										echo "<option value='" . $op->id. "'>" .$op->operation  . "</option>";
									}
								}

							?>
							</select>
						</div>
						</div>



					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Victim Names</label>
						<div class="col-sm-6">
								<textarea class="form-control" rows="5" name="victim_name" id="victim_name"><?=$inc->victim_name?></textarea>
						</div>
					</div>



					<div class="form-group has-warning has-feedback">
						<label class="col-sm-2 control-label">Details</label>
  <div class="box-content col-sm-6" id="accordion">


        <h3>Category of Arrested Person (Part1) (Count)</h3>
        <div>

<?php
    $temp = [
             ["Civilian", "civilian", $inc->civilian],
             ["PNP", "pnp", $inc->pnp],
             ["AFP", "afp", $inc->afp],
             ["Govt/Elected Off", "govt_official", $inc->govt_official],
             ["OtherLEA", "otherlea", $inc->otherlea],
             ["BJMP", "bjmp", $inc->bjmp],
             ["BFP", "bfp", $inc->bfp],
             ["Security Guard", "security_guard", $inc->security_guard],
             ["CAA (CAFGU)", "caa", $inc->caa],
            ];


    echo createFormListEdit($temp) ;

?>

      </div>




        <h3>Category of Arrested Person (Part2) (Count)</h3>
        <div>

<?php
    $temp = [
             ["Foreign National", "foreign_national", $inc->foreign_national],
             ["ASG", "asg", $inc->asg],
             ["BIFF", "biff", $inc->biff],
             ["NPA", "npa", $inc->npa],
             ["MILF", "milf", $inc->milf],
             ["MNLF", "mnlf", $inc->mnlf],
             ["PAGs", "pags", $inc->pags],
             ["Other Category", "other_category", $inc->other_category]
            ];


    echo createFormListEdit($temp) ;

?>

      </div>




        <h3>Suspects And Victims(Count)</h3>
        <div>

<?php
    $temp = [
             ["Other Suspects Killed", "other_suspects_killed", $inc->other_suspects_killed],
             ["Other Suspects At Large", "other_suspects_large", $inc->other_suspects_large],
             ["Total Victims Elected Official", "total_victims_of_elected_official", $inc->total_victims_of_elected_official],
             ["Total Victims Civilian", "total_victims_civilian", $inc->total_victims_civilian],
             ["Total Victims PNP", "total_victims_pnp", $inc->total_victims_pnp],
             ["Total Victims AFP", "total_victims_afp", $inc->total_victims_afp],
             ["Total Victims SG", "total_victims_sg", $inc->total_victims_sg],
             ["Total Victims CAA", "total_victims_caa", $inc->total_victims_caa],
             ["Total Victims Foreign", "total_victims_foreign", $inc->total_victims_foreign],
             ["Total Victims Others", "total_victims_foreign", $inc->total_victims_others],
            ];


    echo createFormListEdit($temp) ;

?>

      </div>


        <h3>HP FAs</h3>
        <div>

<?php

    $temp = [["Machine Gun", "hpfa_machine_gun", $inc->hpfa_machine_gun], 
             ["Machine Pistol/SMG", "hpfa_machine_pistol", $inc->hpfa_machine_pistol],
             ["Grenade Launcher", "hpfa_grenade_launcher", $inc->hpfa_grenade_launcher],
             ["Rifle", "hpfa_rifle", $inc->hpfa_rifle],
             ["Pistol", "hpfa_pistol", $inc->hpfa_pistol],
             ["Revolver", "hpfa_revolver", $inc->hpfa_revolver]
            ];

		echo createFormListEdit($temp) ;

?>
 </div>
        <h3>LF FAs</h3>
        <div>


<?php

    $temp = [["Shotgun", "lffa_shotgun", $inc->lffa_shotgun], 
             ["Rifle", "lffa_rifle", $inc->lffa_rifle],
             ["Pistol", "lffa_pistol", $inc->lffa_pistol],
             ["Revolver", "lffa_revolver", $inc->lffa_revolver],
             ["Sumpak / Improved", "lffa_sumpak", $inc->lffa_sumpak]
            ];

		echo createFormListEdit($temp) ;

?>
        </div>
        <h3>Other Items</h3>
        <div>

<?php

    $temp = [["FA Replica", "oi_fareplica", $inc->oi_fareplica], 
             ["Bladed / Pointed Weapons", "oi_bladed", $inc->oi_bladed],
             ["Grenade", "oi_grenade", $inc->oi_grenade],
             ["Explosives", "oi_explosives", $inc->oi_explosives],
             ["Ammunitions", "oi_ammo", $inc->oi_ammo]
            ];

		echo createFormListEdit($temp) ;

?>
        </div>

        <h3>Drug: Shabu</h3>
        <div>
<?php

    $temp = [["Sachets", "shabu_sachets", $inc->shabu_sachets], 
             ["Kilograms", "shabu_kgs", $inc->shabu_kgs],
             ["Grams", "shabu_grams", $inc->shabu_grams],
             ["Packs", "shabu_packs", $inc->shabu_packs]
            ];

		echo createFormListEdit($temp) ;

?>
        </div>


        <h3>Drug: Marijuana</h3>
        <div>
<?php

    $temp = [["Sachets", "mj_sachets", $inc->mj_sachets], 
             ["Bricks", "mj_bricks", $inc->mj_bricks],
             ["Leaves", "mj_leaves", $inc->mj_leaves],
             ["Rolls", "mj_rolls", $inc->mj_rolls],
             ["Plants", "mj_plants", $inc->mj_plants],
             ["Seeds", "mj_seeds", $inc->mj_seeds],
             ["Kilograms", "mj_kgs", $inc->mj_kgs]
            ];

		echo createFormListEdit($temp) ;

?>
        </div>


        <h3>Drug: Cocaine</h3>
        <div>
<?php

    $temp = [["Packs", "coke_sachets", $inc->coke_sachets], 
             ["Blocks", "coke_grams", $inc->coke_grams],
             ["Kilograms", "coke_kgs", $inc->coke_kgs]
            ];

		echo createFormListEdit($temp) ;

?>
        </div>


        <h3>Other Illegal Drugs</h3>
        <div>
<?php

    $temp = [["Kilograms", "oid_kgs", $inc->oid_kgs],
             ["DDB Value", "ddb_value", $inc->ddb_value]
            ];

		echo createFormListEdit($temp) ;

?>
        </div>






 </div>

        </div>







          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-styles">Arresting Unit</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="arresting_unit" name="arresting_unit" value="<?=$inc->arresting_unit?>"></input>
            </div>
          </div>




          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-styles">Arrested Person</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="arrested_person" name="arrested_person" value="<?=$inc->arrested_person?>" ></input>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 control-label" for="form-styles">Category Other Suspects</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="cat_of_other_suspects" name="cat_of_other_suspects" value="<?=$inc->cat_of_other_suspects?>" ></input>
            </div>
          </div>






					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Other Suspects</label>
						<div class="col-sm-6">
								<input type="text" class="form-control" id="suspect_name" name="suspect_name" value="<?=$inc->suspect_name?>" ></input>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label class="col-sm-2 control-label" for="form-styles">Date</label>
						<div class="col-sm-2">
<?php 
	 $_date = explode("-",$inc->date);
    $_date =$_date[1] . "/" . $_date[2]. "/" . $_date[0] ;

?>
              <input type="text" name="date" id="input_date" class="form-control" placeholder="Date" value="<?=$_date?>">
              <span class="fa fa-calendar txt-danger form-control-feedback"></span>
            </div>
            <div class="col-sm-2">
              <input type="text" name="time" id="input_time" class="form-control" placeholder="Time" value="<?=$inc->time?>">
              <span class="fa fa-clock-o txt-danger form-control-feedback"></span>
            </div>
					</div>

					<div class="form-group has-feedback">
						<label class="col-sm-2 control-label" for="form-styles">Date Reported</label>
						<div class="col-sm-2">
<?php 
	 $_date = explode("-",$inc->date_reported);
    $_date =$_date[1] . "/" . $_date[2]. "/" . $_date[0] ;

?>
              <input type="text" name="date_reported" id="input_date_reported" class="form-control" placeholder="Date" value="<?=$_date?>">
              <span class="fa fa-calendar txt-danger form-control-feedback"></span>
            </div>
            <div class="col-sm-2">
              <input type="text" name="time_reported" id="input_time_reported" class="form-control" placeholder="Time" value="<?=$inc->time_reported?>">
              <span class="fa fa-clock-o txt-danger form-control-feedback"></span>
            </div>
					</div>







					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Report From</label>
						<div class="col-sm-6">
								<input type="text" class="form-control" id="report_from" name="report_from" value="<?=$inc->report_from?>"></input>
						</div>
					</div>


					<div class="form-group">
						<div class="col-sm-offset-2  col-sm-2">
							<button type="button" class="btn btn-primary btn-label-left" onclick="createMessage()">
								Create SMS Message
							</button>
						</div>
					</div>
	



					<div class="form-group">
						<label class="col-sm-2 control-label" for="form-styles">Details</label>
						<div class="col-sm-10">
								<textarea class="form-control" rows="5" name="details" id="details"><?=$inc->details?></textarea>
						</div>
					</div>



					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Update
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

  var sms_data = "PNPNOC SMS ";
  sms_data += document.getElementById('reference').value;
  loc = document.getElementById('s2_with_tag3').value;
  loc = loc.split(",");
  incident = document.getElementById('s2_with_tag2').value;
  incident = incident.split(",");
  sms_data += " " + incident[0];
  sms_data += " in " + loc[0];
  sms_data += " [" + document.getElementById('input_date').value + " " + document.getElementById('input_time').value + "]";
  sms_data += " (fm " + document.getElementById('report_from').value + ")";

  document.getElementById('details').value= sms_data;
}


// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select Contact"});
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
           if (city.id == "<?=$inc->incident_sub_type?>" ) {
           	 return $("<option selected value='" + city.id + "' />").text(city.name);
						} else {
           	 return $("<option value='" + city.id + "' />").text(city.name);
					
						}
        });
        $("#incident_sub").empty().append(cities);
    }

    $.getJSON("<?=site_url()?>/main/getIncidentJSON", function (data) {
        var state;
        selectData = data;
        $states = $("#s2_with_tag2").on("change", updateSelects);
        for (state in selectData) {
            var temp = state.split(", ");
           if (temp[1] == "<?=$inc->incident_type_id?>" ) {
         
            $("<option selected value='" + state +  "'/>").text(state).appendTo($states);
						} else {
            $("<option value='" + state +  "'/>").text(state).appendTo($states);

						}
        }
        $states.change();
    });



});
</script>
