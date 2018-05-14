<!DOCTYPE HTML>
<?php


spl_autoload_register(function($class_name){
	require 'classes/'. $class_name .'.php';
});

$aanwezig = 6;
$afwezig = 1;
$teLaat = 1;

//$modules = new Modules;
//$modules->getAllModules();

//foreach ($modules as $module) { ?>

<html>
<head>
   <link rel="stylesheet" href="styles.css">
<script>
window.onload = function () {



var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Modules",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		indexLabel: "{label} - {y}",
		toolTipContent: "<b>{label}:</b> {y}",
		dataPoints: [
			{ y: <?php echo $teLaat ?>, label: "Te laat" },
			{ y: <?php echo $afwezig ?>, label: "Afwezig" },
			{ y: <?php echo $aanwezig ?>, label: "Aanwezig" },
		]
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
