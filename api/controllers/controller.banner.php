<?php
require_once 'API/api/model/banner/model.banner.php';
class BannerController{
	private $bannerModelObj;
    private $bannerDto;
	 function __construct(){
        $this->bannerModelObj = new BannerModel();
        $this->bannerDto = new BannerDto();
    }
	
	function add(){
        $errorList = array();
        
        if(isset($_POST["bannerLink"]) && !empty($_POST["bannerLink"])){
            $this->bannerDto->setBannerName($_POST["bannerLink"]); 
        }
        else{
            array_push($errorList,"Banner name cannot be empty.");
        }

		
		
        if(isset($_POST["bannerImage"]) && !empty($_POST["bannerImage"])){
            $this->bannerDto->setBannerImg($_POST["bannerImage"]); 
        }
        else{
            array_push($errorList,"Banner Image cannot be empty.");
        }
		
		

        if(count($errorList) > 0){
            $response = array();
            $response["CODE"] = 400;
            $response["MESSAGE"] = "Validation errors";
            $response["DATA"] = $errorList;
        }
        else{
            $response = $this->bannerModelObj->addBanner($this->bannerDto);
        }
        http_response_code($response["CODE"]);
        return json_encode($response);
    }
	
	function update(){
        $_PUT = json_decode(file_get_contents('php://input'), true);

        $errorList = array();
        
        if(isset($_PUT["banner_id"]) && !empty($_PUT["banner_id"])){
            $this->bannerDto->setBannerLink($_PUT["banner_id"]); 
        }
        else{
            array_push($errorList,"banner id cannot be empty.");
        }
        
        if(isset($_PUT["bannerLink"]) && !empty($_PUT["bannerLink"])){
            $this->bannerDto->setBannerLink($_PUT["bannerLink"]); 
        }
        else{
            array_push($errorList,"banner link cannot be empty.");
        }

        if(isset($_PUT["bannerImage"]) && !empty($_PUT["bannerImage"])){
            $this->categoryDto->setBannerLink($_PUT["bannerImage"]); 
        }
        else{
            array_push($errorList,"banner img cannot be empty.");
        }

        if(count($errorList) > 0){
            $response = array();
            $response["CODE"] = 400;
            $response["MESSAGE"] = "Validation errors";
            $response["DATA"] = $errorList;
        }
        else{
            $response = $this->bannerModelObj->updateBanner($this->categoryDto);
        }

        http_response_code($response["CODE"]);
        return json_encode($response);
    }
	
	
	
	
	
	
}





?>