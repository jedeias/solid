<?php

final class Employees{
    private People $People;
    private $office;
    private $wage;

    public function __construct(People $People, $office, $wage) {
        $this->setPeople($People);
        $this->setOffice($office);
        $this->setWage($wage);
    }

	public function getPeople(): People {
		return $this->People;
	}
	
	/**
	 * @param People $People 
	 * @return self
	 */
	public function setPeople(People $People): self {
		$this->People = $People;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getOffice() {
		return $this->office;
	}
	
	/**
	 * @param mixed $office 
	 * @return self
	 */
	public function setOffice($office): self {
		$this->office = $office;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getWage() {
		return $this->wage;
	}
	
	/**
	 * @param mixed $wage 
	 * @return self
	 */
	public function setWage($wage): self {
		$this->wage = $wage;
		return $this;
	}
}

?>