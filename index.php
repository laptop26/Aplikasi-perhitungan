<?php
function getCombinations(...$arrays) {
	$result = [[]];
	foreach ($arrays as $property => $property_values) {
		$temp = [];
		foreach ($result as $result_item) {
			foreach ($property_values as $property_value) {
				$temp[] = array_merge($result_item, [$property => $property_value]);
			}
		}
		$result = $temp;
	}
	return $result;
}

$arrayA = array('Rendah', 'Tinggi');
$arrayB = array('Baik', 'Buruk');
$arrayC = array('Sakit', 'Sehat');

$hasil = getCombinations($arrayA, $arrayB, $arrayC);

foreach ($hasil as $c) {
	$text = implode(", ", $c);
	echo $text . '<br/>';
}
