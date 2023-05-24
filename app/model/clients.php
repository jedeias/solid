<?php

class Clients{

    private People $people;
    private $services;
    private $valueCost;

    public function __construct(People $people, $services, $valueCost) {
        $this->setPeople($people);
        $this->setServices($services);
        $this->setValueCost($valueCost);
    }

	public function getPeople(): People {
		return $this->people;
	}
	
	public function setPeople(People $people): self {
		$this->people = $people;
		return $this;
	}
	
	public function getServices() {
		return $this->services;
	}
	
	public function setServices($services): self {
		$this->services = $services;
		return $this;
	}
	

	public function getValueCost() {
		return $this->valueCost;
	}
	
	public function setValueCost($valueCost): self {
		$this->valueCost = $valueCost;
		return $this;
	}
}

?>