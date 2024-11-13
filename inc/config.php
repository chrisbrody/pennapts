<?php

	switch ('dev') {

		case "dev":
			$webPath = "./";
			$imgPath = "./images/";
			$cssPath = "./css/";
			$jsPath  = "./js/";
			$articlePath  = "./articles/";
		break;

		case "pro":
			$webPath = "https://pennsylvaniaapartments.com/";
			$imgPath = "https://pennsylvaniaapartments.com/images/";
			$cssPath = "https://pennsylvaniaapartments.com/css/";
			$jsPath  = "https://pennsylvaniaapartments.com/js/";
			$articlePath  = "https://pennsylvaniaapartments.com/articles/";
		break;

		default:
			$webPath = "https://pennsylvaniaapartments.com/";
			$imgPath = "https://pennsylvaniaapartments.com/images/";
			$cssPath = "https://pennsylvaniaapartments.com/css/";
			$jsPath  = "https://pennsylvaniaapartments.com/js/";
			$articlePath  = "https://pennsylvaniaapartments.com/articles/";
		break;

	};

	$hideNav = false;
	$hideFooter = false;

	$stateLetters = 'PA';
	$systemName = "PennsylvaniaApartments.com";
	$systemKey = "1f70510ed5169d55555aaa193f8766d3";
?>

<script type="text/javascript">
	// Pass PHP variables to JavaScript
	var stateLetters = <?php echo json_encode($stateLetters); ?>;
	var systemName = <?php echo json_encode($systemName); ?>;
	var systemKey = <?php echo json_encode($systemKey); ?>;
</script>
