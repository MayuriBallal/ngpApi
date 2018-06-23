<?php
require_once 'API/api/model/delivery/model.delivery.php';
class DeliveryController{
	private $deliveryModelObj;
    private $deliveryDto;
	 function __construct(){
        $this->deliveryModelObj = new DeliveryModel();
        $this->deliveryDto = new DeliveryDto();
    }
	
	function add(){
        $errorList = array();
        
        if(isset($_POST["delivery_slots"]) && !empty($_POST["delivery_slots"])){
            $this->deliveryDto->setCategoryName($_POST["delivery_slots"]); 
        }
        else{
            array_push($errorList,"Delivery slots name cannot be empty.");
        }

		
		

        if(count($errorList) > 0){
            $response = array();
            $response["CODE"] = 400;
            $response["MESSAGE"] = "Validation errors";
            $response["DATA"] = $errorList;
        }
        else{
            $response = $this->deliveryModelObj->addDelivery($this->deliveryDto);
        }
        http_response_code($response["CODE"]);
        return json_encode($response);
    }
	
	function update(){
        $_PUT = json_decode(file_get_contents('php://input'), true);

        $errorList = array();
        
        if(isset($_PUT["delivery_slots_id"]) && !empty($_PUT["delivery_slots_id"])){
            $this->deliveryDto->setDeliverySlotId($_PUT["delivery_slots_id"]); 
        }
        else{
            array_push($errorList,"Delivery slot id cannot be empty.");
        }
        
        if(isset($_PUT["delivery_slots"]) && !empty($_PUT["delivery_slots"])){
            $this->deliveryDto->setDeliverySlots($_PUT["delivery_slots"]); 
        }
        else{
            array_push($errorList,"Delivery name cannot be empty.");
        }
     
        if(count($errorList) > 0){
            $response = array();
            $response["CODE"] = 400;
            $response["MESSAGE"] = "Validation errors";
            $response["DATA"] = $errorList;
        }
        else{
            $response = $this->deliveryModelObj->updateDelivery($this->deliveryDto);
        }

        http_response_code($response["CODE"]);
        return json_encode($response);
    }
	
	
	
	
	
	
}





?>