<?php
class CategoryDto{
	
	private $categoryId;
	private $categoryName;
	private $categoryImg;
	private $categoryType;
	
	/**
     * Get the value of categoryID
     */ 
    public function getCategoryId()
    {
        return $this->categories_id;
    }
	/**
     * Set the value of categoryID
     *
     * @return  self
     */ 
	public function setCategoryId($categoryID)
    {
        $this->categoryId = $categoryID;

        return $this;
    }
	
	
	 /**
     * Get the value of $categoryName
     */ 
    public function getCategoryName()
    {
        return $this->categoryName;
    }
	
	 /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;

        return $this;
    }
 /**
     * Get the value of $categortype
     */ 
    public function getCategoryType()
    {
        return $this->categoryType;
    }
	
 /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setCategoryType($categoryType)
    {
        $this->categoryType = $categoryType;

        return $this;
    }
	
	
	/**
     * Get the value of $categortype
     */ 
    public function getCategoryImg()
    {
        return $this->categoryImg;
    }
	
	
	 /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setCategoryImg($categoryImg)
    {
        $this->CategoryImg = $categoryImg;

        return $this;
    }
	
	
	 /**
     * Returns the associative array representation of current object
     *
     * @return Array
     */
    public function getJSON() {
        return [
            'categoryID' => $this->getCategoryId(),
            'categoryName' => $this->getCategoryName(),
            'categoryImg' => $this->getCategoryImg(),
			'categoryType' => $this->getCategoryType(),
        ];
    }
	
	
	
}




?>