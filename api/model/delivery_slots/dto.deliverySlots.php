<?php
class CategoryDto{
	
	private $deliverySlotId;
	private $delivery_slots;
	
	/**
     * Get the value of categoryID
     */ 
	 
    public function getDeliverySlotId()
    {
        return $this->delivery_slots_id;
    }
	
	/**
     * Set the value of categoryID
     *
     * @return  self
     */ 
	 
	public function setDeliverySlotId($deliverySlotId)
    {
        $this->deliverySlotId = $deliverySlotId;

        return $this;
    }
	
	
	 /**
     * Get the value of $categoryName
     */ 
	 
    public function getDelivery_slots()
    {
        return $this->delivery_slots;
    }
	
	 /**
     * Set the value of productName
     *
     * @return  self
     */ 
	 
    public function setDeliverySlots($delivery_slots)
    {
        $this->delivery_slots = $delivery_slots;

        return $this;
    }
 
 
	
	
	
	
}




?>