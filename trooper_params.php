<?php


$trooper_params = array();

$trooper_params['rank_enlisted'] = array();
$trooper_params['rank_enlisted']['1'] = 'PVT';
$trooper_params['rank_enlisted']['2'] = 'PV2';
$trooper_params['rank_enlisted']['3'] = 'PFC';
$trooper_params['rank_enlisted']['4'] = 'CPL';
$trooper_params['rank_enlisted']['5'] = 'SGT';
$trooper_params['rank_enlisted']['6'] = 'SSG';
$trooper_params['rank_enlisted']['7'] = 'SFC';
$trooper_params['rank_enlisted']['8'] = 'MSG';
$trooper_params['rank_enlisted']['9'] = 'SGM';
$trooper_params['rank_officer']['1'] = '2LT';
$trooper_params['rank_officer']['2'] = '1LT';
$trooper_params['rank_officer']['3'] = 'CPT';
$trooper_params['rank_officer']['4'] = 'MAJ';
$trooper_params['rank_officer']['5'] = 'LTC';
$trooper_params['rank_officer']['6'] = 'COL';
$trooper_params['rank_officer']['7'] = 'BG';
$trooper_params['rank_officer']['8'] = 'MG';
$trooper_params['rank_officer']['9'] = 'LTG';
$trooper_params['rank_officer']['10'] = 'GEN';

$trooper_params['base_skill']['troop'] = 'GunCbt';
$trooper_params['base_skill']['medic'] = 'Medic';
$trooper_params['base_skill']['nco'] = 'Leadership';
$trooper_params['base_skill']['company_officer'] = 'Leadership';
$trooper_params['base_skill']['driver'] = 'Drive';
$trooper_params['base_skill']['clerk'] = 'Admin';
$trooper_params['base_skill']['comm'] = 'Commo';
$trooper_params['base_skill']['sensors'] = 'Sensors';

$trooper_params['all_skills'][1] = 'GunCbt';
$trooper_params['all_skills'][2] = 'Drive';
$trooper_params['all_skills'][3] = 'Athlete';
$trooper_params['all_skills'][4] = 'Melee';
$trooper_params['all_skills'][5] = 'HvyWpn';
$trooper_params['all_skills'][6] = 'GunCbt';
$trooper_params['all_skills'][7] = 'Melee';
$trooper_params['all_skills'][8] = 'HvyWpn';
$trooper_params['all_skills'][9] = 'Stealth';
$trooper_params['all_skills'][10] = 'Medic';
$trooper_params['all_skills'][11] = 'Recon';
$trooper_params['all_skills'][12] = 'GunCbt';
$trooper_params['all_skills'][13] = 'Mechanic';
$trooper_params['all_skills'][14] = 'Drive';
$trooper_params['all_skills'][15] = 'Gunnery';
$trooper_params['all_skills'][16] = 'Recon';
$trooper_params['all_skills'][17] = 'Sensors';
$trooper_params['all_skills'][18] = 'Admin';
$trooper_params['all_skills'][19] = 'Commo';
$trooper_params['all_skills'][20] = 'Sensors';
$trooper_params['all_skills'][21] = 'Navigation';
$trooper_params['all_skills'][22] = 'Explosives';
$trooper_params['all_skills'][23] = 'Survival';
$trooper_params['all_skills'][24] = 'Engineer';
$trooper_params['all_skills'][25] = 'Tactics';
$trooper_params['all_skills'][26] = 'Leadership';
$trooper_params['all_skills'][27] = 'Advocate';
$trooper_params['all_skills'][28] = 'Diplomat';
$trooper_params['all_skills'][29] = 'Tactics';
$trooper_params['all_skills'][30] = 'Admin';

