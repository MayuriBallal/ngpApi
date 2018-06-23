<?php
class BrandDto{
	
	private $brandId;
	private $brandName;
	private $brandImg;
	
	
	/**
     * Get the value of brandID
     */ 
    public function getBrandId()
    {
        return $this->brands_id;
    }
	/**
     * Set the value of brandID
     *
     * 
     */ 
	public function setBrandId($brandId)
    {
        $this->brands_id = $brandId;

        return $this;
    }
	
	
	 /**
     * Get the value of $brandName
     */ 
    public function getBrandName()
    {
        return $this->brand_name;
    }
	
	 /**
     * Set the value of brandName
     *
     * @return  self
     */ 
    public function setBrandName($brandName)
    {
        $this->brand_name = $brandName;

        return $this;
    }
 /**
     * Get the value of $brandImg
     */ 
    public function getBrandImg()
    {
        return $this->imgs;
    }
	
 /**
     * Set the value of brandImg
     *
     * @return  self
     */ 
    public function setBrandImg($brandImg)
    {
        $this->imgs = $brandImg;

        return $this;
    }
	
	
	
	 /**
     * Returns the associative array representation of current object
     *
     * @return Array
     */
    public function getJSON() {
        return [
            'brandID' => $this->getBrandId(),
            'brandName' => $this->getBrandName(),
            'brandImg' => $this->getBrandImg(),			
        ];
    }
	
	
	
}




?>