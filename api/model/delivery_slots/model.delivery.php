<?php
require_once 'dto.deliverySlots.php';
require_once('API/config/database/class.QtplOperation.php');


class DeliveryModel extends QTPLDatabase{
    
    function __construct(){

    }
 public function addDelivery(DeliveryDto $delivery){
        return array("CODE"=>201,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$delivery->getJSON());
    }
	/* 
public function updateCategory(CategoryDto $category){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    } */
	
	 public function getDelivery($deliverySlotId){
        $deliveryDto = new DeliveryDto();
        $deliveryDto->setDeliverySlots("category 1");
        $deliveryDto->setDeliverySlotId(1);
		
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$deliveryDto->getJSON());
    }
	
	 public function getAllDelivery(){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>array());
    }
	/*  public function deleteDelivery($deliverySlotId){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    } */

}
?>