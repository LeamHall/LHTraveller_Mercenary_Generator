<?php

require_once 'people_obj.php';

$kid = new Person($person_params);

$trooper = new Trooper($trooper_params);
$corporal = new Corporal($trooper_params);
$nco = new NCO($trooper_params);
// $snco = new SNCO($trooper_params);
// $platoon_officer = new Platoon_Officer($trooper_params);
// $company_officer = new Company_Officer($trooper_params);


echo "$trooper->rank Age $trooper->age\n";
foreach ($trooper->skills as $s => $v) {
	echo "$s" . "-" . "$v";
}
 
echo "\n\n";
echo "$corporal->rank Age $corporal->age\n";
foreach ($corporal->skills as $s => $v) {
	echo "$s" . "-" . "$v";
}


echo "\n\n";
$medic = new Trooper($trooper_params);
$medic->change_role($trooper_params, 'medic');

echo "$medic->rank Age $medic->age\n";
foreach ($medic->skills as $s => $v) {
	echo "$s" . "-" . "$v  ";
}

echo "\n";

//foreach ($medic->roles as $role ) {
	echo "Role is $medic->role \n";
//}
echo "\n\n";

echo "$nco->rank Age $nco->age\n";
foreach ($nco->skills as $s => $v) {
	echo "$s" . "-" . "$v\t";
}
echo "\n\n";
echo "Role is $nco->role \n";
?>