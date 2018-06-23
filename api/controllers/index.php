<?php
	header('Content-Type: application/json');
	require_once 'API/route.collection.php';
	if ($_SERVER['HTTP_HOST'] == "localhost") {
		$rootUrlViews = 'localhost/Nagpurwholesale.com/';
	} else {
		$rootUrlViews = 'http://'.$_SERVER['HTTP_HOST'].'/';
	}
	$data = explode('/', trim($_GET['url'], '/'));
	if($_SERVER["CONTENT_TYPE"] == 'application/json'){
		if (array_key_exists($data[0], $controller)) {
			include_once 'controller.'.$data[0].'.php';
			$objController = new $controller[$data[0]][0]();
			if (isset($data[1]) && array_key_exists($data[1], $controller[$data[0]])) {
				$methodName = $controller[$data[0]][$data[1]]["METHOD_NAME"];
				$requestName = strtolower($_SERVER["REQUEST_METHOD"]);
				if($requestName === $controller[$data[0]][$data[1]]["REQUEST_NAME"]){
					echo $objController->$methodName();
				}
				else{
					echo "Lost";
				}
			}
			else {
				echo "Lost";
			}
		} else {
			echo "Lost";
		}
	}
	else {
		echo "Lost";
	}
?>