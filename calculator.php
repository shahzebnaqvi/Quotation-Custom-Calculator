<?php include_once('connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
	<select>
		<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "On-Grid Solutions" and equipment = "Inverter" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option>".$row['quality']."</option>";
		}
		?>
	</select>

	<select>
		<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "On-Grid Solutions" and equipment = "Panels" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option>".$row['quality']."</option>";
		}
		?>
	</select>

	<select>
		<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "On-Grid Solutions" and equipment = "Structure" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option>".$row['quality']."</option>";
		}
		?>
	</select>
	<br>

	<select>
		<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Hybrid Solutions" and equipment = "Inverter" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option>".$row['quality']."</option>";
		}
		?>
	</select>

	<select>
		<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Hybrid Solutions" and equipment = "Panels" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option>".$row['quality']."</option>";
		}
		?>
	</select>

	<select>
		<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Hybrid Solutions" and equipment = "Structure" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option>".$row['quality']."</option>";
		}
		?>
	</select>

	<br>

	<select>
		<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Off-Grid Solution" and equipment = "Inverter" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option>".$row['quality']."</option>";
		}
		?>
	</select>

	<select>
		<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Off-Grid Solution" and equipment = "Panels" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option>".$row['quality']."</option>";
		}
		?>
	</select>

	<select>
		<?php
		$sql = 'SELECT `quality` FROM `solar_details` WHERE solar_type = "Off-Grid Solution" and equipment = "Structure" GROUP BY quality order by id';
		$result = mysqli_query(connect_db(),$sql);
		while($row = mysqli_fetch_assoc($result)){
			echo "<option>".$row['quality']."</option>";
		}
		?>
	</select>
	
</form>
</body>
</html>


<?php
$solar = $_REQUEST['solar'];

$inverter = $_REQUEST['inverter'];
$inverterkw = $_REQUEST['inverterkw'];

$panels = $_REQUEST['panels'];
$panelskw = $_REQUEST['panelskw'];

$structure = $_REQUEST['structure'];
$structurekw = $_REQUEST['structurekw'];


$row_inverter = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Inverter" and `quality` = "'.$inverter.'" and `kilowatt` = "'.$inverterkw.'"'))['price'];

$row_panels = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Panels" and `quality` = "'.$panels.'" and `kilowatt` = "'.$panelskw.'"'))['price'];


$row_structure = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Structure" and `quality` = "'.$structure.'" and `kilowatt` = "'.$structurekw.'"'))['price'];

$row_labor = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Labour" and `quality` = "Basic" and `kilowatt` = "'.$structurekw.'"'))['price'];

$row_miscellaneous = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Miscellaneous Components" and `quality` = "Basic" and `kilowatt` = "'.$structurekw.'"'))['price'];

$row_transport = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Transport/ Loading/Unloading" and `quality` = "Basic" and `kilowatt` = "'.$structurekw.'"'))['price'];

$row_earthing = mysqli_fetch_assoc(mysqli_query(connect_db(),'SELECT `price` FROM `solar_details` WHERE `solar_type` = "'.$solar.'" and `equipment` = "Earthing Pit" and `quality` = "Basic" and `kilowatt` = "'.$structurekw.'"'))['price'];


echo "Solar : ".$solar;
echo "<br>";

echo "Inverter ".$inverter." ".$inverterkw." Price : ".$row_inverter;
echo "<br>";

echo "Panels Price : ".$row_panels;
echo "<br>";

echo "Structure Price : ".$row_structure;
echo "<br>";

echo "Labour Price : ".$row_labor;
echo "<br>";

echo "Miscellaneous Components Price : ".$row_miscellaneous;
echo "<br>";

echo "Transport/ Loading/Unloading Price : ".$row_transport;
echo "<br>";

echo "Earthing Pit : ".$row_earthing;
echo "<br>";


$total = $row_inverter + $row_panels + $row_structure + $row_labor + $row_miscellaneous + $row_transport + $row_earthing;
echo "Total Amount : ".$total;
echo "<br>";



?>