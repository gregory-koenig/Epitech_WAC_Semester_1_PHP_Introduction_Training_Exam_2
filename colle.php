<?php
function laby($str = NULL) {
	if (!is_string($str)) {
		return "FALSE\n";
	} else {
		$num = array("0", "1", "2");
		$wall = array(" ", "-", "|");
		return "TRUE\n" . str_replace($num, $wall, $str);
	}
}

function top_wall($x) {
	for ($i = 0; $i < $x; $i++) {
		echo "1";
	}
	echo "\n";
}

function bottom_wall($x) {
	for ($i = 0; $i < $x; $i++) {
		echo "1";
	}
	echo "\n";
}

function left_wall($y) {
	for ($i = 1; $i < $y; $i++) {
		echo "2\n";
	}
}

function right_wall($y) {
	for ($i = 1; $i < $y; $i++) {
		echo "2\n";
	}
}

function generateMap($x = NULL, $y = NULL /*[, $exit_count = 0]*/) {
	if (!is_int($x) || !is_int($y) /*|| !is_int($exit_count)*/ || $x <= 0 || $y <= 0) {
		return NULL;
	} else {
		top_wall($x);
		for ($i = 1; $i <= $x; $i++) {
			$tab = array();
			for ($j = 1; $j <= $y; $j++) {
				foreach ($tab as $value) {
					echo $value = strval(rand(0, 2));
				}
			}
		}
		bottom_wall($x);
	}
}

var_dump(laby(generateMap(5, 5)));
?>
