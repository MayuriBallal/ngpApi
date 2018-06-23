<?php
require_once 'dto.client.php';
require_once('API/config/database/class.QtplOperation.php');

class BrandModel extends QTPLDatabase{
    
    function __construct(){

    }
 public function addClient(ClientDto $client){
        return array("CODE"=>201,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$client->getJSON());
    }
	/* 
public function updateCategory(clientDto $clients){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    } */
	
	 public function getClient($clientId){
        $clientDto = new ClientDto();
        $clientDto->setClientNo("clients 1");
        $clientDto->setClientId(1);
		
        
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$clientDto->getJSON());
    }
	
	 public function getAllClient(){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>array());
    }
	/*  public function deleteProduct($categoryId){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    } */

}
?>