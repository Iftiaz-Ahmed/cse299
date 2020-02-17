<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align: center;">
	<img src="pic.jpg">

	<form method="POST">
			<input type="number" name="source" placeholder="Source"><br>
			<input type="number" name="dest" placeholder="Destination"><br>
			<button type="submit" name="submit">Find Best Route</button>
		</form>
<?php 

if(isset($_POST["submit"])){
	$s = intval($_POST["source"]);
	$d = intval($_POST["dest"]);


	$INT_MAX = 0x7FFFFFFF; #max value for 32 bit

	function MinimumDistance($distance, $shortestPathTreeSet, $verticesCount)
	{
		global $INT_MAX;
		$min = $INT_MAX;
		$minIndex = 0;

		for ($v = 0; $v < $verticesCount; ++$v)
		{
			if ($shortestPathTreeSet[$v] == false && $distance[$v] <= $min)
			{
				$min = $distance[$v];
				$minIndex = $v;
			}
		}

		return $minIndex;
	}

	function PrintResult($distance, $verticesCount)
	{
		global $d;

		for ($i = 0; $i < $verticesCount; ++$i){
			if($d == $i) {
				echo "The distance from source to destination is: " . $distance[$i];
			}
		}
	}

	function Dijkstra($graph, $source, $verticesCount)
	{
		global $INT_MAX;
		$distance = array();
		$shortestPathTreeSet = array();


		for ($i = 0; $i < $verticesCount; ++$i)
		{
			$distance[$i] = $INT_MAX;
			$shortestPathTreeSet[$i] = false;
		}

		$distance[$source] = 0;

		for ($count = 0; $count < $verticesCount - 1; ++$count)
		{
			$u = MinimumDistance($distance, $shortestPathTreeSet, $verticesCount);
			$shortestPathTreeSet[$u] = true;

			for ($v = 0; $v < $verticesCount; ++$v)
				if (!$shortestPathTreeSet[$v] && $graph[$u][$v] && $distance[$u] != $INT_MAX && $distance[$u] + $graph[$u][$v] < $distance[$v])
					$distance[$v] = $distance[$u] + $graph[$u][$v];
		}

		PrintResult($distance, $verticesCount);
	}

	$graph = array(               
	array(0, 4, 0, 0, 0, 0, 0, 8, 0),
	array(4, 0, 8, 0, 0, 0, 0, 11, 0),
	array(0, 8, 0, 7, 0, 4, 0, 0, 2),
	array(0, 0, 7, 0, 9, 14, 0, 0, 0),
	array(0, 0, 0, 9, 0, 10, 0, 0, 0),
	array(0, 0, 4, 14, 10, 0, 2, 0, 0),
	array(0, 0, 0, 0, 0, 2, 0, 1, 6),
	array(8, 11, 0, 0, 0, 0, 1, 0, 7),
	array(0, 0, 2, 0, 0, 0, 6, 7, 0)
	);

?>
	
	
<?php

	Dijkstra($graph, $s, 9);
}

?>
</body>
</html>