/*



if (! isset($troop_counttroops_per_squad)) {
	$troop_count = array (
		'troops_per_squad' => 8,
		'squads_per_platoon' => 3,
		'platoons_per_company' => 4);
}

$hq_staff_roles = array (
	0 => '1st Sgt',
	1 => 'Fwd Obs',
	2 => 'Comms ', 
	3 => 'Sensors',
	4 => 'Medic ',
	5 => 'Driver',
	6 => 'Driver',
	7 => 'Clerk ');

$unit_id = array(
	1 => '1st',
	2 => '2nd',
	3 => '3rd',
	4 => '4th',
	5 => '5th',
	6 => '6th',
	7 => '7th',
	8 => '8th'

);


function get_last_name($last_names) {
	$i = rand(0, count($last_names));
	return $last_names[$i];
}

function get_first_name($first_names) {
	$i = rand(0, count($first_names));
	return $first_names[$i];	
}



function generate_stats($stat_parameters) {
	$UPP = "";
	for ( $i = 0; $i < 3; $i++) {
		$stat_roll = rand(1,6) + rand(1,6);
		if ($stat_roll < $stat_parameters['min_physical_stat'] ) {
			$stat_roll = $stat_parameters['min_physical_stat'];
		} else if ( $stat_roll > $stat_parameters['max_stat']) {
			$stat_roll = $stat_parameters['max_stat'];
		}
		$UPP = $UPP . strtoupper(dechex($stat_roll));
	}
	for ( $i = 0; $i < 2; $i++ ) {
		$stat_roll = rand(1,6) + rand(1,6);
		if ($stat_roll < $stat_parameters['min_mental_stat'] ) {
			$stat_roll = $stat_parameters['min_mental_stat'];
		} else if ( $stat_roll > $stat_parameters['max_stat']) {
			$stat_roll = $stat_parameters['max_stat'];
		}
		$UPP = $UPP . strtoupper(dechex($stat_roll));
	}
	$stat_roll = rand(1,6) + rand(1,6);
	if ($stat_roll < $stat_parameters['min_stat'] ) {
		$stat_roll = $stat_parameters['min_stat'];
	} else if ( $stat_roll > $stat_parameters['max_stat']) {
		$stat_roll = $stat_parameters['max_stat'];
	}
	$UPP = $UPP . strtoupper(dechex($stat_roll));
	
	return $UPP;
}

function generate_person( $rank_min, $rank_max, $role, $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) {
	$upp = generate_stats($stat_parameters);
	$rank = $rank_structure[rand($rank_min, $rank_max)];
	$age = 18 + rand(0,5) + $rank_min; 
	if ( rand(1,6) <=5 ) {
		$gender = 'Male';
		$first_name = get_first_name($male_first_names);
	} else {
		$gender = 'Female';
		$first_name = get_first_name($female_first_names);
	}
	
	$last_name = get_last_name($last_names);
	$skill_array = array();
	$skill_count = rand(1,6) + $rank_max/2;
	$max_skill_level = 12 + ($rank_max * 2);
	if ( $rank_max > 8 ) {
		$max_skill_level = count($all_skills);
	} else {
		$max_skill_level = 12 + ($rank_max * 2);
	}	
	$skill_array[$base_skills[$role]] = 1;	
	if ($role != 'officer' && $role != 'troop' ) {
		$skill_array = add_skill($skill_array, 'GunCbt') ;
		$skill_array = add_skill($skill_array, 'Recon') ;
	}
	if ( $rank_min >= 4 ) {
		$skill_array = add_skill($skill_array, 'Leadership') ;
	}
	for ( $i = 0; $i < $skill_count; $i++ ) {
		$skill_array = add_skill($skill_array, $all_skills[rand(1, $max_skill_level)]);
	}	
	echo "\t";
	echo "$rank $first_name $last_name, $upp $gender $age  ";
	echo "\n\t";
	foreach ($skill_array as $skill => $level) {
		echo "$skill - $level ";
	}
	echo "\n";
}
	
function generate_squad($troop_count, $stat_parameters, $last_names, $male_first_names, $female_first_names, $unit_id, $unit_number, $rank_structure, $base_skills, $all_skills) {
	
	$UNIT = $unit_id[$unit_number];
	echo "\n$UNIT Squad:\n";
	
	if ($UNIT == '1st') {
		generate_person( 6, 7, 'nco', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
		generate_person( 2, 3, 'medic', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	} else {
		generate_person( 5, 6, 'nco', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	}
	
	for ( $i = 0; $i < $troop_count['troops_per_squad']; $i++) {
		if ( $i == 0) {
			echo "\n";
			generate_person( 3, 4, 'nco', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
		} elseif (( $i % 4) == 0) {
			echo "\n";
			generate_person( 2, 3, 'troop', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
		} else {
			generate_person( 1, 1, 'troop', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
		}
	}
}

function generate_platoon($troop_count, $stat_parameters, $last_names, $male_first_names, $female_first_names, $unit_id, $unit_number, $rank_structure, $rank_structure, $base_skills, $all_skills) {

	$UNIT = $unit_id[$unit_number];
	echo "\n$UNIT Platoon: \n";
	
	if ( $UNIT == '1st') {	
		generate_person( 11, 11, 'officer', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	} else {
		generate_person( 10, 11, 'officer', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	}
		
	for ( $i = 1; $i <= $troop_count['squads_per_platoon']; $i++) {	
		generate_squad($troop_count, $stat_parameters, $last_names, $male_first_names, $female_first_names, $unit_id, $i , $rank_structure, $base_skills, $all_skills);
	}
}

function generate_company($troop_count, $stat_parameters, $last_names, $male_first_names, $female_first_names, $unit_id, $hq_staff_roles, $rank_structure, $rank_structure, $base_skills, $all_skills) {
	echo "Commander: \n";
	generate_person( 12, 13, 'officer', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	
	generate_hq_staff($hq_staff_roles, $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills);

	for ( $i = 1; $i <= $troop_count['platoons_per_company']; $i++ ) {
		generate_platoon($troop_count, $stat_parameters, $last_names, $male_first_names, $female_first_names, $unit_id, $i, $rank_structure, $rank_structure, $base_skills, $all_skills);
	}
}

function generate_hq_staff($hq_staff_roles, $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) {
	echo "HQ Platoon:\n";
	generate_person( 7, 9, 'nco', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	generate_person( 4, 6, 'medic', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	generate_person( 2, 3, 'comm', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	generate_person( 2, 3, 'sensors', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	generate_person( 2, 3, 'clerk', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	generate_person( 1, 2, 'driver', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
	generate_person( 1, 2, 'driver', $stat_parameters, $last_names, $male_first_names, $female_first_names, $rank_structure, $base_skills, $all_skills) ;
}

function open_web_page($troop_count, $stat_parameters, $_POST) {

	if (array_key_exists('_submit_check', $_POST)) {
		if (is_numeric($_POST['troops_per_squad'])) {
			$troop_count['troops_per_squad'] = $_POST['troops_per_squad'];
		}
		if (is_numeric($_POST['squads_per_platoon'])) {
			$troop_count['squads_per_platoon'] = $_POST['squads_per_platoon'];
		}
		if (is_numeric($_POST['platoons_per_company'])) {
			$troop_count['platoons_per_company'] = $_POST['platoons_per_company'];
		}
		if (is_numeric($_POST['min_stat'])) {
			$stat_parameters['min_stat'] = $_POST['min_stat'];
		}
		if (is_numeric($_POST['min_physical_stat'])) {
			$stat_parameters['min_physical_stat'] = $_POST['min_physical_stat'];
		}
		if (is_numeric($_POST['min_mental_stat'])) {
			$stat_parameters['min_mental_stat'] = $_POST['min_mental_stat'];
		}
		if (is_numeric($_POST['max_stat'])) {
			$stat_parameters['max_stat'] = $_POST['max_stat'];
		}
	}

	$min_stat = $stat_parameters['min_stat'];
	
	print<<<_HTML_
	<html>
	<head>
		<title>LH Traveller Mercenary Generator</title>
	</head>
	<body>
	<h2>Traveller Mercenary Generator</h2>
	<p>Adjust defaults if you want and then hit "Sign them up!"

	<form method="POST" action="$_SERVER[PHP_SELF]">
	<table cellpadding="20" width="90%">
	<tr><td align="top">
	<h3>Individual Stat Parameters</h3>
	<p>Minimum Stat (2-15)
		<input type="number" min="2" max="15" name="min_stat" value="$min_stat" size="5">
	<p>Minimum Physical Stat (2-15)
		<input type="number" min="2" max="15" name="min_physical_stat" value="$stat_parameters['min_physical_stat']" size="5">
	<p>Minimum Mental Stat (2-15)	
		<input type="number" min="2" max="15"name="min_mental_stat" value="$stat_parameters['min_mental_stat']" size="5">
	<p>Maximum Stat (2-15)
		<input type="number" min="2" max="15" name="max_stat" value="$stat_parameters['max_stat']" size="5">
	</td>
	<td align="top">
	<h3>TOE Parameters</h3>

	<p>Troops per Squad (1-15)
		<input type="number" min="1" max="15" name="troops_per_squad" value="$troop_count['troops_per_squad']" size ="5">
	<p>Squads Per Platoon (1-8 )
		<input type="number" min="1" max="8" name="squads_per_platoon" value="$troop_count['squads_per_platoon']" size ="5">
	<p>Platoons per Company (1-8)
		<input type="number" min="1" max="8" name="platoons_per_company" value="$troop_count['platoons_per_company']" size ="5">

	<br>
	<input type="hidden" name="_submit_check" value="1">
	<input type="submit" value="Sign them up!" name="submit">

	</td></tr>
	</table>
	</form>

	<hr>
	<pre>
	
_HTML_;
		
}

function close_web_page() {
	echo "</pre></body></html>";
}


*/
?>
