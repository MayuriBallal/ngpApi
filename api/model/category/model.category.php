<?php
require_once 'dto.category.php';
require_once('API/config/database/class.QtplOperation.php');
//require_once $_SERVER['DOCUMENT_ROOT'].'/API/config/database/class.DatabaseOperation.php';

class CategoryModel extends QTPLDatabase{
    
    function __construct(){

    }
 public function addCategory(CategoryDto $category){
        return array("CODE"=>201,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$category->getJSON());
    }
	/* 
public function updateCategory(CategoryDto $category){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    } */
	
	 public function getCategory($categoryId){
        $categoryDto = new CategoryDto();
        $categoryDto->setCategoryName("category 1");
        $categoryDto->setCategoryId(1);
		$categoryDto->setCategoryImg(1);
        $categoryDto->setCategoryType(200);
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$categoryDto->getJSON());
    }
	
	 public function getAllCategories(){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>array());
    }
	 public function deleteProduct($categoryId){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    }

}
?>