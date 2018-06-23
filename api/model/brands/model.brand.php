<?php
require_once 'dto.brand.php';
require_once('API/config/database/class.QtplOperation.php');

class BrandModel extends QTPLDatabase{
    
    function __construct(){

    }

    public function addBrand(BrandDto $brand){
        return array("CODE"=>201,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$brand->getJSON());
    }

    /* public function updateBrand(BrandDto $brand){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    } */

    public function getBrand($brandId){
        $brandDto = new BrandDto();
        $brandDto->setBrandName("brand 1");
        $brandDto->setBrandId(1);
        $brandDto->setBrandImg(1);
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>$productDto->getJSON());
    }

    public function getAllBrands(){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1], "DATA"=>array());
    }

   /*  public function deleteBrand($brandId){
        return array("CODE"=>200,"MESSAGE"=>$this->errorArray["200"][1]);
    } */
}
?>