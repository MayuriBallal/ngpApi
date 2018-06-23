<?php
require_once 'API/api/model/category/model.category.php';
class CategoryController{
	private $categoryModelObj;
    private $categoryDto;
	 function __construct(){
        $this->categoryModelObj = new CategoryModel();
        $this->categoryDto = new CategoryDto();
    }
	
	function add(){
        $errorList = array();
        
        if(isset($_POST["categoryName"]) && !empty($_POST["categoryName"])){
            $this->categoryDto->setCategoryName($_POST["categoryName"]); 
        }
        else{
            array_push($errorList,"Category name cannot be empty.");
        }

		
		
        if(isset($_POST["categoryImage"]) && !empty($_POST["categoryImage"])){
            $this->categoryDto->setCategoryImg($_POST["categoryImage"]); 
        }
        else{
            array_push($errorList,"Category Image cannot be empty.");
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
        
        if(isset($_PUT["categories_id"]) && !empty($_PUT["categories_id"])){
            $this->categoryDto->setCategoryName($_PUT["categories_id"]); 
        }
        else{
            array_push($errorList,"Category id cannot be empty.");
        }
        
        if(isset($_PUT["category_name"]) && !empty($_PUT["category_name"])){
            $this->categoryDto->setCategoryName($_PUT["category_name"]); 
        }
        else{
            array_push($errorList,"Category name cannot be empty.");
        }

        if(isset($_PUT["imgs"]) && !empty($_PUT["imgs"])){
            $this->categoryDto->setCategoryName($_PUT["imgs"]); 
        }
        else{
            array_push($errorList,"category img cannot be empty.");
        }

        if(count($errorList) > 0){
            $response = array();
            $response["CODE"] = 400;
            $response["MESSAGE"] = "Validation errors";
            $response["DATA"] = $errorList;
        }
        else{
            $response = $this->categoryModelObj->updateCategory($this->categoryDto);
        }

        http_response_code($response["CODE"]);
        return json_encode($response);
    }
	
	
	
	
	
	
}





?>