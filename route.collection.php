<?php
	/**
     * route for controller
     */ 
	$controller = array();

	$controller["category"] = array();
	array_push($controller["category"], 'CategoryController');
	$controller["category"]["add"] = array("METHOD_NAME"=>"add","REQUEST_NAME"=>"post");
	$controller["category"]["update"] = array("METHOD_NAME"=>"update","REQUEST_NAME"=>"put");
	$controller["category"]["list"] = array("METHOD_NAME"=>"listOne","REQUEST_NAME"=>"get");
	$controller["category"]["list-all"] = array("METHOD_NAME"=>"listAll","REQUEST_NAME"=>"get");
	//$controller["category"]["delete"] = array("METHOD_NAME"=>"delete","REQUEST_NAME"=>"delete");
	
	/**
     * route for banner
     */ 
	
	$banner = array();

	$banner["banner"] = array();
	array_push($banner["banner"], 'BannerController');
	$controller["banner"]["add"] = array("METHOD_NAME"=>"add","REQUEST_NAME"=>"post");
	$controller["banner"]["update"] = array("METHOD_NAME"=>"update","REQUEST_NAME"=>"put");
	$controller["banner"]["list"] = array("METHOD_NAME"=>"listOne","REQUEST_NAME"=>"get");
	$controller["banner"]["list-all"] = array("METHOD_NAME"=>"listAll","REQUEST_NAME"=>"get");
	//$controller["banner"]["delete"] = array("METHOD_NAME"=>"delete","REQUEST_NAME"=>"delete");
	
	/**
     * route for brand
     */ 
	
	$brand = array();

	$brand["brand"] = array();
	array_push($brand["brands"], 'BrandController');
	$brand["brands"]["add"] = array("METHOD_NAME"=>"add","REQUEST_NAME"=>"post");
	$brand["brands"]["update"] = array("METHOD_NAME"=>"update","REQUEST_NAME"=>"put");
	$brand["brands"]["list"] = array("METHOD_NAME"=>"listOne","REQUEST_NAME"=>"get");
	$brand["brands"]["list-all"] = array("METHOD_NAME"=>"listAll","REQUEST_NAME"=>"get");
	
	
	/**
     * route for client
     */ 
	
	$client = array();
	$client["client"] = array();
	array_push($client["clients"], 'ClientController');
	$client["clients"]["add"] = array("METHOD_NAME"=>"add","REQUEST_NAME"=>"post");
	$client["clients"]["update"] = array("METHOD_NAME"=>"update","REQUEST_NAME"=>"put");
	$client["clients"]["list"] = array("METHOD_NAME"=>"listOne","REQUEST_NAME"=>"get");
	$client["clients"]["list-all"] = array("METHOD_NAME"=>"listAll","REQUEST_NAME"=>"get");
	
	
	/**
     * route for client
     */ 
	
	$deliverySlots = array();
	$deliverySlots["deliverySlots"] = array();
	array_push($client["delivery_slots"], 'DeliveryController');
	$client["delivery_slots"]["add"] = array("METHOD_NAME"=>"add","REQUEST_NAME"=>"post");
	$client["delivery_slots"]["update"] = array("METHOD_NAME"=>"update","REQUEST_NAME"=>"put");
	$client["delivery_slots"]["list"] = array("METHOD_NAME"=>"listOne","REQUEST_NAME"=>"get");
	$client["delivery_slots"]["list-all"] = array("METHOD_NAME"=>"listAll","REQUEST_NAME"=>"get");
	
?>

