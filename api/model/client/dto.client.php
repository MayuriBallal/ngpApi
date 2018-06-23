<?php
class CategoryDto{
	
	private $clientId;
	private $clientNo;
	
	
	/**
     * Get the value of clientID
     */ 
    public function getClientId()
    {
        return $this->clients_id;
    }
	/**
     * Set the value of clientID
     *
     * @return  self
     */ 
	public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }
	
	
	 /**
     * Get the value of $clientNo
     */ 
    public function getclientNo()
    {
        return $this->clientNo;
    }
	
	 /**
     * Set the value of productName
     *
     * @return  self
     */ 
    public function setClientNo($clientNo)
    {
        $this->clientNo = $clientNo;

        return $this;
    }
 
	 /**
     * Returns the associative array representation of current object
     *
     * @return Array
     */
    public function getJSON() {
        return [
            'clientID' => $this->getClientId(),
            'clientNo' => $this->getclientNo(),
            
        ];
    }
	
	
	
}




?>