<?php
require_once 'API/api/model/category/model.category.php';
class ClientController{
	private $categoryModelObj;
    private $categoryDto;
	 function __construct(){
        $this->categoryModelObj = new CategoryModel();
        $this->categoryDto = new CategoryDto();
    }
	
	function add(){
        $errorList = array();
        
        if(isset($_POST["clientNo"]) && !empty($_POST["clientNo"])){
            $this->clientDto->setCategoryName($_POST["clientNo"]); 
        }
        else{
            array_push($errorList,"Client no cannot be empty.");
        }

		
		

        if(count($errorList) > 0){
            $response = array();
            $response["CODE"] = 400;
            $response["MESSAGE"] = "Validation errors";
            $response["DATA"] = $errorList;
        }
        else{
            $response = $this->categoryModelObj->addCategory($this->categoryDto);
        }
        http_response_code($response["CODE"]);
        return json_encode($response);
    }
	
	function update(){
        $_PUT = json_decode(file_get_contents('php://input'), true);

        $errorList = array();
        
        if(isset($_PUT["clients_id"]) && !empty($_PUT["clients_id"])){
            $this->clientDto->setClientId($_PUT["clients_id"]); 
        }
        else{
            array_push($errorList,"Client id cannot be empty.");
        }
        
        if(isset($_PUT["clientNo"]) && !empty($_PUT["clientNo"])){
            $this->clientDto->setClientNo($_PUT["clientNo"]); 
        }
        else{
            array_push($errorList,"Client no cannot be empty.");
        }

         if(count($errorList) > 0){
            $response = array();
            $response["CODE"] = 400;
            $response["MESSAGE"] = "Validation errors";
            $response["DATA"] = $errorList;
        }
        else{
            $response = $this->clientModelObj->updateClient($this->clientDto);
        }

        http_response_code($response["CODE"]);
        return json_encode($response);
    }
	
	
	
	
	
	
}





?>