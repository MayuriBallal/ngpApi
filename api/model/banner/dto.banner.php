<?php
class bannerdto{
	
	private $bannerId;
	private $bannerImg;
	private $bannerLink;
	
	/**
     * Get the value of bannerID
     */ 
    public function getBannerId()
    {
        return $this->banner_id;
    }
	/**
     * Set the value of bannerID
     *
     * @return  self
     */ 
	public function setBannerId($bannerId)
    {
        $this->bannerId = $bannerId;

        return $this;
    }
	
	
	 /**
     * Get the value of $bannerImg
     */ 
    public function getBannerImg()
    {
        return $this->bannerImg;
    }
	
	 /**
     * Set the value of bannerImg
     *
     * @return  self
     */ 
    public function setBannerImg($bannerImg)
    {
        $this->bannerImg = $bannerImg;

        return $this;
    }
 /**
     * Get the value of $bannerLink
     */ 
    public function getBannerLink()
    {
        return $this->bannerLink;
    }
	
 /**
     * Set the value of bannerLink
     *
     * @return  self
     */ 
    public function setBannerLink($bannerLink)
    {
        $this->bannerLink = $bannerLink;

        return $this;
    }
	
	 /**
     * Returns the associative array representation of current object
     *
     * @return Array
     */
    public function getJSON() {
        return [
            'bannerID' => $this->getBannerId(),
            'bannerImg' => $this->getBannerImg(),         
			'bannerLink' => $this->getBannerLink(),
        ];
    }
	
	
	
}




?>