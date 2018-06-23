<?php
require_once 'dto.banner.php';
require_once('API/config/database/class.QtplOperation.php');

class BannerModel extends QTPLDatabase{
    
    function __construct(){

    }
 public function addBanner(BannerDto $banner){
        return array("CODE"=>201,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$banner->getJSON());
    }
public function updateBanner(BannerDto $banner){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    }
	
	 public function getCategory($bannerId){
        $bannerDto = new BannerDto();
        $bannerDto->setBannerImg("banner 1");
        $bannerDto->setBannerId(1);
		$bannerDto->setBannerLink(1);
        
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$bannerDto->getJSON());
    }
	
	 public function getAllBanner(){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>array());
    }
	 public function deleteBanner($bannerId){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    }

}
?>