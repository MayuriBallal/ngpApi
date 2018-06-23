<?php
require_once 'API/api/model/category/model.category.php';
class BrandController{
	private $brandModelObj;
    private $brandDto;
	 function __construct(){
        $this->brandModelObj = new BrandModel();
        $this->brandDto = new BrandDto();
    }
	
	function add(){
        $errorList = array();
        
        if(isset($_POST["brandName"]) && !empty($_POST["brandName"])){
            $this->categoryDto->setCategoryName($_POST["brandName"]); 
        }
        else{
            array_push($errorList,"Brand name cannot be empty.");
        }

		
		
        if(isset($_POST["brandImage"]) && !empty($_POST["brandImage"])){
            $this->brandDto->setBrandImg($_POST["brandImage"]); 
        }
        else{
            array_push($errorList,"brand Image cannot be empty.");
        }
		
		

        if(count($errorList) > 0){
            $response = array();
            $response["CODE"] = 400;
            $response["MESSAGE"] = "Validation errors";
            $response["DATA"] = $errorList;
        }
        else{
            $response = $this->brandModelObj->addBrand($this->brandDto);
        }
        http_response_code($response["CODE"]);
        return json_encode($response);
    }
	
	function update(){
        $_PUT = json_decode(file_get_contents('php://input'), true);

        $errorList = array();
        
        if(isset($_PUT["brands_id"]) && !empty($_PUT["brands_id"])){
            $this->brandDto->setCategoryName($_PUT["brands_id"]); 
        }
        else{
            array_push($errorList,"Brand id cannot be empty.");
        }
        
        if(isset($_PUT["brand_name"]) && !empty($_PUT["brand_name"])){
            $this->brandDto->setBrandName($_PUT["brand_name"]); 
        }
        else{
            array_push($errorList,"Brand name cannot be empty.");
        }

        if(isset($_PUT["imgs"]) && !empty($_PUT["imgs"])){
            $this->brandDto->setBrandImg($_PUT["imgs"]); 
        }
        else{
            array_push($errorList,"Brand img cannot be empty.");
        }

        if(count($errorList) > 0){
            $response = array();
            $response["CODE"] = 400;
            $response["MESSAGE"] = "Validation errors";
            $response["DATA"] = $errorList;
        }
        else{
            $response = $this->brandModelObj->updateBrand($this->brandDto);
        }

        http_response_code($response["CODE"]);
        return json_encode($response);
    }
	
	
	
	
	
	
}





?>